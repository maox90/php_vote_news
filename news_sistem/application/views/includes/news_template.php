								<?php
								$brojac =0;
								foreach($records as $row): 
									$brojac+=1;?>

								<tr>
									<td align="right" valign="top" class = "title"><?php echo $brojac; ?>.</td>
									<td>
										<center>
											<a id="up">
												<?php echo form_open('site/vote_up'); ?>
												<input type="hidden"  name='id' value='<?php echo $row->id?>'>
												<input type="image" value="submit" src="<?php echo base_url();?>images/arrow.gif">
												</form>
										</center>
									</td>
									<td class = "title">
										<a href="<?php echo $row->link; ?>"><?php echo $row->title; ?></a>
									</td>
								</tr>
								<tr>
									<td colspan="2"></td>
									<td class="subtext">
										<span id=""><?php echo $row->num_votes; ?> points</span>
									</td>	
								</tr>

								<?php endforeach; ?>