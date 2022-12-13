<a href="<?php echo site_url('admin/crm_lead/index'); ?>"
	class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Crm_lead'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/crm_lead/save/'.$crm_lead['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
	<div class="card-body">
		<div class="form-group">
			<label for="First Name" class="col-md-4 control-label">First Name</label>
			<div class="col-md-8">
				<input type="text" name="first_name"
					value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $crm_lead['first_name']); ?>"
					class="form-control" id="first_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="Last Name" class="col-md-4 control-label">Last Name</label>
			<div class="col-md-8">
				<input type="text" name="last_name"
					value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $crm_lead['last_name']); ?>"
					class="form-control" id="last_name" />
			</div>
		</div>
		<div class="form-group">
			<label for="Gender" class="col-md-4 control-label">Gender</label>
			<div class="col-md-8">
				<input type="text" name="gender"
					value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $crm_lead['gender']); ?>"
					class="form-control" id="gender" />
			</div>
		</div>
		<div class="form-group">
			<label for="Date Of Birth" class="col-md-4 control-label">Date Of
				Birth</label>
			<div class="col-md-8">
				<input type="text" name="date_of_birth" id="date_of_birth"
					value="<?php echo ($this->input->post('date_of_birth') ? $this->input->post('date_of_birth') : $crm_lead['date_of_birth']); ?>"
					class="form-control-static datepicker" />
			</div>
		</div>
		<div class="form-group">
			<label for="Nationa" class="col-md-4 control-label">Nationa</label>
			<div class="col-md-8">
				<input type="text" name="nationalid"
					value="<?php echo ($this->input->post('nationalid') ? $this->input->post('nationalid') : $crm_lead['nationalid']); ?>"
					class="form-control" id="nationalid" />
			</div>
		</div>
		<div class="form-group">
			<label for="Blood Group" class="col-md-4 control-label">Blood Group</label>
			<div class="col-md-8">
				<input type="text" name="blood_group"
					value="<?php echo ($this->input->post('blood_group') ? $this->input->post('blood_group') : $crm_lead['blood_group']); ?>"
					class="form-control" id="blood_group" />
			</div>
		</div>
		<div class="form-group">
			<label for="Marital Status" class="col-md-4 control-label">Marital
				Status</label>
			<div class="col-md-8">
				<input type="text" name="marital_status"
					value="<?php echo ($this->input->post('marital_status') ? $this->input->post('marital_status') : $crm_lead['marital_status']); ?>"
					class="form-control" id="marital_status" />
			</div>
		</div>
		<div class="form-group">
			<label for="Name Spouse" class="col-md-4 control-label">Name Spouse</label>
			<div class="col-md-8">
				<input type="text" name="name_spouse"
					value="<?php echo ($this->input->post('name_spouse') ? $this->input->post('name_spouse') : $crm_lead['name_spouse']); ?>"
					class="form-control" id="name_spouse" />
			</div>
		</div>
		<div class="form-group">
			<label for="Email" class="col-md-4 control-label">Email</label>
			<div class="col-md-8">
				<input type="text" name="email"
					value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $crm_lead['email']); ?>"
					class="form-control" id="email" />
			</div>
		</div>
		<div class="form-group">
			<label for="Cell Phone" class="col-md-4 control-label">Cell Phone</label>
			<div class="col-md-8">
				<input type="text" name="cell_phone"
					value="<?php echo ($this->input->post('cell_phone') ? $this->input->post('cell_phone') : $crm_lead['cell_phone']); ?>"
					class="form-control" id="cell_phone" />
			</div>
		</div>
		<div class="form-group">
			<label for="Land Phone" class="col-md-4 control-label">Land Phone</label>
			<div class="col-md-8">
				<input type="text" name="land_phone"
					value="<?php echo ($this->input->post('land_phone') ? $this->input->post('land_phone') : $crm_lead['land_phone']); ?>"
					class="form-control" id="land_phone" />
			</div>
		</div>
		<div class="form-group">
			<label for="Country" class="col-md-4 control-label">Country</label>
			<div class="col-md-8">
				<input type="text" name="country"
					value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $crm_lead['country']); ?>"
					class="form-control" id="country" />
			</div>
		</div>
		<div class="form-group">
			<label for="State" class="col-md-4 control-label">State</label>
			<div class="col-md-8">
				<input type="text" name="state"
					value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $crm_lead['state']); ?>"
					class="form-control" id="state" />
			</div>
		</div>
		<div class="form-group">
			<label for="City" class="col-md-4 control-label">City</label>
			<div class="col-md-8">
				<input type="text" name="city"
					value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $crm_lead['city']); ?>"
					class="form-control" id="city" />
			</div>
		</div>
		<div class="form-group">
			<label for="Zip Code" class="col-md-4 control-label">Zip Code</label>
			<div class="col-md-8">
				<input type="text" name="zip_code"
					value="<?php echo ($this->input->post('zip_code') ? $this->input->post('zip_code') : $crm_lead['zip_code']); ?>"
					class="form-control" id="zip_code" />
			</div>
		</div>
		<div class="form-group">
			<label for="Permanent Address" class="col-md-4 control-label">Permanent
				Address</label>
			<div class="col-md-8">
				<input type="text" name="permanent_address"
					value="<?php echo ($this->input->post('permanent_address') ? $this->input->post('permanent_address') : $crm_lead['permanent_address']); ?>"
					class="form-control" id="permanent_address" />
			</div>
		</div>
		<div class="form-group">
			<label for="About" class="col-md-4 control-label">About</label>
			<div class="col-md-8">
				<input type="text" name="about"
					value="<?php echo ($this->input->post('about') ? $this->input->post('about') : $crm_lead['about']); ?>"
					class="form-control" id="about" />
			</div>
		</div>
		<div class="form-group">
			<label for="Contact Details" class="col-md-4 control-label">Contact
				Details</label>
			<div class="col-md-8">
				<input type="text" name="contact_details"
					value="<?php echo ($this->input->post('contact_details') ? $this->input->post('contact_details') : $crm_lead['contact_details']); ?>"
					class="form-control" id="contact_details" />
			</div>
		</div>
		<div class="form-group">
			<label for="Latitude" class="col-md-4 control-label">Latitude</label>
			<div class="col-md-8">
				<input type="text" name="latitude"
					value="<?php echo ($this->input->post('latitude') ? $this->input->post('latitude') : $crm_lead['latitude']); ?>"
					class="form-control" id="latitude" />
			</div>
		</div>
		<div class="form-group">
			<label for="Longitude" class="col-md-4 control-label">Longitude</label>
			<div class="col-md-8">
				<input type="text" name="longitude"
					value="<?php echo ($this->input->post('longitude') ? $this->input->post('longitude') : $crm_lead['longitude']); ?>"
					class="form-control" id="longitude" />
			</div>
		</div>
		<div class="form-group">
			<label for="Date Entry" class="col-md-4 control-label">Date Entry</label>
			<div class="col-md-8">
				<input type="text" name="date_entry" id="date_entry"
					value="<?php echo ($this->input->post('date_entry') ? $this->input->post('date_entry') : $crm_lead['date_entry']); ?>"
					class="form-control-static datepicker" />
			</div>
		</div>
		<div class="form-group">
			<label for="Archive Status" class="col-md-4 control-label">Archive
				Status</label>
			<div class="col-md-8">
				<input type="text" name="archive_status"
					value="<?php echo ($this->input->post('archive_status') ? $this->input->post('archive_status') : $crm_lead['archive_status']); ?>"
					class="form-control" id="archive_status" />
			</div>
		</div>
		<div class="form-group">
			<label for="Status" class="col-md-4 control-label">Status</label>
			<div class="col-md-8">
				<input type="text" name="status"
					value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $crm_lead['status']); ?>"
					class="form-control" id="status" />
			</div>
		</div>

	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success"><?php if(empty($crm_lead['id'])){?>Save<?php }else{?>Update<?php } ?></button>
	</div>
</div>
<?php echo form_close(); ?>
<!--End of Form to save data//-->
<!--JQuery-->
<script>
	$( ".datepicker" ).datepicker({
		dateFormat: "yy-mm-dd", 
		changeYear: true,
		changeMonth: true,
		showOn: 'button',
		buttonText: 'Show Date',
		buttonImageOnly: true,
		buttonImage: '<?php echo base_url(); ?>public/datepicker/images/calendar.gif',
	});
</script>
