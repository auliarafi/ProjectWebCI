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
          <div class="box-tools pull-right">
            <div class="btn-group">
              <a href="<?= base_url('admin/cetak_berita') ?>" target="_blank" 
                class="btn btn-sm bg-blue"><i class="fa fa-print"></i> Cetak</a>
              <a href="<?= base_url('admin/export_berita_pdf') ?>" target="_blank" 
                class="btn btn-sm bg-red"><i class="fa fa-file-pdf-o"></i> PDF</a>
              <a href="<?= base_url('admin/export_berita_excel') ?>" target="_blank" 
                class="btn btn-sm bg-olive"><i class="fa fa-file-excel-o"></i> Excel</a>
            </div>
          </div>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Judul TA</th>
								  <th>NIM</th>
								  <th>RINGKASAN</th>
								  <th>Dosen Pengusul</th>
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
					<td><?php echo $data->JUDUL_TA?></td>
					<td><?php echo $data->NIM?></td>
					<td><?php echo $data->RINGKASAN?></td>
					<td><?php echo $data->DOSEN_PENGUSUL?></td>
					<td><?php echo $data->USULAN_DOSPEM?></td>
					<td><?php echo $data->JENIS?></td>
					<td><?php echo $data->REVIEW?></td>
					<td>
					 	<a href="<?php echo site_url('edit_input_review/'.$data->NIM);?>">Edit</a>
					</td>
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
		