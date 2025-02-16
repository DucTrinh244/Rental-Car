@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header middle-height section-padding bg-img" data-overlay-dark="6" data-background="{{asset('public/FrontEnd/img/slider/4.jpg')}}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Giữ liên lạc</h6>
                        <h1>Liên hệ cho  <span>tôi</span></h1>
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
                        <p>hoangducnhi2010@gmail.com</p> <i class="numb omfi-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon omfi-location"></span>
                        <h5>Địa chỉ của tôi</h5>
                        <p> Triệu Phong, Quảng Trị </p> <i class="numb omfi-location"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item"> <span class="icon ti-time"></span>
                        <h5>Giờ hoạt động</h5>
                        <p>24/7 - Nhu cầu sử dụng</p> <i class="numb ti-time"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item active"> <span class="icon omfi-phone"></span>
                        <h5>Điện cho tôi</h5>
                        <p>0977208973</p> <i class="numb omfi-phone"></i>
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
                        <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/renax/dark/mail.php">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Tin nhắn của bạn đã gửi thành công! </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Tên của bạn *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Email của bạn *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Số điện thoại của bạn *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Chủ đề *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Tin nhắn *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Gửi tin nhắn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map -->
                <div class="col-lg-5 offset-lg-1 col-md-12">
                    <h5>Vị Trí</h5>
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.1825173142056!2d107.25017041176612!3d16.76759263395102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140e38f8e73f7c5%3A0x1723f99c5d136054!2zWHXDom4gVGFtIE3hu7k!5e0!3m2!1svi!2s!4v1739039239220!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Talk -->
    <section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="6" data-background="{{asset('public/FrontEnd/img/slider/3.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Rent Your Car</h6>
                    <h5>Interested in Renting?</h5>
                    <p>Don't hesitate and send us a message.</p> <a href="tel:+8001234567" class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/1.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/2.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/3.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/4.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/5.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/6.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/7.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('public/FrontEnd/img/clients/8.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection