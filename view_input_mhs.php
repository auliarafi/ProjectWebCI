<html>
<head>
	<title>Form Usulan Judul Tugas Akhir</title>
</head>
<body>
	<center>
		<h1>Form Usulan Judul Tugas Akhir </h1><br/><br/>
	</center>
	<center>
	<form action="<?php echo base_url(). 'index.php/Form_Mahasiswa/insert'; ?>" method="post">
	
	
	<p>NIM</p>
	<input type="text" name="nim">
			
	<p>Nama</p>
	<input type="text" name="nama">
	
	<p>Usulan Judul</p>
	<textarea name="judul_ta"></textarea>
	
	<p>Dosen Pengusul</p>
	<select name="dosen_pengusul">
    <option></option>
    <option>Wahyu Kurnia Dewanto,S.Kom, MT</option>
    <option>Hermawan Arif S.T.,MT.</option>
    <option>Taufiq Rizaldi S,ST,MT</option>
  	</select>
	
	<p>Ringkasan</p>
	<textarea name="ringkasan"></textarea>
	
	
	<p>Usulan Dosen Pembimbing</p>
	<select name="usulan_dospem">
    <option></option>
    <option>Wahyu Kurnia Dewanto,S.Kom, MT</option>
    <option>Hermawan Arif S.T.,MT.</option>
    <option>Taufiq Rizaldi S,ST,MT</option>
  	</select>
  	
	<div class="control-group">
								<label class="control-label">Jenis</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" name="jenis" id="inlineCheckbox1" value="Individu"> Individu
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" name="jenis" id="inlineCheckbox2" value="Kelompok"> Kelompok
								  </label>
								</div>
							  </div>
				

	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn">Batal</button>
	</div>
	</form>
	</center>	
</body>
</html>