<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - SD Swasta Mutiara Balige</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
	<link rel="icon" href="{{ asset('images/logoSD.png') }}">
</head>

<body>
	<div class="container bg-light min-vh-100">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="{{ asset('images/logoSD.png') }}" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SD Swasta Mutiara Balige</span><br>
					<span class="visi">Mewujudkan SD Berkarakter, Berkompeten dan Unggul</span><br>
					<span class="visi">Mendidik Anak Dengan Semangat Cinta Kasih</span>
				</div>
			</div>
		</div>



		<!-- content -->
		<div class="row p-3">
			<div class="col-md-12">
				<div class="title mb-3">
					Login Admin SD Swasta Mutiara Balige
				</div>
				</head>

				<body>
					<div class="container">
						<div class="row justify-content-center mt-5"> <!-- Tambahkan margin-top di sini -->
							<div class="col-md-6">
								<div class="card shadow">
									<div class="card-header">Login</div>
									<div class="card-body">
										<!--Sintaks laravel disini (Autentikasi)-->
										<form action="{{ url('/admin/login') }}" method="post">
											@csrf
											@if (Session::has('error_message'))
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												<strong>Error: </strong> {{ Session::get('error_message') }}
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											@endif
											<div class="mb-3">
												<label for="username" class="form-label">Username</label>
												<input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
											</div>
											@error('username')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<div class="mb-3">
												<label for="password" class="form-label">Password</label>
												<input type="password" class="form-control" id="password" name="password">
											</div>
											@error('password')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<button type="submit" class="btn btn-primary">Login</button>
											<a href="/" class="btn btn-secondary">Kembali</a>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script src="{{ asset('js/jquery.js') }}"></script>
					<script src="{{ asset('js/bootstrap.min.js') }}"></script>
				</body>

</html>