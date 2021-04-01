<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\idea;

class ideacontroller extends Controller
{
    public function index(){
        return view('idea.input');
    }
    public function thnks(){
        return view ('idea.thnks');
    }

    public function display(){
        //TableSelect::orderby — select 文のソート条件を設定する
        $items= idea::orderby('created_at')->get();
        return view('company.manage')->with('items',$items);
    }



    public function add(){
        return view('idea.add');


    }

    public function post(Request $request){
        //ここでモデルに配列の中身を送付（tinker）と一緒
        idea::create($request->only([
        
            'idea_name',
            'idea_theme',
            'idea_detail',
            'budget',
            'sales_tgt',
            'people',
            'people_qlt',
            'marketing',
            'sdgs_no'
            ]));


        return redirect('idea/add');
    }
}
