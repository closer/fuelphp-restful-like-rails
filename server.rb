require 'webrick'
require_relative 'rewrite'
require_relative 'phphandler'
include WEBrick

dir = File.dirname(__FILE__) + '/public'

s = HTTPServer.new(
  :DocumentRoot   => dir,
  :Port           => 3000,
  :DirectoryIndex => %w[index.html index.php],
  :PHPPath        => '/usr/local/bin'
)

s.rewrite /\/(?<url>assets.*)/, '/\k<url>'
s.rewrite /\/(?<url>.*)/, '/index.php'
s.mount '/', HTTPServlet::FileHandler, dir, :FancyIndexing => true, :HandlerTable => { 'php' => HTTPServlet::PHPHandler }

trap('INT') { s.shutdown }
s.start

