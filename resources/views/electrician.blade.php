<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>
         @component('navbar', ['activeLink' => 'home']) @endcomponent

          <!-- Service Section -->
        <section class="my-8">
            <h1 class="text-2xl font-semibold">Services Section</h1>
           
            <!-- card wrapper starts here -->
            <div class="grid grid-cols-1 md:grid-cols-4 auto-cols-fr gap-5">
                
            <!-- electrisian card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Prabal Kuinkel</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>
                <!-- end of electrisian card -->


                <!-- Plumber Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Swornim Thapa</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>
                <!-- end of plumber card -->

                <!-- Carpenter Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Rohan Mishra</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>
                <!-- end of carpenter card -->

                <!-- Tutor Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Manish Dhungana</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>
                <!-- end of tutor card -->

                <!-- Plumber Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Simon Pokhrel</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>

                <!-- Carpenter Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Anil Ghale</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>

                <!-- Tutor Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Sova Kushwaha</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Phone Number: 988787823</p>
                    <p class="text-gray-700 mt-2">Location : Mulpani</p>
                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: Booked</p>
                  <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                </div>


            </div>
        </section>
        <!-- end of service section here -->

       


        </div>

        </section>

        @component('footer') @endcomponent

</body>
</html>