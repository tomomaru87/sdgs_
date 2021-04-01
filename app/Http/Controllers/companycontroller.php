<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\company;//モデルを使うため追加した
use\App\Http\Requests\companypost;

class companycontroller extends Controller
{

    //こいつを表示しないと動かなかった。
    public function index()
    {
        return view('company.input');
    }

    public function thnks(){
        return view('company.thnks');
    }

    public function send(){
        return view('company.send');
    }

    public function add(){
        //TableSelect::orderby — select 文のソート条件を設定する
        $items= company::orderby('name')->get();
        return view('home')->with('items',$items);
    }


    //送信内容の受け取りとリダイレクトバリデーションをしたい
    public function company(companypost $request){
        //ここでランダムなファイル名に変換しimages/companyに画像を保存する。
        $img=$_FILES['image']['name'];
        $name = $request->input('name');
        $contents = $request->input('contents');
        $history = $request->input('history');
        $link =$request->input('link');
        $msg = $request->input('msg');
        
        
        $path='images/company/';
        // 既存のファイル名と重複しないように変更
        $filename = uniqid().$img;
        move_uploaded_file($_FILES['image']['tmp_name'],$path.$filename);


            
             return view('company.thnks',compact('name','contents','history','link','msg','filename','img','path'));
                }

    public function post(companypost $request){
        
        //ここでモデルに配列の中身を送付渡す
        company::create($request->only([
        
        'name',
        'contents',
        'link',
        'msg',
        'history',
        'created']));

        //送信完了画面に飛ばす
        return redirect('send');
    }
}
