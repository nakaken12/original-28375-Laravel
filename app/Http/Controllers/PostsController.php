<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\StorePosts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $query = Post::query();

            $query->where('title', 'LIKE', "%{$search}%");
            $posts = $query->orderBy('created_at', 'desc')->paginate(10);

            $cnt = count($posts);

            return view('post.index', compact('posts', 'cnt', 'search'));
        }

        $posts = DB::table('posts')
        ->select('id', 'title', 'genre', 'spoiler', 'content', 'user_id')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosts $request)
    {
        $post = new Post;

        $post->title = $request->input('title');
        $post->genre = $request->input('genre');
        $post->spoiler = $request->input('spoiler');
        $post->content = $request->input('content');
        $post->user_id = Auth::id();

        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePosts $request, $id)
    {
        //
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->genre = $request->input('genre');
        $post->spoiler = $request->input('spoiler');
        $post->content = $request->input('content');
        $post->user_id = Auth::id();

        $post->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();

        return redirect('/');

    }

    public function anime(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "アニメ");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function action(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "アクション");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function adventure(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "アドベンチャー");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function sf(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "SF");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function kids(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "キッズ・ファミリー");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function comedy(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "コメディ");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function suspense(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "サスペンス");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function historical(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "時代劇");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function youth(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "青春");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function war(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "戦争");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function documentary(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "ドキュメンタリー");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function drama(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "ドラマ");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function fantasy(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "ファンタジー");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function horror(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "ホラー");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function musical(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "ミュージカル・音楽");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

    public function love(Request $request)
    {
        $search = $request->input('search');

        $query = Post::query();

        $query->where('genre', "恋愛");
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        $cnt = count($posts);

        return view('post.index', compact('posts', 'cnt', 'search'));
    }

}
