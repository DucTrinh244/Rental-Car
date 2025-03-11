@extends('layouts.layout')

@section('title', '404 - Không tìm thấy trang')

@section('content')
    <!-- Header Banner -->
    <section class="banner-header full-height section-padding bg-img" data-overlay-dark="6"
        data-background="{{ asset('public/FrontEnd/img/slider/4.jpg') }}">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-md-12">
                    <h6>Oops!</h6>
                    <h1>404 - Trang không tồn tại</h1>
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
                            <span>Vui lòng kiểm tra lại đường dẫn</span>
                        </div>
                        <p class="mb-30">
                            Trang bạn đang tìm kiếm có thể đã bị xóa, di chuyển hoặc chưa từng tồn tại.
                            Vui lòng kiểm tra lại đường dẫn hoặc quay về trang chủ để tiếp
                            tục duyệt web.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
