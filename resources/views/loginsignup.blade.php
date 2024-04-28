<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login or Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
  <style>
     body {
      background-image: url('/landing.jpeg');
      background-size: cover;
      background-position: center;
     
    }
  </style>

</head>

<body>
 

<div class="">

 </div>

  <div class="flex flex-col min-h-screen justify-center items-start p-5  text-white w-40 ">
  <h1 class="text-white text-7xl w-61 p-5 font-bold">
        Empower with <span class="text-red-500">SubidhaGhar</span>,where <span class="text-green-500">needs meet expertise</span>, and dreams find their wings.
  </h1>
    <!-- <div class="w-full max-w-md px-8 py-10 bg-transparent rounded-lg shadow-md"> -->
      <!-- <h1 class="text-3xl font-bold text-center mb-8">Login or Sign Up</h1> -->

         
  <div class="flex">

      <form method='post' action="/register">
        @csrf

        <button type="submit" class="ml-5 w-40 py-2 px-4 bg-transparent border border-white text-white rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:outline-none mb-5">Register</button>
      </form>

      <form action="{{ route('login') }}" method="get">
        @csrf

        <button type="submit" class="ml-5 w-40 py-2 px-4 bg-transparent border border-white text-white rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:outline-none mb-5">Log In</button>
      </form>
  </div>

    
    <!-- </div> -->
  </div>

</body>
</html>
