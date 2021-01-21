<?php

namespace App\Http\Controllers;

use App\Models\Models\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = NewUser::all();
        return view('public.post.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = NewUser::findOrFail($id);



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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }

    public function home()
    {
        $users = NewUser::all();
        return view('home', ['users' => $users]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $order = DB::table('order')->where('name', 'like', "%".$search."%")->get();

        return view('search.result', compact('order'));
    }

    public
    function searchUsersInTable(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:1|max:20',
        ]);

        if ($valid) {
        $users = DB::table('new_users')->where("name LIKE '%" . $valid . "%'");
            if ($users) {
                foreach ($users as $u) {
                    echo $u->id . '|' . $u->name . "\n";
                }
            }
        }
    }
}
