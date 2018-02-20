<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/update');?>
<?php foreach ($categories as $category): ?>
<div class='form-group'>
<input type="hidden" name='id' value="<?php echo $category['id']; ?>">
<label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $category['name']; ?>">
</div>
<?php endforeach; ?>


    
  
    <button type='submit' class='btn btn-default'>Submit</button>
</form>    