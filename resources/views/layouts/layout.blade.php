<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>RENAX</title>
    <link rel="shortcut icon" href="{{ asset('public/FrontEnd/img/favicon.png')}}" />
    <!-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:wght@200;400;500&family=Rethink+Sans&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('public/FrontEnd/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/FrontEnd/css/style.css') }}" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
      <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
      </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
          {{-- <a class="logo" href="index-2.html">
            <img src="{{ asset('public/FrontEnd/img/logo-light.png')}}" class="logo-img" alt="" />
          </a> --}}
         <a class="logo" href="index.html"><h2>DUCNHI<span>CAR</span></h2></a> 
        </div>
        <!-- Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar"
          aria-controls="navbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"
            ><i class="fa-solid fa-bars"></i
          ></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/home') }}">Trang chủ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/About') }}">Thông tin </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/Services') }}">Dịch vụ</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/Contact') }}">Liên hệ </a>
            </li>
          </ul>
          <div class="navbar-right">
            <div class="wrap">
              <div class="icon"><i class="flaticon-phone-call"></i></div>
              <div class="text">
                <p>Hỗ trợ ?</p>
                <h5><a href="tel:0977208973">0977208973</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @yield('content')
<!-- Clients -->
<section class="clients">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="owl-carousel owl-theme">
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/1.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/2.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/3.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/4.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/5.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/6.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/7.png')}}" alt="" /></a>
          </div>
          <div class="clients-logo">
            <a href="#0"><img src="{{ asset('public/FrontEnd/img/clients/8.png')}}" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    <!-- Footer -->
    <footer class="footer clearfix">
      <div class="container">
        <!-- first footer -->
        <div class="first-footer">
          <div class="row">
            <div class="col-md-12">
              <div class="links dark footer-contact-links">
                <div class="footer-contact-links-wrapper">
                  <div class="footer-contact-link-wrapper">
                    <div class="image-wrapper footer-contact-link-icon">
                      <div class="icon-footer">
                        <i class="flaticon-phone-call"></i>
                      </div>
                    </div>
                    <div class="footer-contact-link-content">
                      <h6>Điện cho tôi </h6>
                      <p>0977208973</p>
                    </div>
                  </div>
                  <div class="footer-contact-links-divider"></div>
                  <div class="footer-contact-link-wrapper">
                    <div class="image-wrapper footer-contact-link-icon">
                      <div class="icon-footer">
                        <i class="omfi-envelope"></i>
                      </div>
                    </div>
                    <div class="footer-contact-link-content">
                      <h6>Gửi cho tôi </h6>
                      <p>hoangducnhi2010@gmail.com</p>
                    </div>
                  </div>
                  <div class="footer-contact-links-divider"></div>
                  <div class="footer-contact-link-wrapper">
                    <div class="image-wrapper footer-contact-link-icon">
                      <div class="icon-footer">
                        <i class="omfi-location"></i>
                      </div>
                    </div>
                    <div class="footer-contact-link-content">
                      <h6>Địa chỉ</h6>
                      <p>Xuân Tam Mỹ, Triệu Trung, Triệu Phong, Quảng trị, Việt Nam</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- second footer -->
        <div class="second-footer">
          <div class="row">
            <!-- about & social icons -->
            <div class="col-md-4 widget-area">
              <div class="widget clearfix">
          
                 <div class="footer-logo"><h2>DUCNHI<span>CAR</span></h2></div>
                <div class="widget-text">
                  <p>
                    Thuê một chiếc xe, sự cân bằng hoàn hảo giữa sự thoải mái và tiện nghi.
                  </p>
                  <div class="social-icons">
                    <ul class="list-inline">
                      <li>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- quick links -->
            <div class="col-md-3 offset-md-1 widget-area">
              <div class="widget clearfix usful-links">
                <h3 class="widget-title">Truy cập nhanh</h3>
                <ul>
                  <li><a href="about.html">Thông tin</a></li>
                  <li><a href="cars.html">Dịch vụ</a></li>
                  <li><a href="car-types.html">Liên hệ</a></li>
                </ul>
              </div>
            </div>
       
          </div>
        </div>
        <!-- bottom footer -->
        <div class="bottom-footer-text">
          <div class="row copyright">
            <div class="col-md-12">
              <p class="mb-0">
                &copy;2025 <a href="#">ZonedevThemmes</a>. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- RentNow Popup -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đặt xe tự động</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="booking-box">
              <div class="booking-inner clearfix">
                <form
                  method="post"
                  action="#0"
                  class="form1 contact__form clearfix"
                >
                  <!-- form message -->
                  <div class="row">
                    <div class="col-12">
                      <div
                        class="alert alert-success contact__msg"
                        style="display: none"
                        role="alert"
                      >
                        Tin nhắn của bạn đã được gửi thành công.
                      </div>
                    </div>
                  </div>
                  <!-- form elements -->
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <input
                        name="name"
                        type="text"
                        placeholder="Full Name *"
                        required
                      />
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <input
                        name="email"
                        type="email"
                        placeholder="Email *"
                        required
                      />
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <input
                        name="phone"
                        type="text"
                        placeholder="Phone *"
                        required
                      />
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="select1_wrapper">
                        <label>Chọn điểm đi</label>
                        <div class="select1_inner">
                          <select class="select2 select" style="width: 100%">
                            <option value="0">Chọn điểm đi</option>
                            <option value="1">Quảng trị</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="select1_wrapper">
                        <label>Chọn địa điểm đến</label>
                        <div class="select1_inner">
                          <select class="select2 select" style="width: 100%">
                            <option value="0">Chọn địa điểm đến</option>
                            <option value="1">Huế</option>
                            <option value="2">Quảng Nam</option>
                            <option value="3">Đà Nẵng</option>
                            <option value="4">Quảng Bình</option>
                            <option value="4">Nghệ An</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="input1_wrapper">
                        <label>Chọn ngày đi</label>
                        <div class="input1_inner">
                          <input
                            type="text"
                            class="form-control input datepicker"
                            placeholder="Chọn ngày đi"
                            required
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="select1_wrapper">
                        <label>Chọn nhu cầu</label>
                        <div class="select1_inner">
                          <select class="select2 select" style="width: 100%">
                            <option value="0">Chọn nhu cầu</option>
                            <option value="1">Chỉ chở đi</option>
                            <option value="3">Chở đi và về</option>
                            <option value="4">Tùy nhu cầu sử dụng</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="input1_wrapper">
                        <label>Chọn ngày về</label>
                        <div class="input1_inner">
                          <input
                            type="text"
                            class="form-control input datepicker"
                            placeholder="Chọn ngày về"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 form-group">
                      <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="4"
                        placeholder="Thêm ghi chú cho tài xế"
                      ></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="booking-button mt-15">
                        Đặt xe ngay
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('public/FrontEnd/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/jquery-migrate-3.4.1.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/popper.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/select2.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/datepicker.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/vegas.slider.min.js')}}"></script>
    <script src="{{asset('public/FrontEnd/js/custom.js')}}"></script>
    <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
      @yield('scripts')
  </body>

</html>
