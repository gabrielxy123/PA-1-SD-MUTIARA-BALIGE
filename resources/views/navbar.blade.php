<nav class="navbar navbar-expand-lg nav-orange">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link text-white navlink" href="{{ route('home') }}">HOME</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('artikel') }}">ARTIKEL</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('guru') }}">GURU</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('kelas') }}">KELAS</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('ekskul') }}">EKSKUL</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('visimisi') }}">VISI MISI</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('tentang') }}">TENTANG WEBSITE</a>
        </div>
	<a class="nav-item nav-link text-white navlink nav justify-content-end ml-auto" href="{{ url('/admin/login') }}">LOGIN</a>
</nav>
