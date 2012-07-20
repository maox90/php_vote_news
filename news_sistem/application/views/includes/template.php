<?php $this->load->view('includes/header'); ?>

<?php
	$data['logged']=$logged;
	if($records){
		$data['records'] = $records;
		
		 $this->load->view($main_content,$data); 
	}else
	{
		$this->load->view($main_content,$data);
	}
	?>
<?php $this->load->view('includes/footer'); ?>