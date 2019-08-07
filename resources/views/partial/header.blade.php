<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Tijaroh') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:700&display=swap');
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        /* @media (max-width: 360px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        } */
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
