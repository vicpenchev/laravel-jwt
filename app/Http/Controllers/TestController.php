<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function openAction()
    {
        $data = "This action is open and can be accessed without the client being authenticated";
        return response()->json(compact('data'),200);
    }

    public function closedAction()
    {
        $data = "This action needs authentication and only authorized users can see this";
        return response()->json(compact('data'),200);
    }
}
