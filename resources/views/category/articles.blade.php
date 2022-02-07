<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Articles for {{$category->name}} </h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
  </tr>
  @foreach ($articles as $article)
  <tr>
    <td>{{ $article->id }}</td>
    <td>{{ $article-> name }}</td>
    <td>{{ $article-> details }}</td>
    <td><a href="/deleteArticle/{{ $article -> id }}">Delete </a></td>
    <td><a href="/updateArticle/{{ $article -> id }}">Update</a></td>
  </tr>
  @endforeach

</table>

</body>
</html>