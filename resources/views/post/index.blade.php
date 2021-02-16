<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link href="{{asset('css/header.scss')}}" rel="stylesheet">
  <link href="{{asset('css/index.scss')}}" rel="stylesheet">
  <link href="{{asset('css/footer.scss')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/reset.css')}}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Films-php</title>
</head>
<body>

@include('shared.header')

<!-- 広告部分 -->
<div class='add-header-contents'>
  <h2 class='header-service-title'>
    F i l m s
  </h2>
  <p class='header-service-explain'>
    〜観たい映画がきっと見つかる〜
  </p>
  <div class='store-btn'>
    <a href="#"><img src="https://linkmaker.itunes.apple.com/ja-jp/badge-lrg.svg?releaseDate=2011-09-21&kind=iossoftware&bubble=ios_apps" alt="App Store" class="apple-btn"></a>
    <a href="#"><img src="../images/dl-android.png" alt="Google Play" class="google-btn"></a>
  </div>
</div>
<!-- 広告部分 -->

<!-- Filmsとは -->
<h2 class='feature-title'> Filmsとは </h2>
<div class="parents-horizon">
  <hr class='horizon'>
</div>
<p class='top-feature-title'>Filmsは、映画のレビューサービスです。</p>
<p class='second-feature-title'>観賞した作品のレビューを投稿したり、</p>
<p class='second-feature-title'>みんなのレビューをチェックできる機能をベースに</p>
<p class='second-feature-title'>「作品の観賞録」や「作品の感想・情報をシェアして楽しむツール」</p>
<p class='bottom-feature-title'>としてご利用いただけます。</p>
<!-- Filmsとは -->

<!-- 投稿一覧 -->
<div class='post-contents'>
  <h2 class='title'>新着投稿</h2>
  <ul class='post-lists'>

    <!-- 投稿のインスタンス変数になにか入っている場合、中身を展開 -->
      @foreach($posts as $post)
        <li class='list'>
          <div class='post-info'>
            <div class='user-page'>
              <a href="#">ユーザー名</a>
            </div>

            <!-- タイトル -->
            <h3 class='post-title'>
              {{ $post->title }}
            </h3>
            <!-- タイトル -->

            <!-- ジャンル -->
            <h2 class='post-genre'>
              ジャンル : {{ $post->genre }}
            </h2>
            <!-- ジャンル -->

            <!-- ネタバレ -->
            @if ($post->spoiler == '0')
              <details>
            @endif
              @if ($post->spoiler == '0')
                <summary role="button" aria-expanded="false" class='netabare'>このレビューはネタバレを含みます</summary>
              @endif
              <h3 class='post-content'>
                {{ $post->content }}
              </h3>
            @if ($post->spoiler == '0')
              </details>
            @endif
            <!-- ネタバレ -->
            

              <a href="#" class="btn btn-warning">編集</a>
              <a href="#" class="btn btn-danger">削除</a>

          </div>
        </li>
      @endforeach
    <!-- 投稿のインスタンス変数になにか入っている場合、中身を展開 -->

    <!-- 投稿がない場合のダミー -->
    @if ($post == '')
      <div class='post-dummy'>
        <h3 class='dummy-title'>
          まだ投稿はありません
        </h3>
      </div>
    @endif
    <!-- 投稿がない場合のダミー -->
  </ul>

</div>

<!-- 投稿一覧 -->

@include('shared.footer')

</body>
</html>