<!DOCTYPE html>
<html class="overflow-x-hidden max-w-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title>SkyHire GmbH - Homepage</title>

        <!-- Meta Tags -->
        <meta name="SkyHire GmbH" content="Willkommen auf der offiziellen Homepage der SkyHire GmbH!">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="recruiting, it, skyhire, job, jobs, developer, find jobs" />
        <meta name="publisher" content="SkyHire GmbH" />
        <meta name="copyright" content="SkyHire GmbH" />
        <meta name="author" content="Yusuf Emik & Engin Emik" />

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

        <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest')}}">

        <style>
            body {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body class="bg-white  overflow-x-hidden max-w-full">
            <script src="{{ asset('js/alpine.js') }}"></script>
            <!-- Navigation Section-->
            @include('components.navigation')
            <!-- Navigation Section End -->

            <!-- Hero Section -->
            @include('components.hero')
            <!-- Hero Section End -->

            <!-- Logo Section -->
            @include('components.logos')
            <!-- Logo Section End -->

            <!-- About Us Section -->
            @include('components.about')
            <!-- About us Section End -->

            <!-- Why Us Section -->
            @include('components.why')
            <!-- Why Us Section End -->

            <!-- Testimonial Section -->
            @include('components.testimonial')
            <!-- Testimonial Section End -->

            <!-- Stats Section -->
            @include('components.stats')
            <!-- Stats Section End -->

            <!-- Team Section -->
            @include('components.team')
            <!-- Team Section End -->

            <!-- Forms Section -->
            @include('components.forms')
            <!-- Forms Section Ends -->

            <!-- Footer Section -->
            @include('components.footer')
            <!-- Footer Section Ends -->
    </body>
</html>
