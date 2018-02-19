<h1><?= $title ?></h1>
<?php 
foreach( $posts as $post ) : ?>
    <h3><?php echo $post['title'];?></h3>
    <div class='row'>
        <div class='col-md'>
        <img  style='width:100%;'; src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']?>" >
        </div>
        <div class="col-md-8">
        <small>Posted on:<?php echo $post['created_at'];?> in  <strong><?php echo $post['name']; ?></strong></small>
        <br><?php echo word_limiter($post['body'],60);?>
        <br><br>
        <p ><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>

        </div>

    </div>
  
<?php endforeach;?>
