

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind CSS Simple Email Template Example </title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">

        <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
            <header>
                <a href="#">
                    {{-- <img class="w-auto h-7 sm:h-8" src="{{ asset('images/staticpictures/solarheaven.png')}}" alt=""> --}}
                </a>
                
            </header>
        
            <main class="mt-8">
                {{-- <img class="object-cover w-full h-56 rounded-lg md:h-72" src="{{ asset('images/staticpictures/solarheaven.png')}}"  alt=""> --}}
     
                <h2 class="mt-6 text-gray-700 dark:text-gray-200">Hi  {{ $appointementdata['client_name'] }},</h2>
        
                <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                    Thank you for booking an appointment with us about {{ $appointementdata['service_name'] }}.
                     We are looking forward to seeing you with {{ $appointementdata['technician_name'] }}  on {{ $appointementdata['appointment_date'] }} at {{ $appointementdata['appointment_address'] }} {{ $appointementdata['appointment_city'] }}.
                     give us a call if you have any questions.
                     {{ $appointementdata['technician_name'] }} will be in touch with you shortly to confirm the appointment.
                </p>
                
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    Thanks, <br>
                    Solar Heaven
                </p>
                
                <button class="px-6 py-2 mt-8 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    <a href="{{ route('login') }}">login</a>
                </button>
            </main>
            
        
            <footer class="mt-8">
                <p class="text-gray-500 dark:text-gray-400">
                    This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400" target="_blank">{{ $appointementdata['client_email'] }}</a> because you signed up for Solar Heaven. Unsubscribe from these emails.
                </p>
        
                <p class="mt-3 text-gray-500 dark:text-gray-400">© 2021 Solar Heaven. All rights reserved.</p>
            </footer>
        </section>
    
    </body>
</html>





