@extends('layouts.layout')
@section('content')
<aside
class="kenburns-section"
id="kenburnsSliderContainer"
data-overlay-dark="5">
<div class="kenburns-inner h-100">
  <div class="v-middle caption">
    <div class="container">
      <div class="row h-100">
        <div class="col-md-12">
          <h6>* Premium</h6>
          <h1>Dịch vụ xe Đức Nhi</h1>
          <h5>Uy tín và chất lượng đặt lên hàng đầu</h5>
          <a href="{{ URL::to('/About') }}" class="button-1 mt-15 mb-15 mr-15"
            >Xem chi tiết <span class="ti-arrow-top-right"></span
          ></a>
          <a href="#" a
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
          data-bs-whatever="@mdo"
          href="#0"
          class="button-2 mt-15 mb-15"
            >Đặt xe ngay <span class="ti-arrow-top-right"></span
          ></a>
        </div>s
      </div>
    </div>
  </div>
</div>
</aside>
<!-- Services Box -->
<div class="services-box mt--120 mb-60">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-12">
      <div class="item">
        <span class="icon ti-money"></span>
        <h5>Giá cả hợp lý</h5>
        <p>
            Chúng tôi luôn theo dõi giá cả để đảm bảo rằng bạn nhận được ưu đãi tốt nhất trên thị trường.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="item">
        <span class="icon omfi-transmission"></span>
        <h5>Xe đạt chất lượng tốt</h5>
        <p>
          Bạn có thể tận hưởng được sự vượt trội và thoải mái mà dịch vụ đem lại.
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="item">
        <span class="icon omfi-location"></span>
        <h5>Đưa đón tận nơi</h5>
        <p>
            Chúng tôi sẽ đến địa điểm của bạn và chở bạn ngay. Chỉ cần bạn liên lạc thì sẽ có mặt ngay!
        </p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- About -->
<section class="about section-padding">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12 mb-30">
      <div class="content">
        <div class="section-subtitle">DUCNHICAR</div>
        <div class="section-title">
          Tôi là một  <span>Tài xế đầy kinh nghiệm</span>
        </div>
        <p class="mb-30">
            Tôi là Hoàng Đức Nhi, sinh năm 1997, với hơn 10 năm kinh nghiệm lái xe. Cam kết mang đến sự an toàn tuyệt đối và chất lượng dịch vụ hàng đầu, đáp ứng mọi nhu cầu của khách hàng.
        </p>
        <ul class="list-unstyled list mb-30">
          <li>
            <div class="list-icon"><span class="ti-check"></span></div>
            <div class="list-text">
              <p>Tài xế đầy kinh nghiệm</p>
            </div>
          </li>
          <li>
            <div class="list-icon"><span class="ti-check"></span></div>
            <div class="list-text">
              <p>Chất lượng xe hàng đầu</p>
            </div>
          </li>
        </ul>
        <a href="{{ URL::to('/About') }}" class="button-1"
          >Đọc thêm <span class="ti-arrow-top-right"></span
        ></a>
      </div>
    </div>
    <div class="col-lg-5 offset-lg-1 col-md-12">
      <div class="item">
        <img style="border-radius: 20px" src="{{ asset('public/FrontEnd/img/about.jpg')}}" class="img-fluid" alt="" />  
      </div>
    </div>
  </div>
</div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Services 1 -->
<section class="services1 section-padding">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center mb-30">
      <div class="section-subtitle">Chúng tôi có gì</div>
      <div class="section-title"><span>Dịch vụ</span> của tôi</div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="text">
            <h5>Corporate Car Rental</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="text">
            <h5>Car Rental with Driver</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="text">
            <h5>Airport Transfer</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="text">
            <h5>Fleet Leasing</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="text">
            <h5>VIP Transfer</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="text">
            <h5>Private Transfer</h5>
            <p>
              Lorem ipsum dolor sit amet the consectetur adipiscing elit
              entesque hendrerit elit nisan lacinia feugiat nunc eu
              aucton.
            </p>
          </div>
          <div class="numb">
            <div class="numb-curv">
              <a href="service-details.html">
                <div class="number">
                  <i class="ti-arrow-top-right"></i>
                </div>
              </a>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Booking Search -->
<section
class="lets-talk bg-img bg-fixed section-padding"
data-overlay-dark="5"
data-background="{{ asset('public/FrontEnd/img/slider/3.jpg')}}">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h6>Đặt xe</h6>
      <h5>Bạn có nhu cầu đặt xe</h5>
      <p>Đừng ngần ngại, hãy gửi cho tôi một tin nhắn.</p>
      <a href="tel:+09772089773" class="button-1 mt-15 mb-15 mr-10"
        ><i class="fa-solid fa-phone"></i>
        Điện cho tôi</a
      >
      <a
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        data-bs-whatever="@mdo"
        href="#0"
        class="button-2 mt-15 mb-15"
        >Đặt xe ngay <span class="ti-arrow-top-right"></span
      ></a>
    </div>
  </div>
