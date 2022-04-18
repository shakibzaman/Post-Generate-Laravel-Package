<<<<<<< HEAD
<h1>All Posts</h1>
@foreach($posts as $post)
   <h3>{{$post->title}}</h3>
    <p>{{$post->description}}</p>
   <button class="btn btn-primary">Read more</button>
@endforeach
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="jumbotron text-center">
            <h2>All Posts</h2>
        </div>
        <div class="card-body">
            @php $i=1; @endphp
            @foreach($posts as $post)
                <h3>{{$i}}. {{$post->title}}</h3>
                <p>{{$post->description}}</p>
                <button class="btn btn-primary">Read more</button>
                @php $i++; @endphp
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
</body>
</html>

>>>>>>>  Add | Blade design
