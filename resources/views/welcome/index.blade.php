<x-app-layout>

    <div class="home-banner">
        <div class="p-5 home_banner">
                <div class="row">
                    <div class="col-md-7">
                        
                    </div>
                    <div class="col-md-5 justify-content-sm-center">
                        <div class="container text-center py-5">
                            <h1 class=" home_banner_title">Fastest growing customer-centered cleaning services provider in Nebraska.</h1>
                            <p style="color:#fff !important;">
                                You’ve come to the perfect site if you’re seeking for trustworthy and reasonably priced office cleaning in Nebraska. Professional cleaners and over a decade of industry knowledge are combined at LVL Professional Cleaning Services.
                            </p>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>

 
    <div class="color-stripe purple-gradient ">
        <div class="container wrapper text-center">
            <h1 style="color:#fff !important;">Simple cleaning plans</h1>
            <div class="row" style="margin-bottom:6%; margin-top: 4%;">
                <div class="col-md-3 column-separator text-center">
                    <strong>Weekly (Most Popular)</strong><br>
                    <p>
                        You have the option of scheduling a once-weekly cleaning visit from the LVL Cleaning team.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator text-center">
                    <strong>Every Other Week</strong><br>
                    <p>
                        Every two weeks, a cleaning will be scheduled for your home by our cleaning staff.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator text-center">
                    <strong>Once a Month</strong><br>
                    <p>
                        Some of our clients would prefer a deep cleaning or spring cleaning once a month.
                    </p>
                </div>
                <div class="col-md-3 justify-content-center py-5">
                    <button class="btn btn-primary rounded-pill">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <div class="why-section">
        <div class="d-flex align-items-center justify-content-center " >
            <div class="card wow slideInLeft" style="margin-top:-6%; box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important; margin-left:8px !important; margin-right: 8px !important; max-width:80% !important;" data-wow-duration="4s" data-wow-delay="3s">
                <div class="card-body">
                    <h5>Cleaning Estimate</h5>
                    @if(session()->has('msg_danger'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill"></i> {{ session()->get('msg_danger') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif
                            @if(session()->has('msg_success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill" style="color:green !important;"></i> {{ session()->get('msg_success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif
                    @include('includes.estimate') 
                </div>
               
            </div>
        </div>
        <div class="container wrapper">
            <div class="row">
                <div class="col-md-7">
                    <div class="big-image">
                        <img src="{{asset('images/office-cleaning.jpg')}}"  class="img-fluid" style="border-radius: 20px !important;" />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="wrapper text-center">
                        <h6 style="color:#E537C2 !important;"><strong> About lvl Cleaning</strong> </h6>
                    <h1>You ofcourse need us.</h1>
                    <p>Our cleaning services are executed by a highly professional team with extensive skills and expertise. Our services will help you;</p>
                    <p><span class="material-symbols-outlined" style="color:#E537C2; font-weight:bold;">done</span> <strong>Save your time for other activities.</strong></p>
                    <p><span class="material-symbols-outlined" style="color:#E537C2; font-weight:bold;">done</span> <strong>Reserve your energy to invest in productive areas.</strong></p>
                    <p><span class="material-symbols-outlined" style="color:#E537C2; font-weight:bold;">done</span> <strong>Professional Cleaning which is not your thing.</strong> </p>
                    <p><span class="material-symbols-outlined" style="color:#E537C2; font-weight:bold;">done</span> <strong>Swift Service and you are done with the cleaning plan.</strong> </p><br>
                    <a href="tel:+1(402) 937-2794" class="btn btn-primary rounded-pill material-text" style="color: #fff !important;">
                        <span class="material-symbols-outlined">call</span>Make a Call
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-section">
        <div class="container wrapper">
            <div class="section-title text-center">
                <h1>Our featured Services</h1>
                <div class="wrapper">
                    <p >
                        The world is moving quickly, with busy schedules and massive tasks. Despite everything, productivity is still essential and in it all, it still remains important to have time for yourself and your loved ones. We come in to help you save more time in your space. We take care of the cleaning so that you can save your time and energy for other commitments. However, we don't just clean for you; we do it well. For any of the following areas, please invite us for either a routine appointment or a one-time visit.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="card1" href="#" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                        <h5>Home Cleaning</h5>
                        <p class="small">Spend time with your family or self as we clean your house, whether on regular basis or on a one time schedule.</p>
                        <div class="go-corner" href="#">
                          <div class="go-arrow">
                            <span class="material-symbols-outlined" style="font-size:200% !important; color:#fff; ">in_home_mode</span><br>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card1" href="#" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                        <h5>Commercial Cleaning</h5>
                        <p class="small">We will clean your workstation, windows, store shelves, carpets and anything in your workspace; your shop or office.</p>
                        <div class="go-corner" href="#">
                          <div class="go-arrow">
                            <span class="material-symbols-outlined" style="font-size:200% !important; color:#fff; ">print_connect</span><br>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card1" href="#" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                        <h5>Move in/Move out Cleaning</h5>
                        <p class="small">Your move in or out do not have to be a hustle, should not be a long process, start by letting us do the cleaning .</p>
                        <div class="go-corner" href="#">
                          <div class="go-arrow">
                            <span class="material-symbols-outlined" style="font-size:200% !important; color:#fff; ">factory</span><br>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card1" href="#" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                        <h5>After-party Cleaning</h5>
                        <p class="small">Friends get tired and leave after a party, we come with the fresh energy to get your space to it's initial clean state.</p>
                        <div class="go-corner" href="#">
                          <div class="go-arrow">
                            <span class="material-symbols-outlined" style="font-size:200% !important; color:#fff; ">celebration</span><br>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="customer-care purple-gradient text-center">
        <div class="container wrapper" >
            <h1 style="color:#fff !important; margin-top:2% !important;">Customer-centered Service</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper ">
                        <p>
                            Our cleaning services are executed by a highly professional team with extensive skills and expertise. Each member of our team undergoes thorough background checks to ensure reliability and trustworthiness. We take pride in our team's efficiency and their ability to promptly complete tasks. Our goal is to deliver a service that exceeds your expectations, leaving you with a positive and satisfying experience.
                        </p>
                        <h4 style="color: #fff !important;">Served well?</h4>
                <p>
                    Here is our customer care center. Please rate our performance on how we served you. Feel free to let us know immediately if you happen to be unhappy with our work at your place or if you have any particular requirements so that we can fulfill them tomorrow.
                </p>
                <div class="">
                    <button class="btn btn-success">Whatsapp</button>
                    <button class="btn btn-primary">Phone Call</button>
                  
                </div>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 4% !important;">
                    <img src="{{asset('images/call-center.jpg')}}" class="img-fluid" style="border-radius: 20px !important;" />
                </div>
                
            </div>
            <div class="" style="margin-bottom:8%;">
                
            </div>
        </div>
    </div>

   
    <div class="why-us">
        <div class="d-flex align-items-center justify-content-center text-center" >
            <div class="card" style="margin-top:-6%; box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important; margin-left:8px !important; margin-right: 8px !important; max-width:80% !important;">
                <div class="card-body">
                    <section class="">
                        <div class="container wrapper text-center">
                            <h1>Why Us</h1>
                        <p>When you engage with LVL's, we genuinely take the time to hear about your requirements and expectations up front so that we can develop a commercial cleaning strategy that works for you. We still want to hear from you after that plan is in place.</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="container wrapper">
            
            <div class="row">
                <div class="col-md-6 wrapper">
                    <img src="{{asset('images/cleaning-staff.jpeg')}} " class=" img-fluid" style="border-radius: 20px !important;" />
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card features text-center" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                                <div class="card-body">
                                    <strong>Trained Staff</strong>
                                        <p>Every one of our maids is skilled and their backgrounds checked, trained, and evaluated.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card features text-center" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                                <div class="card-body">
                                    <strong>Transparent</strong>
                                    <p>Clear pricing from begining. No secret additional fees; supplies are included in the price.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card features text-center" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                                <div class="card-body">
                                    <strong>Customized Services</strong>
                                    <p>We have tailored our services to meet all needs, from little to enormous places and budgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card features text-center" style="box-shadow: 0px 4px 15px -3px rgba(2, 3, 73, 0.411) !important;">
                                <div class="card-body">
                                    <strong>Easy Online Booking</strong>
                                    <p>It takes a few minutes to mark us into your calendar from your favourite device and anywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

    
</x-app-layout>
