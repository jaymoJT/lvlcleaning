<x-app-layout>
    <div class="blue-body">
        <div class="container wrapper">
            <div class="wrapper-big">
                <div class="section-title text-center">
                    <h1 style="color: #ffff !important;">Add us to your schedule anytime</h1>

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


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('booking.send')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="name">Your Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email Address:</label>
                                      <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="phone">Phone Number:</label>
                                      <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Address:</label>
                                      <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="service">Service Type:</label>
                                      <select class="form-control" id="service" name="service" required>
                                        <option value="">Select a service</option>
                                        <option value="regular">Regular Cleaning</option>
                                        <option value="deep">Deep Cleaning</option>
                                        <option value="commercial">Commercial Cleaning</option>
                                        <option value="party">After-party Cleaning</option>
                                        <option value="other">Other</option>
                                      </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="date">Preferred Date:</label>
                                                <input type="date" class="form-control" id="pref_date" name="pref_date" required>
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Preferred Time:</label>
                                                <input type="time" class="form-control" name="pref_time" required="require">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="message">Additional Message:</label>
                                      <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                                  </form>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 float-start">
                        
                        <div class="wrapper">
                            <img src="{{asset('images/cleaning-service.jpeg')}}" class="img-fluid" >
                        </div>

                        <h3 style="color:#fff !important;">Find Us</h3>
                        <div class="wrapper">
                            <p>If you have any questions, you should definitely get in touch with us </p>
                        <div class="row">
                            <div class="col-6">
                                <h4 style="color:#fff !important;">
                                   <span class="material-symbols-outlined">phone_iphone</span>
                                   Call Us
                                </h4>
                               <a href="tel+1(402) 937-2794" style="color: #fff !important; text-decoration:none;">+1(402) 937-2794</a>
                            </div>
                            <div class="col-6">
                                <h4 style="color:#fff !important;">
                                    <span class="material-symbols-outlined">location_on</span>
                                    Address
                                </h4>
                                <p>2433NW 44 Street Lincoln NE 68524</p>
                            </div>
                        </div>
                        <div class="mail">
                            <h4 style="color:#fff !important;">
                                <span class="material-symbols-outlined">mail</span>
                                Mail Us
                            </h4>
                            <p>hello@lvlcleaning.com</p>
                        </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
    
</x-app-layout>