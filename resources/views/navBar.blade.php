<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>NavBar</title>
    <style>
      .dropdown {
  opacity: 0; 
  display: none; /* Initially hidden by default */
  transition: opacity 0.1s ease-in-out 2s; /* Delay hiding for 2 seconds */
   }

.relative:hover .dropdown {
  opacity: 1;  
  display: block; /* Show on hover */
}


    </style>
</head>

<body>
    <nav class="p-5 bg-white mb-3 text-lg font-semibold ">
        <div class="flex gap-5 justify-around items-center">
            <div class="text-2xl"> <a href="">SewaGriha</a> </div>
            <ul class="flex gap-5">
                <li><a href="/" class="{{ $activeLink === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ $activeLink === 'about' ? 'active' : '' }}">About</a></li>
                <li><a href="/contact" class="{{ $activeLink === 'contact' ? 'active' : '' }}">Contact</a></li>
            </ul>

            <div class="relative"> <img class="h-10 cursor-pointer" src="/user.png" alt="userIcon">
  
  <div class="dropdown absolute hidden top-12 right-0 bg-white shadow-md rounded-md p-4">  
    <a href="/userProfile" class="block py-2 hover:bg-gray-100">View Profile</a> 
    <a href="/logout" class="block py-2 hover:bg-gray-100">Logout</a>   
  </div>
</div>


        </div>
    </nav>
</body>

</html>