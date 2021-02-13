<!-- 上部バー部分 -->
<?php 
/*session_start(); 
require('dbconnect.php');

if (isset($_SESSION['id']) && isset($_SESSION['time'])) {
  $id = $_SESSION['id'];

  $login = $db->prepare('SELECT * FROM users WHERE id=?');
  $login->execute(array($id));
  $member = $login->fetch();
}*/

?>

<script src="{{ mix('js/genre.js') }}"></script>

<div class='header'>
  <a href= "/", class="header-left">トップページ</a>

  <div id="parents", class="parents">
    <a href="#", class="header-left-genre">ジャンル</a>
    <ul id="genre-lists", class="genre-lists hidden">
      <li class="pull-down-list">
        <a href="genre.php?value=アニメ" class="genre-list">アニメ</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=アクション" class="genre-list">アクション</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=アドベンチャー" class="genre-list">アドベンチャー</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=SF" class="genre-list">SF</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=キッズ・ファミリー" class="genre-list">キッズ・ファミリー</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=コメディ" class="genre-list">コメディ</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=サスペンス" class="genre-list">サスペンス</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=時代劇" class="genre-list">時代劇</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=青春" class="genre-list">青春</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=戦争" class="genre-list">戦争</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=ドキュメンタリー" class="genre-list">ドキュメンタリー</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=ドラマ" class="genre-list">ドラマ</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=ファンタジー" class="genre-list">ファンタジー</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=ホラー" class="genre-list">ホラー</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=ミュージカル・音楽" class="genre-list">ミュージカル・音楽</a>
      </li>
      <li class="pull-down-list">
        <a href="genre.php?value=恋愛" class="genre-list">恋愛</a>
      </li>
    </ul>
  </div>

  <a href="post.php", class="header-left">投稿する</a>
  <form action="search.php" method="get" class="search-form">
    <input type="search" name="search" class="input-box" placeholder="タイトル名から探す">
    <input type="submit" name="submit" value="検索">
  </form>
  <ul class='user-management'>
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}" class="user-nickname">Home</a>
        @else
            <a href="{{ route('login') }}" class="login btn btn-primary">ログイン</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="sign-up btn btn-success">新規登録</a>
            @endif
        @endauth
    @endif
  </ul>
</div>
<!-- 上部バー部分 -->