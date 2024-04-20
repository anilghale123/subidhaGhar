<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <main class="container mx-auto p-4">
        @component('navbar', ['activeLink' => 'home']) @endcomponent

        <section class="my-8">
            <h1 class="text-2xl font-bold mb-4">Book with </h1>

            <div class="bg-white rounded-lg shadow-md p-6">
                <form method="POST" action="/booking/{{$serviceProvider -> id}}/confirm">
                    @csrf
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 font-medium mb-2">Select Date:</label>
                        <input type="date" id="date" name="date" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label for="time" class="block text-gray-700 font-medium mb-2">Select Time:</label>
                        <input type="time" placeholder="select time" name="time" class="border border-gray-300 rounded-md px-3 py-2 w-full>
                    </div>


                    <div class=" mb-4">
                        <label for="serviceProviderId" class="block text-gray-700 font-medium mb-2">Service Provider ID:</label>
                        <input type="text" id="s_id" name="s_id" value="{{ $serviceProvider->id }}" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label for="UserId" class="block text-gray-700 font-medium mb-2">User ID:</label>
                        <input type="text" id="user_id" name="user_id" value="{{ $userId }}" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label for="phoneNumber" class="block text-gray-700 font-medium mb-2">Phone Number:</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>

                    <div class="mb-4">
                        <label for="location" class="block text-gray-700 font-medium mb-2">Service Location:</label>
                        <input type="text" id="location" name="location" class="border border-gray-300 rounded-md px-3 py-2 w-full">
                    </div>


                    <div class="mb-4">
                        <label for="notes" class="block text-gray-700 font-medium mb-2">Additional Notes (Optional):</label>
                        <textarea id="notes" name="notes" rows="4" class="border border-gray-300 rounded-md px-3 py-2 w-full"></textarea>
                    </div>


                    <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Confirm Booking</button>
                </form>
            </div>
        </section>

        @component('footer') @endcomponent
    </main>
</body>

</html>