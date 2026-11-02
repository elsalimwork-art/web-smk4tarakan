
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Visi &amp; Misi - SMK Negeri 4 Tarakan</title>

    {{-- CSS dan JavaScript melalui Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Style Livewire --}}
    @livewireStyles
</head>
<body class="min-h-screen bg-[#FCF7FF]"
      style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;">

    @livewire('visi-misi-page')

    @livewireScripts
</body>
</html>
