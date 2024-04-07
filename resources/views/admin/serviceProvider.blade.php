<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Service Provider</title>
</head>

<body class="bg-gray-100">

    @component('navbar', ['activeLink' => 'home']) @endcomponent


    <div class="container mx-auto p-4">
    <form method="POST" action="/submit-form" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            @csrf
            <h1>Service Provider Form</h1>
            <div class="">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                <input type="text" class="form-input w-full border-2" id="name" name="name" required>
            </div>

            <div class="">
                <label for="phone_no" class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
                <input type="number" class="form-input w-full border-2" id="phone_no" name="phone_no" required>
            </div>

            <div class="">
                <label for="address" class="block text-gray-700 font-semibold mb-2">Address:</label>
                <textarea class="form-textarea w-full border-2" id="address" name="address" required></textarea>
            </div>

            <div class="">
                <label for="exp_year" class="block text-gray-700 font-semibold mb-2">Years of Experience:</label>
                <input type="number" class="form-input w-full border-2" id="exp_year" name="exp_year" required>
            </div>

            <div class="">
                <label for="category" class="block text-gray-700 font-semibold mb-2">Category:</label>
                <select class="form-select w-full border-2" id="category" name="category" required>
                    <option selected disabled>Select a category...</option>
                    <option value="Plumber" name = "Plumber">Plumber</option>
                    <option value="Electrician" name = "Electrician">Electrician</option>
                    <!-- Add your category options here -->
                </select>
            </div>

            <div class="">
                <label for="price" class="block text-gray-700 font-semibold mb-2 ">Price:</label>
                <input type="number" class="form-input w-full border-2" id="price" name="price" required>
            </div>

            <div class="mb-3">
      
            <label for="booking_status" class="form-label">Booking Status:</label>
        <select class="form-select" id="booking_status" name="status">
            <option value="available" name = "available">Available</option> 
            <option value="unavailable" name = "unavailable">Unavailable</option>
        </select>
    </div>

    <div class="">
                <label for="c_id" class="block text-gray-700 font-semibold mb-2 ">c_id:</label>
                <input type="number" class="form-input w-full border-2" id="c_id" name="c_id" value="1" required>
            </div>

            <button type="submit" class="mt-5 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</body>

</html>