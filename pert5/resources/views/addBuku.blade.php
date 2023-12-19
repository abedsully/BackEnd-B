<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center mt-5">Add New Book</h2>


    <form action="/store-buku" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="d-flex flex-column align-items-center pt-3 gap-3">
            <div class="form-group col-4">
                <label for="">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter book title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label for="">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Enter book description" name="description" value="{{old('description')}}">
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label for="">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Enter book author" name="author" value="{{old('author')}}">
                @error('author')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label for="">Stocks</label>
                <input type="text" class="form-control @error('stocks') is-invalid @enderror" placeholder="Enter book stocks" name="stocks" value="{{old('stocks')}}">
                @error('stocks')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label for="">Release Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" placeholder="Enter book date" name="date" value="{{old('date')}}">
                @error('date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label for="">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Enter book image" name="image" value="{{old('image')}}">
                @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

        </div>
    </form>
</body>
</html>