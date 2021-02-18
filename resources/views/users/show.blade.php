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

<!-- 投稿一覧 -->
<div class='post-contents'>
  <h2 class='title'>{{ $user_name }}</h2>
  <h2 class='sub-title'>{{ $cnt }}件の投稿</h2>
  <ul class='post-lists'>

    <!-- 投稿のインスタンス変数になにか入っている場合、中身を展開 -->
      @foreach($posts as $post)
        <li class='list'>
          <div class='post-info'>

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
            
            <div class="edit-delete-btn">
              <a href="{{ route('post.edit', ['id' => $post->id ])}}" class="edit-btn btn btn-warning">編集</a>
              <form method="post" action="{{ route('post.destroy', ['id' => $post->id ])}}" id="delete_{{ $post->id }}">
                @csrf
                <a href="#" class="btn btn-danger" data-id="{{ $post->id }}" onclick="deletePost(this);">削除</a>
              </form>
            </div>
            
          </div>
        </li>

      <script>
        function deletePost(e) {
          'use strict';
          if (confirm('本当に削除してよろしいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
          }
        }
      </script>

      @endforeach
    <!-- 投稿のインスタンス変数になにか入っている場合、中身を展開 -->

    <!-- 投稿がない場合のダミー -->
    @if ($posts == '')
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