</div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- Process -->
<section class="process section-padding">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 text-center mb-30">
      <div class="section-subtitle">Các bước</div>
      <div class="section-title white">
         <span>Quy trình</span> thuê xe
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-30">
      <div class="item">
        <div class="text">
          <h5>Chọn địa điểm và thời gian</h5>
          <p>
            Chúng tôi cần bạn cung cấp địa chỉ muốn đến và thời gian để có thể xác định được nhu cầu của bạn.
          </p>
        </div>
        <div class="numb">
          <div class="numb-curv">
            <div class="number">01.</div>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-30">
      <div class="item">
        <div class="text">
          <h5>Liên hệ cho tôi</h5>
          <p>
            Bạn đã xác định được nhu cầu thì liên hệ cho tôi để xác nhận chuyến đi của bạn, hoặc gửi cho tôi thông tin để tôi liên hệ đến bạn.
          </p>
        </div>
        <div class="numb">
          <div class="numb-curv">
            <div class="number">02.</div>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-30">
      <div class="item">
        <div class="text">
          <h5>Tận hưởng chuyến đi</h5>
          <p>
            Tôi sẽ tiếp nhận chuyến đi và tôi sẽ đưa bạn đến nơi bạn cần đến và bạn chỉ cần tận hưởng chuyến đi.
          </p>
        </div>
        <div class="numb">
          <div class="numb-curv">
            <div class="number">03.</div>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-12 text-center mt-15">
      <p>
        <span class="ti-info"></span> Nếu bạn chưa từng thuê xe trước đó,
        chúng tôi sẽ hướng dẫn bạn suốt quá trình.
      </p>
    </div>
  </div>
</div>
</section>
<!-- Video -->
<section
class="video-wrapper video section-padding bg-img bg-fixed"
data-overlay-dark="4"
data-background="{{ asset('public/FrontEnd/img/slider/1.jpg')}}">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="section-subtitle">Khám phá</div>
      <div class="section-title white">Video <span>giới thiệu</span> xe của tôi</div>
    </div>
  </div>
  <div class="row">
    <div class="text-center col-md-12">
      <a class="vid" href="https://youtu.be/1LxcTt1adfY">
        <div class="vid-butn">
          <span class="icon"> <i class="ti-control-play"></i> </span>
        </div>
      </a>
    </div>
  </div>
</div>
</section>
<!-- Testimonials -->
<section class="testimonials section-padding mt-15">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center mb-30">
      <div class="section-subtitle">Lời chứng thực</div>
      <div class="section-title">Đánh giá của khách hàng</div>
    </div>
    <div class="col-md-12">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="stars">
            <span class="rate">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
          <i class="fa-solid fa-quote-left"></i>
          <div class="text">
            <p>
              Lorem posuere in miss drana en the nisan semere sceriun
              amiss etiam ornare in the miss drana is lorem fermen nunta
              urnase mauris in the interdum.
            </p>
          </div>
          <div class="info mt-30">
            <div class="img-curv">
              <div class="img"><img src="{{ asset('public/FrontEnd/img/team/1.jpg')}}" alt="" /></div>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="ml-30">
              <h6>Dan Martin</h6>
              <p>Customer</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="stars">
            <span class="rate">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
          <i class="fa-solid fa-quote-left"></i>
          <div class="text">
            <p>
              Lorem posuere in miss drana en the nisan semere sceriun
              amiss etiam ornare in the miss drana is lorem fermen nunta
              urnase mauris in the interdum.
            </p>
          </div>
          <div class="info mt-30">
            <div class="img-curv">
              <div class="img"><img src="{{ asset('public/FrontEnd/img/team/4.jpg')}}" alt="" /></div>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="ml-30">
              <h6>Olivia Brown</h6>
              <p>Customer</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="stars">
            <span class="rate">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <div class="shap-left-top">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
            <div class="shap-right-bottom">
              <svg
                viewBox="0 0 11 11"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="w-11 h-11"
              >
                <path
                  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                  fill="#1b1b1b"
                ></path>
              </svg>
            </div>
          </div>
          <i class="fa-solid fa-quote-left"></i>
          <div class="text">
            <p>
              Lorem posuere in miss drana en the nisan semere sceriun
              amiss etiam ornare in the miss drana is lorem fermen nunta
              urnase mauris in the interdum.
            </p>
          </div>
          <div class="info mt-30">
            <div class="img-curv">
              <div class="img"><img src="{{ asset('public/FrontEnd/img/team/6.jpg')}}" alt="" /></div>
              <div class="shap-left-top">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
              <div class="shap-right-bottom">
                <svg
                  viewBox="0 0 11 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-11 h-11"
                >
                  <path
                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                    fill="#1b1b1b"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="ml-30">
              <h6>Emily Martin</h6>
              <p>Customer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


@endsection
@section('scripts')
<script>
    $(document).ready(function () {
      $("#kenburnsSliderContainer").vegas({
        slides: [
          {
            src: "public/FrontEnd/img/slider/1.jpg",
          },
          {
            src: "public/FrontEnd/img/slider/3.jpg",
          },
          {
            src: "public/FrontEnd/img/slider/11.jpg",
          },
        ],
        overlay: true,
        transition: "fade2",
        animation: "kenburnsUpRight",
        transitionDuration: 1000,
        delay: 10000,
        animationDuration: 20000,
      });
    });
    </script>
@endsection
