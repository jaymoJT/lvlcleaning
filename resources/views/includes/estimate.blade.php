<section class="">
    <div class="container wrapper">
         <form   method="GET" >
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="zip" placeholder="ZIP Code" required="require" />
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="rooms" placeholder="Rooms" required="require" />
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="baths" placeholder="Baths" required="require" />
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="date" placeholder="Date" required="require" />
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <input type="time" class="form-control" name="time" placeholder="time" required="require" />
                </div>
                <div class="col-md-3">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone" required="require" />
                </div>
                <div class="col-md-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="require" />
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary rounded-pill">Get a Price</button>
                </div>
            </div>
         

         </form>
    </div>
</section>