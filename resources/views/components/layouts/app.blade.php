<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
    <div>
        <a href="{{ route('home') }}" wire:navigate>Home</a>

        <a href="{{ route('dashboard') }}"> Dashboard</a>

        <a href="{{ route('about') }}" wire:navigate>About</a>
    </div>

        {{ $slot }}
    </body>
</html>
