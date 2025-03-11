@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')


    <div class="page-content">
        <!-- Start Container Fluid -->

        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-center text-primary">THÊM DỊCH VỤ</h2>
                </div>

                <form action="{{ URL::to('add-service-action') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12 col-lg-12">
                        <form action="">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Chọn ảnh cho dịch vụ</h4>
                                </div>
                                <div class="card-body">
                                    <!-- File Upload -->

                                    <div class="fallback">
                                        <label for="myFileInput" class="form-label">Chọn ảnh (yêu cầu: 400x400)</label>
                                        <input name="category_image" class="form-control btn btn-primary" type="file"
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
                                            <div class="mb-3">
                                                <label for="category-title" class="form-label">Tên dịch vụ</label>
                                                <input type="text" name="service_name" id="category-title"
                                                    class="form-control" placeholder="Nhập tên dịch vụ">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-0">
                                                <label for="description" class="form-label">Mô tả về dịch vụ</label>
                                                <textarea class="form-control bg-light-subtle" id="description" name="service_desc" rows="7"
                                                    placeholder="Mô tả về dịch vụ"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-0">
                                                <label for="description" class="form-label">Trạng thái </label>
                                                <select class="form-control" data-choices name="category_status"
                                                    id="choices-single-default">
                                                    <option value="1"> Hiển thị </option>
                                                    <option value="0"> Không hiển thị</option>
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
                                            Thêm dịch vụ
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
