</ul class="list-group">
<?php foreach ($tags as $tag): ?>
    <a href="#"><li class="list-group-item"><?php echo $tag['tag_name'];?></li></a>
<?php endforeach; ?>
</ul>