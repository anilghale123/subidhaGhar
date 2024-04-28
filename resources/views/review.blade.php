<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Section</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        input[type="radio"]:checked + label {
  background-color: green;
  transition: background-color 0.3s ease; /* Smooth change */
}

    </style>
</head>
<body class="bg-blue-100">
    @component('navbar', ['activeLink' => 'home']) @endcomponent

    <div class="container mx-auto mt-10 bg-blue-50 p-4 shadow-lg rounded-lg w-80">
        <h1 class="text-3xl font-bold text-center mb-6">Rating Section</h1>
        <div class="flex justify-center">
          
        <form action="/review/{{$serviceProvider -> id}}/submit" method="POST" class="w-full max-w-lg">
                @csrf
                <div class=" mb-4">
                        <label for="serviceProviderId" class="block text-gray-700 font-medium mb-2">Service Provider ID:</label>
                        <input type="text" id="s_id" name="s_id" value="{{$serviceProvider -> id}}" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label for="UserId" class="block text-gray-700 font-medium mb-2">User ID:</label>
                        <input type="text" id="user_id" name="user_id" value="{{ $userId }}" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>
                <textarea class="border border-gray-300 rounded-lg w-full p-2 mb-4" placeholder="Enter your comment" name="comment"></textarea>

                <div class="flex items-center mb-4">
                    <p class="mr-2">Stars:</p>
                   
                    <div class="flex">


                        <input type="radio" name="rating" value="5" id="star-5" class="hidden">
                        <label for="star-5" class=" text-white bg-yellow-400 hover:bg-yellow-500 rounded-full w-8 h-8 flex items-center justify-center cursor-pointer">5</label>

                        <input type="radio" name="rating" value="4" id="star-4" class="hidden">
                        <label for="star-4" class=" text-white bg-yellow-400 hover:bg-yellow-500 rounded-full w-8 h-8 flex items-center justify-center cursor-pointer ml-1">4</label>

                        <input type="radio" name="rating" value="3" id="star-3" class="hidden">
                        <label for="star-3" class=" text-white bg-yellow-400 hover:bg-yellow-500 rounded-full w-8 h-8 flex items-center justify-center cursor-pointer ml-1">3</label>

                        <input type="radio" name="rating" value="2" id="star-2" class="hidden">
                        <label for="star-2" class=" text-white bg-yellow-400 hover:bg-yellow-500 rounded-full w-8 h-8 flex items-center justify-center cursor-pointer ml-1">2</label>

                        <input type="radio" name="rating" value="1" id="star-1" class="hidden">
                        <label for="star-1" class=" text-white bg-yellow-400 hover:bg-yellow-500 rounded-full w-8 h-8 flex items-center justify-center cursor-pointer ml-1">1</label>
                    </div>
                </div>

                <button type="submit" class="bg-green-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-12">Submit Review</button>
           
            </form>
        </div>
    </div>

  
</body>
</html>
