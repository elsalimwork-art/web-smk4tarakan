
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPMB - SMK Negeri 4 Tarakan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-[#F3F8FF]"
      style="font-family:'Plus Jakarta Sans Variable','Plus Jakarta Sans',sans-serif;">

    @livewire('spmb-page')

    @livewireScripts
</body>
</html>
