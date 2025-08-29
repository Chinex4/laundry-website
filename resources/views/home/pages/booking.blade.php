<x-home-layout>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
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
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=%2B2347035151099"><i class="fab fa-whatsapp"></i></a>
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
                                <!-- Name -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <!-- Email -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                    @error('email') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <!-- Phone -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone Number" name="phone" required>
                                    </div>
                                    @error('phone') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <!-- Item + Quantity -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <select id="item" class="w-full h-[60px] bg-[#f2f5f8]" name="item" required>
                                            <option value="">Select Item</option>

                                            <!-- Example with data-price -->
                                            <optgroup label="Senators">
                                                <option value="colour-senator-drycleaning" data-price="2999">Colour senator drycleaning - ₦2,999</option>
                                                <option value="colour-senator-ironing" data-price="1500">Colour senator Ironing - ₦1,500</option>
                                                <option value="white-senator" data-price="3299">White senator - ₦3,299</option>
                                                <option value="white-senator-ironing" data-price="1550">White senator Ironing - ₦1,550</option>
                                            </optgroup>

                                            <optgroup label="Shirts">
                                                <option value="white-shirt" data-price="1799">White shirt - ₦1,799</option>
                                                <option value="white-shirt-ironing" data-price="900">White shirt ironing - ₦900</option>
                                                <option value="colour-shirt" data-price="1499">Colour shirt - ₦1,499</option>
                                                <option value="colour-shirt-ironing" data-price="750">Colour shirt ironing - ₦750</option>
                                                <option value="white-tshirt" data-price="1100">White t-shirt - ₦1,100</option>
                                                <option value="white-tshirt-ironing" data-price="550">White t-shirt ironing - ₦550</option>
                                                <option value="colour-tshirt" data-price="1050">Colour t-shirt - ₦1,050</option>
                                                <option value="colour-tshirt-ironing" data-price="550">Colour t-shirt ironing - ₦550</option>
                                            </optgroup>

                                            <!-- ✅ Do the same (add data-price) for all other categories -->
                                        </select>
                                    </div>
                                    @error('item') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <!-- Quantity + Amount -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <input type="number" id="quantity" placeholder="Quantity" name="quantity"
                                            class="w-full h-[60px] bg-[#f2f5f8]" min="1" value="1" required>
                                        
                                        <!-- hidden numeric value for DB -->
                                        <input type="hidden" id="amount" name="amount" value="{{ old('amount') }}">
                                        
                                        <!-- display formatted amount for user -->
                                        <input type="text" id="amount_display" class="form-control bg-[#f2f5f8]" readonly>
                                    </div>
                                    @error('quantity') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <!-- Service Type -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <select class="w-full h-[60px] bg-[#f2f5f8]" name="service_type" required>
                                            <option value="">Select Service</option>
                                            <option value="wash">Wash</option>
                                            <option value="iron">Iron</option>
                                            <option value="both">Wash & Iron</option>
                                        </select>
                                    </div>
                                    @error('service_type') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <!-- Pickup Date -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <label for="pickup_date">Pickup Date</label>
                                        <input class="w-full h-[60px] bg-[#f2f5f8]" type="date"
                                            placeholder="Pickup Date" name="pickup_date">
                                    </div>
                                    @error('pickup_date') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <!-- Delivery Date -->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="comment-form__input-box">
                                        <label for="delivery_date">Delivery Date</label>
                                        <input class="w-full h-[60px] bg-[#f2f5f8]" type="date"
                                            placeholder="Delivery Date" name="delivery_date">
                                    </div>
                                    @error('delivery_date') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Book Now<span class="icon-right-arrow"></span></button>
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

    <!-- JS for Auto Amount Calculation -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const itemSelect = document.getElementById("item");
            const quantityInput = document.getElementById("quantity");
            const amountInput = document.getElementById("amount"); // hidden numeric input
            const amountDisplay = document.getElementById("amount_display"); // visible

            function calculateAmount() {
                const selectedOption = itemSelect.options[itemSelect.selectedIndex];
                const price = parseInt(selectedOption.getAttribute("data-price")) || 0;
                const quantity = parseInt(quantityInput.value) || 1;
                const total = price * quantity;

                amountInput.value = total; // numeric value for DB
                amountDisplay.value = "₦" + total.toLocaleString(); // formatted for user
            }

            itemSelect.addEventListener("change", calculateAmount);
            quantityInput.addEventListener("input", calculateAmount);

            calculateAmount(); // run once at load
        });
    </script>
</x-home-layout>
