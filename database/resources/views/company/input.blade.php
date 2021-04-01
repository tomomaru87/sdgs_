<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>企業情報入力</title>

        <!-- これはbootstrapのスタイルシートを定義しています。 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>企業情報入力</h1>
            <form method="post" action="input" enctype="multipart/form-data" >
                <!-- 入力フォームはここから -->
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="comment">会社名</label>
                    <input type="text" class="form-control" id="title" name="name" 
                           placeholder="ここに会社名を入力してください">{{old('name')}}
                </div>

                <div class="form-group">
                    <label for="comment">事業内容</label>
                    <textarea class="form-control" rows="5" id="comment" name="contents" 
                              placeholder="事業内容を入力してください">{{old('contents')}}</textarea>
                </div>

                <div class="form-group">
                    <label for="comment">会社の歴史</label>
                    <textarea class="form-control" rows="5" id="comment" name="history" 
                              placeholder="会社の歴史">{{old("history")}}</textarea>
                </div>

                <div class="form-group">
                    <label for="comment">自社のホームページへのリンク</label>
                    <input type="text" class="form-control" id="title" name="link" 
                           placeholder="ホームページのリンクを入力してください。">{{old("link")}}</input>
                </div>

                <div class="form-group">
                    <label for="comment">メッセージ</label>
                    <textarea class="form-control" rows="5" id="comment" name="msg" 
                              placeholder="アイディアを出す人へのメッセージ">{{old('msg')}}</textarea>
                </div>

                <div class="form-group">
                    <label for="comment">会社のロゴ（HOME画面のサムネイルとして使用されます）</label>
                    <input type="file" class="form-control" id="comment" name="image">{{old('image')}}</input>
                </div>

                @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
                </div>
                @endif

             
                <input type="submit"  value="送信する" class="btn btn-primary btn-lg" name="contribute" >
                <!-- ここまで -->
            </form>
         
           
            <!-- ここまで -->
        </div>
        <!-- ここにBootstrapで使用するjavascriptファイルを記述します。 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>