<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    th {
      background-color: black;
      color: snow;
      padding: 5px 30px;
    }
    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background: black;
      color: snow;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>list</th>
    </tr>
    @foreach ($items as $item) 
    <tr>
      <td>
        {{$item->id}}
      </td>
      <td>
        {{$item->list}}
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>