<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\OurTeamModel;
use Image;

class OurTeam extends Controller {

    public function index() {
        $data = OurTeamModel::all();
        return view('backend.our_team.manage')->with('result', $data);
    }

    public function add() {
        return view('backend.our_team.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required',
        ]);

        $upload = $request->file('image');
        $createfolder = 'backend/images';
        $filename = time() . '.' . $upload->getClientOriginalExtension();
        //$upload->move($createfolder, $filename);
        $path = 'backend/images/' . $filename;
        Image::make($upload->getRealPath())->resize(284, 300)->save($path);

        $table = new OurTeamModel;
        $table->title = $request->input('title');
        $table->description = $request->input('description');
        $table->designation = $request->input('designation');
        $table->image = $createfolder . '/' . $filename;

        $table->save();
        return redirect('ourteam')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = OurTeamModel::find($id);
        return view('backend.our_team.edit')->with('result', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = OurTeamModel::find($request->id);
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->designation = $request->input('designation');
        $table->status = $request->input('status');

        if ($request->file('image')) {
            $upload = $request->file('image');
            $createfolder = 'backend/images';
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            //$upload->move($createfolder, $filename);
            $path = 'backend/images/' . $filename;
            Image::make($upload->getRealPath())->resize(284, 300)->save($path);
            $table->image = $createfolder . '/' . $filename;
        } else {
            $table->image = $table->image;
        }

        $table->save();
        return redirect('ourteam')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = OurTeamModel::find($id);
        $model->delete();
        return redirect('ourteam')->with('success', 'Data delete successfully');
    }

}
