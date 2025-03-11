@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')


    <div class="page-content">
        <!-- Start Container Fluid -->

        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-center text-primary">CẬP NHẬT TÀI KHOẢN</h2>
                </div>

                <form action="{{ URL::to('edit-account-action/' . $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chọn hình ảnh</h4>
                            </div>
                            <div class="card-body">
                                <!-- File Upload -->
                                <div class="fallback">
                                    <label for="myFileInput" class="form-label">Chọn hình ảnh</label>
                                    <input name="image_url" class="form-control btn btn-primary" type="file"
                                        accept="image/*" id="myFileInput" onchange="previewImage(event)" />
                                </div>
                                <div class="mt-3">
                                    <?php
                            if ($user->image_url != '') {
                            ?>
                                    <img id="imagePreview" src="{{ URL::to($user->image_url) }}" alt=""
                                        width="300" />
                                    <?php
                            } else {
                            ?>
                                    <img id="imagePreview" src="{{ $user->image_url }}" alt=""
                                        style="display: none; max-width:300px;" />
                                    <?php
                            }
                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thông tin tổng quan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">Họ và tên</label>
                                            <input type="text" name="name" id="service_name" class="form-control"
                                                value="{{ $user->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">Email</label>
                                            <input type="email" name="email" id="service_name" class="form-control"
                                                value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">
                                                Số điện thoại</label>
                                            <input type="text" name="phone_number" id="service_name" class="form-control"
                                                value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">
                                                Trang facebook</label>
                                            <input type="text" name="url_facebook" id="service_name" class="form-control"
                                                value="{{ $user->url_facebook }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="youtube_name" class="form-label">
                                                Link video giới thiệu</label>
                                            <input type="text" name="url_youtube" id="youtube_name" class="form-control"
                                                value="{{ $user->url_youtube }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">
                                                Địa chỉ</label>
                                            <input type="text" name="address" id="service_name" class="form-control"
                                                value="{{ $user->address }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="logo_name" class="form-label">
                                                Logo hiển thị</label>
                                            <input type="text" name="logo" id="logo_name" class="form-control"
                                                value="{{ $user->logo }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="p-3 bg-light mb-3 rounded">
                            <div class="row justify-content-end g-2">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-outline-secondary w-100">
                                        Cập nhật tài khoản
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Xác thực email</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                {{ __('Cảm ơn bạn đã đăng ký! Trước khi bắt đầu, vui lòng xác thực email của bạn bằng cách nhấp vào liên kết chúng tôi vừa gửi qua email. Nếu bạn không nhận được email, chúng tôi sẽ gửi lại.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success" role="alert">
                                    {{ __('Một liên kết xác thực mới đã được gửi đến email bạn đã đăng ký.') }}
                                </div>
                            @endif

                            <div class="d-flex justify-content-between mt-4">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Gửi lại email xác thực') }}
                                    </button>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-danger">
                                        {{ __('Đăng xuất') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Đổi mật khẩu</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('password.update') }}" class="mt-3">
                                @csrf
                                @method('put')

                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
                                    <input type="password" id="current_password" name="current_password"
                                        class="form-control" autocomplete="current-password">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu mới</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control" autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="p-3 bg-light mb-3 rounded text-end">
                                    <button type="submit" class="btn btn-outline-secondary">Lưu thay đổi</button>
                                </div>

                                @if (session('status') === 'password-updated')
                                    <div class="alert alert-success mt-3" role="alert">
                                        Mật khẩu đã được cập nhật thành công!
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
