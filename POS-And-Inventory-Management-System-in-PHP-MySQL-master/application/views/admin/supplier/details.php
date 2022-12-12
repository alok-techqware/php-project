<a href="<?php echo site_url('admin/supplier/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Supplier'); ?></h5>
<!--Data display of supplier with id-->
<?php
$c = $supplier;
?>
<table class="table table-striped table-bordered">
	<tr>
		<td>Company</td>
		<td><?php echo html_entity_decode($c['company']); ?></td>
	</tr>
	<tr>
		<td>Supplier Name</td>
		<td><?php echo html_entity_decode($c['supplier_name']); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo html_entity_decode($c['email']); ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo html_entity_decode($c['address']); ?></td>
	</tr>
	<tr>
		<td>City</td>
		<td><?php echo html_entity_decode($c['city']); ?></td>
	</tr>
	<tr>
		<td>State</td>
		<td><?php echo html_entity_decode($c['state']); ?></td>
	</tr>
	<tr>
		<td>Zip</td>
		<td><?php echo html_entity_decode($c['zip']); ?></td>
	</tr>
	<tr>
		<td>Phone No</td>
		<td><?php echo html_entity_decode($c['phone_no']); ?></td>
	</tr>
</table>
<!--End of Data display of supplier with id//-->
