<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <main class="container mx-auto p-4">
        <!-- Hero Section -->
        <section class="  ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class=" flex flex-col items-center p-5">
                    <!-- <h1 class="font-bold text-3xl   md:max-w-md p-5">Subidha Ghar</h1> -->
                    <h1 class="font-bold  md:max-w-md  md:text-left md:text-2xl lg:text-6xl ">At your door to solve all your
                        <span class="text-green-500">Housing </span>
                        <span class="text-red-500">Problems...</span>
                    </h1>
                </div>
                <div class="">
                    <img src="/home.jpeg" alt="Service Image" class="w-80 rounded-xl object-cover">

                </div>
            </div>
        </section>

        <!-- end of hero section -->

        <!-- Service Section -->
        <section class="my-8">
            <h1 class="text-2xl font-semibold">Services Section</h1>

            <div class="my-4">
            <form method="GET" action="{{ route('search') }}">
                <label for="category">Select a category:</label>
                <select id="category" name="category" class="w-30 h-10 px-4 py-2 border rounded-md">
                    <option value="all" selected>All</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

    <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Filter</button>
</form>

            </div>

            <!-- end of search n filter button -->

           <!-- card wrapper starts here -->
<div class="grid grid-cols-1 md:grid-cols-4 auto-cols-fr gap-5">
            @if($results->isEmpty())
                <p>No results found.</p>
            @else
            @foreach($results as $category)
            <div class="card bg-white rounded-lg p-4 mt-4">
                <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
                <img src="{{ asset('/' . strtolower($category->name) . '.jpg') }}" alt="{{ $category->name }}">
                <p class="text-gray-700 mt-2">{{ $category->description }}</p>
                <button onclick="window.location.href='/sewa/{{ $category->id }}'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Explore
                </button>
            </div>
            @endforeach
            @endif
</div>



            </div>
        </section>
        <!-- end of service section here -->

        <!-- review section starts here -->
        <section title="review-section">
            <h1 class="text-xl font-semibold">What our User Says</h1>

            <div class="grid grid-cols-1 md:grid-cols-4 auto-cols-fr gap-5">

                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Prabal Kuinkel</h2>
                    <p class="text-gray-700 mt-2">Prabal Ko Experience Yeta</p>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>

                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Sova Kushwaha</h2>
                    <p class="text-gray-700 mt-2">Sova Ko Experience Yeta</p>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>

                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Anil Ghale</h2>
                    <p class="text-gray-700 mt-2">Anil Ko Experience Yeta</p>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>

                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Swornim Thapa</h2>
                    <p class="text-gray-700 mt-2">Swornim Ko Experience Yeta</p>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>


            </div>

        </section>



    </main>
</body>

</html>