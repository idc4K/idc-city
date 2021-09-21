<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/idc.css') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>IDC CITY</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="min-h-screen items-center">
       <img src="{{ asset('/images/c.jpg') }}" alt="BZV" class="image1">
       <h1>IDC CITY APP</h1>
       <p>il est {{ date('h:i A')}}.</p>
       {{-- <p>qqsxxcccccccccccccccccccccccccvvbbbbbbbbbbbbbbjjjjjjjhh-fjgjfllvlv</p> --}}

       <footer>
           <p  class="text-gray-400">&copy copyright {{date('Y')}} &middot <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">A propos</a></p>
       </footer>
    </body>
</html>
