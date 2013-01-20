<h3><?php echo $resource->title ?></h3>
<p><?php echo $resource->body ?></p>
<a href="/resources/<?php echo $resource->id ?>/edit">Edit</a>
<form action="/resources/<?php echo $resource->id ?>" method="post">
  <input type="hidden" name="_method" value="DELETE">
  <input type="submit" value="DELETE">
</form>
<a href="/resources">Index</a>
