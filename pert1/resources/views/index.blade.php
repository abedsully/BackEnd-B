<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Judul Website</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <h1 style="color: red;">Paragraph 1</h1>
    <hr>
    <p>Ini adalah teks dari paragraf 1</p>
    <h2>Paragraph 2</h2>
    <p>Ini adalah teks dari paragraf 2</p>
    <h3>Paragraph 3</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio perferendis, in blanditiis necessitatibus repudiandae assumenda voluptates, ipsam illo pariatur id excepturi delectus dolore! <br>Beatae omnis earum saya adalah kucing perferendis veniam ut reprehenderit?</p>






    <h4>Paragraph 4</h4>
    <p>Ini paragraf Lorem ipsum dolor sit amet.</p>

    <a href="https://bncc.net">Click Me!</a>

    <img src="{{ asset('assets/bncc.png') }}" alt="" style="width: 15rem;">


    <form action="">
        <input type="text">
        {{-- <input type="radio" name="" id="">
        <input type="checkbox" name="" id="">
        <input type="color" name="" id="">
        <input type="date" name="" id=""> --}}
        <button type="submit">Enter</button>
    </form>
    

    <div id="edit">
        <h5>Paragraph 5</h5>
        <p>Ini paragraf Lorem ipsum dolor sit amet.</p>
    </div>

</body>

</html>