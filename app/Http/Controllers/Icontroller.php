<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class Icontroller extends Controller
{
    //display data
    public function display_form()
    {
        $data = student::all();
        return view('crud/display_form', compact('data'));
    }


    //add data
    public function form_insert(Request $request)
    {
        $add = new student;
        if ($request->isMethod('post')) {
            $add->firstname = $request->get('firstname');
            $add->lastname = $request->get('lastname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect('display_form');
    }

    //delete data
    public function delete_data($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect("display_form");
    }

    //edit display
    public function edit_data($id)
    {
        $data = student::all();
        $edata = student::where('id', $id)->get();
        return view('crud/display_form', compact('data', 'edata'));
    }

    //update data
    public function edit_insert(Request $request, $id = '')
    {
        $add = student::find($id);
        if ($request->isMethod('post')) {
            $add->firstname = $request->get('firstname');
            $add->lastname = $request->get('lastname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect('display_form');
    }

    //search data
    public function search_data(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->get('search');
            $data = student::where('firstname', 'LIKE', '%' . $name . '%')->paginate(5);
        }
        return view('crud/display_form', compact('data'));
    }
}
