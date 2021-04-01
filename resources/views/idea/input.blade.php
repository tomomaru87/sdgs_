<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アイディア情報入力</title>

        <!-- これはbootstrapのスタイルシートを定義しています。 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>アイディア情報入力</h1>
            <form method="post" action="thnks">
                <!-- 入力フォームはここから -->
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="comment">SDGs事業タイトル</label>
                    <input type="text" class="form-control" id="title" name="idea_name" 
                           placeholder="SDGs事業の名前を入力してください。">
                </div>

                <div class="form-group">
                    <label for="comment">SDGs事業の詳細</label>
                    <textarea class="form-control" rows="5" id="comment" name="idea_detail" 
                              placeholder="事業内容を入力してください"></textarea>
                </div>

                <div class="form-group">
                    <label for="comment">事業予算見積もり</label>
                    <textarea class="form-control" rows="5" id="comment" name="budget" placeholder="会社の歴史"></textarea>
                </div>

                <div class="form-group">
                    <label for="comment">顧客ターゲット</label>
                    <input type="text" class="form-control" id="title" name="sales_tgt" 
                           placeholder="どんな人にこの事業を届けたいですか？">
                </div>

                <div class="form-group">
                    <label for="comment">必要な人材の人数</label>
                    <input type="text" class="form-control" id="title" name="people" 
                           placeholder="何人くらいの人が関わる必要がありますか？">
                </div>

                <div class="form-group">
                    <label for="comment">事業立ち上げに必要な人材のスキル</label>
                    <textarea class="form-control" rows="5" id="comment" name="people_qlt" 
                              placeholder="事業の立ち上げや運営に必要なスキルは？"></textarea>
                </div>

              

                <div class="form-group">
                    <label for="comment">マーケティング戦略</label>
                    <textarea class="form-control" rows="5" id="title" name="marketing" 
                           placeholder="このアイディアをどうやって世の中に広めていきますか？"></textarea>
                </div>
             
                <div class="form-group">
                    <label for="comment">この事業で達成を目指すSDGsナンバーは？</label>
                    <input type="text" class="form-control" id="title" name="sdgs_no" 
                           placeholder="番号を自由に入力してください。">
                </div>

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