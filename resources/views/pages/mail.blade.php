


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Confirmation</title>

    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-N5Yfz5d5Qv6aZ9g9Qj/5b5G/uln4h4N6z4Y1UjM6U4p0r7Iu8XZ1d7T6T0vzV0yF8gAAzVcJHbGvZVxR+8XfJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">

        <h1 class="text-2xl font-semibold mb-6">Appointment Confirmation</h1>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <p>Name: {{ $appointementdata['client_name'] }}</p>
            <p>Phone: {{ $appointementdata['client_phone'] }}</p>
            <p>Service: {{ $appointementdata['service_name'] }}</p>
            <p>Price: {{ $appointementdata['service_price'] }}</p>
            <p>Technician: {{ $appointementdata['technician_name'] }}</p>
            <p>Date: {{ $appointementdata['appointment_date'] }}</p>
            <p>Address: {{ $appointementdata['appointment_address'] }}</p>
            <p>City: {{ $appointementdata['appointment_city'] }}</p>
        </div>

        <p class="text-lg">Please contact the client to confirm the appointment.</p>

    </div>

</body>
</html>