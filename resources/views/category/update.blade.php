<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
</head>
<body>
    <h1>Update Category</h1>
    <form method="POST" action="{{ route('category.updating')}}">
    
    @csrf
       <input type="hidden" name="id" value="{{$category->id}}">
        Name: <input type="text" name="name" value="{{$category->name}}" >
        @if ($errors->any())
            <div style="color:red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button>update</button>
    </form>
</body>
</html>