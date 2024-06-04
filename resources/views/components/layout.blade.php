<!DOCTYPE html>
<html lang="en" className="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body className="h-full">

{{ $slot }}

</body>
</html>