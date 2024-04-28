<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register User</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-blue-100">

  <div class="flex min-h-screen justify-center items-center">
    <div class="w-full max-w-md px-8 py-10 bg-blue-50 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold text-center mb-6">Register User</h2>

      <form method="POST" action="/store">
        @csrf

        <div class="mb-6">
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <input type="email" id="email" name="email" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
          @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-6">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" id="name" name="name" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
          @error('name')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
          @error('password')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-6">
          <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
          <input type="text" id="address" name="address" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
          @error('address')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-6">
          <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
          <input type="number" id="phone_no" name="phone_no" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:ring-1">
          @error('phone_no')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none">Submit</button>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>