
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Kategori Artikel - SD Swasta Mutiara Balige</title>
	<link rel="stylesheet" href="{{ asset('css/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('images/logoSD.png') }}">
</head>
<body>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Kategori Artikel
							</div>
							<div class="float-right">
								<a href="">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						@foreach ($kategori as $user )							
						<form method="POST" action="{{ route('updatekategori', ['id' => $user->id]) }}">
							@csrf
							<div class="form-group">
								<label for="nama_kategori">Kategori</label>
								<input type="text" class="form-control" id="nama_kategori" placeholder="nama kategori" autocomplete="off" required="required" name="kategoriartikel" value="{{ $user->kategoriartikel }}">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
						@endforeach
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