@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')


    <div class="page-content">
        <!-- Start Container Fluid -->

        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-center text-primary">CHỌN HÌNH ẢNH CHO TRANG</h2>
                </div>

                <form action="{{ URL::to('add-image-action') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12 col-lg-12">
                        <form action="">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Chọn ảnh cho page</h4>
                                </div>
                                <div class="card-body">
                                    <!-- File Upload -->

                                    <div class="fallback">
                                        <label for="myFileInput" class="form-label">
                                            Yêu cầu chọn ảnh: <br>
                                            Nếu poster thì ảnh (1920x1080) <br>
                                            Nếu ảnh người hiển thị (800x800) <br>
                                            Nếu là logo (100x100, .png)
                                        </label>
                                        <input name="image_path" class="form-control btn btn-primary" type="file"
                                            accept="image/*" id="myFileInput" onchange="previewImage(event)" />

                                    </div>
                                    <div class="mt-3">
                                        <img id="imagePreview" src="#" alt="Image Preview"
                                            style="display:none; max-width: 300px;" />
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Thông tin tổng quan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-0">
                                                <label for="description" class="form-label">Chọn vùng hiển thị </label>
                                                @php
                                                    // Lấy danh sách các page_name đã có trong database
                                                    $existingPages = \App\Models\Images::pluck('page_name')->toArray();

                                                    // Danh sách các lựa chọn
                                                    $pages = [
                                                        'home_sld_1' => 'Trang chủ - pic 1',
                                                        'home_sld_2' => 'Trang chủ - pic 2',
                                                        'home_sld_3' => 'Trang chủ - pic 3',
                                                        'home_sld_4' => 'Trang chủ - pic 4',
                                                        'home_me' => 'Trang chủ - hình tôi',
                                                        'about' => 'Trang giới thiệu',
                                                        'service' => 'Trang dịch vụ',
                                                        'contact' => 'Trang liên hệ',
                                                        'favicon' => 'Hình logo',
                                                    ];
                                                @endphp

                                                <select class="form-control" data-choices name="page_name"
                                                    id="choices-single-default">
                                                    @foreach ($pages as $value => $label)
                                                        @if (!in_array($value, $existingPages))
                                                            <option value="{{ $value }}">{{ $label }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 bg-light mb-3 rounded">
                                <div class="row justify-content-end g-2">
                                    <div class="col-lg-2">

                                        <button type="submit" class="btn btn-outline-secondary w-100">
                                            Thêm ảnh
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
