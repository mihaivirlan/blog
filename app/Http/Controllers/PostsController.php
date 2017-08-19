<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = (new Post())->getAll()->paginate(8);
        return view('posts', ['posts' => $posts]);

    }

    public function show($id)
    {
        $postare = (new Post())->getById($id)->get()->first();
        return view('show', ['postare' => $postare]);

    }

    public function newPost()
    {
        $this->middleware('auth');
        if(!auth()->user()->is_admin) return redirect('/');
        return view('new');

    }

    public function savePost(SavePostRequest $request)
    {
        $this->middleware('auth');
        if(!auth()->user()->is_admin) return redirect('/');
        $input = $request->all();
        $input['user_id'] = auth()->id();

        $image = $request->file('imagine');
        $input['imagine'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/posts');
        $image->move($destinationPath, $input['imagine']);

        $new = (new Post())->newInstance();
        $new->fill($input);
        DB::beginTransaction();
        try {
            $new->save();

            DB::commit();
            return redirect($request->server("HTTP_REFERER"))->with(["success" => true, "message" =>"Added"]);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect($request->server("HTTP_REFERER"))->with(["success" => false, "message" => $e->getMessage()]);
        }
    }

}
