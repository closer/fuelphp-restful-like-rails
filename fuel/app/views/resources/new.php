<?php print_r($resource->validation()->show_errors()) ?>
<form action="/resources" method="post">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="_confirm" value="1">
<p>Title:<br>
<input type="text" name="resource[title]" value="<?php echo $resource->title ?>"></p>
<p>Body:<br>
<textarea name="resource[body]"><?php echo $resource->body ?></textarea></p>
<input type="submit" value="send">
</form>
