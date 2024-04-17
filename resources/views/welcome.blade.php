<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
@component('navbar', ['activeLink' => 'home']) @endcomponent
    
@component('body', ['categories' => $categories, 'results' => $results,'users'=>$users, 'reviews' => $reviews]) @endcomponent

    @component('footer') @endcomponent

    <div>
        </div>
</body>
</html>