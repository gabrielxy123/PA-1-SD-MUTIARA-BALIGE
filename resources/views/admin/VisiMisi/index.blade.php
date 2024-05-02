<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Visi Misi - SD SWASTA MUTIARA BALIGE</title>
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
								Visi Misi
							</div>
							<div class="float-right">
								<a href="/admin/index">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="/admin/VisiMisi/index">
                            @csrf
							<div class="form-group">
								<textarea name="VisiMisi" id="ckeditor" class="ckeditor form-control">{{$visimisi->VisiMisi}}</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('apakah anda yakin?')" name="ubah">Ubah</button>							</div>
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