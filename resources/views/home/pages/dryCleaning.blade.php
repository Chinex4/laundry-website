<x-home-layout>

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Dry Cleaning</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><span>/</span></li>
                    <li class="active">Dry Cleaning</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__left">
                        <div class="service-details__category">
                            <h3 class="service-details__title">Categories</h3>
                            <ul class="service-details__category-list list-unstyled">
                                <li><a href="{{route('dryCleaning')}}">Dry Cleaning <span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="{{route('uphostery')}}">Uphostery <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{route('laundryService')}}">Laundry Service <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{route('stainRemoval')}}">Stain Removal <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{route('industrialCleaning')}}">Industrial Cleaning <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{route('houseCleaning')}}">House Cleaning <span class="icon-right-arrow"></span></a></li>
                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg" style="background-image: url(/template/laundry/assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2 class="service-details__need-help-title">Order Service <br> Right Now</h2>
                            <div class="service-details__need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:07035151099">07035151099</a>
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="{{route('about')}}" class="thm-btn service-details__download-btn">Download Our Flyers <span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="/template/laundry/assets/images/services/imgbox-inner__img03.jpg" alt="">
                            <div class="service-details__icon">
                                <span class="icon-steam-iron"></span>
                            </div>
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details-content__title">Dry Cleaning</h3>
                            <p class="service-details__text-1">
                                Our professional dry cleaning service ensures your garments receive the best care possible.
                                Using advanced cleaning technology and eco-friendly solvents, we gently remove stains, dirt, and odors
                                while preserving the fabric’s color, texture, and quality. From everyday wear to delicate fabrics,
                                we handle your clothes with precision and care.
                            </p>
                            <p class="service-details__text-2">
                                Whether it’s business suits, evening gowns, traditional attire, or special fabrics that require
                                extra attention, our dry cleaning experts guarantee freshness and a like-new finish.
                                With quick turnaround times and high-quality results, we make sure you look your best without the hassle.
                            </p>
                            <ul class="list-unstyled service-details__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="text">
                                        <p>Eco-friendly dry cleaning methods that are gentle on fabrics and safe for the environment.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="text">
                                        <p>Professional stain removal to restore garments to their original condition.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-details__benefits">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-img">
                                        <img src="/template/laundry/assets/images/services/service-details-benefits-img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-right">
                                        <h3 class="service-details__benefits-title">Our Benefits</h3>
                                        <p class="service-betails__benefits-text-1">
                                            Choosing our dry cleaning service means convenience, reliability, and guaranteed freshness.
                                        </p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Gentle care for delicate fabrics</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Advanced stain and odor removal</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Fast and reliable turnaround</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Eco-friendly cleaning solutions</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__faq">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to Order for Dry Cleaning Service?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Simply place your order online or give us a call. We offer pick-up and delivery services for your convenience. Once we receive your garments, our team will inspect, clean, and return them fresh and ready to wear.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>What are the Charges for Curtain Washing?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our curtain washing prices depend on the size, fabric, and type of curtains. Contact us directly for a detailed quotation tailored to your needs.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>Do You Offer Express Dry Cleaning?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we provide express dry cleaning for urgent needs. With our same-day or next-day service options, you can have your garments cleaned and ready in no time.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->
</x-home-layout>
