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
    <div class="container bg-light">
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

        <!-- nav bar -->
        @include('navbar')

        

        <!-- content -->
        <div class="row p-3">
            <div class="col-md-8">
                <div class="title mb-3">
                    Informasi Terbaru
                </div>
            <!--Sintaks Laravel disini-->
                <div class="artikel">
                    <div class="info">
                        <div class="post mb-2">
                            <span class="tgl"></span>
                            <span class="judul"><a href="">ARTIKEL 1</a></span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="clearfix" style="text-align: justify;">
                            <img src="" alt="" width="200px" class="float-left mr-2">
                        </div>
                    </div>
                    <hr>
                </div>
            <!--Sintaks Laravel disini(foreach dari database)-->
            </div>
            @include('sidebar')
        </div>
        <div class="text-white footer">
        <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Tentang Kami</h4>
                <p>Lembaga Pendidikan Mutiara Balige adalah lembaga yang bergerak di bidang pendidikan dasar, mewadahi Sekolah Taman Kanak-Kanak (TK) Swasta Mutiara Balige dan Sekolah Dasar (SD) Swasta Mutiara Balige.</p>
            </div>
            <div class="col-md-3">
                <h4>Sosial Media</h4>
                <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/sdmutiarabalige" target="_blank">Facebook</a></li><br>
                <li><a href="https://www.youtube.com/@sdswastamutiarabalige2005" target="_blank">YouTube</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Kontak Kami</h4>
                <p>Jl. Ompu Batu Tahan Siahaan<br> Balige III,Balige,Kabupaten Toba<br>Phone: 085275144266<br>Email: sdmutiara.balige@gmail.com</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p>&copy; 2024 Your Company. All Rights Reserved.</p>
            </div>
            </div>
        </div>
    </div>
</footer>

		</div>
    </div>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>