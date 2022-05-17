{{-- get data from folder css --}}
@include('partials_frontend.css')
{{-- get data from folder header / menu --}}
@include('partials_frontend.header')

{{-- get data from blade each view --}}
@yield('content-frontend')


{{-- get data from folder footer --}}
@include('partials_frontend.footer')
{{-- get data from folder js --}}
@include('partials_frontend.js')

 <!-- Datatables -->
 @yield('script')