<h2>
<?php echo $post['title'];?>
</h2>
<small >Posted on:<?php echo $post['created_at'];?></small>
<img  src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']?>" >
<div class='post-body'>
<?php echo $post['body']?>
</div>

<hr>

<?php echo form_open('posts/delete/'.$post['id']);?>
<a class="btn btn-success pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">EDIT</a>
<input type='submit' value='Delete' class='btn btn-danger'>
</form>
