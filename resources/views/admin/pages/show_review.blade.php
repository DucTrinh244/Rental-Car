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
                            <h4 class="card-title flex-grow-1">Tất cả các đánh giá </h4>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th>Họ và tên</th>
                                            <th>Gmail </th>
                                            <th>Số sao</th>
                                            <th>Nội dung đánh giá</th>
                                            <th>Hiển thị</th>
                                            <th>Hoạt động </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($reviews->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">
                                                    Không có đánh giá nào để hiển thị.
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($reviews as $review_item)
                                                <tr>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $review_item->name }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $review_item->email }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $review_item->rating }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="text-dark fw-medium fs-15 mb-0">
                                                            {{ $review_item->comment }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        @if ($review_item->status == 0)
                                                            <a href="{{ URL::to('active-review/' . $review_item->id) }}"
                                                                class="btn btn-light btn-sm">
                                                                <iconify-icon icon="solar:eye-broken"
                                                                    class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                        @else
                                                            <a href="{{ URL::to('unactive-review/' . $review_item->id) }}"
                                                                class="btn btn-primary btn-sm">
                                                                <iconify-icon icon="solar:eye-broken"
                                                                    class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="javascript:void(0)"
                                                                data-url="{{ URL::to('delete-review/' . $review_item->id) }}"
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
