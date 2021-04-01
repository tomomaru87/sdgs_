
<?php

$ideaName = $_POST['idea_name'];
$detail = $_POST['idea_detail'];
$budget = $_POST['budget'];
$tgt = $_POST['sales_tgt'];
$people = $_POST['people'];
$qlt = $_POST['people_qlt'];
$mark = $_POST['marketing'];
$sdgsNo = $_POST['sdgs_no'];

?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>掲示板システム</title>

        <!-- これはbootstrapのスタイルシートを定義しています。 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>

    <h1>内容の確認</h1>
       <div class="container">
         
            <div class="row">
                <label>SDGs事業の名称：<b>{{$ideaName}}</b></label>
            </div>
            <div class="row">
                <label>事業内容：<b>{{$detail}}</b></label>
            </div>

            <div class="row">
                <label>予算：<b>{{$budget}}</b></label>
            </div>

            <div class="row">
                <label>どんな人に知ってほしい事業か：<b>{{$tgt}}</b></label>
            </div>

            <div class="row">
                <label>事業の運営に何人くらいの人が必要か？：<b>{{$people}}</b></label>
            </div>

            <div class="row">
                <label>どんなスキルを持った人材が必要か？：<b>{{$qlt}}</b></label>
            </div>

            <div class="row">
                <label>マーケティング戦略について：<b>{{$mark}}</b></label>
            </div>

            <div class="row">
                <label>事業で達成できるSDGsナンバー：<b>{{$sdgsNo}}</b></label>
            </div>
             
            <hr>

            　<form method="post" action="add">
            {{csrf_field()}}
            <input type="hidden" name="idea_name" value="{{$ideaName}}">
            <input type="hidden" name="idea_detail" value="{{$detail}}">
            <input type="hidden" name="budget" value="{{$budget}}">
            <input type="hidden" name="sales_tgt" value="{{$tgt}}">
            <input type="hidden" name="people" value="{{$people}}">
            <input type="hidden" name="people_qlt" value="{{$qlt}}">
            <input type="hidden" name="marketing" value="{{$mark}}">
            <input type="hidden" name="sdgs_no" value="{{$sdgsNo}}">
            
            <input type="submit" name="submit" >
            </form>
          
            <!-- ここまで -->
        </div>
        <!-- ここにBootstrapで使用するjavascriptファイルを記述します。 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>