<link rel="stylesheet"
	href="<?php echo base_url(); ?>public/css/custom.css">
<h3 class="font-20 mt-15 mb-1"><?php echo str_replace('_',' ','Hr_education'); ?></h3>
Date: <?php echo date("Y-m-d");?>
<hr>
<!--*************************************************
*********mpdf header footer page no******************
****************************************************-->
<htmlpageheader name="firstpage" class="hide"> </htmlpageheader>

<htmlpageheader name="otherpages" class="hide"> <span class="float_left"></span>
<span class="padding_5"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
<span class="float_right"></span> </htmlpageheader>
<sethtmlpageheader name="firstpage" value="on" show-this-page="1" />
<sethtmlpageheader name="otherpages" value="on" />

<htmlpagefooter name="myfooter" class="hide">
<div align="center">
	<br> <span class="padding_10">Page {PAGENO} of {nbpg}</span>
</div>
</htmlpagefooter>

<sethtmlpagefooter name="myfooter" value="on" />
<!--*************************************************
*********#////mpdf header footer page no******************
****************************************************-->
<!--Data display of hr_education-->
<table cellspacing="3" cellpadding="3" class="table" align="center">
	<tr>
		<th>Hr Employee</th>
		<th>Name Institution</th>
		<th>Principals Subject</th>
		<th>Degree</th>
		<th>Year</th>
		<th>Division</th>

	</tr>
	<?php foreach($hr_education as $c){ ?>
    <tr>
		<td><?php
    $this->CI = & get_instance();
    $this->CI->load->database();
    $this->CI->load->model('Hr_employee_model');
    $dataArr = $this->CI->Hr_employee_model->get_hr_employee($c['hr_employee_id']);
    echo $dataArr['first_name'];
    ?>
									</td>
		<td><?php echo $c['name_institution']; ?></td>
		<td><?php echo $c['principals_subject']; ?></td>
		<td><?php echo $c['degree']; ?></td>
		<td><?php echo $c['year']; ?></td>
		<td><?php echo $c['division']; ?></td>

	</tr>
	<?php } ?>
</table>
<!--End of Data display of hr_education//-->
