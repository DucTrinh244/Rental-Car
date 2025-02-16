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
                            <h4 class="card-title flex-grow-1">Tất cả các dịch vụ </h4>
                                <a href="{{ URL::to('add-service') }}" class="btn btn-sm btn-primary">
                                    Thêm dịch vụ 
                                </a>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>Tên dịch vụ </th>
                                            <th>Mô tả dịch vụ </th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if ($services->isEmpty())
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">
                                                Không có dịch vụ nào để hiển thị.
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($services as $service_item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $service_item->service_name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $service_item->description }}
                                                </td>
                                                <td>
                                                    @if ($service_item->status == 0)
                                                        <a href="{{ URL::to('active-service/' . $service_item->id) }}"
                                                            class="btn btn-light btn-sm">
                                                            <iconify-icon icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </a>
                                                    @else
                                                        <a href="{{ URL::to('unactive-service/' . $service_item->id) }}"
                                                            class="btn btn-primary btn-sm">
                                                            <iconify-icon icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <!-- EDIT SERVICE -->
                                                        <a href="{{ URL::to('edit-service/' . $service_item->id) }}"
                                                            class="btn btn-soft-primary btn-sm">
                                                            <iconify-icon icon="solar:pen-2-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </a>
                                                        <!-- DELETE SERVICE -->
                                                        <a href="{{ URL::to('delete-service/' . $service_item->id) }}"
                                                            class="btn btn-soft-danger btn-sm delete-confirm">
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
