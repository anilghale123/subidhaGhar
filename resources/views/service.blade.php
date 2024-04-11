<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <main class="container mx-auto p-4">
         @component('navbar', ['activeLink' => 'home']) @endcomponent

          <!-- Service Section -->
        <section class="my-8">
            <!-- <h1 class="text-2xl font-semibold">Services Section</h1> -->
           
            <!-- card wrapper starts here -->
            <div class="grid grid-cols-4  gap-5">
            @foreach($serviceProviders as $serviceProvider)

                <div class="card bg-red-100 rounded-lg p-4 mt-4 overflow-hidden ">
                    <h2 class="text-xl font-semibold">{{ $serviceProvider->name }}</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>
                @endforeach

              
            </div>
        </section>
        <!-- end of service section here -->

       


        </div>

        </section>

        @component('footer') @endcomponent
    </main>
</body>
</html>