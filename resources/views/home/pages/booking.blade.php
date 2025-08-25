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
    <span class="section-title__tagline">Book a Service</span>
    <h2 class="section-title__title">Schedule Your Cleaning Today</h2>
</div>
<p class="contact-page__text">
    Booking a service is quick and easy. Simply choose the service you need,
    pick a convenient time, and let our team handle the rest.
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2892511683012!2d6.672051575658755!3d6.225541093762545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f3c79f76966f%3A0x8e93ef0643fb425e!2sElite%20Wash%20Laundry%20%26%20Super%20Dry%20Cleaning!5e0!3m2!1sen!2sng!4v1755804570330!5m2!1sen!2sng"
                    class="contact-page-google-map__one" allowfullscreen>

            </iframe>
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

                    </p>
                </li>
                <li class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-email"></span>
                    </div>
                    <p>
                        <a href="mailto:elitewashlaundryng@gmail.com" class="contact-info__mail-1">elitewashlaundryng@gmail.com</a>

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
