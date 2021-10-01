<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('layouts.admin');
    }


    public function dashboard(Request $request)
    {
        return view('pages.dashboard.index');
    }


    public function provedores(Request $request)
    {
        return view('pages.provedores.index');
    }
}
