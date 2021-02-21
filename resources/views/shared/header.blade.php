<!-- 上部バー部分 -->

<script src="{{ mix('js/genre.js') }}"></script>

<div class='header'>
  <a href= "/", class="header-left">トップページ</a>

  <div id="parents", class="parents">
    <a href="#", class="header-left-genre">ジャンル</a>
    <ul id="genre-lists", class="genre-lists hidden">
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=アニメ') }}" class="genre-list">アニメ</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=アクション') }}" class="genre-list">アクション</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=アドベンチャー') }}" class="genre-list">アドベンチャー</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=SF') }}" class="genre-list">SF</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=キッズ・ファミリー') }}" class="genre-list">キッズ・ファミリー</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=コメディ') }}" class="genre-list">コメディ</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=サスペンス') }}" class="genre-list">サスペンス</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=時代劇') }}" class="genre-list">時代劇</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=青春') }}" class="genre-list">青春</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=戦争') }}" class="genre-list">戦争</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=ドキュメンタリー') }}" class="genre-list">ドキュメンタリー</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=ドラマ') }}" class="genre-list">ドラマ</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=ファンタジー') }}" class="genre-list">ファンタジー</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=ホラー') }}" class="genre-list">ホラー</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=ミュージカル・音楽') }}" class="genre-list">ミュージカル・音楽</a>
      </li>
      <li class="pull-down-list">
        <a href="{{ url('/post/index/genre=恋愛') }}" class="genre-list">恋愛</a>
      </li>
    </ul>
  </div>

  <a href="{{ url('/post/create') }}" class="header-left">投稿する</a>

  <form action="{{ route('post.index') }}" method="get" class="search-form">
    <input type="search" name="search" class="input-box" placeholder="タイトル名から探す">
    <input type="submit" value="検索">
  </form>

  <ul class='user-management'>
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}" class="user-nickname">{{ Auth::user()->name }}</a>
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