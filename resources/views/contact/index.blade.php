<x-app-layout>
    <div class="blue-body">
        <div class="container wrapper">
            <div class="wrapper-big">
                <div class="row">
                    <div class="col-md-6">
                       <form class="form-inline">
                           <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required="require" name="name" />
                           </div>
                           <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" class="form-control" name="phone" required="require" />
                           </div>
                           <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message"  required="require">Message</textarea>
                           </div>
                           <div class="form-group">
                            <button class="btn btn-primary">Send</button>
                           </div>
                       </form>
                    </div>
                    <div class="col-md-6 float-start">
                        <h3>Reach Out</h3>
                        <div class="wrapper">
                            <p>If you have any questions, you should definitely get in touch with us </p>
                        <div class="row">
                            <div class="col-6">
                                <h4>
                                   <span class="material-symbols-outlined">phone_iphone</span>
                                   Call Us
                                </h4>
                               <a href="tel+1(402) 937-2794" style="color: #fff !important; text-decoration:none;">+1(402) 937-2794</a>
                            </div>
                            <div class="col-6">
                                <h4>
                                    <span class="material-symbols-outlined">location_on</span>
                                    Address
                                </h4>
                                <p>2433NW 44 Street Lincoln NE 68524</p>
                            </div>
                        </div>
                        <div class="mail">
                            <h4>
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
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6037.101268816224!2d-96.782385!3d40.837833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8796c0d289b29235%3A0x30e53cd20f772c36!2s2433%20NW%2044th%20St%2C%20Lincoln%2C%20NE%2068524%2C%20USA!5e0!3m2!1sen!2ske!4v1687265493709!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
</x-app-layout>