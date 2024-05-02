<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Artikel - SD Swasta Mutiara Balige</title>
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
								Tambah Artikel
							</div>
							<div class="float-right">
								<a href="">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="/admin/artikel/tambah" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" class="form-control" id="judul" placeholder="judul artikel" autocomplete="off" required="required" name="judul">
							</div>
							<div class="form-group">
								<label for="id_kategori">Kategori Artikel</label>
								<select name="id_kategori" id="id_kategori" class="form-control">	
								</select>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file" id="foto" placeholder="foto artikel" autocomplete="off" required="required" name="foto">
							</div>
							<div class="form-group">
								<label for="isi">Isi</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="" class="btn btn-sm btn-secondary">Kembali</a>
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