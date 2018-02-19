<h2><?= $title;?></h2>
<ul class='list-group'>
    <?php  foreach($categories as $category):?>
        <li style='width:60%;'class='list-group-item'><a href='<?php echo site_url('/categories/posts/'.$category['id']);?>'>
        <?php echo $category['name'];?></a>
                                           
        </li>
        <?php echo form_open('categories/delete/'.$category['id']);?>
        <br>
<a  style=' width:8%;' class="btn btn-success pull-left" href="<?php echo base_url();?>Categories/edit/<?php echo $category['id'];?>">EDIT</a>   
<input style=' width:8%;' type='submit' value='Delete' class='btn btn-danger'><br>
</form>
<?php endforeach;?>
</ul>
