@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    @if ($image_about != null)
        @php
            $aboutImage = asset($image_about->image_path);
        @endphp
    @endif

    <section class="banner-header section-padding bg-img" data-overlay-dark="4"
        data-background="{{ $aboutImage ?? asset('public/FrontEnd/img/slider/3.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>DUCNHICAR</h6>
                        <h1>Giới thiệu về <span> Xe {{ $user->name }}</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <div class="section-subtitle">DUCNHICAR</div>
                        <div class="section-title">Tôi đây là <span>Dịch vụ thuê xe tư nhân</span></div>
                        <p>Bạn đang tìm kiếm một dịch vụ thuê xe giá rẻ, chất lượng, và đáng tin cậy? Chúng tôi cung cấp đa
                            dạng các loại xe từ xe du lịch, xe tự lái, xe có tài xế đến xe sang trọng phục vụ nhu cầu cá
                            nhân, gia đình, hoặc doanh nghiệp.</p>
                        <p class="mb-30">Dù bạn cần thuê xe ngắn hạn hay dài hạn, hãy liên hệ ngay để được tư vấn và nhận
                            báo giá tốt nhất!</p>

                        <ul class="list-unstyled list mb-30">
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Chúng tôi cung cấp nhiều dịch vụ</p>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"> <span class="ti-check"></span> </div>
                                <div class="list-text">
                                    <p>Nhiều phương án được lựa chọn</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @if ($image_home_me != null)
                    @php
                        $homeMeImage = asset($image_home_me->image_path);
                    @endphp
                @endif
                <div class="col-md-5 offset-md-1">
                    <div class="item">
                        <img style="border-radius: 20px" src="{{ $homeMeImage ?? asset('public/FrontEnd/img/about.jpg') }}"
                            class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($image_home_sld_3 != null)
        @php
            $video_image = asset($image_home_sld_3->image_path);
        @endphp
    @endif

    <!-- Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ $video_image ?? asset('public/FrontEnd/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Khám phá</div>
                    <div class="section-title white">Xe của tôi <span> Giới thiệu</span> Video</div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="{{ $user->url_youtube }}">
                        <div class="vid-butn"> <span class="icon"> <i class="ti-control-play"></i> </span> </div>
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
                        @foreach ($review as $review_item)
                            <div class="item">
                                <div class="stars">
                                    <span class="rate">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review_item->rating)
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                        @endfor

                                    </span>
                                    <div class="shap-left-top">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="w-11 h-11">
                                            <path
                                                d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                    <div class="shap-right-bottom">
                                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="w-11 h-11">
                                            <path
                                                d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                fill="#1b1b1b"></path>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-quote-left"></i>
                                <div class="text">
                                    <p>
                                        {{ $review_item->comment }}
                                    </p>
                                </div>
                                <div class="info mt-30">
                                    <div class="img-curv">
                                        <div class="img"><img src="{{ asset('public/FrontEnd/img/team/1.jpg') }}"
                                                alt="" /></div>
                                        <div class="shap-left-top">
                                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-11 h-11">
                                                <path
                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                    fill="#1b1b1b"></path>
                                            </svg>
                                        </div>
                                        <div class="shap-right-bottom">
                                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-11 h-11">
                                                <path
                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                                    fill="#1b1b1b"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-30">
                                        <h6>{{ $review_item->name }}</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="line-vr-section"></div>
    <!-- Team -->
@endsection
