<?php if( $resource->is_new()): ?>
<form action="/resources" method="post">
<input type="hidden" name="_method" value="POST">
<?php else: ?>
<form action="/resources/<?php echo $resource->id ?>" method="post">
<input type="hidden" name="_method" value="PUT">
<?php endif; ?>
<p>Title:<br>
<?php echo $resource->title ?></p>
<input type="hidden" name="resource[title]" value="<?php echo $resource->title ?>"></p>
<p>Body:<br>
<?php echo $resource->body ?></p>
<input type="hidden" name="resource[body]" value="<?php echo $resource->body ?>"></p>
<input type="submit" value="send">
</form>
