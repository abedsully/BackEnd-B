<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    <h1>SHOES STORE</h1>

    <div class="main">
        <section id="main-content">
            <img src="{{ asset('assets/nike.jpeg') }}" alt="nike">
    
            <div class="description">
                <h1>Nike Shoes</h1>
                <p>This is one the greatest shoes to ever be produced</p>
                <p class="pricing">Price: $175</p>
            </div>

            <div class="navigation">
                <a href="/nike">Go To Nike Store</a>
            </div>
    
        </section>
    
        <section id="main-content-2">
            <img src="{{ asset('assets/adidas.jpeg') }}" alt="nike">
    
            <div class="description">
                <h1>Adidas Shoes</h1>
                <p>This is also one the greatest shoes to ever be produced</p>
                <p class="pricing">Price: $178</p>
            </div>

            <div class="navigation">
                <a href="/adidas">Go To Adidas Store</a>
            </div>

        </section>
    </div>

</body>


</html>