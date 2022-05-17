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
                        <li class="active">Regulasi Publik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="services-area text-center bg-white thumb-less default-padding bottom-less">
        <div class="container">
            <div class="row">
              <table id="table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Jenis Regulasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
            </table>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    @endsection
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
                url: "{{ route('front.datatables') }}",
                data: function(d) {

                    d.date = $('#date').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex',searchable:false,orderable:false},
                {data: 'nama_regulasi', name: 'nama_regulasi'},
                {data: 'jenis_regulasi', name: 'jenis_regulasi'},
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
