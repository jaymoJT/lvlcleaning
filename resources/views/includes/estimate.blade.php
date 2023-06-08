<section class="">
    <div class="container wrapper">
         <form   method="GET" >
            @csrf
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" require="required" />
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email"  class="form-control" name="email" require="required" />
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel"  class="form-control" name="phone" require="required" />
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text"  class="form-control" name="city" required="require" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="address"  class="form-control" name="address" required="require" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
         

         </form>
    </div>
</section>