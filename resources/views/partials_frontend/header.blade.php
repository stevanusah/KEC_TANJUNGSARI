<script>
    function initialize() {
      var propertiPeta = {
        center:new google.maps.LatLng(-8.5830695,116.3202515),
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      
      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
      
      // membuat Marker
      var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.5830695,116.3202515),
          map: peta
      });
    
    }
    
    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar attr-border navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                         </button>
                         <a class="navbar-brand" href="https://www.lapor.go.id/"  target="_blank">
                            <img src="{{asset('assets_frontend/img/lapor.png')}}" class="logo logo-scrolled" alt="Logo">
                         </a>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets_frontend/img/LogoKecamatan/kec__tanjungsari.png')}}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                        <li>
                            <a href="{{route('home.index')}}">Beranda</a>
                        </li>

                        {{-- <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Beranda</a>
                            <ul class="dropdown-menu">
                                <li><a href="marketing-agency.html">Marketing Agency</a></li>
                                <li><a href="startup-landing.html">Startup Landing</a></li>
                                <li><a href="business.html">Business</a></li>
                                <li><a href="business-2.html">Business Version Two</a></li>
                                <li><a href="construction.html">Construction</a></li>
                                <li><a href="corporate.html">Corporate</a></li>
                                <li><a href="corporate-2.html">Corporate Version Two</a></li>
                                <li><a href="software-landing.html">Software Landing</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profil</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('front.profil')}}">Profile</a></li>
                                <li><a href="{{route('front.visimisi')}}">Visi dan Misi</a></li>
                                <li><a href="{{route('front.struktur')}}">Struktur Organisasi</a></li>
                                <li><a href="{{route('front.tupoksi')}}">Tupoksi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Layanan Publik</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('produk.head')}}">Produk Layanan</a></li>
                                <li><a data-toggle="modal" data-target="#AddNew" href="#">Pengaduan Publik</a></li>
                                <li><a href="business.html">Survey Kepuasan Masyarakat</a></li>
                                
                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Layanan Publik</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Produk Layanan</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-grid-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-grid-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-grid-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Masonary Colum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-masonary-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-masonary-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-masonary-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{route('front.regulasi')}}" class="" >Regulasi</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="services-1.html">Version One</a></li>
                                <li><a href="services-2.html">Version Two</a></li>
                                <li><a href="services-3.html">Version Three</a></li>
                                <li><a href="services-4.html">Version Four</a></li>
                            </ul> --}}
                        </li>
                        <li class="">
                            <a href="{{route('front.berita')}}" >Berita</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Grid Version</a></li>
                            </ul>
                        </li>  
                        <li class="">
                            <a href="{{route('front.galeri')}}" class="" >Galeri</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-2-colum.html">Blog Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Three Colum</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="single.html">Blog Single Standard</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                            </ul> --}}
                        </li>
                        <li class="">
                            <a href="{{route('front.ppid')}}" class="">PPID</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="">Tugas dan Fungsi PPID</a></li>
                                <li><a href="">Visi dan Misi PPID</a></li>
                                <li><a href="">Struktur Organisasi PPID</a></li>
                                <li><a href="">Maklumat PPID</a></li>
                                <li><a href="">Dokumen Digital PPID</a></li>
                            </ul> --}}
                        </li>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
    @include('content_frontend.modal.pengaduan')
