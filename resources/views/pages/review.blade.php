@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header middle-height section-padding bg-img" data-overlay-dark="6"
        data-background="{{ asset('public/FrontEnd/img/slider/4.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Đánh giá</h6>
                        <h1>Gửi tôi <span>đánh giá</span> của bạn </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="form-box">
                        <h5>Gửi cho tôi đánh giá</h5>
                        <form method="post" class="contact__form" action="#">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Tên của bạn *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Email của bạn *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="comment" cols="20" rows="5" placeholder="Nhập nội dung đánh giá *" required></textarea>
                                </div>
                                <div class="col-md-12 form-group">
                                    <select name="rating" id="rating" class="select2 select" required>
                                        <option value="5">⭐️⭐️⭐️⭐️⭐️ - Tuyệt vời</option>
                                        <option value="4">⭐️⭐️⭐️⭐️ - Tốt</option>
                                        <option value="3">⭐️⭐️⭐️ - Trung bình</option>
                                        <option value="2">⭐️⭐️ - Kém</option>
                                        <option value="1">⭐️ - Rất tệ</option>
                                    </select>
                                </div>

                                <div class="col-md-12 text-center mt-30">
                                    <input name="submit" type="submit" value="Gửi Đánh giá" class="btn btn-primary"
                                        id="submit-review">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submit-review').click(function(event) {
                event.preventDefault(); // Ngăn chặn tải lại trang

                $.ajax({
                    url: "{{ route('review.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: $('input[name="name"]').val(),
                        email: $('input[name="email"]').val(),
                        comment: $('textarea[name="comment"]').val(),
                        rating: $('select[name="rating"]').val()
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Thành công!",
                                text: response.message,
                                confirmButtonText: "OK"
                            }).then(() => {
                                $(".contact__form")[0]
                                    .reset(); // Reset form sau khi gửi thành công
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi!",
                                text: response.message,
                                confirmButtonText: "Thử lại"
                            });
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = "";
                        $.each(errors, function(key, value) {
                            errorMessage += value[0] + "\n";
                        });

                        Swal.fire({
                            icon: "error",
                            title: "Lỗi!",
                            text: errorMessage,
                            confirmButtonText: "OK"
                        });
                    }
                });
            });
        });
    </script>
@endsection
