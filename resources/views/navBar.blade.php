<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
</head>

<body>
    <nav class="p-5 bg-white mb-3 text-lg font-semibold">
        <div class="flex gap-5 justify-around items-center">
            <div class="text-2xl"> <a href="">SewaGriha</a> </div>
            <ul class="flex gap-5">
                <li><a href="/" class="{{ $activeLink === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ $activeLink === 'about' ? 'active' : '' }}">About</a></li>
                <li><a href="/contact" class="{{ $activeLink === 'contact' ? 'active' : '' }}">Contact</a></li>
            </ul>
        </div>
    </nav>


</body>

</html>