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
  <form action="/create" method="post">
    <table>
      @csrf
        {{-- <tr>
          <th>id</th>
          <td>
            <input type="text" name="id">
          </td>
        </tr> --}}
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
    @foreach ($items as $item) 

     <tr>
       <form action="{{ route('todo.update', ['id' => $item->id]) }}" method="post">
            @csrf
          {{-- <input name="id" value="{{$former->id}}"> --}}
          {{-- <input type="text" name="id" id="{{$item->id}}" value="{{$item->id}}"> --}}
         <input type="text" name="list" value="{{$item->list}}">
         {{-- ->list　このlistがデータベースのカラムのlistである --}}
          <button>更新</button>
       {{-- </form> --}}

       {{-- <form action="/delete" method="post"> --}}
         {{-- @csrf --}}
        </form>
        <form action="{{ route('todo.delete', ['id' => $item->id])}}" method="post">
          @csrf
          <button>削除</button>
        </form>
      </tr>
      <br>

      @endforeach

  </table>
</body>
</html>