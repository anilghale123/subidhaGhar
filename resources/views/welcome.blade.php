<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
   <style>
     /* body {
      background-image: url('/landing.jpeg');
      background-size: cover;
      background-position: center;
     
    } */
   </style>
</head>
<body class="bg-blue-100">
@component('navbar', ['activeLink' => 'home']) @endcomponent
    
@component('body', ['categories' => $categories, 'results' => $results, 'reviews' => $reviews]) @endcomponent

    @component('footer') @endcomponent

    <div>
        </div>
</body>
</html>