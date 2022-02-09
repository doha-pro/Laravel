<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <h1>Add Article</h1>
    <form method="POST" action="{{ route('article.updating') }}">
    @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
        Name: <input type="text" name="name" value="{{$article->name}}">
        Details: <input type="textarea" name="details" value="{{$article->details}}">
        Slug: <input type="text" name="slug"  value="{{$article->slug}}">
        Category Id: <input type="text" name="categoryId" value="{{$article->category_id}}">
        <button>Submit</button>
        @if ($errors->any())
            <div style="color:red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>
</html>