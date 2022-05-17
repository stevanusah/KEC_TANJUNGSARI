@php
use App\Models\News;
use App\Models\IdentitasSkpd;
$identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();

$beritafooter = News::where('user_id', '10')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(2)->get();
    
@endphp
<!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark">
        <!-- Start Footer Top -->
        {{-- <div class="footer-top bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 logo">
                        <a href="#"><img src="{{asset('assets_frontend/img/logo.png')}}" alt="Logo"></a>
                    </div>
                    <div class="col-md-8 col-sm-9 form text-right">
                        <div class="form-content">
                            <h4>Join with us</h4>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            Subscribe <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Footer Top -->
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item about">
                            <h4>Tentang Kami</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                       {{$identitas->alamat}}
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i>
                                    <p>
                                        <span>Jam Kerja: </span> Senin - Jumat / 8.00 AM - 16.00 PM
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <p>
                                        <span>Email: </span>{{$identitas->email}}
                                    </p>
                                </li>
                            </ul>
                            <h2><i class="fas fa-phone"></i>{{$identitas->telepon}}</h2>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item link full">
                            <h4>Menu</h4>
                            <ul>
                                <li>
                                    <a href="#">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Berita</a>
                                </li>
                                <li>
                                    <a href="#">Regulasi</a>
                                </li>
                                <li>
                                    <a href="#">Galeri</a>
                                </li>
                                <li>
                                    <a href="#">Instagram</a>
                                </li>
                                <li>
                                    <a href="#">Layanan Publik</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item twitter-widget">
                            <h4>Berita Terbaru</h4>

                            @foreach ($beritafooter as $item)
                            
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="{{route('front.view_detailberita', $item->id)}}"> {{$item->judul_berita}}</a>
                                       
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fas fa-calendar"></i><span class=""> {{$item->created_at->format('d M Y')}}</span>
                                </div>
                            </div>
                                
                            @endforeach

                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2022. All Rights Reserved by <a href="#">Prakom Underdog</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                {{-- <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    @include('sweetalert::alert')
