<?php

namespace App\Http\Controllers;

use App\Dolist;
use App\Userinfo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DolistController extends CommonController
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index()
    {
        $datas = Dolist::Paginate(env('PAGE_ROWS'));
        return view('dolist.index', compact('datas'));
    }

    public function create(Request $request)
    {
        $info_id = $request->id;
        if (isset($info_id)) {
            $userinfo = Userinfo::find($info_id);
            return view('dolist.create', compact('userinfo'));
        }
        return redirect('do');
    }

    public function store(Requests\DolistRequest $request)
    {
        $data = $request->all();
        $data['addman_id'] = $this->user['id'];
        $res = Dolist::create($data);
        if ($res) {
            return $this->responseResult($res, $request, '添加失败', '添加成功', 'do');
        }
    }

    public function show($id)
    {
        $dolist = Dolist::where('info_id', $id)->get();
        $userinfo = Userinfo::find($id);
        return view('dolist.show', compact('dolist', 'userinfo'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request$req,$id)
    {
        $res = Dolist::find($id)->delete();
        return $this->responseResult($res, $req, '删除失败', '删除成功', 'do');
    }
}