<h2><?= $title?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name='title' placeholder="Add Title ">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id='editor1' name='body' class="form-control"  placeholder="Add Body" ></textarea>
  </div>
  <div class='form-group'>
  <label>Category</label>
  <select name="category_id" class="form-control">
    <?php foreach($categories as $category):?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
        <?php endforeach;?> 
        </select>
  </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>