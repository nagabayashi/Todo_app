<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  //Illuminate\Http名前空間に用意されているRequestクラスを使用する
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)  //publicは公開型（クラスの外からもアクセスできる）のアクセス修飾子。関数や変数の前につける。
    {
        $items = DB::select('select * from tasks');  //クエリ文でtasksテーブルのレコードを全て$itemsに代入
        // dd($items);  
        return view('todo', ['items' => $items]);  //$itemsのレコード情報をtodo.blade.php内の'items'に入れ込む
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [   //連装配列
            'id' => $request->id,  //キーである'id'を指定することで、入力した値を呼び出す
            'list' => $request->list,
        ];
        // dd($param);
        DB::insert('insert into tasks (id, list) values (:id, :list)', $param);  //valueの:id, :listはプレースホルダ。ここに連装配列$paramのid,listの値を入れ込む。第１引数にレコード追加のクエリ文、第２引数にレコード値に代入する連装配列の変数がくる
        return redirect('/');  //ルートのページへリダイレクトで移動する。insert処理が終われば、/のページに移動するということ。
    }
    public function edit(Request $request){
        $param = [
            'id' => $request->id
        ];
        $item = DB::select('select * from tasks where id = :id', $param);
        return view('edit', ['form' => $item[0]]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'list' => $request->list,
        ];
        DB::update('update people set name =:name, age =:age where id =:id', $param);
        return redirect('/');
    }
}