<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = (new Post())->getAll()->paginate(5);
        return view('admin.posts', ['posts' => $posts]);

    }

    public function show($id)
    {
        $postare = (new Post())->getById($id)->get()->first();
        return view('show', ['postare' => $postare]);

    }

    public function newPost()
    {

        if(!auth()->user()->is_admin) return redirect('/');
        return view('new');

    }

    public function savePost(SavePostRequest $request)
    {
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


    public function remove($id)
    {
        if(!auth()->user()->is_admin) return redirect('/');
        $count = (new Post())->destroy($id);
        if ($count) {
            return redirect()->back()->with(["success" => true, "message" => "sters cu sucess"]);
        } else {
            return redirect()->back()->with(["success" => false, "message" => "eroare"]);
        }
    }

}
