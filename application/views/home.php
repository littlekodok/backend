<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Customer</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data User TokoPedidi</h1>
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah User</a>
	<br>

	<br>
	<table border="1">
		<tr>
			<td><b>No</b></td>
			<td><b>ID User</b></td>
			<td><b>Nama</b></td>
			<td><b>Email</b></td>
			<td><b>Username</b></td>
			<td><b>Alamat</b></td>
			<td><b>Aksi</b></td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryDetail as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->email ?></td>
			<td><?php echo $row->username ?></td>
			<td><?php echo $row->alamat ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
		<?php echo rupiah(50000000)."<br/>"?>
		<a href="<?php echo base_url('/keranjang_belanja') ?>">Halaman Cart</a>

</body>
</html>