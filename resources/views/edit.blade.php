<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th {
      background-color: black;
      color: white;
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
      color: white;
    }
  </style>
</head>

<body>
  <form action="/edit" method="post"> 
    {{-- formタグはサーバーに入力された情報を送信する。actionは情報の送信先。methodにgetを指定するとURLの末尾に情報が付与されて送信される。--}}
    <table>
      @csrf
      <tr>
        <th>
          id
        </th>
        <td>
          <input type="text" name="id" value="{{$former->id}}">
        </td>
      </tr>
      <tr>
        <th>
          list
        </th>
        <td>
          <input type="text" name="list" value="{{$former->list}}">
        </td>
      </tr>
    </table>
    <button>更新</button>
  </form>
</body>

</html>