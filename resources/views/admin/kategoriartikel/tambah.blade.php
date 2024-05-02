
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Kategori Artikel - SD Swasta Mutiara Balige</title>
	<link rel="stylesheet" href="{{ asset('css/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('images/logoSD.png') }}">
</head>
<body>
	@include('admin.navbar')
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Tambah Kategori Artikel
							</div>
							<div class="float-right">
								<a href="/admin/kategoriartikel/index">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="/admin/kategoriartikel/tambah">
							@csrf
							<div class="form-group">
								<label for="nama_kategori">Kategori</label>
								<input type="text" class="form-control" id="nama_kategori" placeholder="nama kategori" autocomplete="off" required="required" name="kategoriartikel">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="/admin/kategoriartikel/index" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</body>
</html>