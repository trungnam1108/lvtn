 @extends('admin.masterempty')
 @section('content')
     <main>
         <div class="container">

             <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                             <div class="d-flex justify-content-center py-4">
                                 <a href="index.html" class="logo d-flex align-items-center w-auto">
                                     <img src="assets/img/logo.png" alt="">
                                     <span class="d-none d-lg-block">Đăng Nhập</span>
                                 </a>
                             </div><!-- End Logo -->

                             <div class="card mb-3">

                                 <div class="card-body">
                                     @if (session('msg'))
                                         <div class="alert alert-{{ session('type') }}" role="alert">
                                             <strong>{{ session('msg') }}</strong>
                                         </div>
                                     @endif

                                     <form action="{{ route('admin.loginpost') }}" method="POST">
                                         @csrf
                                         <div class="form-group">
                                             <label>E-mail</label>
                                             <input type="text" class="form-control" name="email"
                                                 placeholder="nhập email">
                                         </div>

                                         <div class="form-group">
                                             <label>Mật Khẩu</label>
                                             <input type="password" class="form-control" name="password"
                                                 placeholder="nhập pasword">
                                         </div>
                                         <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                                     </form>

                                 </div>
                             </div>

                             <div class="credits">
                                 <!-- All the links in the footer should remain intact. -->
                                 <!-- You can delete the links only if you purchased the pro version. -->
                                 <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                 <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                 Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                             </div>

                         </div>
                     </div>
                 </div>

             </section>

         </div>
     </main><!-- End #main -->

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
             class="bi bi-arrow-up-short"></i></a>
 @endsection
