<!DOCTYPE html>
<html>

<head>
    <title>New Appointment Booked</title>
</head>

<body>
    <h2>New Appointment Booking Details</h2>
    <p><strong>Client Name:</strong> {{ $bookingDetails['name'] }}</p>
    <p><strong>Email:</strong> {{ $bookingDetails['email'] }}</p>
    <p><strong>Phone:</strong> {{ $bookingDetails['phone'] }}</p>
    <p><strong>Address:</strong> {{ $bookingDetails['address'] }}</p>
    <p><strong>Service:</strong> {{ $bookingDetails['service'] }}</p>
    <p><strong>Date:</strong> {{ $bookingDetails['date'] }}</p>
    <p><strong>Time:</strong> {{ $bookingDetails['time'] }}</p>
    <p><strong>Client Needs:</strong> {{ $bookingDetails['needs'] }}</p>
    <p><strong>Estimated Price:</strong> {{ $bookingDetails['estimated_price'] }}</p>
    <img src="{{ $message->embed(public_path('images/the_logo_light_mode.png')) }}" alt="Logo" style="width: 100px; margin-top: 40px;">
   
</body>

</html>
