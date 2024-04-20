<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
@component('navbar', ['activeLink' => 'home']) @endcomponent
    <div class="container mx-auto p-6">
        
        <div class="bg-white shadow-md rounded-md p-6">
            <h1 class="text-2xl font-semibold mb-4">User Profile</h1>

            <div class="flex items-center mb-4">
                <img src="https://www.gravatar.com/avatar/?d=mp" class="w-16 h-16 rounded-full mr-4" alt="Profile Picture"> 
                <div>
                <h2 class="font-bold">Name: {{ auth()->user()->name }}</h2>
                    <h2 class="font-bold">Email: {{ auth()->user()->email }}</h2>
                    <h2 class="font-bold">Address: {{ auth()->user()->address }}</h2>
                    <h2 class="font-bold">Phone Number: {{ auth()->user()->phone_no }}</h2>
                </div>
            </div>

            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit Profile</button>
        </div>

        <div class="mt-6 bg-white shadow-md rounded-md p-6">
            <h2 class="text-lg font-semibold mb-4">Booking History</h2>

            <table class="w-full">
                 <thead>
                    <tr>
                        <th class="text-left p-2">Date</th>
                        <th class="text-left p-2">Time</th>
                        <th class="text-left p-2">Location</th>
                        <th class="text-left p-2">UserId</th>
                        <th class="text-left p-2">ServiceProvider Id</th>
                        <th>Test</th>



                        
                    </tr>
                 </thead>
                <tbody>
                    @foreach($bookings as $result)
                    <tr>
                        <td class="p-2">{{$result -> date }}</td>
                        <td class="p-2">{{$result -> time }}</td>
                        <td class="p-2">{{$result -> location }}</td>
                        <td class="p-2">{{$result -> user_id }}</td>
                        <td class="p-2">{{$result -> s_id }}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>

        </div>
    </div>

    @component('footer') @endcomponent
</body>
</html>
