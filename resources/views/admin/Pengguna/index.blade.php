<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pengguna - SD Swasta Mutiara Balige</title>
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
                                Daftar Pengguna
                            </div>
                            <div class="float-right">
                                <a href="/admin/Pengguna/tambah">Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="dataTable table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="50px">Foto</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengguna as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                                    <td><img src="{{ asset('storage/' . $user->foto) }}" alt="Foto"></td>
                                    <td>{{ $user->nama }}</td> <!-- Menampilkan nama user -->
                                    <td>{{ $user->username }}</td> <!-- Menampilkan username user -->
                                    <td>
                                    <a href="/admin/Pengguna/edit/{{$user->id}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="/admin/Pengguna/hapus/{{$user->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
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