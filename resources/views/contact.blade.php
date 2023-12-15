@extends('layouts.master')
@section('content')


<main>

    <div class="vline tline"></div>


    <!-- ==================== Start Slider ==================== -->

    <header class="pg-header style2 bg-img parallaxie valign" data-background="/img/contactqqp.jpg" data-overlay-dark="6">
        <div class="container-xxl ontop">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <div class="cont mb-80">
                        <h6 class="sub-title"><a href="{{ route('home') }}">Home</a> <span class="ml-20 mr-20">/</span>
                            <span class="main-color">Contact</span>
                        </h6>
                        <h1 class="fw-800 fz-70">Contact Us .</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="curve">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 0 0 C15 120 35 120 100 0 L 100 100 Z" fill="#191b1d"></path>
            </svg>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Contact ==================== -->

    <section class="contact section-padding">
        <div class="container-xxl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form md-mb50">

                        <h3 class="fw-700 mb-50">Get In Touch.</h3>
                        <form method="POST" id="contact-form" action="{{ route('contact_path') }}" accept-charset="utf-8">
                            @csrf
                            <div class="messages"></div>

                            <div class="controls">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="sm-mb30">
                                                <input id="form_name" type="text" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <input id="form_email" type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Message" rows="4" required></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                    <input type="hidden" class="hiddenRecaptcha required show-error-msg" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                </div>

                                <button type="submit" class="sub-title mb-0 mt-30"><span>Send
                                        Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="cont-info">
                        <h3 class="fw-700 mb-50">Contact Info.</h3>

                        <div class="item pb-30 mb-40 bord-thin-bottom">
                            <h6 class="mb-15"><a href="mailto:info@qqp-lb.com" target="_blank">info@qqp-lb.com</a></h6>
                            <h6><a href="tel:+96101694944" target="_blank">+961 1 69 49 44</a></h6>
                            <h6><a href="tel:+9613554426" target="_blank">+961 3 55 44 26</a></h6>
                        </div>

                        <div class="item pb-30 bord-thin-bottom">
                            <h6>Beirut | Lebanon</h6>
                        </div>

                        <div class="social fz-13 mt-50">
                            <a href="https://www.facebook.com/quickqualityprint/" class="icon" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/quickqualityprint?igshid=MzRlODBiNWFlZA==" class="icon" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.tiktok.com/@qqpsarl" class="icon" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->



    <!-- ==================== Start map ==================== -->

    <div>
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.8531651014396!2d35.537925588713584!3d33.867674858433226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17a07c14ad75%3A0xe6b1ce63d11763!2squick%20quality%20print!5e0!3m2!1sen!2sus!4v1689667909671!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- ==================== End map ==================== -->

</main>
@endsection