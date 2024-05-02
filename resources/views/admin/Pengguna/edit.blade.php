<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Pengguna - SD Swasta Mutiara Balige</title>
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
							<div class="float-right">
								<a href="/admin/Pengguna/index">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
                    @foreach ($pengguna as $user)
						<form method="POST" action="/admin/Pengguna/update" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user -> id }}"> <br/>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama" value="{{ $user -> nama }}">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" placeholder="username" autocomplete="off" required="required" name="username" value="{{ $user -> username }}">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" placeholder="password" autocomplete="off" required="required" name="password" value="{{ $user -> password }}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="foto" value="{{ $user -> foto }}">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Selesai</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="/admin/Pengguna/index" class="btn btn-sm btn-secondary">Kembali</a>
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
</body>
</html>