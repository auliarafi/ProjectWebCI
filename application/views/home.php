			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
				</li>
			</ul>			
			
						<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Judul Penelitian Dosen</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
						  <div class="table-responsive">
						<center>
							<tr align="center" height="40">
							  <tr>
								 	<td><u>No</u></td>
			    					<td><u>Judul</u></td>
			   						<td><u>Nama Dosen</u></td>
			    					<td><u>Deskripsi</u></td>
			    					</tr>
			    			</thead>
			<?php 
			$i=1;
			foreach ($data_penelitian as $data) {?>
			    <tr bgcolor='#FFFFFF' align='center' height='30'  id='tabel'>
			  		<td><?php echo $i?></td>
					<td><?php echo $data->JUDUL_PENELITIAN?></td>
					<td><?php echo $data->NAMA_DOSEN?></td>
					<td><?php echo $data->RINGKASAN?></td>
					</td>
				</tr>
			<?php 
			$i++; } 
			?>
						 </table>  
					
				</div><!--/span-->	
			</div><!--/row-->
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Review Judul Tugas Akhir</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Nama</th>
									  <th>Judul Tugas Akhir</th>
									  <th>Status</th>
									  <th>Review</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Dennis Ji</td>
									<td class="center">2012/01/01</td>
									<td class="center">Member</td>
									<td class="center">
										<span class="label label-success">Active</span>
									</td>                                       
								</tr>
								<tr>
									<td>Dennis Ji</td>
									<td class="center">2012/02/01</td>
									<td class="center">Staff</td>
									<td class="center">
										<span class="label label-important">Banned</span>
									</td>                                       
								</tr>
								<tr>
									<td>Dennis Ji</td>
									<td class="center">2012/02/01</td>
									<td class="center">Admin</td>
									<td class="center">
										<span class="label">Inactive</span>
									</td>                                        
								</tr>
								<tr>
									<td>Dennis Ji</td>
									<td class="center">2012/03/01</td>
									<td class="center">Member</td>
									<td class="center">
										<span class="label label-warning">Pending</span>
									</td>                                       
								</tr>
								<tr>
									<td>Dennis Ji</td>
									<td class="center">2012/01/21</td>
									<td class="center">Staff</td>
									<td class="center">
										<span class="label label-success">Active</span>
									</td>                                        
								</tr>                                   
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->	
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li class="green">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="<?php echo base_url();?>assets/img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Approved             
							</li>
							<li class="yellow">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="<?php echo base_url();?>assets/img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Pending                                
							</li>
							<li class="red">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="<?php echo base_url();?>assets/img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Banned                                  
							</li>
							<li class="blue">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="<?php echo base_url();?>assets/img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Updated                                 
							</li>
						</ul>
					</div>
				
				
			</div><!--/span-->
				
				<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo metro">
							<ul class="todo-list">
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>	
									Windows Phone 8 App 
									<strong>today</strong>
								</li>
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>today</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>tommorow</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Windows Phone 8 App
									<strong>tommorow</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this week</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this week</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this month</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this month</strong>
								</li>
							</ul>
						</div>	
					</div>
				</div>
						
				<div class="box span4" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendar</h2>
					</div>
					<div class="box-content">
						<div id="main_calendar_phone"></div>
						<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
			
			</div><!--/row-->
			</div><!--/.fluid-container-->
			
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
