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


    <form class="d-flex flex-column align-items-center mt-5 gap-3">
        <h2>Login Form</h2>
            <div class="form-group col-sm-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="form-group col-sm-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <p>Don't have an account yet? <a href="/register">Register Here!</a></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
