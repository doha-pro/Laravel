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
    <form method="POST" action="{{ route('article.save') }}">
    @csrf
        Name: <input type="text" name="name">
        Details: <input type="textarea" name="details">
        Slug: <input type="text" name="slug">
        Category Id: <input type="text" name="categoryId">
        <button>Submit</button>
    </form>
</body>
</html>