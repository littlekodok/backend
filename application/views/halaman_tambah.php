<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Halaman Tambah User</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>ID User</td>
			<td>:</td>
			<td><input name="id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah User</button></td>
		</tr>
	</table>
	<?php echo form_error('id'); ?>
	<?php echo form_error('email'); ?>
	<?php echo form_error('username'); ?>
	<?php echo form_error('alamat'); ?>

	</form>
</body>
</html>