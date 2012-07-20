<body>
	<center>
		<table border ="0" cellpadding ="0" width="85%" bgcolor="#f6f6ef">
			<tbody>
				<tr>
					<td bgcolor="#ff6600">
						<table border = "0" cellpadding="0" width="100%" style="padding:2px">
							<tbody>
								<tr>
									<td style="width:18px; padding-right:4px;"><img src="<?php echo base_url();?>images/fonis.png" width="80" height="15"></td>
									<td width="20"></td>
									<td width= "220"><?php echo anchor('site/news_by_date', 'new news'); ?> | <?php echo anchor('site/top_rated', 'top rated'); ?> | <?php echo anchor('site/add', 'add new'); ?>
									</td>
									<td style="text-align:right; padding-right:4px;">
										<?php
										if($logged)
										{
											echo anchor('login/logout', 'Logout');
										}
										else{
											echo anchor('login/index', 'Login'); 
											echo ' | ';
											echo anchor('login/signup', 'Register'); 
										}
										?>
										</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr style="height:10px"></tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<?php 
									$data['records'] = $records;
									$this->load->view('includes/news_template', $data); 
								?>
							</tbody>
						</table>
					</td>	
				</tr>
			</tbody>	
		</table>
	</center>