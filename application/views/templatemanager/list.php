<div class="row-fluid">
				<?php	if	(isset	($message)	&&	!empty	($message))
				{
								?><div class="alert alert-success notification" style="margin-bottom: 0px; margin-top: 0px;">Template <?php	echo	ucfirst	($message)	?> Successfully</div><br/><?php	}	?>
				<table class="table table-bordered tablesorter">
								<thead>
												<tr>
																<th>Name</th>
																<th>Subject</th>
																<th>Reply To</th>
																<th>From</th>
																<th>Template Type</th>
																<th style="width: 50px;">Action</th>
												</tr>
								</thead>
								<tbody>
												<?php
												if	(isset	($templates)	&&	$templates	&&	count	($templates)	>	0)
												{
																?>

																<?php
																foreach	($templates	as	$data)
																{
																				?>
																				<tr>
																								<td><a href="<?php	echo	site_url	('templatemanager/details/'	.	$data->id);	?>"><?php	echo	str_replace	("_",	" ",	$data->system_id);	?></a></td>
																								<td><?php	echo	$data->subject;	?></td>
																								<td><?php	echo	$data->reply_to;	?></td>
																								<td><?php	echo	$data->email_from;	?></td>
																								<td><?php	echo	$data->email_type;	?></td>
																								<td>                   
																												<a href="<?php	echo	site_url	('templatemanager/edit/'	.	$data->id)	?>" ><i class="icon-cog" style="margin-right: 5px; margin-top: 2px;" ></i></a>
																												<a href="<?php	echo	site_url	('templatemanager/delete/'	.	$data->id)	?>" ><i class="icon-remove-sign" style="margin-right: 5px; margin-top: 2px;"></i></a>
																								</td>
																				</tr>
																				<?php
																}
												}
												else
												{
																?>
																<tr><td colspan="11" style="text-align: center;"><b>No Template Found.</b></td></tr>
<?php	}	?>
								</tbody>
				</table>
				<div style="text-align: center;"><a href="<?php	echo	site_url	('templatemanager/add');	?>"  ><i class="icon-plus-sign" style="margin-right: 5px; margin-top: 2px;" > </i>Add New</a></div>
</div>