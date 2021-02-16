<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link href="{{asset('css/header.scss')}}" rel="stylesheet">
  <link href="{{asset('css/post.css')}}" rel="stylesheet">
  <link href="{{asset('css/footer.scss')}}" rel="stylesheet">
  <link href="{{asset('css/error.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/reset.css')}}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Films-php</title>
</head>
<body>

@include('shared.header')

<div class="posts-sell-contents">
  <div class="posts-sell-main">
    <h2 class="posts-sell-title">投稿の編集</h2>

    <!-- エラー文 -->
    <?php //if ($error['title'] === 'blank'): ?>
      <!-- <p class="error">・タイトル名を入力してください</p> -->
    <?php //endif; ?>
    <?php //if ($error['genre'] === 'blank'): ?>
      <!-- <p class="error">・「--」以外を選択してください</p> -->
    <?php //endif; ?>
    <?php //if ($error['spoiler'] === 'blank'): ?>
      <!-- <p class="error">・ネタバレの有無を選択してださい</p> -->
    <?php //endif; ?>
    <?php //if ($error['content'] === 'blank'): ?>
      <!-- <p class="error">・レビューを入力してください</p> -->
    <?php //endif; ?>
    <!-- エラー文 -->

    <form action="{{ route('post.store') }}" method="post" class="new_posts">
    @csrf
      <!-- タイトル名 -->
      <div class="weight-bold-text">
        タイトル名
        <span class="indispensable">必須</span>
      </div>
      <input type="text" name="title" class="title-text" placeholder="タイトル名" maxlength="40" value="<?php //print(htmlspecialchars($_POST['title'], ENT_QUOTES)); ?>">
      <!-- タイトル名 -->

      <!-- ジャンル -->
      <div class="posts-genre">
        <div class="form">
          <div class="weight-bold-text">
            ジャンル
            <span class="indispensable">必須</span>
          </div>
          <select name="genre" class="select-box">
            <option value="--">--</option>
            <option value="アニメ">アニメ</option>
            <option value="アクション">アクション</option>
            <option value="アドベンチャー">アドベンチャー</option>
            <option value="SF">SF</option>
            <option value="キッズ・ファミリー">キッズ・ファミリー</option>
            <option value="コメディ">コメディ</option>
            <option value="サスペンス">サスペンス</option>
            <option value="時代劇">時代劇</option>
            <option value="青春">青春</option>
            <option value="戦争">戦争</option>
            <option value="ドキュメンタリー">ドキュメンタリー</option>
            <option value="ドラマ">ドラマ</option>
            <option value="ファンタジー">ファンタジー</option>
            <option value="ホラー">ホラー</option>
            <option value="ミュージカル・音楽">ミュージカル・音楽</option>
            <option value="恋愛">恋愛</option>
          </select>
        </div>
      </div>
      <!-- ジャンル -->

      <!-- スコア -->
      <!-- スコア -->

      <!-- ネタバレ -->
      <div class="posts-spoiler">
        <div class="weight-bold-text">
          ネタバレ
          <span class="indispensable">必須</span>
        </div>
        <input type="radio" name="spoiler" value="0">ネタバレあり
        <input type="radio" name="spoiler" value="1">ネタバレなし
      </div>    
      <!-- ネタバレ -->

      <!-- レビュー -->
      <div class="posts-review">
        <div class="weight-bold-text">
          鑑賞記録
          <span class="indispensable">必須</span>
        </div>
        <textarea name="content" cols="30" rows="10" class="posts-text" placeholder="レビューを入力してください"><?php //print(htmlspecialchars($_POST['content'], ENT_QUOTES)); ?></textarea>
      </div>
      <!-- レビュー -->

      <!-- 下部ボタン -->
      <div class="sell-btn-contents">
        <input type="submit" class="btn btn-primary" value="投稿する">
      </div>
      <!-- 下部ボタン -->
    </form>
  </div>
</div>

@include('shared.footer')
  
</body>
</html>