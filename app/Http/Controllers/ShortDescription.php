<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ShortDescriptionModel;

class ShortDescription extends Controller {

    public function index() {
        $data = ShortDescriptionModel::all();
        return view('backend.short_description.manage')->with('result', $data);
    }

    public function addDescrition() {
        return view('backend.short_description.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = new ShortDescriptionModel;
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->save();
        return redirect('shortdescription')->with('success', 'Data save successfully');
    }

    public function edit($id) {
        $data = ShortDescriptionModel::find($id);
        return view('backend.short_description.edit')->with('result', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = ShortDescriptionModel::find($request->id);
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');

        $table->save();
        return redirect('shortdescription')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = ShortDescriptionModel::find($id);
        $model->delete();
        return redirect('shortdescription')->with('success', 'Data delete successfully');
    }

}
