<a href="/resources/new">New</a>
<ul>
  <?php foreach( $resources as $resource ): ?>
    <li><a href="/resources/<?php echo $resource->id ?>"><?php echo $resource->title ?></a></li>
  <?php endforeach; ?>
</ul>
