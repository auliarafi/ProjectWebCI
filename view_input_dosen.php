	<div id="content" class="span10">
			
			<form method="post" action="<?php echo base_url().'index.php/form_dosen/insert' ; ?>" >
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="http://localhost/SIPETA">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Form Penelitian Dosen</a>
				</li>
			</ul>
			<div class="box-content">
						<form method="post" action="input">
       <p>Judul Penelitian</p>
	<textarea name="judul_penelitian"></textarea> <br/><br/>
        NIP<br/><input type="text" name="NIP" size="30" maxlength="25" <br/><br/>
        Nama <br/><input type="text" name="nama" size="30" maxlength="25" ><br/><br/>
         <p>Ringkasan</p>
	<textarea name="ringkasan"></textarea> 
		
      
		<br/><br/>
        <td></td>
				  <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Simpan</button>
							  <button type="reset" class="btn">Batal</button>
							</div>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		