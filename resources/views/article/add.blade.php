<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
</head>
<body>
    <h1>Add Article</h1>
    <form method="POST" action="{{ route('article.save') }}">
    @csrf
        Name: <input type="text" name="name">
        Details: <input type="textarea" name="details">
        Slug: <input type="text" name="slug">
        Category Id: <input type="text" name="categoryId">
        @if ($errors->any())
            <div style="color:red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button>Submit</button>
    </form>
</body>
</html>