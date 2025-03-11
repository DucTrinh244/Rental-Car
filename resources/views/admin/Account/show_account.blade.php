@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="bg-primary profile-bg rounded-top p-5 position-relative mx-n3 mt-n3">
                                @php
                                    $imageUrl = $user->image_url ?? 'public/BackEnd/images/users/avatar-1.jpg';
                                @endphp
                                <img src="{{ asset($imageUrl) }}" alt="Chưa cập nhật"
                                    class="avatar-lg border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                            </div>

                            <div class="mt-4 pt-3">
                                <h4 class="mb-1"> {{ $user->name }}<i
                                        class="bx bxs-badge-check text-success align-middle"></i></h4>
                                <div class="mt-2">
                                    <p class="fs-15 mb-1 mt-1"><span class="text-dark fw-semibold">Email : </span>
                                        {{ $user->email }}</p>
                                    <p class="fs-15 mb-0 mt-1">
                                        <span class="text-dark fw-semibold">Phone : </span>
                                        <?php
                                        if ($user->phone_number == null) {
                                            $user->phone_number = 'Chưa cập nhật';
                                        }
                                        ?>
                                        {{ $user->phone_number }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top gap-1 hstack">
                            <a href="{{ URL::to('update-account') }}" class="btn btn-primary w-100">Chỉnh sửa thông tin</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Thông tin liên quan</h4>
                            </div>
                            <div>
                                <span class="badge bg-success-subtle text-success px-2 py-1">Trạng thái ổn định</span>
                            </div>

                        </div>
                        <div class="card-body py-2">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Địa chỉ:</p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->address == null) {
                                                    $user->address = 'Chưa cập nhật';
                                                }
                                                ?>
                                                {{ $user->address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Trang facebook : </p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->url_facebook == null) {
                                                    $user->url_facebook = 'Chưa cập nhật';
                                                }
                                                ?>
                                                {{ $user->url_facebook }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Link video giới thiệu : </p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->url_youtube == null) {
                                                    $user->url_youtube = 'Chưa cập nhật';
                                                }
                                                ?>
                                                {{ $user->url_youtube }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Logo hiển thị : </p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->logo == null) {
                                                    $user->logo = 'Chưa cập nhật';
                                                }
                                                ?>
                                                {{ $user->logo }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Được tạo vào lúc : </p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->created_at == null) {
                                                    $user->created_at = 'Chưa cập nhật';
                                                }
                                                ?>
                                                {{ $user->created_at->format('d/m/Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1 fw-semibold text-dark">
                                                    Xác minh email : </p>
                                            </td>
                                            <td class="text-dark fw-medium px-0">
                                                <?php
                                                if ($user->email_verified_at == null) {
                                                    echo 'Chưa xác minh';
                                                } else {
                                                    echo 'Đã xác minh';
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
