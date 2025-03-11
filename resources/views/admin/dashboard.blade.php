@extends('layouts.layout_admin')
@section('content_admin')
    <div class="page-content">
        <!-- Start Container Fluid -->
        <div class="container-fluid">
            <!-- Start here.... -->
            <div class="row">
                <div class="col-xxl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-primary text-truncate mb-3" role="alert">
                                CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN QUẢN LÝ TRANG XE DỊCH VỤ
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:cart-check-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Tổng đơn đang có trong năm này</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $count_booking_year ?? 0 }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:server-2-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Tổng số dịch vụ đang hiển thị</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $count_service_active ?? 0 }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:album-bold"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Hình ảnh thiết lập cho giao diện</p>
                                            <h3 class="text-dark mt-1 mb-0">
                                                {{ '(' . $count_images . '/9) ' . $status_image }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:star-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Tổng số đánh giá đang hiển thị</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ $count_reviews ?? 0 }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
