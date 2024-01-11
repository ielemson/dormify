@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<div id="whatwedo"  class="advantege-work-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="advantege-img" style="background-image: url(dormify/assets/img/bg/businesstech/shape-02.png)"></div>
        <div class="advantege-img-02" style="background-image: url(dormify/assets/img/bg/businesstech/shape-01.png)"></div>
        <div class="row">
            <div class="col-lg-9">
                <div class="content">
                    <div class="section-title padding-bottom-50">
                        <h4 class="title wow animate__animated animate__fadeInUp animated">What we do </h4>
                        <p class="wow animate__animated animate__fadeInUp animated">Discover Your Perfect Student Accommodation with Dormify
                            At Dormify, we understand that finding the right student accommodation can be a daunting task. That's why we've crafted a unique solution that empowers you to search smarter and find your perfect haven. Our mission is to simplify the process, eliminate guesswork, and ensure you land in the ideal accommodation that suits your needs and preferences.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-icon-box-09">
                    <div class="content">
                        <h4 class="title">Effortless Search</h4>
                        <p>Simplify your hunt for student accommodations using our intuitive platform.</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-icon-box-09">
                    <div class="content">
                        <h4 class="title">Tailored Matches</h4>
                        <p> Personalized options that match your needs, location, and lifestyle.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-icon-box-09">
                    <div class="content">
                        <h4 class="title">Trustworthy Partnerships</h4>
                        <p>Collaborating with universities for reliable and verified accommodations.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="batter-work-area bg-image padding-bottom-200 padding-top-200" style="background-image: url(dormify/assets/img/bg/businesstech/bg-02.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title desktop-center padding-bottom-50 wow animate__animated animate__fadeInUp animated">
                    <h4 class="title">Everything you need to do better work</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="work-single-item-04">
                    <div class="icon-wrap">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title">Real Time Collaboration</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="work-single-item-04">
                    <div class="icon-wrap">
                        <div class="icon">
                            <i class="flaticon-monitor-1"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title">Infinite canvas</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="work-single-item-04">
                    <div class="icon-wrap">
                        <div class="icon">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title">Integration for workflow</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="work-single-item-04">
                    <div class="icon-wrap">
                        <div class="icon">
                            <i class="fas fa-server"></i>
                        </div>
                    </div>
                    <div class="content">
                        <h4 class="title">Enterprise grade security</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-wrapper desktop-center padding-top-50 wow animate__animated animate__fadeInUp animated">
            <a href="#" class="boxed-btn btn-work">Try it For 7 Days Free</a>
        </div>
    </div>
</div> --}}

{{-- <div id="enterprice" class="enterprice-ready-area padding-bottom-120 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="enterprice-image wow animate__animated animate__backInDown bg-image" data-parallax="{&quot;x&quot;: -100, &quot;y&quot;: 0}" style="background-image: url(dormify/assets/img/bg/businesstech/01.png);"></div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="section-title padding-bottom-25">
                    <h4 class="title wow animate__animated animate__fadeInUp">Enterprise-ready security and advanced administration controls</h4>
                    <p class=" wow animate__animated animate__fadeInUp animated">Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the development</p>
                    <div class="btn-wrapper padding-top-50 wow animate__animated animate__fadeInUp animated">
                        <a href="#" class="boxed-btn btn-work">Learn More About Ximas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="enterprice-ready-area style-01">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-title margin-bottom-60">
                    <h4 class="title wow animate__animated animate__fadeInUp">Enterprise-ready security and advanced administration controls</h4>
                    <p class=" wow animate__animated animate__fadeInUp animated">Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back into the development</p>
                    <div class="btn-wrapper padding-top-50 wow animate__animated animate__fadeInUp animated">
                        <a href="#" class="boxed-btn btn-work">Learn More About Ximas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="enterprice-image wow animate__animated animate__backInUp bg-image" data-parallax="{&quot;x&quot;: 100, &quot;y&quot;: 0}" style="background-image: url(dormify/assets/img/bg/businesstech/02.png);"></div>
            </div>
        </div>
    </div>
</div> --}}


<section id="faq" class="testimonial-area blue pb-5 pt-5">
    <div class="container">
        <div class="row justify-content-center padding-bottom-50">
            <div class="col-lg-8 col-md-12">
                <div class="section-title desktop-center">
                    <h2 class="title">Frequently asked quetions</h2>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion-wrapper">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOwo">
                                <h5 class="mb-0">
                                    <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseOwo" aria-expanded="false" aria-controls="collapseOwo">
                                        How do I search for student accommodations on Dormify.Africa?

                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOwo" class="collapse show" data-parent="#accordion">
                                <div class="card-body style-01">
                                    Simply enter your preferred location, budget, and other criteria in our search bar, and browse through the available options. Refine your search using advanced filters to find your perfect home.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                        Are the property listings on Dormify verified and trustworthy?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body style-01">
                                    Yes, we take great care to ensure the accuracy and reliability of our listings. Each property undergoes a verification process, and we encourage students to leave reviews to maintain transparency and accountability.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOwo">
                                        Can I schedule a visit to the accommodations before booking?

                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body style-01">
                                    Absolutely! Many property listings offer the option to schedule a visit or even provide virtual tours. You can connect directly with the property owners to arrange a viewing at your convenience.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How does the booking process work on Dormify?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body style-01">
                                    In upcoming updates, once you've found your ideal accommodation, you can proceed to book it directly through our platform. We provide a secure online payment system and guide you through the necessary steps to complete the booking process smoothly.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="collapseFive">
                                <h5 class="mb-0">
                                    <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What if I encounter any issues during my search experience?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body style-01">
                                    We strive to ensure a seamless experience, but if any issues arise, our dedicated customer support team is here to assist you. Simply reach out to us, and we'll promptly address your concerns and work towards a resolution.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="testimonial-area blue padding-top-120 padding-bottom-120">
    <div class="accoridions padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center padding-bottom-50">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title desktop-center">
                        <h2 class="title">Frequently asked quetions</h2>
                    </div>
    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-wrapper">
    
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseOwo" aria-expanded="false" aria-controls="collapseOwo">
                                            How can I customize each pattern?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOwo" class="collapse show" data-parent="#accordion">
                                    <div class="card-body style-01">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                            Do you offer discounts?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body style-01">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOwo">
                                            Can I cancel a subscription at any time?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body style-01">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed white" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Can I refund my money?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body style-01">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection