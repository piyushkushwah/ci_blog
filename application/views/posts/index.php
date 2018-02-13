<h1><?= $title ?></h1>
<?php 
foreach( $posts as $post ) : ?>
    <h3><?php echo $post['title'];?></h3>
    <small>Posted on:<?php echo $post['created_at'];?></small>
<br><?php echo word_limiter($post['body'],60);?>
<br><br>
<p ><a class="btn btn-danger" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
<?php endforeach;?>
