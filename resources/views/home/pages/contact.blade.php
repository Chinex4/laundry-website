<x-home-layout>
            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header-bg" style="background-image: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <h2>Contact</h2>
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><span>/</span></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Contact Page Start-->
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="contact-page__left">
                                <div class="text-left section-title">
                                    <span class="section-title__tagline">Get in Touch</span>
                                    <h2 class="section-title__title">Don’t Hesitate to Contact</h2>
                                </div>
                                <p class="contact-page__text">
    Have questions or need assistance with your laundry? Our team is always ready to help.
    Reach out today for quick support and reliable service.
</p>
                                <div class="contact-page__social">
                                    <a target="_blank" href="https://x.com/Elitewashasaba"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://web.facebook.com/profile.php?id=61564914060602"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=%2B2347035151099&context=AffKGU4JF9avvMnGr27K0QXL3l_agIQM_vBLcQasa6PKxSUYlamaNNcNAuUUhtXLcGNERY3whgJmAS8mnHpGOkRhI8A52F8uSw2R88JnFPMla4wY5fLpyUM_rufvUmPi8efnegsCmXynhFX_RUYIy7C9xA&source=FB_Page&app=facebook&entry_point=page_cta"><i class="fab fa-whatsapp"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/elitewashlaundryng/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="contact-page__right">
                                <form action="/template/laundry/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone Number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a Message<span class="icon-right-arrow"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contact Page End-->

            <!--Contact page Google Map Start-->
            <section class="contact-page-google-map">
                <div class="contact-page-google-map__inner">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2892511683012!2d6.672051575658755!3d6.225541093762545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f3c79f76966f%3A0x8e93ef0643fb425e!2sElite%20Wash%20Laundry%20%26%20Super%20Dry%20Cleaning!5e0!3m2!1sen!2sng!4v1755804570330!5m2!1sen!2sng"
                    class="contact-page-google-map__one" allowfullscreen></iframe>
                </div>
            </section>
            <!--Contact page Google Map End-->

            <!--Contact Info Start-->
            <section class="contact-info">
                <div class="container">
                    <ul class="list-unstyled contact-info__list">
                        <li class="contact-info__single">
                            <div class="contact-info__icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <p>
                                <a href="tel:07035151099" class="contact-info__number-1">07035151099</a>
                                {{-- <a href="tel:07035151099" class="contact-info__number-2">+ 92 666 8888 000</a> --}}
                            </p>
                        </li>
                        <li class="contact-info__single">
                            <div class="contact-info__icon">
                                <span class="icon-email"></span>
                            </div>
                            <p>
                                <a href="elitewashlaundryng@gmail.com" class="contact-info__mail-1">elitewashlaundryng@gmail.com</a>
                                {{-- <a href="elitewashlaundryng@gmail.com" class="contact-info__mail-2">elitewashlaundryng@gmail.com</a> --}}
                            </p>
                        </li>
                        <li class="contact-info__single">
                            <div class="contact-info__icon">
                                <span class="icon-pin"></span>
                            </div>
                            <p> La Jonic mall, Okpanam Road<br> Asaba, Delta State.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <!--Contact Info End-->
</x-home-layout>
