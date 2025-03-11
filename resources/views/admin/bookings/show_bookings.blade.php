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
                            <h4 class="card-title flex-grow-1">Tất cả các đơn đặt xe </h4>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>ID </th>
                                            <th>Tên khách hàng </th>
                                            <th>Nơi đi</th>
                                            <th>Nơi đến</th>
                                            <th>Ngày đi </th>
                                            <th>Ngày về</th>
                                            <th>Nhu cầu sử dụng </th>
                                            <th>Ghi chú </th>
                                            <th>Trạng thái </th>
                                            <th>Hoạt động </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($bookings->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">
                                                    Không có dịch vụ nào để hiển thị.
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($bookings as $booking_item)
                                                <tr>
                                                    <td>
                                                        {{ $booking_item->id }}
                                                    </td>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->customer_name }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->pickup_location }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->dropoff_location }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->departure_date->format('d/m/Y') }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->return_date->format('d/m/Y') }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->requirements }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $booking_item->notes }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        @if ($booking_item->status == 'pending')
                                                            <span
                                                                class="badge border border-warning text-warning  px-2 py-1 fs-13">
                                                                Chờ xử lý
                                                            </span>
                                                        @elseif ($booking_item->status == 'confirmed')
                                                            <span
                                                                class="badge border border-success text-success  px-2 py-1 fs-13">
                                                                Đã xác nhận
                                                            </span>
                                                        @elseif ($booking_item->status == 'success')
                                                            <span
                                                                class="badge border border-success text-success  px-2 py-1 fs-13">
                                                                Đã hoàn thành
                                                            </span>
                                                        @elseif ($booking_item->status == 'canceled')
                                                            <span
                                                                class="badge border border-danger text-danger  px-2 py-1 fs-13">
                                                                Đã Hủy
                                                            </span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <!-- EDIT SERVICE -->
                                                            <a href="{{ URL::to('bookings-detail/' . $booking_item->id) }}"
                                                                class="btn btn-soft-primary btn-sm">
                                                                <iconify-icon icon="solar:eye-bold"
                                                                    class="align-middle fs-18"></iconify-icon>

                                                            </a>
                                                            @if ($booking_item->status != 'canceled')
                                                                <a href="javascript:void(0)"
                                                                    data-url="{{ URL::to('set-canceled/' . $booking_item->id) }}"
                                                                    class="btn btn-soft-danger btn-sm delete-confirm delete-form">
                                                                    <iconify-icon
                                                                        icon="solar:trash-bin-minimalistic-2-broken"
                                                                        class="align-middle fs-18"></iconify-icon>
                                                                </a>
                                                            @endif
                                                            <!-- DELETE SERVICE -->

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
