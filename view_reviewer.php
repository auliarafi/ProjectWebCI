<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="http://localhost/SIPETA">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Form Reviewer</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Tabel Review</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  		<th>No</th>
								  <th>NIM</th>
								  <th>Nama</th>
								  <th>Judul Ta</th>
								  <th>Dosen Pengusul</th>
								  <th>Ringkasan</th>
								  <th>Usulan Dospem</th>
								  <th>Jenis</th>
								  <th>Review</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <?php 
			$i=1;
			foreach ($data_review as $data) {?>
			    <tr bgcolor='#FFFFFF' align='center' height='30'  id='tabel'>
			  		<td><?php echo $i?></td>
					<td><?php echo $data->NIM?></td>
					<td><?php echo $data->nama?></td>
					<td><?php echo $data->JUDUL_TA?></td>
					<td><?php echo $data->DOSEN_PENGUSUL?></td>
					<td><?php echo $data->RINGKASAN?></td>
					<td><?php echo $data->USULAN_DOSPEM?></td>
					<td><?php echo $data->JENIS?></td>
					<td><?php echo $data->REVIEW?></td>
					<td><a href="<?php echo base_url().'index.php/Form_Reviewer/edit/'.$data->NIM;?>">Edit</a></td>
				</tr>
			<?php 
			$i++; } 
			?>
					  </table>            
					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		