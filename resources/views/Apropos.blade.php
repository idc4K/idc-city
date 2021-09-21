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
        <img src="{{ asset('/images/i.jpg') }}" alt="idc"  class="image1" >
       <h1>Crée avec le <span class="text-pink-500">&hearts;</span> par IDC4K</h1>
       <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Retour au menu principale</a></p>
    </body>
</html>
