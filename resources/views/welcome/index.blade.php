<x-app-layout>

    <div class="pictures">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('images/slider/deep-cleaning.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/slider/general-cleaning.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slider/lvl-cleaning.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

 
    <div class="color-stripe purple-gradient ">
        <div class="d-flex align-items-center justify-content-center " >
            <div class="card" style="margin-top:-8%;">
                <div class="card-body">
                    <h5>Cleaning Estimate</h5>
                    @include('includes.estimate') 
                </div>
               
            </div>
        </div>
       
        <div class="container wrapper">
            <div class="row" style="margin-bottom:4%; margin-top: 4%;">
                <div class="col-md-3 column-separator">
                    <strong>Weekly (Most Popular)</strong><br>
                    <p>
                        You have the option of scheduling a once-weekly cleaning visit from the LVL Cleaning team.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator">
                    <strong>Every Other Week</strong><br>
                    <p>
                        Every two weeks, a cleaning will be scheduled for your home by our cleaning staff.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator">
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
        <div class="container wrapper">
            <div class="row">
                <div class="col-md-7">
                    <div class="big-image">
                        <img src="{{asset('images/office-cleaning.jpg')}}"  class="img-fluid" style="border-radius: 20px !important;" />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="wrapper">
                        <h6><strong> About lvl Cleaning</strong> </h6>
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
            <div class="section-title">
                <h1>Our featured Services</h1>
                <div class="wrapper">
                    <p>
                        The world is moving quickly, with busy schedules and massive tasks. Despite everything, productivity is still essential and in it all, it still remains important to have time for yourself and your loved ones. We come in to help you save more time in your space. We take care of the cleaning so that you can save your time and energy for other commitments. However, we don't just clean for you; we do it well. For any of the following areas, please invite us for either a routine appointment or a one-time visit.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                        <span class="material-symbols-outlined" style="font-size:200% !important; color:#E537C2; ">in_home_mode</span><br>
                                        Home Cleaning
                                    </h5>
                                    <p>Spend time with your family as we clean your house, whether on regular basis or on a one time schedule.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                        <span class="material-symbols-outlined" style="font-size:200% !important; color:#E537C2;">print_connect</span><br>
                                        Commercial Cleanng</h5>
                                        <p>We will clean your workstation, windows, store shelves, carpets and anything in your workspace.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                        <span class="material-symbols-outlined" style="font-size:200% !important; color:#E537C2;">factory</span><br>
                                        Industrial Cleaning</h5>
                                        <p>Our team is skillrd in cleaning factories, plants and industries, letting your staff stay productive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                        <span class="material-symbols-outlined" style="font-size:200% !important; color:#E537C2;">celebration</span><br>
                                        After-party Cleaning</h5>
                                        <p>People leave after a party, we come with the fresh energy to get your space to it's initial clean state.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="home-booking">
        <div class="container wrapper">
            <h3 class="home-booking-text">Book a cleaning schedule</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                           <form>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" required="require" />
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="phone" required="require" />
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" required="require" />
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" required="require" />
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="time" class="form-control" name="from" required="require" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="time" class="form-control" name="to" required="require" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" required="require"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center py-5 ">
                    <p class="home-booking-text">
                        To initiate the booking process, simply send us a request, and you can expect a response from us within 12 hours. Our aim is to understand your specific requirements and ensure the best possible service for you. In the event that our team is unavailable during your preferred booking time, we are more than willing to engage in a discussion with you to find a suitable alternative that aligns with your schedule. Our priority is to accommodate your needs and deliver the highest level of service possible.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-success">Whatsapp</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary">Phone Call</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="customer-centered">
        <div class="container wrapper">
            <h1>Customer-centered Service</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper text-center py-5">
                        <p>
                            Our cleaning services are executed by a highly professional team with extensive skills and expertise. Each member of our team undergoes thorough background checks to ensure reliability and trustworthiness. We take pride in our team's efficiency and their ability to promptly complete tasks. Our goal is to deliver a service that exceeds your expectations, leaving you with a positive and satisfying experience.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('images/home-banner.jpg')}}" class="img-fluid" style="border-radius: 20px !important;" />
                </div>
                
            </div>
        </div>
    </div>

    <div class="customer-care purple-gradient">
        <div class="container wrapper">
            <h1 style="color: #fff !important;">Served well?</h1>
            <p class="wrapper">
                Here is our customer care center. Please rate our performance on how we served you. Feel free to let us know immediately if you happen to be unhappy with our work at your place or if you have any particular requirements so that we can fulfill them tomorrow.
            </p>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-success">Whatsapp</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary">Phone Call</button>
                </div>
            </div>
        </div>
    </div>
    <div class="why-us">
        <div class="container wrapper">
            <h1>Why Us</h1>
            <div class="wrapper">
                <p>
                    When you engage with LVL's, we genuinely take the time to hear about your requirements and expectations up front so that we can develop a commercial cleaning strategy that works for you. We still want to hear from you after that plan is in place.
                </p>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <strong>Trained Staff</strong>
                    <p>
                        You never have to be concerned about the quality of the work because every one of our maids has had their backgrounds checked, trained, and evaluated.
                    </p>
                </div>
                <div class="col-md-3">
                    <strong>Transparent</strong>
                    <p>
                        We employ a clear pricing strategy and provide the price of our services prior to starting the work. No additional fees apply; supplies are included in the price.
                    </p>
                </div>
                <div class="col-md-3">
                    <strong>Customized Services</strong>
                    <p>
                        We are adaptable and reasonably priced, and we have tailored our services to meet all needs, from little to enormous places.
                    </p>
                </div>
                <div class="col-md-3">
                    <strong>Easy Online Booking</strong>
                    <p>
                        Booking cleaning services for an apartment, workplace, or home has never been simpler than with us.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
   

    
</x-app-layout>
