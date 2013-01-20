
<form action="/resources/<?php echo $resource->id ?>" method="post">
<input type="hidden" name="_method" value="PUT">
<p>Title:<br>
<input type="text" name="resource[title]" value="<?php echo $resource->title ?>"></p>
<p>Body:<br>
<textarea name="resource[body]"><?php echo $resource->body ?></textarea></p>
<input type="submit" value="send">
</form>
