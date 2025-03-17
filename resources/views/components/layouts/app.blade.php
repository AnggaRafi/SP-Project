<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>{{ $title ?? 'SPP Sekolah KDA' }}</title>
    
</head>

<body class="font-roboto">

    @isset($modal_riwayat)
        {{ $modal_riwayat }}
    @endisset


    @isset($navbar)
        {{ $navbar }}
    @endisset
    
    <div class="p-4 @isset($navbar) sm:ml-64 @endisset">
        <div class="mt-7">
            {{ $slot }}
        </div>
    </div>

</body>

</html>
