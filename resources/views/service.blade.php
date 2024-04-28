<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        hr {
            border: 5px black solid;
            width: 30%;
            border-radius: 30px;
            margin: 0 auto;
            transition: width 0.3s ease, border-color 0.3s ease;
        }
    </style>

</head>

<body class="bg-blue-100 m-0 p-0">
    <main class="container mx-auto">
        @component('navbar', ['activeLink' => 'home']) @endcomponent

        <!-- Service Section -->
        <section class="my-8">
            <!-- card wrapper starts here -->
            <div class="grid grid-cols-4  gap-5 p-5">
                @foreach($serviceProviders as $serviceProvider)


                <div class="card bg-blue-50 rounded-lg p-2 mt-4 flex flex-col border-2  text-center">
                    <h2 class="text-xl font-semibold text-center pb-1 shadow-2xl">{{ $serviceProvider->name }}</h2>


                    <img src="{{ $serviceProvider -> image}}" alt="{{ $serviceProvider->category }}" class="rounded-lg border-2 border-black">
                    <hr>
                    </hr>

                    <p class="text-gray-700 mt-2">Phone Number:{{ $serviceProvider->phone_no }}</p>
                    <p class="text-gray-700 mt-2">Location : {{ $serviceProvider->address }}</p>
                    <p class="text-gray-700 mt-2">Experience : {{ $serviceProvider->exp_year }} Years</p>

                    <p class="text-gray-700 mt-2">Rating : ⭐⭐⭐⭐</p>
                    <p class="text-gray-700 mt-2">Active Status: {{ $serviceProvider->status }}</p>

                    <form action="/booking/{{$serviceProvider -> id}}" method="get">
                        @csrf
                        <button class="  mt-4 px-9 py-2 bg-red-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">Book Now</button>
                    </form>
                    <form action="/review/{{$serviceProvider -> id}}" method="get">
                        @csrf
                        <button type="submit" class="  mt-4 px-9 py-2 bg-red-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">Rate {{$serviceProvider->name}}</button>
                    </form>

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