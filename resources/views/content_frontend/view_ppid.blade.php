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
                        <li><a href="{{route('front.ppid')}}">Page</a></li>
                        <li class="active">PPID</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Start Services Area
        ============================================= -->
        <div class="services-area text-center bg-white thumb-less default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="service-items">
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal"><i class="flaticon-insurance"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Tugas dan fungsi PPID</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal1"><i class="flaticon-startup"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Visi dan Misi PPID</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="icon">
                                    <a href="" data-toggle="modal" data-target="#exampleModal2"><i class="flaticon-cloud"></i></a>
                                </div>
                                <div class="info">
                                    <h4>Maklumat dan Strutur Ograniasi PPID</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Start Blog Area 
            ============================================= -->
            <div class="blog-area bg-grey bottom-less">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="site-heading text-center">
                                <h2>Lihat dan Download Dokumen Publikasi PPID</h2>
                                <p>
                                    Menu yang menyajikan Data Publikasi yang ada pada Website ini, Layanan ini dapat Menampilkan produk yang ada pada Kantor kami dan Masyarakat luas dapat mendownload nya secara langsung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Jenis Dokumen</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            
                        </table>

                    </div>
                </div>
            </div>
@endsection


            <!-- Modal -->
            <div class="modal fade modal-large" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tugas dan fungsi PPID</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                <h5><strong>Tugas PPID :</strong></h5>
                                <p style="text-align: justify">{!!$head_ppid->tugas_ppid!!}</p>
 
                                <h5><strong>Fungsi PPID :</strong></h5>
                                <p style="text-align: justify">{!!$head_ppid->fungsi_ppid!!}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Modal -->
             <div class="modal fade modal-large" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Visi dan Misi PPID</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                <h5><strong>Visi PPID :</strong></h5>
                               <p style="text-align: justify">{!!$head_ppid->visi_ppid!!}</p>

                               <h5><strong>Misi PPID :</strong></h5>
                               <p style="text-align: justify">{!!$head_ppid->misi_ppid!!}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Modal -->
             <div class="modal fade modal-large" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Maklumat dan Strutur Ograniasi PPID</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="" style="text-align: justify">
                                <h5><strong>Maklumat PPID :</strong></h5>
                                <p style="text-align: justify">{!!$head_ppid->maklumat_ppid!!}</p>
 
                                <h5><strong>Struktur Organisasi PPID :</strong></h5>
                                <img src="https://portal-skpd.sumedangkab.go.id/{{$head_ppid->struktur_organisasi_ppid_image}}" width="100%" height="100%" alt="">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            @section('script')
            <script>
                $(document).ready(function() {
                    var table = $('#table').DataTable({
                        processing: true,
                        serverSide: true,
                        scrollX: true,
                        scrollCollapse: true,
                        columnDefs: [],
                        fixedColumns: true,
                        height: '400%',
                        ajax: {
                            url: "{{ route('front.datatablesppid') }}",
                            data: function(d) {
            
                                d.date = $('#date').val()
                            }
                        },
                        columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false,orderable:false},
                            {data: 'nama_dokumen', name: 'nama_dokumen'},
                            {data: 'jenis_dokumen', name: 'jenis_dokumen'},
                            {data: 'is_active', name: 'is_active'},
                            {data: 'action', name: 'action'}
                        ]
                    });
            
                    $(document).on('click', '#filter', function(e) {
                        e.preventDefault();
                        table.draw();
                    })
            
                    // ]$('#order_by').select2({placeholder: 'Order By'});
                    // $('#ordering').select2({placeholder: 'Ordering'});
                    // $('#ord_jenis').select2({placeholder: 'Ord_jenis'});
                })
            </script>
            @endsection