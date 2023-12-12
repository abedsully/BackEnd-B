<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <!-- Image and text -->

    <nav class="navbar navbar-light bg-info d-flex justify-content-between px-5">
        <a class="navbar-brand d-flex align-items-center gap-3" href="/index">
            <img src=" {{ asset('assets/logo.webp') }} " width="80" height="60" class="d-inline-block align-top"
                alt="">
            <p class="mt-2">Toko Sepatu</p>
        </a>

        {{-- text-decoration-none (IN BOOTSTRAP) == style: text-decoration: none; (IN REGULAR CSS) --}}
        <div class="d-flex gap-5">
            <a href="/index" class="text-decoration-none text-danger">Home</a>
            <a href="/adidas" class="text-decoration-none text-danger">Adidas</a>
            <a href="/nike" class="text-decoration-none text-danger">Nike</a>
        </div>

        <div class="">
            <a href="/login" class="btn btn-primary">Login</a>
        </div>
    </nav>

    {{-- text-center (IN BOOTSTRAP) == style: text-align: center; (IN REGULAR CSS) --}}
    <h1 class="text-center h3 mt-5">Toko Sepatu Pertemuan 4</h1>



    <div class="d-flex justify-content-center gap-4 mt-5">
        <div class="card" style="width: 18rem;">
            <img src=" {{ asset('assets/adidas.jpeg') }} " class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Adidas Shoes</h5>
                <p class="card-text">This is the best shoes to ever be manufactured.</p>
                <a href="/adidas" class="btn btn-primary btn-sm">Go To Adidas Store Page</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src=" {{ asset('assets/nike.webp') }} " class="card-img-top" alt="..." style="height: 17.9rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Nike Shoes</h5>
                <p class="card-text">This is the second best shoes to ever be manufactured.</p>
                <a href="/nike" class="btn btn-primary btn-sm">Go To Nike Store Page</a>
            </div>
        </div>
    </div>





</body>

</html>
