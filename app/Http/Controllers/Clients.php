<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ClientsModel;

class Clients extends Controller {

    public function index() {
        
        // for paginate
        //$data = ClientsModel::paginate(10);
        $data = ClientsModel::all();
        return view('backend.clients.manage')->with('sliderdata', $data);
    }

    public function add() {
        return view('backend.clients.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required|max:255',
        ]);

        $upload = $request->file('image');
        $createfolder = 'backend/images';
        $getname = $upload->getClientOriginalName();
        $upload->move($createfolder, $getname);

        $table = new ClientsModel;
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->url = $request->input('url');
        $table->image = $getname;

        $table->save();
        return redirect('clients')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = ClientsModel::find($id);
        return view('backend.clients.edit')->with('sliderInfo', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);


        $table = ClientsModel::find($request->id);
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->url = $request->input('url');
        $table->status = $request->input('status');

        if ($request->file('image')) {
            $upload = $request->file('image');
            $createfolder = 'backend/images';
            $getname = $upload->getClientOriginalName();
            $upload->move($createfolder, $getname);
            $table->image = $createfolder . '/' . $getname;
        } else {
            $table->image = $table->image;
        }

        $table->save();
        return redirect('clients')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = ClientsModel::find($id);
        $model->delete();
        return redirect('clients')->with('success', 'Data delete successfully');
    }

}
