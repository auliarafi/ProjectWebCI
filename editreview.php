
<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Edit Review</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Review</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
			<label class="control-label col-sm-2">
					NIM
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nim" value="<?=isset($default['NIM'])? $default['NIM'] : ""?>">
				</div>
			</div>
			<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['nama'])? $default['nama'] : ""?>">
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Judul Tugas Akhir					
				</label>
				<div class="col-sm-10">
					<textarea name="judul" class="form-control"><?=isset($default['JUDUL_TA'])? $default['JUDUL_TA'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Dosen Pengusul					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="dosen" value="<?=isset($default['DOSEN_PENGUSUL'])? $default['DOSEN_PENGUSUL'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Ringkasan				
				</label>
				<div class="col-sm-10">
					<textarea name="ringkasan" class="form-control"><?=isset($default['RINGKASAN'])? $default['RINGKASAN'] : ""?></textarea>
				</div>
			</div>
			<label class="control-label col-sm-2">
					Usulan Dospem					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="usulan" value="<?=isset($default['USULAN_DOSPEM'])? $default['USULAN_DOSPEM'] : ""?>">
				</div>
			</div>
			<br>
			<label class="control-label col-sm-2">
					Jenis					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jenis" value="<?=isset($default['JENIS'])? $default['JENIS'] : ""?>">
				</div>
			</div>
			<br>
			<label class="control-label col-sm-2">
					Review				
				</label>
				<div class="col-sm-10">
					<textarea name="review" class="form-control"><?=isset($default['REVIEW'])? $default['REVIEW'] : ""?></textarea>
				</div>
			</div>
			<br>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>
		</form>
	</div>
</body>
</html>