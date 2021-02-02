<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = new User();

        if($request->has('action') && $request->get('action') === 'search') {
            $users = $user->filterAll($request);
        } else {
            $users = $user->orderBy('name', 'asc')->paginate(10);
        }

        return view('users.index', compact('users'));
    }
}
