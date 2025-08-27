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

  <!-- Senators -->
  <optgroup label="Senators">
    <option value="colour-senator-drycleaning">Colour senator drycleaning - ₦2,999</option>
    <option value="colour-senator-ironing">Colour senator Ironing - ₦1,500</option>
    <option value="white-senator">White senator - ₦3,299</option>
    <option value="white-senator-ironing">White senator Ironing - ₦1,550</option>
  </optgroup>

  <!-- Skirts & Blouses -->
  <optgroup label="Skirts & Blouses">
    <option value="skirt-drycleaning">Skirt drycleaning - ₦900</option>
    <option value="skirt-and-blouse">Skirt and blouse - ₦2,000</option>
    <option value="jean-skirt">Jean skirt - ₦1,000</option>
    <option value="jean-skirt-long">Jean skirt long - ₦1,500</option>
    <option value="long-skirt-drycleaning">Long skirt Drycleaning - ₦1,000</option>
    <option value="skirt-ironing">Skirt ironing - ₦450</option>
  </optgroup>

  <!-- Jeans -->
  <optgroup label="Jeans">
    <option value="jean-drycleaning">Jean Drycleaning - ₦1,500</option>
    <option value="jean-express">Jean express - ₦3,000</option>
    <option value="jean-ironing">Jean ironing - ₦750</option>
    <option value="white-jean">White jean - ₦2,000</option>
    <option value="white-jean-express">White jean express - ₦4,000</option>
    <option value="white-jean-ironing">White jean ironing - ₦1,000</option>
    <option value="jean-with-stone">Jean with stone - ₦1,800</option>
    <option value="jean-with-stone-ironing">Jean with stone ironing - ₦900</option>
    <option value="short-jean-drycleaning">Short jean Drycleaning - ₦1,000</option>
    <option value="short-jean-ironing">Short jean ironing - ₦500</option>
    <option value="short-jean-with-stone">Short jean with stone - ₦1,300</option>
    <option value="short-jean-with-stone-ironing">Short jean with stone ironing - ₦650</option>
    <option value="jean-jacket-drycleaning">Jean jacket drycleaning - ₦2,000</option>
    <option value="jean-jacket-ironing">Jean jacket ironing - ₦1,000</option>
  </optgroup>

  <!-- Gowns -->
  <optgroup label="Gowns">
    <option value="long-gown-drycleaning">Long gown drycleaning - ₦2,200</option>
    <option value="long-gown-with-stone">Long gown with stone - ₦3,000</option>
    <option value="long-gown-with-bead-stone">Long gown with bead & stone - ₦6,000</option>
    <option value="white-long-gown">White long gown - ₦2,500</option>
    <option value="white-long-with-stone-drycleaning">White long with stone Drycleaning - ₦4,000</option>
    <option value="short-gown">Short gown - ₦1,900</option>
    <option value="short-gown-ironing">Short gown ironing - ₦1,000</option>
    <option value="short-gown-white">Short gown white - ₦3,600</option>
    <option value="short-gown-with-stone">Short gown with stone - ₦2,300</option>
    <option value="short-gown-white-with-stone">Short gown white with stone - ₦2,500</option>
    <option value="short-gown-for-kids">Short gown for kids - ₦800</option>
  </optgroup>

  <!-- Duvets & Bedding -->
  <optgroup label="Duvets & Bedding">
    <option value="big-duvet">Big Duvet - ₦4,000</option>
    <option value="white-big-duvet">White big Duvet - ₦5,000</option>
    <option value="medium-duvet">Medium Duvet - ₦3,000</option>
    <option value="white-medium-duvet">White medium Duvet - ₦4,000</option>
    <option value="small-duvet">Small duvet - ₦2,000</option>
    <option value="white-small-duvet">White small duvet - ₦3,000</option>
    <option value="bedcover">Bedcover - ₦1,500</option>
    <option value="blanket">Blanket - ₦1,500</option>
  </optgroup>

  <!-- Towels -->
  <optgroup label="Towels">
    <option value="big-towel">Big towel - ₦2,500</option>
    <option value="white-big-towel">White big towel - ₦3,000</option>
    <option value="medium-towel">Medium towel - ₦2,000</option>
    <option value="medium-white-towel">Medium white towel - ₦3,000</option>
    <option value="small-towel">Small towel - ₦1,200</option>
    <option value="small-white-towel">Small white towel - ₦1,400</option>
  </optgroup>

  <!-- Jumpsuits & Jumpers -->
  <optgroup label="Jumpsuits & Jumpers">
    <option value="jumpsuit-drycleaning">Jumpsuit drycleaning - ₦2,000</option>
    <option value="jumpsuit-ironing">Jumpsuit ironing - ₦1,000</option>
    <option value="jumpsuit-washing">Jumpsuit washing - ₦1,000</option>
    <option value="jumper-drycleaning">Jumper Drycleaning - ₦1,500</option>
    <option value="jumper-ironing">Jumper ironing - ₦750</option>
    <option value="jumper-express">Jumper Express - ₦3,000</option>
    <option value="jumper-for-kids">Jumper for kids - ₦1,000</option>
  </optgroup>

  <!-- Suits -->
  <optgroup label="Suits">
    <option value="ladies-suit">Ladies suit - ₦1,500</option>
    <option value="women-2pcs-suit-pure-drycleaning">Women 2 pcs suit (pure drycleaning) - ₦2,600</option>
    <option value="women-2pcs-pure-drycleaning">Women 2 pcs (pure drycleaning) - ₦2,600</option>
    <option value="men-2pcs-suit-drycleaning">Men 2 pcs suit drycleaning - ₦4,000</option>
    <option value="men-2pcs-ironing">Men 2 pcs ironing - ₦2,000</option>
    <option value="men-3pcs-suit-pure-drycleaning">Men 3 pcs suit (pure drycleaning) - ₦5,000</option>
    <option value="men-3pcs-suit-ironing">Men 3 pcs suit ironing - ₦2,500</option>
  </optgroup>

  <!-- Shirts -->
  <optgroup label="Shirts">
    <option value="white-shirt">White shirt - ₦1,799</option>
    <option value="white-shirt-ironing">White shirt ironing - ₦900</option>
    <option value="colour-shirt">Colour shirt - ₦1,499</option>
    <option value="colour-shirt-ironing">Colour shirt ironing - ₦750</option>
    <option value="white-tshirt">White t-shirt - ₦1,100</option>
    <option value="white-tshirt-ironing">White t-shirt ironing - ₦550</option>
    <option value="colour-tshirt">Colour t-shirt - ₦1,050</option>
    <option value="colour-tshirt-ironing">Colour t-shirt ironing - ₦550</option>
  </optgroup>

  <!-- Jalabias -->
  <optgroup label="Jalabias">
    <option value="jalabia">Jalabia - ₦2,499</option>
    <option value="jalabia-ironing">Jalabia ironing - ₦1,250</option>
    <option value="white-jalabia">White jalabia - ₦2,799</option>
    <option value="white-jalabia-ironing">White jalabia ironing - ₦1,400</option>
  </optgroup>

  <!-- Trousers -->
  <optgroup label="Trousers">
    <option value="trouser-drycleaning">Trouser drycleaning - ₦1,300</option>
    <option value="trouser-ironing">Trouser ironing - ₦650</option>
    <option value="white-trouser">White trouser - ₦1,800</option>
    <option value="white-trouser-ironing">White trouser ironing - ₦900</option>
    <option value="leather-trouser-drycleaning">Leather trouser drycleaning - ₦1,500</option>
    <option value="trouser-for-kids-drycleaning">Trouser for kids drycleaning - ₦800</option>
    <option value="short">Short - ₦800</option>
  </optgroup>

  <!-- Miscellaneous -->
  <optgroup label="Miscellaneous">
    <option value="female-top-drycleaning">Female top drycleaning - ₦999</option>
    <option value="female-top-ironing">Female top ironing - ₦500</option>
    <option value="complete-foot-march-set">Complete foot march set - ₦6,500</option>
    <option value="waist-coat">Waist coat - ₦1,000</option>
    <option value="waist-trainer">Waist trainer - ₦1,000</option>
    <option value="mens-shoes-express">Men's shoes express - ₦4,000</option>
    <option value="bath-rope-express">Bath rope express - ₦4,000</option>
    <option value="handkerchief">Handkerchief - ₦500</option>
    <option value="handkerchief-for-kids">Handkerchief for kids - ₦500</option>
    <option value="female-underwear">Female underwear - ₦900</option>
    <option value="underwear-for-kids">Underwear for kids - ₦500</option>
    <option value="hand-gloves">Hand gloves - ₦500</option>
    <option value="overall-for-kids">Overall for kids - ₦800</option>
    <option value="singlet">Singlet - ₦450</option>
    <option value="complete-national-dress-pure-drycleaning">Complete national dress (pure drycleaning) - ₦5,000</option>
    <option value="complete-national-dress-drycleaning">Complete national dress drycleaning - ₦3,500</option>
    <option value="complete-national-dress-with-cap">Complete national dress with cap - ₦4,000</option>
    <option value="complete-national-dress-white">Complete national dress white - ₦4,000</option>
    <option value="kaftan">Kaftan - ₦2,000</option>
    <option value="kaftans-for-kids-drycleaning">Kaftans for kids drycleaning - ₦1,000</option>
    <option value="kaftans-for-kids-ironing">Kaftans for kids ironing - ₦500</option>
  </optgroup>


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
