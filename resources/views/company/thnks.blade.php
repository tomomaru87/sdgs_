<?php
        // $name=$_POST['name'];
        // $contents=$_POST['contents'];
        // $history=$_POST['history'];
        // $link=$_POST['link'];
        // $msg=$_POST['msg'];


        function escape($str){
            return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
        }


        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>

<h2>内容の確認</h2>
<table>
<thead>
<tr>
<th>登録内容をご確認ください。</th>
</tr>
</thead>
<tbody>

<tr>
<td>名前：</td>
<td> {{$name}}</td>
</tr>

<tr>
<td>事業内容：</td>
<td>{{$contents}}</td>
</tr>


<tr>
<td>会社の沿革：</td>
<td>{{$history}}</td>
</tr>


<tr>
<td>サイトリンク：</td>
<td>{{$link}}</td>
</tr>

<tr>
<td>アイディア提出者にメッセージ：</td>
<td>{{$msg}}</td>
</tr>




</tbody>


</table>
<p>会社のロゴ</p>
<img src="<?echo $path.$filename;?>">


<form method="post" action="send" >
{{ csrf_field()}}
<input type="hidden" name="name" value="{{$name}}">
<input type="hidden" name="contents" value="{{$contents}}">
<input type="hidden" name="history" value="{{$history}}">
<input type="hidden" name="link" value="{{$link}}">
<input type="hidden" name="msg" value="{{$msg}}">
<button type="submit"name="submit">送信する</button>


<button type="button" class="btn btn-primary btn-search" method="post" name="back" id="backbtn">入力画面に戻る</button>
</form>



    
</body>
</html>