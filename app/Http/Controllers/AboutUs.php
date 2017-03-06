<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AboutUsModel;

class AboutUs extends Controller {

    public function index() {
        $data = AboutUsModel::all();
        return view('backend.about_us.manage')->with('result', $data);
    }

    public function add() {
        return view('backend.about_us.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required|max:255',
        ]);

        $upload = $request->file('image');
        $createfolder = 'backend/images';
        //$getname = $upload->getClientOriginalName();
        $filename = time() . '.' . $upload->getClientOriginalExtension();
        $upload->move($createfolder, $filename);

        $table = new AboutUsModel;
        $table->title = $request->input('title');
        $table->description = $request->input('description');
        $table->image = $createfolder . '/' . $filename;

        $table->save();
        return redirect('aboutus')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = AboutUsModel::find($id);
        return view('backend.about_us.edit')->with('result', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = AboutUsModel::find($request->id);
        $table->title = $request->input('title');
        $table->description = $request->input('description');
        $table->status = $request->input('status');

        if ($request->file('image')) {
            $upload = $request->file('image');
            $createfolder = 'backend/images';
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            $upload->move($createfolder, $filename);
            $table->image = $createfolder . '/' . $filename;
        } else {
            $table->image = $table->image;
        }

        $table->save();
        return redirect('aboutus')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = AboutUsModel::find($id);
        $model->delete();
        return redirect('aboutus')->with('success', 'Data delete successfully');
    }

}
