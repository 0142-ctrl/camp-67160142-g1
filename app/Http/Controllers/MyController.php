<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function index(){
        return view('myview.index');
    }
    function submitForm(Request $req)
    {
        $data = [
            'fname'    => $req->fname,
            'lname'    => $req->lname,
            'birthday' => $req->birth,
            'gender'   => $req->gender,
            'address'  => $req->address,
            'music'    => $req->music,
            'favcolor' => $req->color,
        ];

    return view('myview.html101_view', compact('data'));
}
}
