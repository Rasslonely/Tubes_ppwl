<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../../../assets/images/logo-cyborg1.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Cyborg | {{ $title }}</title>
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="../../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../../assets/css/product.css">

    <!-- Bootstrap icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body>

    @include('layouts.navigation')

    @yield('admin')

    <script src="../../../assets/js/navigation.js"></script>
</body>

</html>
