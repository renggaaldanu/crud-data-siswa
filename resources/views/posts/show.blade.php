<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IBUPEDIA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(247, 243, 243)">
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <img src="{{asset('storage/posts/'. $post->image)}}" class="w-100 rounded" alt="">
            <hr>
            <h4>{{ $post->nama }}</h4>
            <h4>{{ $post->jurusan }}</h4>
            <h4>{{ $post->nohp }}</h4>
            <h4>{{ $post->alamat }}</h4>
            <h4>{{ $post->email }}</h4>
            <a href="/posts" class="btn btn-dark">Back</a>
        </div>
    </div>
</body>
</html>