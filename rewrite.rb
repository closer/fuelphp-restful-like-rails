require "webrick"

class WEBrick::HTTPServer

  def rewrite pattern, subst
    @logger.info "rewrite rule #{pattern.inspect} -> #{subst}."
    @rewrite_rules ||= []
    @rewrite_rules << [pattern, subst]
  end

  def service_with_rewrite req, res
    if @rewrite_rules
      path = req.path
      @rewrite_rules.each do |pattern, subst|
        if pattern =~ path
          new_path = path.gsub pattern, subst
          @logger.info "rewrote url from #{path} to #{new_path}"
          req.instance_variable_set "@path", new_path
          break
        end
      end
    end
    service_without_rewrite req, res
  end
  alias :service_without_rewrite :service
  alias :service :service_with_rewrite

end

