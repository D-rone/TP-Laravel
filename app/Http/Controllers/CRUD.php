<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUD extends Controller
{
    public function getUsers()
    {
        $users = DB::select("select * from users;");
        return view("users", ["users" => $users]);
    }

    public function addForm()
    {
        return view("addForm");
    }

    public function addUser(Request $req)
    {
        $login = $req->input("login");
        $pwd = $req->input("pwd");
        DB::insert("INSERT INTO `users` (`login`, `pwd`) VALUES (?,?)", [$login, $pwd]);

        return redirect('/');
    }

    public function deleteUser(Request $req)
    {
        $id = $req->input("id");
        DB::delete("delete from users where id = (?)", [$id]);

        return redirect('/');
    }

    public function updateUserForm(Request $req)
    {
        $id = $req->input("id");
        $user = DB::select("select login , pwd from users where id=(?)", [$id]);
        return view("updateUserForm", ["user" => $user[0], "id" => $id]);
    }

    public function updateUser(Request $req)
    {
        $id = $req->input("id");
        $new_login = $req->input("new_login");
        $new_pwd = $req->input("new_pwd");

        DB::update("UPDATE users SET login = ?, pwd = ? WHERE id = ?", [$new_login, $new_pwd, $id]);

        return redirect('/');
    }
}



?>