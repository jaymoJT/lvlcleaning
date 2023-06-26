<div class="container">
    Hi, <br>
    I am {{$bookings->name}}<br>
    I wish to place a booking for {{$bookings->service}} cleaning services <br>
    <strong>Date:</strong> {{$bookings->pref_date}}<br>
    <strong>Time:</strong> {{$bookings->pref_time}}<br>
    <h5>My address</h5><br>
    <p>{{$bookings->address}}. </p>  
    <hr>
    Reach me through {{$bookings->phone}} or {{$bookings->email}}.<br>
    Thank you.

</div>