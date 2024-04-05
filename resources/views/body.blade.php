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
        <section class="bg-white p-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-pink-100">
                    <h1 class="    font-bold text-xlg md:max-w-md">Subidha Ghar</h1>
                    <h2 class=" font-bold text-6xl md:max-w-md text-center md:text-left md:text-2xl lg:text-2xl ">
    At your door to solve all your housing problems...
</h2>
                </div>
                <div class="bg-pink-200">
                   <img src="/service.png" alt="Service Image" class="max-w-62 max-h-51  rounded-xl">
                    
                </div>
            </div>
        </section>

        <!-- end of hero section -->

        <!-- Service Section -->
        <section class="my-8">
            <h1 class="text-2xl font-semibold">Services Section</h1>
           
            <div class="my-4">
            <label for="category">Select a category:</label>
<select id="category" class="w-30 h-10 px-4 py-2 border rounded-md">
    <option value="plumber">Plumber</option>
    <option value="carpenter">Carpenter</option>
    <option value="tutor">Tutor</option>
    <option value="electrician">Electrician</option>
</select>
          
            <button class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Filter</button>
            </div>

            <!-- end of search n filter button -->
           
            <!-- card wrapper starts here -->
            <div class="grid grid-cols-1 md:grid-cols-4 auto-cols-fr gap-5">
                
            <!-- electrisian card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Electrician</h2>
                    <img src="/electrisian.jpg" alt="electrisian">
                    <p class="text-gray-700 mt-2">Details about the electrical service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/electrisian'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>
                <!-- end of electrisian card -->


                <!-- Plumber Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Plumber</h2>
                    <img src="/plumbing.jpg" alt="electrisian">

                    <p class="text-gray-700 mt-2">Details about the plumbing service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/plumber'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>
                <!-- end of plumber card -->

                <!-- Carpenter Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Carpenter</h2>
                    <img src="/carpenter.jpg" alt="electrisian">

                    <p class="text-gray-700 mt-2">Details about the plumbing service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/carpenter'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>
                <!-- end of carpenter card -->

                <!-- Tutor Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                <h2 class="text-xl font-semibold">Tutor</h2>

                <img src="/tutor.jpg" alt="tutor">

                    <p class="text-gray-700 mt-2">Details about the tutoring service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/tutor'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>
                <!-- end of tutor card -->

                <!-- Plumber Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Plumber</h2>
                    <p class="text-gray-700 mt-2">Details about the plumbing service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/plumber'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>

                <!-- Carpenter Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Carpenter</h2>
                    <p class="text-gray-700 mt-2">Details about the plumbing service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/carpenter'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
                </div>

                <!-- Tutor Card -->
                <div class="card bg-white rounded-lg p-4 mt-4">
                    <h2 class="text-xl font-semibold">Tutor</h2>
                    <p class="text-gray-700 mt-2">Details about the tutoring service:</p>
                    <ul class="list-disc ml-6 mt-2">
                        <li>abc</li>
                        <li>xyz</li>
                        <li>hahaha</li>
                    </ul>
                    <button onclick="window.location.href='/tutor'" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Explore</button>
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