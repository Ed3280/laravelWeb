<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\users;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{

    public function createUser(Request $request)
    {
        $user = new users();

        $user->login = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->active = true;
        $user->created = date("Y-m-d H:i:s");
        $user->lastSession = $request->_token;

        $user->save();
        return redirect()->route("admin.index");
    }
    public function showUsers(Request $request)
    {
        if($request->ajax())
        {
            $data = users::select("code","login","name","lastname","email","active")->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn("action",function($row){
                    $btnGroup = "<div class='btn-group btn-group-sm' role='group'>".
                                "   <a href='javascript:void(0)' class='btn btn-link btn-icon bigger-130 text-info'><i data-feather='search'></i></a>".
                                "   <a href='javascript:void(0)' class='btn btn-link btn-icon bigger-130 text-success'><i data-feather='edit'></i></a>".
                                "   <a href='javascript:void(0)' class='btn btn-link btn-icon bigger-130 text-danger'><i data-feather='trash'></i></a>".
                                "</div>";
                    return $btnGroup;
                })
                ->rawColumns(["action"])
                ->make(true);
        }

        return view("admin/table-advanced");
    }

}
