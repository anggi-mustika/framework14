<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Form Tambah Data</h1>
			</div>
		</div>

		<form action="/portofolio/update" method="POST">
			<div class="row mt-3 form-floatin">
				<div class="col-lg-3">
					<label for="">Nama</label>
				</div>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="nama" placeholder="Nama">
				</div>
			</div>
			
			<div class="row mt-3 form-floatin">
				<div class="col-lg-3">
					<label for="">Tempat Tanggal Lahir</label>
				</div>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
				</div>
			</div>

			<div class="row mt-3 form-floatin">
				<div class="col-lg-3">
					<label for="">Alamat</label>
				</div>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="alamat" placeholder="Alamat">
				</div>
			</div>

			<div class="row mt-3 form-floatin">
				<div class="col-lg-3">
					<label for="">Hobi</label>
				</div>
				<div class="col-lg-6">
					<input type="text" class="form-control" name="hobi" placeholder="Hobi">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-9">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>