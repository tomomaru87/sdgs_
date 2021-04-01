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
            @foreach($items as $ideaData)
            <div class="row">
                <label>SDGs事業の名称：<b>{{$ideaData->idea_name}}</b></label>
            </div>
            <div class="row">
                <label>事業内容：<b>{{$ideaData->idea_detail}}</b></label>
            </div>

            <div class="row">
                <label>予算：<b>{{$ideaData->budget}}</b></label>
            </div>

            <div class="row">
                <label>どんな人に役立つ事業か？：<b>{{$ideaData->sales_tgt}}</b></label>
            </div>

            <div class="row">
                <label>事業の運営に何人くらいのリソースが必要か？：<b>{{$ideaData->people}}</b></label>
            </div>

            <div class="row">
                <label>その人たちはどんなスキルを持っていますか？：<b>{{$ideaData->people_qlt}}</b></label>
            </div>

            <div class="row">
                <label>マーケティング戦略はありますか？：<b>{{$ideaData->marketing}}</b></label>
            </div>


            <div class="row">
                <label>17個の目標のうち、この事業で達成できる番号は何番ですか？：<b>{{$ideaData->sdgs_no}}</b></label>
            </div>
             
            <hr>
            @endforeach
            <!-- ここまで -->
        </div>
        <!-- ここにBootstrapで使用するjavascriptファイルを記述します。 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>