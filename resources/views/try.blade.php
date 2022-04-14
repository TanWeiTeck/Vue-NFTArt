<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$data}}</p>
    @foreach ($data as $data)

    <p>{{$data['name']}}</p>
    {{-- <p>{{$getCategoryIDRelation['active']}}</p> --}}
    <p>{{$data['image']}}</p>
    <p>{{$data['price']}}</p>
    @endforeach
</body>
</html>
