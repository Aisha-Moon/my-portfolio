@extends('frontend.master')
@section('title')
Aisha Akter Moon
@endsection
@section('content')
     <header class="masthead" style="background-image: url(<?php echo $main->bc_img ?>)">
            <div class="container">
                <div class="masthead-subheading">
                    <p class="fs-5">HELLO, MY NAME IS </p>
                    <strong>{{$main->sub_title}}</strong>
                </div>
                <div class="masthead-heading text-uppercase">{{$main->title}}</div>
                <div>
                    <p>I’m a Front End Web developer who is passionate about making error-free websites with 100% client satisfaction. I love to solve real-world problems. I am strategic, and goal-oriented, and always work with an end goal in mind.</p>
                </div>
                <a class="btn btn-xl pinkish text-white text-uppercase" href="{{url($main->resume)}}">Resume</a>
            </div>
        </header>
{{-- main opage ends    --}}

{{-- service starts --}}
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">What I will do for you?</h3>
                </div>
                <div class="row text-center">
                    @if(count($services)>0)
                        @foreach ($services as $service)
                            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x pinkish"></i>
                            <i class="<?php echo $service->icon;?> fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">{{$service->title}}</h4>
                        <p class="text-muted">{{$service->description}}</p>
                    </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section>

        {{-- portfolio starts here --}}
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Latest Projects</h3>
                </div>
                <div class="row">
                    @if (count($portfolios)>0)
                        @foreach ($portfolios as $portfolio)
                            <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1<?php echo $portfolio->id;?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{url($portfolio->big_img)}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$portfolio->client}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$portfolio->category}}</div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </section>

        <!-- Portfolio item 1 modal popup-->

          @foreach ($portfolios as $portfolio)
             <div class="portfolio-modal modal fade" id="portfolioModal1<?php echo $portfolio->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{$portfolio->client}}</h2>
                                    <p class="item-intro text-muted">{{$portfolio->category}}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url($portfolio->big_img)}}" alt="..." />
                                    <p>{{$portfolio->description}}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Date:{{$portfolio->created_at}}</strong>
                                        </li>
                                        <li>
                                            <strong>Client:</strong>
                                            {{$portfolio->client}}
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            {{$portfolio->category}}
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
     {{-- about starts here --}}
     <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About ME</h2>
                    <h3 class="section-subheading text-muted">Why You Hire Me?</h3>
                </div>
                <ul class="timeline">
                    @if (count($abouts)>0)
                        @foreach ($abouts as $about)
                              <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url($about->image)}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$about->title1}}</h4>
                                <h4 class="subheading">{{$about->title2}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$about->description}}</p></div>
                        </div>
                    </li>
                        @endforeach
                    @endif


                </ul>
            </div>
        </section>

        {{-- clients starts here --}}
<div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- contact starts here --}}
        <section class="page-section" id="contact" style="background-image: url(<?php echo $contact->bg_img ?>)">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Connect with me</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->

                {{-- data-sb-form-api-token="API_TOKEN" --}}
                                @include('alerts.message');

                <form id="contactForm" action="{{url('admin/contact/store')}}" method="post">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    {{-- <!-- Submit Button--> id="submitButton" --}}
                    <div class="text-center"><button class="btn btn-danger btn-xl text-uppercase "  type="submit">Send Message</button></div>
                </form>
            </div>
        </section>

@endsection

