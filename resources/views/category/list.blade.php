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

<h2>Categories Table</h2>
<h2>Create Category <a href="/create">here</a></h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
  </tr>
  @foreach ($categories as $category)
  <tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category-> name }}</td>
    <td><a href="/delete/{{ $category -> id }}">Delete </a></td>
    <td><a href="/update/{{ $category -> id }}">Update</a></td>
  </tr>
  @endforeach

</table>

</body>
</html>