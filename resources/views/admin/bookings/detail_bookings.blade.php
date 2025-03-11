@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')

    <div class="page-content">
        <h2></h2>
        <!-- Start Container -->
        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Chi tiết đơn - {{ $booking_detail->id }}</h4>
                                    <div>
                                        @if ($booking_detail->status != 'canceled')
                                            <a href="javascript:void(0)"
                                                data-url="{{ URL::to('set-canceled/' . $booking_detail->id) }}"
                                                class="btn btn-primary delete-form">Hủy đơn</a>
                                            <a href="#!" class="btn btn-primary">Gửi gmail</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="position-relative ms-2">
                                        <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                        <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                @if ($booking_detail->status == 'pending')
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle">
                                                        <div class="spinner-border spinner-border-sm text-warning"
                                                            role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </span>
                                                @elseif($booking_detail->status == 'confirmed' || $booking_detail->status == 'success')
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                        <i class='bx bx-check-circle'></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-danger fs-20">
                                                        <i class='bx bx-x'></i>
                                                    </span>
                                                @endif
                                                <div
                                                    class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <div>
                                                        <h5 class="mb-1 text-dark fw-medium fs-15">Điểm đi được chọn bởi
                                                            khách hàng</h5>
                                                        <p class="mb-0">Khu vực {{ $booking_detail->pickup_location }}
                                                        </p>
                                                        @if ($booking_detail->status == 'pending')
                                                            <a href="{{ URL::to('set-confirmed/' . $booking_detail->id) }}"
                                                                class="btn btn-light">Xác nhận đơn</a>
                                                        @elseif($booking_detail->status == 'confirmed' || $booking_detail->status == 'success')
                                                            <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Trạng thái :</p>
                                                                <span
                                                                    class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Đã
                                                                    được xác nhận</span>
                                                            </div>
                                                        @else
                                                            <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Trạng thái :</p>
                                                                <span
                                                                    class="badge bg-danger-subtle text-danger  px-2 py-1 fs-13">Đã
                                                                    hủy</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <p class="mb-0">{{ $booking_detail->departure_date->format('d/m/Y') }}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="position-relative ms-2">
                                        <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                        <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                @if ($booking_detail->status == 'confirmed')
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle">
                                                        <div class="spinner-border spinner-border-sm text-warning"
                                                            role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </span>
                                                @elseif($booking_detail->status == 'pending')
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-danger fs-20">
                                                        <i class='bx bx-check-circle'></i>
                                                    </span>
                                                @elseif($booking_detail->status == 'success')
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                        <i class='bx bx-check-circle'></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-danger fs-20">
                                                        <i class='bx bx-x'></i>
                                                    </span>
                                                @endif
                                                <div
                                                    class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <div>
                                                        <h5 class="mb-1 text-dark fw-medium fs-15">Điểm đi được chọn bởi
                                                            khách hàng</h5>
                                                        <p class="mb-0">Khu vực {{ $booking_detail->dropoff_location }}
                                                        </p>
                                                        @if ($booking_detail->status == 'confirmed')
                                                            <a href="{{ URL::to('set-success/' . $booking_detail->id) }}"
                                                                class="btn btn-light">Hoàn thành đơn</a>
                                                        @elseif($booking_detail->status == 'pending')
                                                            <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Trạng thái :</p>
                                                                <span
                                                                    class="badge bg-warning-subtle text-warning  px-2 py-1 fs-13">Chờ
                                                                    xác nhận</span>
                                                            </div>
                                                        @elseif($booking_detail->status == 'success')
                                                            <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Trạng thái :</p>
                                                                <span
                                                                    class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Đã
                                                                    xong đơn</span>
                                                            </div>
                                                        @else
                                                            <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Trạng thái :</p>
                                                                <span
                                                                    class="badge bg-danger-subtle text-danger  px-2 py-1 fs-13">Đã
                                                                    hủy</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <p class="mb-0">{{ $booking_detail->return_date->format('d/m/Y') }}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chi tiết thông tin khách hàng </h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <p class="mb-1">{{ $booking_detail->customer_name }}</p>
                                    <a href="#!"
                                        class="link-primary fw-medium">{{ $booking_detail->customer_email }}</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <h5 class="">Số điện thoại liên hệ </h5>
                            </div>
                            <p class="mb-1">{{ $booking_detail->customer_phone }}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <h5 class="">Nhu cầu sử dụng đơn</h5>
                            </div>
                            <p class="mb-1">{{ $booking_detail->requirements }}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <h5 class="">Ghi chú cho tài xế</h5>
                            </div>
                            <p class="mb-1">{{ $booking_detail->notes }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
