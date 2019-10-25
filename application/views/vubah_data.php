<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<right><a href="<?= site_url('Mahasiswa/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>UBAH DATA BUAH</h1></center>
		<table class="table table-bordered">
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $buah['id'];?>">
				<thead>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required id="nama" value="<?= $buah['nama'];?>" /></th>
					</tr>
					<tr>
						<th>Kingdom</th>
						<th>:</th>
						<th><input type="text" name="kingdom" required id="kingdom" value="<?= $buah['kingdom'];?>"/></th>
					</tr>
					<tr>
						<th>Spesies</th>
						<th>:</th>
						<th>
							<input type="text" name="spesies" required id="spesies" value="<?= $buah['spesies'];?>"/>
						</th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="UBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
