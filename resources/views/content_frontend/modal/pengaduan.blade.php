 
 @php
 use App\Models\IdentitasSkpd;
 $identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();
@endphp
 <!-- Modal Show Detail Layanan -->
 <div class="modal fade modal-md" id="AddNew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabeldetail">Pengaduan Publik</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="" style="align-content: center">
                
                 <!-- Start Contact Area 
    ============================================= -->
    <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="contact-items">
                    <div class="col-md-9 info">
                        <div class="thumb-inner bg-cover shadow dark text-light" style="background-image: url(assets/img/800x800.png);">
                            <h4>Beri Penilaian Kepada Kami!</h4>
                            <h2>Kritik dan Saran Anda.</h2>
                            {{-- <form action="assets/mail/contact.php" method="POST" class="contact-form"> --}}
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" type="text">
                                            @error('nama')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Masukan Email Anda" type="email">
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="no_handphone" name="no_handphone" placeholder="Masukan No Handphone Anda" type="text">
                                            @error('no_handphone')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="kritik_saran" name="kritik_saran" placeholder="Masukan Kritik dan Saran"></textarea>
                                            @error('kritik_saran')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{$identitas->user_id}}">
                                <div class="col-md-12">
                                    <div class="row">
                                        <h5>Catatan: <i>*Data Pribadi anda terjamin!</i></h5>
                                        <button type="submit" name="submit" id="submit">
                                           Sampaikan <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            {{-- </form> --}}
                        </div>
                    </div>
                    
                </div>
            </div>

        </form>
<br>


            <div class="col-md-5 contact-info">
                <div class="contact-info-list">
                    <ul>
                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <h4>{{$identitas->telepon}}</h4>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>{{$identitas->alamat}}</h5>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <h5>{{$identitas->website}}</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
