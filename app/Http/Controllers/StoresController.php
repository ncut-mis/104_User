<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index()
    {
        $store = Store::all();
        return view('store.storelist', compact('store'));
    }

    public function detail($id)
    {
        $store = Store::all()->where('id',$id);
        $comment = Comment::all()->where('Store_id',$id);
        $cc = 0;

        foreach ($comment as $count){
            $user = User::all()->where('id',$count['Member_id'])->pluck('name');
            $comment[$cc]['user_name'] = $user->first();
            $cc++;
            $count['rate']= $count['rate']*20;
        }

        if (Auth::user() == null){
            $user_id['0'] = 0;
        }else{
            $user_id = Comment::all()->where('Member_id', Auth::user()->id)->pluck('Member_id');
        }

        if (Auth::user() == null){
            $user_id['0'] = 0;
        }else{
            $comment_id = Comment::all()->where('Member_id', Auth::user()->id)->pluck('id');
        }
        return view('store.storedetail',compact('store','comment','user_id','comment_id'));
    }

    public function search(Request $request)
    {
        $search = $request['name'];

        $store = Store::where('name','LIKE',"%$search%")->get();

        return view('store.storelist',compact('store'));
    }
}
