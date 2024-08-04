<!-- resources/views/add_package.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Package</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container">
        @include('themes.GoTrip.Hotel.frontend.blocks.form_add_package')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
