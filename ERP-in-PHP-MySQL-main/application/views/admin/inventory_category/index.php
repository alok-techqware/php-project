<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Inventory_category'); ?></h5>
<?php
echo $this->session->flashdata('msg');
?>
<!--Action-->
<div>
	<div class="float_left padding_10">
		<a href="<?php echo site_url('admin/inventory_category/save'); ?>"
			class="btn btn-success">Add</a>
	</div>
	<div class="float_left padding_10">
		<i class="fa fa-download"></i> Export <select name="xeport_type"
			class="select"
			onChange="window.location='<?php echo site_url('admin/inventory_category/export'); ?>/'+this.value">
			<option>Select..</option>
			<option>Pdf</option>
			<option>CSV</option>
		</select>
	</div>
	<div class="float_right padding_10">
		<ul class="left-side-navbar d-flex align-items-center">
			<li class="hide-phone app-search mr-15">
                <?php echo form_open_multipart('admin/inventory_category/search/',array("class"=>"form-horizontal")); ?>
                    <input name="key" type="text"
				value="<?php echo isset($key)?$key:'';?>" placeholder="Search..."
				class="form-control">
				<button type="submit" class="mr-0">
					<i class="fa fa-search"></i>
				</button>
                <?php echo form_close(); ?>
            </li>
		</ul>
	</div>
</div>
<!--End of Action//-->

<!--Data display of inventory_category-->
<table class="table table-striped table-bordered">
	<tr>
		<th>Description</th>
		<th>Slug</th>
		<th>Name</th>
		<th>Parent Inventory Category</th>

		<th>Actions</th>
	</tr>
	<?php foreach($inventory_category as $c){ ?>
    <tr>
		<td><?php echo $c['description']; ?></td>
		<td><?php echo $c['slug']; ?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $this->CI->load->model('Inventory_category_model');
    $dataArr = $this->CI->Inventory_category_model->get_inventory_category($c['parent_inventory_category_id']);
    echo $dataArr['description'];
    ?>
									</td>

		<td><a
			href="<?php echo site_url('admin/inventory_category/details/'.$c['id']); ?>"
			class="action-icon"> <i class="zmdi zmdi-eye"></i></a> <a
			href="<?php echo site_url('admin/inventory_category/save/'.$c['id']); ?>"
			class="action-icon"> <i class="zmdi zmdi-edit"></i></a> <a
			href="<?php echo site_url('admin/inventory_category/remove/'.$c['id']); ?>"
			onClick="return confirm('Are you sure to delete this item?');"
			class="action-icon"> <i class="zmdi zmdi-delete"></i></a></td>
	</tr>
	<?php } ?>
</table>
<!--End of Data display of inventory_category//-->

<!--No data-->
<?php
if (count($inventory_category) == 0) {
    ?>
<div align="center">
	<h3>Data is not exists</h3>
</div>
<?php
}
?>
<!--End of No data//-->

<!--Pagination-->
<?php
echo $link;
?>
<!--End of Pagination//-->
