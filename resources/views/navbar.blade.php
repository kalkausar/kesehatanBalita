<!-- Header Area Starts -->
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-md-flex">
                    <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> nurulpratiwi160@gmail.com</h6>
                    <h6><span class="mr-2"><i class="fa fa-user"></i></span> Nurul Pratiwi</h6>
                </div>
            </div>
        </div>
    </div>
    <div id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{url('/')}}"> <h3>Pneumonia</h3> </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="{{url('/')}}">Beranda</a></li>
                        <li><a href="{{url('/informasi')}}">Informasi</a></li>
                        <li class="menu-has-children"><a href="#">Data Pesebaran</a>
                            <ul>
                                <li><a href="{{url('/dataKota')}}">Data Kabupaten/Kota</a></li>
                                <li><a href="{{url('/grafik')}}">Grafik Pesebaran</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/tentangKami')}}">Tentang Kami</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
