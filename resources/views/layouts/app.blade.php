<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekowisata Tempurejo</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="public/images/icon.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- font custom -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Russo+One&family=Staatliches&display=swap" rel="stylesheet">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
</head>

<body class="bg-gray-50">
    {{-- Navbar --}}
    @include('partials.navbar')

    <main>
        {{-- Content --}}
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('partials.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    {{-- custom js --}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>