<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-md">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" required>
                    @error('username')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password"class="form-control" id="exampleInputPassword1" required>
                  @error('password')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">address</label>
                  <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp" required>
                  @error('address')
                <div class="text-danger">{{$message}}</div>
                @enderror
                </div>

                <div class="mb-3">
                  <label for="phoneno" class="form-label">Phone Number</label>
                  <input name="phoneno" type="text" class="form-control" id="phoneno" aria-describedby="emailHelp" required>
                  @error('phoneno')
                <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>