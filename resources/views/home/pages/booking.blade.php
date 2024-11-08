<x-home-layout>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-name: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Booking</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Booking</li>
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
                        <p class="contact-page__text">It has survived not only five centuries, but also the leap into
                            electronic typesetting unchanged. It was popularised in the sheets.</p>
                        <div class="contact-page__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <form action="{{ route('bookings.store') }}" method="POST"
                            class="comment-one__form contact-form-validated" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                    @error('email')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone Number" name="phone" required>
                                    </div>
                                    @error('phone')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>

                                <!-- Clothing Item and Quantity Section -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <select class="w-full h-[60px] bg-[#f2f5f8]" name="item" required>
                                            <option value="">Select Item</option>
                                            <option value="shirt">Shirt</option>
                                            <option value="trousers">Trousers</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    @error('item')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input class="w-full h-[60px] bg-[#f2f5f8]" type="number" min="1" placeholder="Quantity" name="quantity"
                                            required>
                                    </div>
                                    @error('quantity')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>

                                <!-- Service Type Section -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <select class="w-full h-[60px] bg-[#f2f5f8]" name="service_type" required>
                                            <option value="">Select Service</option>
                                            <option value="wash">Wash</option>
                                            <option value="iron">Iron</option>
                                            <option value="both">Wash & Iron</option>
                                        </select>
                                    </div>
                                    @error('service_type')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>

                                <!-- Optional Pickup and Delivery Dates -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <label for="pickup_date">Pickup Date</label>
                                        <input class="w-full h-[60px] bg-[#f2f5f8]" type="date" placeholder="Pickup Date" name="pickup_date">
                                    </div>
                                    @error('pickup_date')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <label for="delivery_date">Delivery Date</label>
                                        <input class="w-full h-[60px] bg-[#f2f5f8]" type="date" placeholder="Delivery Date" name="delivery_date">
                                    </div>
                                    @error('delivery_date')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Book Now<span
                                                class="icon-right-arrow"></span></button>
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
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
                        <a href="tel:6668880000" class="contact-info__number-1">666 888 0000</a>
                        <a href="tel:926668888000" class="contact-info__number-2">+ 92 666 8888 000</a>
                    </p>
                </li>
                <li class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-email"></span>
                    </div>
                    <p>
                        <a href="mailto:info@company.com" class="contact-info__mail-1">info@company.com</a>
                        <a href="mailto:info@company.com" class="contact-info__mail-2">needhelp@company.com</a>
                    </p>
                </li>
                <li class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-pin"></span>
                    </div>
                    <p> 66 broklyn golden street <br> 600 New york. USA</p>
                </li>
            </ul>
        </div>
    </section>
    <!--Contact Info End-->
</x-home-layout>
