@extends('layouts.layout')

@section('title', '500 - Lỗi máy chủ')

@section('content')
    <!-- Header Banner -->
    <section class="banner-header full-height section-padding bg-img" data-overlay-dark="6"
        data-background="{{ asset('public/FrontEnd/img/slider/4.jpg') }}">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-md-12">
                    <h6>Oops!</h6>
                    <h1>500 - Lỗi máy chủ</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="content">
                        <div class="section-subtitle">DUCNHICAR</div>
                        <div class="section-title">
                            <span>Có lỗi xảy ra trên máy chủ</span>
                        </div>
                        <p class="mb-30">
                            Đã xảy ra sự cố với máy chủ của chúng tôi. Vui lòng thử lại sau hoặc quay về trang chủ để tiếp
                            tục duyệt web.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
