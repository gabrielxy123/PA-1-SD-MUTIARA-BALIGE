<?
$base_url = asset('/');
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link"  href="/admin/index">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/" target="_blank">Lihat Website</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Artikel</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="/admin/kategoriartikel/index">Data Kategori Artikel</a>
					<a class="dropdown-item" href="/admin/artikel/index">Data Artikel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Master</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="">Data Guru</a>
					<a class="dropdown-item" href="">Data Kelas</a>
					<a class="dropdown-item" href="">Data Ekskul</a>
					<a class="dropdown-item" href="/admin/Pengguna/index">Data Pengguna</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/admin/VisiMisi/index">Visi Misi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/admin/TentangWebsite/index">Tentang Website</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('admin/logout')}}" onclick="return confirm('apakah anda yakin?')">Logout</a>
			</li>
		</ul>
	</div>
</nav>