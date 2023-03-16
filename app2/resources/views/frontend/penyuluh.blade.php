<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Daftar Penyuluh </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/assets/img/favicon.png')}}">
  
   <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slicknav.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/price_rangs.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/responsive.css')}}">
      <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style3.css')}}">
<style>
.tabs {
  position: relative;
  margin: 3rem 0;
  background: #ffffff;
  height: 40rem;
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #e8e8e8;
  /* border: 0.25rem solid #502b00; */
  color: rgb(0, 0, 0);
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}
.tab-content {
  width: 100%;
  height: auto;
  position: absolute;
  z-index: 1;
  top: 2.75em;
  left: 0;
  padding: 1.618rem;
  background: #fff;
  color: #2c3e50;
  border: 0.25rem solid #502b00;
  /* border-bottom: 0.25rem solid #bdc3c7; */
  opacity: 0;
  transition: all 0.35s;
}
.tab-switch:checked + .tab-label {
  background:#502b00;
  color: #fff;
  border-bottom: 0;
  border-right: 0.125rem solid #fff;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}

.tabs-2 {
  position: relative;
  margin: 1rem 0;
  background: #ffffff;
  height: 4rem;
}

.tabs-2::before,
.tabs-2::after {
  content: "";
  display: table;
}
.tabs-2::after {
  clear: both;
}

.tab-label1 {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #502b00;
  /* border: 0.25rem solid #502b00; */
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}

</style>
</head>

<body>
    @include('frontend/layouts.navbar');
    
    <!-- Banner Atas Start-->
   
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('Frontend/assets/img/gallery/s2.jpg') }}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR PENYULUH</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->

   <div class="container">  
            <div class="pagination-area pb-300 text-center">
                <div class="blog_right_sidebar"> 
                  <aside class="single_sidebar_widget search_widget">
                    <form action="/penyuluh/cari" method="POST">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Masukkan nama Penyuluh atau lokasi Kecamatan anda'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Search Keyword'" name="cari">
                                <div class="input-group-append">
                                    <input type="submit" class="btn btn-primary mb-1" value="CARI"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </aside>         
                {{-- <aside class="single_sidebar_widget search_widget">
                            <form method="POST">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='cari penyuluh' name="cari" id="cari penyuluh" value=""
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'search_keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                   </div>      
                            </form>
                        </aside> --}}
                  </div>
                </div>
               
                            <div class="row">  
                
                <table>
                    <tbody>
                               {{-- Perulangan untuk menampilkan data sebanyak yang ada di database --}}
                          @foreach ($penyuluh as $data_penyuluh)
                          <tr>
                          <article class="blog_item">
                                            <div class="col-md-10">
                                                <div class="our-team">
                                                <div class="pic">
                                                    <img src="/data/data_penyuluh/{{ $data_penyuluh->foto }}" alt="gambar penyuluh" width="300px">
                                                </div>
                                                <div class="blog_details">
                                                    {{-- Code untuk memotong text menggunakan Str limit --}}
                                                    <div class="team-content">
                                                        <h4 class="title">{{ $data_penyuluh->nama_penyuluh }}</h4>
                                                        <span class="post">{{ $data_penyuluh->tempat }}</span>
                                                        <p><span class="post">{{ $data_penyuluh->telpon }}</span></p><br>
                                                    {{-- <ul class="blog-info-link">
                                                        <li><a>{{ $data_penyuluh->tempat }}</a></li>
                                                        <li><a>{{ $data_penyuluh->telpon }}</a></li>
                                                    </ul> --}}
                                                    <div class="services-cap">
                                                    <a href="/penyuluh/{{ $data_penyuluh->id_penyuluh }}/detail/" class="genric-btn primary radius">Detail</a>
                                                    </div>
                                                    {{-- <ul class="social"> 
                                                        <li>
                                                        
                                                        </li>
                                                    </ul> --}}
                                                </div>
                                                
                                          </article>
                                          </tr>
                                          @endforeach
                                          @if ($penyuluh->isEmpty())
                                          <div class="col">
                                              <center>
                                                  <img src="{{ asset('Frontend/assets/img/icon/error.png') }}" class="datatidakada" alt="Data Kosong">
                                              </center>
                                          </div>
                                          @endif
                                          </tbody>
                                      </table> 
                                                </div>
                                            </div>
                                            
                                </div>
                            <!--.row-->
                            </div>
                <!--.carousel-inner-->
                </div>
            <!--.Carousel-->
            </div>
        </div>  
    </div>
</section>

<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-10"> -->
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">     
                            {{-- //pagination use bootstrap --}}
                            {{ $penyuluh->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
   
  <section>
    @include('frontend/layouts.footer');
</section>

  <!-- JS here -->
	
		  <!-- All JS Custom Plugins Link Here here -->
          <script src="{{ asset('Petugas/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
          <!-- Jquery, Popper, Bootstrap -->
          <script src="{{ asset('Petugas/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/popper.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/bootstrap.min.js') }}"></script>
          <!-- Jquery Mobile Menu -->
          <script src="{{ asset('Petugas/assets/js/jquery.slicknav.min.js') }}"></script>
  
          <!-- Jquery Slick , Owl-Carousel Plugins -->
          <script src="{{ asset('Petugas/assets/js/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/slick.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/price_rangs.js') }}"></script>
          
          <!-- One Page, Animated-HeadLin -->
          <script src="{{ asset('Petugas/assets/js/wow.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/animated.headline.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.magnific-popup.js') }}"></script>
  
          <!-- Scrollup, nice-select, sticky -->
          <script src="{{ asset('Petugas/assets/js/jquery.scrollUp.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.nice-select.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.sticky.js') }}"></script>
          
          <!-- contact js -->
          <script src="{{ asset('Petugas/assets/js/contact.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.form.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.validate.min.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/mail-script.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/jquery.ajaxchimp.min.js') }}"></script>
          
          <!-- Jquery Plugins, main Jquery -->	
          <script src="{{ asset('Petugas/assets/js/plugins.js') }}"></script>
          <script src="{{ asset('Petugas/assets/js/main.js') }}"></script>
        
</body>
</html>