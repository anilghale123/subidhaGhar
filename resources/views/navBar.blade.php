<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
</head>
<body>
<nav class="p-5 bg-white mb-3 text-lg font-semibold">
    <ul class="flex gap-5 justify-center items-center ">
        <li><a href="/" class="{{ $activeLink === 'home' ? 'active' : '' }}">Home</a></li>
        <li><a href="/about" class="{{ $activeLink === 'about' ? 'active' : '' }}">About</a></li>
        <li><a href="/contact" class="{{ $activeLink === 'contact' ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>

</body>
</html>