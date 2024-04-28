<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Profile</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-blue-100">
  @component('navbar', ['activeLink' => 'home']) @endcomponent
  <div class="container mx-auto p-6">

    <div class="bg-blue-50 shadow-md rounded-md p-6">
      <h1 class="text-2xl font-semibold mb-4">User Profile</h1>

      <div class="flex items-center mb-4">
        <img src="https://www.gravatar.com/avatar/?d=mp" class="w-16 h-16 rounded-full mr-4" alt="Profile Picture">
        <div>
          <h2 class="font-bold">Name: {{ auth()->user()->name }}</h2>
          <h2 class="font-bold">Email: {{ auth()->user()->email }}</h2>
          <h2 class="font-bold">User Id: {{ auth()->user()->id }}</h2>

          <h2 class="font-bold">Address: {{ auth()->user()->address }}</h2>
          <h2 class="font-bold">Phone Number: {{ auth()->user()->phone_no }}</h2>
        </div>
      </div>

      <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
    </div>

    <div class="mt-6 bg-blue-50 shadow-md rounded-md p-6">
      <h2 class="text-lg font-semibold mb-4">Booking History</h2>

      <table class="w-full">
        <thead>
          <tr>
            <th class="text-left p-2">Date</th>
            <th class="text-left p-2">Time</th>
            <th class="text-left p-2">Location</th>
            <!-- <th class="text-left p-2">UserId</th> -->
            <th class="text-left p-2">Service Provider Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookings as $booking) 
          <tr>
            <td class="p-2">{{ $booking->date }}</td>
            <td class="p-2">{{ $booking->time }}</td>
            <td class="p-2">{{ $booking->location }}</td>
            <!-- <td class="p-2">{{ $booking->user_id }}</td> -->

            <td class="p-2">
           {{ $booking ->name}}
                </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>


    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="/update-profile/{{auth()->user()->id}}" method="POST">
  @csrf 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ auth()->user()->address }}">
  </div>
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone_no }}">
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

        </div>
      </div>
    </div>


  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
