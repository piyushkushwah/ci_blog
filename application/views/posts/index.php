<h1><?= $title ?></h1>

<?php if(is_array($posts)): ?>
<?php 
foreach( $posts as $post ) : ?>
    <h3><?php echo $post['title'];?></h3>
    <small>Posted on:<?php echo $post['created_at'];?></small>
<?php echo $post['body'];?>
<?php endforeach;?>
<?php endif; ?>