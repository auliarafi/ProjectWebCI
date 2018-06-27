<h1> Edit Review </h1>

<?php echo form_open('Form_Reviewer/proses_edit'); ?>

<?php foreach ($review as $datanya) { ?>
<h3>	
	NIM <input type="text" name="NIM" value ="<?php echo $datanya->NIM; ?>"/> <br/> 
	Nama <input type="text" name="nama" value ="<?php echo $datanya->nama; ?>"/> <br/>
	Judul TA <input type="text" name="judul" value ="<?php echo $datanya->JUDUL_TA; ?>"/> <br/>
	Dosen Pengusul <input type="text" name="dosen" value ="<?php echo $datanya->DOSEN_PENGUSUL; ?>"/> <br/>
	Ringkasan <input type="text" name="ringkasan" value ="<?php echo $datanya->RINGKASAN; ?>"/> <br/>
	Usulan Dospem <input type="text" name="usulan" value ="<?php echo $datanya->USULAN_DOSPEM; ?>"/> <br/>
	Jenis <input type="text" name="jenis" value ="<?php echo $datanya->JENIS; ?>"/> <br/>
	Review <input type="text" name="review" value ="<?php echo $datanya->REVIEW; ?>"/> <br/>
</h3>

	<input type="submit" value="Simpan"/>

<?php } ?>

<?php echo form_close(); ?>