<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-100">
  <main class="container mx-auto">
    @component('navbar', ['activeLink' => 'home']) @endcomponent

    <section class="shadow-md rounded-lg bg-blue-50 p-6 flex flex-col gap-4">
      
      <h1 class="text-2xl font-bold text-center mb-4">Book with {{ $serviceProvider->name }}</h1>

      <form method="POST" action="/booking/{{$serviceProvider -> id}}/confirm">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Select Date:</label>
            <input type="date" id="date" name="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1">
          </div>

          <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Select Time:</label>
            <input type="time" id="time" name="time" placeholder="select time" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1">
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="mb-4">
            <label for="serviceProvider Name" class="block text-sm font-medium text-gray-700 mb-2">Service Provider Name:</label>
            <input type="text" id="name" name="name" value="{{ $serviceProvider->name }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1" readonly>
          </div>

          <div class="mb-4">
            <label for="s_id" class="block text-sm font-medium text-gray-700 mb-2">Service Provider ID:</label>
            <input type="text" id="s_id" name="s_id" value="{{ $serviceProvider->id }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1" readonly>
          </div>
        </div>


          <div class="mb-4">
            <label for="UserId" class="block text-sm font-medium text-gray-700 mb-2">User ID:</label>
            <input type="text" id="user_id" name="user_id" value="{{ $userId }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1" readonly>
          </div>
        </div>

        <div class="mb-4">
          <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-2">Phone Number:</label>
          <input type="tel" id="phoneNumber" name="phoneNumber" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1">
        </div>

        <div class="mb-4">
          <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Service Location:</label>
          <input type="text" id="location" name="location" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:ring-1">
        </div>

        <div class="mb-4">
          <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Additional Notes (Optional):</label>
          
<textarea id="notes" name="notes" rows="4" class="border border-gray-300 rounded-md px-3 py-2 w-full"></textarea>
                    </div>


                    <button type="submit" class="px-6 py-3 bg-green-500 text-white rounded-md hover:bg-red-600">Confirm Booking</button>
                </form>
            </div>
        </section>

        @component('footer') @endcomponent
    </main>
</body>

</html>