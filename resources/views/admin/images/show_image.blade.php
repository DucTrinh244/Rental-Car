@extends('layouts.layout_admin')
@section('content_admin')
    @include('components.toast')
    @include('components.uploadpicture')

    <div class="page-content">
        <div class="container-xxl">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center gap-1">
                            <h4 class="card-title flex-grow-1">Tất cả hình ảnh hiển thị ra trang </h4>
                            <a href="{{ URL::to('add-images') }}" class="btn btn-sm btn-primary">
                                Thêm hình ảnh cho trang
                            </a>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>Hình ảnh </th>
                                            <th>Vị trí</th>
                                            <th>Hoạt động </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($images->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">
                                                    Chưa thiết lập hình ảnh cho trang
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($images as $image_item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div
                                                                class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset($image_item->image_path) }}"
                                                                    alt="{{ $image_item->image_path }}" class="avatar-md">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    @php
                                                        $positions = [
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

                                                    <td>
                                                        {{ $positions[$image_item->page_name] ?? 'Không xác định' }}
                                                    </td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <!-- DELETE SERVICE -->
                                                            <a href="javascript:void(0)"
                                                                data-url="{{ URL::to('delete-image/' . $image_item->id) }}"
                                                                class="btn btn-soft-danger btn-sm delete-confirm delete-form">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                                    class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
