<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ServiceModel;

class Service extends Controller {

    public function index() {

        $data = ServiceModel::all();
        return view('backend.service.manage')->with('result', $data);
    }

    public function add() {
        return view('backend.service.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        $table = new ServiceModel;
        if ($request->file('image')) {
            $upload = $request->file('image');
            $createfolder = 'backend/images';
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            $upload->move($createfolder, $filename);
            $table->image = $createfolder . '/' . $filename;
        }

        $table->title = $request->input('title');
        $table->icon = $request->input('icon');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->save();
        return redirect('service')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = ServiceModel::find($id);
        return view('backend.service.edit')->with('result', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = ServiceModel::find($request->id);
        $table->title = $request->input('title');
        $table->icon = $request->input('icon');
        $table->short_description = $request->input('short_description');
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
        return redirect('service')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = ServiceModel::find($id);
        $model->delete();
        return redirect('service')->with('success', 'Data delete successfully');
    }

}
