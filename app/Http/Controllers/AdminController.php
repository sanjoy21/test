<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'description' => 'required'
        ]);

        $data = new ToDo();
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect()->route('add')->with('success','Data added successfully.');
    }

    public function view()
    {
        $data['list'] = ToDo::get();
        return view('view_list',$data);
    }

    public function delete($id)
    {
        $data = ToDo::find($id);
        $data->delete();

        return redirect()->back()->with('success','Data deleted successfully.');
    }



}
