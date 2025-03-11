@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')


    <div class="page-content">
        <!-- Start Container Fluid -->

        <div class="container-xxl">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h2 class="text-center text-primary">CẬP NHẬT DỊCH VỤ</h2>
                </div>

                <form action="{{ URL::to('edit-service-action/' . $service->id) }}" method="post"
                    enctype="multipart/form-data">
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
                                    <input name="category_image" class="form-control btn btn-primary" type="file"
                                        accept="image/*" id="myFileInput" onchange="previewImage(event)" />
                                </div>
                                <div class="mt-3">
                                    <?php
                            if ($service->image != '') {
                            ?>
                                    <img id="imagePreview" src="{{ URL::to($service->image) }}" alt=""
                                        width="300" />
                                    <?php
                            } else {
                            ?>
                                    <img id="imagePreview" src="{{ $service->image }}" alt=""
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
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="service_name" class="form-label">Tên dịch vụ</label>
                                            <input type="text" name="service_name" id="service_name" class="form-control"
                                                value="{{ $service->service_name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Mô tả về dịch vụ</label>
                                            <textarea class="form-control bg-light-subtle" id="description" name="service_desc" rows="7">{{ $service->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="category_status" class="form-label">Trạng thái</label>
                                            <select class="form-control" name="category_status" id="category_status">
                                                <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Không
                                                    hiển thị</option>
                                                <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Hiển
                                                    thị</option>
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
                                        Cập nhật dịch vụ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
