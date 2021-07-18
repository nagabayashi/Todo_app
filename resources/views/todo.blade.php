<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TodoList</title>
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
    tr{
      display: block;

    }
  </style>
</head>
<body>
  <form action="/" method="post">
    <table>
      @csrf
        <tr>
          <th>id</th>
          <td>
            <input type="text" name="id">
          </td>
        </tr>
        <tr>
          <th>list</th>
          <td>
            <input type="text" name='list'>
          </td>
        </tr>
      </table>
      <button>追加</button>
  </form>
  <table>
    <form action="/" method="post">
      @foreach ($items as $item) 
      <tr>
        <label for="{{$item->id}}">
          {{$item->id}}
        </label>
        {{-- <input type="text" name="id" id="{{$item->id}}" value="{{$item->id}}"> --}}
        <input type="text" name="list" id="{{$item->id}}" value="{{$item->list}}">
        <button>更新</button>
        <button>削除</button>
      </tr>
      <br>
      @endforeach
    </form>
  </table>
</body>
</html>