<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="http://localhost/SIPETA">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Form Pilihan Dosen Pembimbing</a></li>
			</ul>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Data Mahasiswa</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>NO</th>
								  <th>NIM</th>
								  <th>Nama Mahasiswa</th>
								  <th>Judul Tugas Akhir</th>
								  <th>Ringkasan</th>
								  <th>Dosen Pembimbing</th>
								  <th>Jenis</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php 
								$no = 1;
								foreach ($tfix as $t){ 
							?>
								<form action="<?php echo base_url(). 'index.php/Form_pilih_dospem/insert'; ?>" method="post">
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $t->NIM ?></td>
									<input style="visibility: hidden;" type="text" name="nim" value="<?php echo $t->NIM ?>">
									<td><?php echo $t->NAMA ?></td>
									<input style="visibility: hidden;" type="text" name="nama" value="<?php echo $t->NAMA ?>">
									<td><?php echo $t->JUDUL_TA_FIX ?></td>
									<td><?php echo $t->RINGKASAN ?></td>
									<td><?php echo $t->DOSPEM ?></td>
									<input style="visibility: hidden;" type="text" name="dospem" value="<?php echo $t->DOSPEM ?>">
									<td><?php echo $t->JENIS ?></td>
									<td>
			      						<center><button type="submit" class="btn btn-primary">Pilih</button></br></center>
									</td>
								</tr>
								</form>
							<?php } ?>
							
							</tbody>
					  </table> 
					  </form>           
					</div>
				</div><!--/span-->
			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		
