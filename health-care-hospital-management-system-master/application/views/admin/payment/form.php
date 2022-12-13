<a  href="<?php echo site_url('admin/payment/index'); ?>" class="btn btn-info"><i class="arrow_left"></i> List</a>
<h5 class="font-20 mt-15 mb-1"><?php if($id<0){echo "Save";}else { echo "Update";} echo " "; echo str_replace('_',' ','Payment'); ?></h5>
<!--Form to save data-->
<?php echo form_open_multipart('admin/payment/save/'.$payment['id'],array("class"=>"form-horizontal")); ?>
<div class="card">
   <div class="card-body">    
        <div class="form-group"> 
                                    <label for="Branch" class="col-md-4 control-label">Branch</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Branch_model'); 
             $dataArr = $this->CI->Branch_model->get_all_branch(); 
          ?> 
          <select name="branch_id"  id="branch_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($payment['branch_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Category" class="col-md-4 control-label">Category</label> 
          <div class="col-md-8"> 
           <input type="text" name="category" value="<?php echo ($this->input->post('category') ? $this->input->post('category') : $payment['category']); ?>" class="form-control" id="category" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Patient" class="col-md-4 control-label">Patient</label> 
          <div class="col-md-8"> 
           <input type="text" name="patient" value="<?php echo ($this->input->post('patient') ? $this->input->post('patient') : $payment['patient']); ?>" class="form-control" id="patient" /> 
          </div> 
           </div>
<div class="form-group"> 
                                    <label for="Doctor" class="col-md-4 control-label">Doctor</label> 
         <div class="col-md-8"> 
          <?php 
             $this->CI =& get_instance(); 
             $this->CI->load->database();  
             $this->CI->load->model('Doctor_model'); 
             $dataArr = $this->CI->Doctor_model->get_all_doctor(); 
          ?> 
          <select name="doctor_id"  id="doctor_id"  class="form-control"/> 
            <option value="">--Select--</option> 
            <?php 
             for($i=0;$i<count($dataArr);$i++) 
             {  
            ?> 
            <option value="<?=$dataArr[$i]['id']?>" <?php if($payment['doctor_id']==$dataArr[$i]['id']){ echo "selected";} ?>><?=$dataArr[$i]['name']?></option> 
            <?php 
             } 
            ?> 
          </select> 
         </div> 
           </div>
<div class="form-group"> 
          <label for="Date" class="col-md-4 control-label">Date</label> 
          <div class="col-md-8"> 
           <input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $payment['date']); ?>" class="form-control" id="date" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Amount" class="col-md-4 control-label">Amount</label> 
          <div class="col-md-8"> 
           <input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $payment['amount']); ?>" class="form-control" id="amount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Vat" class="col-md-4 control-label">Vat</label> 
          <div class="col-md-8"> 
           <input type="text" name="vat" value="<?php echo ($this->input->post('vat') ? $this->input->post('vat') : $payment['vat']); ?>" class="form-control" id="vat" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="X Ray" class="col-md-4 control-label">X Ray</label> 
          <div class="col-md-8"> 
           <input type="text" name="x_ray" value="<?php echo ($this->input->post('x_ray') ? $this->input->post('x_ray') : $payment['x_ray']); ?>" class="form-control" id="x_ray" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Flat Vat" class="col-md-4 control-label">Flat Vat</label> 
          <div class="col-md-8"> 
           <input type="text" name="flat_vat" value="<?php echo ($this->input->post('flat_vat') ? $this->input->post('flat_vat') : $payment['flat_vat']); ?>" class="form-control" id="flat_vat" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Discount" class="col-md-4 control-label">Discount</label> 
          <div class="col-md-8"> 
           <input type="text" name="discount" value="<?php echo ($this->input->post('discount') ? $this->input->post('discount') : $payment['discount']); ?>" class="form-control" id="discount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Flat Discount" class="col-md-4 control-label">Flat Discount</label> 
          <div class="col-md-8"> 
           <input type="text" name="flat_discount" value="<?php echo ($this->input->post('flat_discount') ? $this->input->post('flat_discount') : $payment['flat_discount']); ?>" class="form-control" id="flat_discount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Gross Total" class="col-md-4 control-label">Gross Total</label> 
          <div class="col-md-8"> 
           <input type="text" name="gross_total" value="<?php echo ($this->input->post('gross_total') ? $this->input->post('gross_total') : $payment['gross_total']); ?>" class="form-control" id="gross_total" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Hospital Amount" class="col-md-4 control-label">Hospital Amount</label> 
          <div class="col-md-8"> 
           <input type="text" name="hospital_amount" value="<?php echo ($this->input->post('hospital_amount') ? $this->input->post('hospital_amount') : $payment['hospital_amount']); ?>" class="form-control" id="hospital_amount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Doctor Amount" class="col-md-4 control-label">Doctor Amount</label> 
          <div class="col-md-8"> 
           <input type="text" name="doctor_amount" value="<?php echo ($this->input->post('doctor_amount') ? $this->input->post('doctor_amount') : $payment['doctor_amount']); ?>" class="form-control" id="doctor_amount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Category Amount" class="col-md-4 control-label">Category Amount</label> 
          <div class="col-md-8"> 
           <input type="text" name="category_amount" value="<?php echo ($this->input->post('category_amount') ? $this->input->post('category_amount') : $payment['category_amount']); ?>" class="form-control" id="category_amount" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Category Name" class="col-md-4 control-label">Category Name</label> 
          <div class="col-md-8"> 
           <input type="text" name="category_name" value="<?php echo ($this->input->post('category_name') ? $this->input->post('category_name') : $payment['category_name']); ?>" class="form-control" id="category_name" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Amount Received" class="col-md-4 control-label">Amount Received</label> 
          <div class="col-md-8"> 
           <input type="text" name="amount_received" value="<?php echo ($this->input->post('amount_received') ? $this->input->post('amount_received') : $payment['amount_received']); ?>" class="form-control" id="amount_received" /> 
          </div> 
           </div>
<div class="form-group"> 
          <label for="Status" class="col-md-4 control-label">Status</label> 
          <div class="col-md-8"> 
           <input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $payment['status']); ?>" class="form-control" id="status" /> 
          </div> 
           </div>

   </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success"><?php if(empty($payment['id'])){?>Save<?php }else{?>Update<?php } ?></button>
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