
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Kategori Artikel - SD Swasta Mutiara Balige</title>
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
								Daftar Kategori Artikel
							</div>
							<div class="float-right">
								<a href="/admin/kategoriartikel/tambah">Tambah</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="table_id" class="dataTable table table-bordered">
							@if(Session::has('sukses'))
							<div class="alert alert-success">
								{{ Session::get('sukses') }}
							</div>
							@endif
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Kategori</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
								@if($kategori->isEmpty())
                       		 <tr>
                       		 <td colspan="6" class="text-center">Tidak ada data kategori artikel disini.</td>
                         	</tr>
                        	@else
								@foreach ($kategori as $user)									
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $user->kategoriartikel }}</td>
									<td>
										<a href="{{ route('editkategori', ['id' => $user]) }}" class="btn btn-info btn-sm">Ubah</a>
										<a href="{{ route('hapuskategori', ['id' => $user]) }}" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
									</td>
								</tr>
								@endforeach
								@endif
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/datatables/datatables.js') }}"></script>
</body>
</html>