<h2><?= $title?></h2>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name='title' placeholder="Add Title ">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea  class="form-control"  placeholder="Add Body"></textarea>
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>