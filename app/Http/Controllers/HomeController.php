<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usersCount = User::count();
        $rolesCount = Role::count();
        $permissionsCount = Permission::count();
        $messagesCount = Message::count(); // ila ma3andkch Message Model, zid tgoliya nhidha

        return view('home', compact('usersCount', 'rolesCount', 'permissionsCount', 'messagesCount'));
    }
}
