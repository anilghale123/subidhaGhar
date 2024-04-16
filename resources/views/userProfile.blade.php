<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-50">
@component('navbar', ['activeLink' => 'home']) @endcomponent
    <h1>Hey this is userProfile Section!!!</h1>

    @component('footer') @endcomponent
</body>
</html>