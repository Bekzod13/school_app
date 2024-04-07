<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $search = \request()->search;
        $group_id = \request()->group_id;
        if($group_id){
            $users = User::search($search)->where("group_id", $group_id)->where('role_id', 3)->paginate(20);
        }else{
            $users = User::search($search)->where('role_id', 3)->paginate(20);
        }
        $groups = Group::get();
        return view('users.index', [
            'users' => $users,
            'groups' => $groups,
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
