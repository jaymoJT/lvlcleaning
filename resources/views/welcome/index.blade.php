<x-app-layout>
    <div class="home-banner">
        <div class="p-5 home_banner">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class=" home_banner_title">Focus on your business' growth.</h2>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                Get Estimate
                            </div>
                            <div class="card-body">
                                @include('includes.estimate') 
                            </div>
                        </div>

                    </div>                
                </div>
               
        </div>
    </div>
    <div class="color-stripe purple-gradient ">
        <div class="container wrapper">
            <div class="row">
                <div class="col-md-3 column-separator">
                    <strong>Weekly (Most Popular)</strong>
                    <p>
                        You have the option of scheduling a once-weekly cleaning visit from the LVL Cleaning team.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator">
                    <strong>Every Other Week</strong>
                    <p>
                        Every two weeks, a cleaning will be scheduled for your home by our cleaning staff.
                    </p>
                </div>
                
                <div class="col-md-3 column-separator">
                    <strong>Once a Month</strong>
                    <p>
                        Some of our clients would prefer a deep cleaning or spring cleaning once a month.
                    </p>
                </div>
                <div class="col-md-3 justify-content-center py-5">
                    <button class="btn btn-primary">Join</button>
                </div>
            </div>
        </div>
    </div>

    <div class="home-booking">
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
    </div>

    <div class="customer-centered">
        <div class="container wrapper">
            <h3>Customer-centered Service</h3>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/cleaning-service.png')}}" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <div class="wrapper text-center py-5">
                        <p>
                            Our cleaning services are executed by a highly professional team with extensive skills and expertise. Each member of our team undergoes thorough background checks to ensure reliability and trustworthiness. We take pride in our team's efficiency and their ability to promptly complete tasks. Our goal is to deliver a service that exceeds your expectations, leaving you with a positive and satisfying experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customer-care purple-gradient">
        <div class="container wrapper">
            <h3>Served well?</h3>
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
            <h3>Why Us</h3>
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
