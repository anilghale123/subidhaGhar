<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <title>Document</title>
</head>
<body>
    @component('navbar', ['activeLink' => 'home']) @endcomponent
    
    @component('body') @endcomponent
    <div>
        </div>
</body>
</html>