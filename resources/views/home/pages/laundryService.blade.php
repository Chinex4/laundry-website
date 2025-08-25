<x-home-layout>

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Laundry Service</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><span>/</span></li>
                    <li class="active">Laundry Service</li>
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
                                <li><a href="{{route('dryCleaning')}}">Dry Cleaning <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{route('uphostery')}}">Steam Iron <span class="icon-right-arrow"></span></a></li>
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
                            <a href="{{route('booking')}}" class="thm-btn service-details__download-btn">
                                Book our services <span class="icon-right-arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="/template/laundry/assets/images/services/service-details-img-3.jpg" alt="">
                            <div class="service-details__icon">
                                <span class="icon-steam-iron"></span>
                            </div>
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details-content__title">Laundry Service</h3>
                            <p class="service-details__text-1">
                                Our laundry service is designed to save you time while giving your clothes the best care possible.
                                We handle everything from everyday wear to delicate fabrics, ensuring each item is washed, dried,
                                and neatly folded with professional attention. Whether it’s weekly laundry, uniforms, or special
                                garments, we deliver fresh, clean, and ready-to-wear results.
                            </p>
                            <p class="service-details__text-2">
                                With advanced cleaning techniques and quality detergents, we maintain the color, texture, and
                                longevity of your clothes. From pickup to delivery, we make the entire process hassle-free,
                                reliable, and affordable — giving you one less chore to worry about.
                            </p>
                            <ul class="list-unstyled service-details__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="text">
                                        <p>Professional care for all fabric types, including delicates and everyday wear.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="text">
                                        <p>Convenient pickup and delivery service to fit your busy schedule.</p>
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
                                            Choosing our laundry service means convenience, reliability, and quality care every time.
                                        </p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon"><i class="fa fa-check"></i></div>
                                                <div class="text"><p>Gentle washing methods that protect fabric quality</p></div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fa fa-check"></i></div>
                                                <div class="text"><p>Fast turnaround with doorstep pickup & delivery</p></div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fa fa-check"></i></div>
                                                <div class="text"><p>Affordable pricing with no hidden charges</p></div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fa fa-check"></i></div>
                                                <div class="text"><p>Eco-friendly detergents safe for skin & environment</p></div>
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
                                        <h4>How do I schedule a laundry service?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>You can place an order by calling us, booking online, or visiting our outlet. We also offer pickup and delivery for your convenience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How are charges calculated?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our prices are based on the type of garment and cleaning method required. We offer transparent and affordable rates with no hidden fees.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>Do you handle delicate or special fabrics?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, we use specialized techniques for delicate fabrics such as silk, wool, and designer wear to preserve their quality and longevity.</p>
                                        </div>
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
