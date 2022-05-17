@extends('template_frontend')
@section('content-frontend')

<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(https://portal-skpd.sumedangkab.go.id/storage/slider/sumedang.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$title}}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('front.regulasi')}}">Page</a></li>
                        <li class="active">Detail Berita Publik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

     <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <div class="item">

                            <div class="thumb">
                                <img src="https://portal-skpd.sumedangkab.go.id/{{$berita->berita_image}}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="date">
                                    {{$berita->created_at->format('d M Y')}}
                                </div>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i>{{$berita->views}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    {{$berita->judul_berita}}
                                </h3>
                                <div style="text-align: justify">
                                    {!!$berita->description!!}
                                </div>
                                <br>
                                <div class="form-group full-width submit">
                                    <a href="{{route('front.berita')}}" class="btn btn-info"><span class="fas fa-backward"> </span> Kembali</a>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    @php
                        use App\Models\News;
                        $berita_front = News::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(3)->get();
                    @endphp
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    @foreach ($berita_front as $item)
                                     
                                    <li>
                                        <div class="thumb">
                                            <a href=""{{route('front.view_detailberita', $item->id)}}"">
                                                <img src="https://portal-skpd.sumedangkab.go.id/{{$item->berita_image}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="{{route('front.view_detailberita', $item->id)}}">{{$item->judul_berita}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$item->created_at->format('d M Y')}}</span> - By <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </li>   

                                    @endforeach
                                    
                                </ul>
                            </div>

                            @php
                                use App\Models\Galeri;
                                $galeri_front = Galeri::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(6)->get();
                            @endphp
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach ($galeri_front as $galeri_item)
                                            
                                        <li>
                                            <a href="#">
                                                <iframe width="110" height="100" src="{{$galeri_item->vidio_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <center><a href="{{$galeri_item->vidio_link}}" target="_blank" class="btn btn-primary"><span class="fas fa-play"></span> Play</a></center>
                                            
                                            </a>
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->


    @endsection