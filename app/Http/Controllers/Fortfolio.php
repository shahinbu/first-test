<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\FortfoliaModel;
use Image;

class Fortfolio extends Controller {

    public function index() {
        $data = FortfoliaModel::all();
        return view('backend.portfolio.manage')->with('result', $data);
    }

    public function add() {
        return view('backend.portfolio.add');
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
        //$path = public_path('backend/images/' . $filename);
        $path = 'backend/images/' . $filename;
        Image::make($upload->getRealPath())->resize(350, 280)->save($path);

        /* $image = Input::file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $path = public_path('backend/images/' . $filename);
          Image::make($image->getRealPath())->resize(200, 200)->save($path);
          $user->image = $filename;
          $user->save();
         * 
         */

        $table = new FortfoliaModel;
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->url = $request->input('url');
        $table->image = $createfolder . '/' . $filename;

        $table->save();
        return redirect('portfolio')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = FortfoliaModel::find($id);
        return view('backend.portfolio.edit')->with('result', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = FortfoliaModel::find($request->id);
        $table->title = $request->input('title');
        $table->short_description = $request->input('short_description');
        $table->description = $request->input('description');
        $table->url = $request->input('url');
        $table->status = $request->input('status');

        if ($request->file('image')) {
            $upload = $request->file('image');
            $createfolder = 'backend/images';
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            //$path = public_path('backend/images/' . $filename);
            $path = 'backend/images/' . $filename;
            Image::make($upload->getRealPath())->resize(350, 280)->save($path);
            //$upload->move($createfolder, $filename);
            $table->image = $createfolder . '/' . $filename;
        } else {
            $table->image = $table->image;
        }

        $table->save();
        return redirect('portfolio')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = FortfoliaModel::find($id);
        $model->delete();
        return redirect('portfolio')->with('success', 'Data delete successfully');
    }

}
