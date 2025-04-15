<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\table_storage;



class storageController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'file_path' => 'required|file|mimes:jpg,png,jpeg|max:2048',

        ]);

        $file = $request->file('file_path');
        $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
        $data['file_path'] = $file->storeAs('public/photo',$fileName);

        table_storage::create($data);

        return redirect(url('storage1'))->with('success', 'data berhasil disimpan');



    }

    public function index()
    {

        return view('admin.storage');
    }


    public function create()
    {
        return view('admin.storage');
    }




    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
