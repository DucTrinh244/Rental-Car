@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    @if ($image_contact != null)
        @php
            $contactImage = asset($image_contact->image_path);
        @endphp
    @endif

    <section class="banner-header middle-height section-padding bg-img" data-overlay-dark="6"
        data-background="{{ $contactImage ?? asset('public/FrontEnd/img/slider/4.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Giữ liên lạc</h6>
                        <h1>Liên hệ cho <span>tôi</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Box -->
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-envelope"></span>
                        <h5>Email</h5>
                        <p>{{ $user->email }}</p> <i class="numb omfi-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-location"></span>
                        <h5>Địa chỉ của tôi</h5>
                        <p> {{ $user->address }}</p> <i class="numb omfi-location"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon ti-time"></span>
                        <h5>Giờ hoạt động</h5>
                        <p>24/7 - Nhu cầu sử dụng</p> <i class="numb ti-time"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-phone"></span>
                        <h5>Điện cho tôi</h5>
                        <p>{{ $user->phone_number }}</p> <i class="numb omfi-phone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="form-box">
                        <h5>Gửi cho tôi</h5>
                        <form id="contactForm" method="post" class="contact__form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input id="name" name="name" type="text" placeholder="Tên của bạn *"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input id="email" name="email" type="email" placeholder="Email của bạn *"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input id="phone" name="phone" type="text"
                                        placeholder="Số điện thoại của bạn *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input id="subject" name="subject" type="text" placeholder="Chủ đề *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea id="message" name="message" cols="30" rows="4" placeholder="Tin nhắn *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button id="submitBtn" type="button" class="booking-button">Gửi tin nhắn</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
                <!-- Map -->
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <h5>Vị Trí</h5>
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.1825173142056!2d107.25017041176612!3d16.76759263395102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140e38f8e73f7c5%3A0x1723f99c5d136054!2zWHXDom4gVGFtIE3hu7k!5e0!3m2!1svi!2s!4v1739039239220!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submitBtn").click(function() {
                var formData = {
                    _token: "{{ csrf_token() }}",
                    name: $("#name").val(),
                    email: $("#email").val(),
                    phone: $("#phone").val(),
                    subject: $("#subject").val(),
                    message: $("#message").val()
                };

                $("#submitBtn").text("Đang gửi...").prop("disabled", true);

                $.ajax({
                    url: "{{ route('send.email') }}", // Route Laravel xử lý gửi mail
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Thành công!",
                                text: response.message,
                                confirmButtonText: "OK"
                            }).then(() => {
                                $("#contactForm")[0]
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

                        if (errors) {
                            $.each(errors, function(key, value) {
                                errorMessage += value[0] + "\n";
                            });
                        } else {
                            errorMessage = "Đã xảy ra lỗi, vui lòng thử lại!";
                        }

                        Swal.fire({
                            icon: "error",
                            title: "Lỗi!",
                            text: errorMessage,
                            confirmButtonText: "OK"
                        });
                    },
                    complete: function() {
                        $("#submitBtn").text("Gửi tin nhắn").prop("disabled", false);
                    }
                });
            });
        });
    </script>
@endsection
