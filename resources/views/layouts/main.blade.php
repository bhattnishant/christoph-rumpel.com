<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>{{ $title }}</title>
    <meta name="description"
          content="Hi, I am Christoph Rumpel and this is my personal blog where I share my Laravel, PHP anb business experiences.">
    <meta name="author" content="Christoph Rumpel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('partials.favicon')

<!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    @livewireStyles

@if($page === 'home')
    @include('partials.metaHome')
@elseif($page === 'post')
    @include('partials.metaPost')
@elseif($page === 'speaking')
    @include('partials.metaSpeaking')
@elseif($page === 'uses')
    @include('partials.metaUses')
@endif

    @production
    <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" site="DEPGUYJS" defer></script>
        <!-- / Fathom -->
    @endproduction

    <script defer src="{{ mix('js/app.js') }}"></script>

</head>

<body class="bg-bgBlue">
<div class="container mx-auto  max-w-5xl p-8 md:p-12">
    <header class="flex flex-col lg:flex-row items-center mb-8 lg:mb-32">
        @include('partials.logo')
        @include('partials.nav')
    </header>

    {{ $slot }}
</div>

@include('partials.footer')

@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
