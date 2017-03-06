<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;

class SliderController extends Controller {

    public function index() {
        $data = Slider::all();
        return view('backend.slider.manage')->with('sliderdata', $data);
    }

    public function add() {
        return view('backend.slider.add');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required',
        ]);

        $upload = $request->file('image');
        $createfolder = 'backend/images';
        $filename = time() . '.' . $upload->getClientOriginalExtension();
        $upload->move($createfolder, $filename);

        $table = new Slider;
        $table->title = $request->input('title');
        $table->description = $request->input('description');
        $table->image = $createfolder . '/' . $filename;

        $table->save();
        return redirect('slider')->with('success', 'Data save successfully');
    }

    public function view($id = 1) {
        echo 'view';
    }

    public function edit($id) {
        $data = Slider::find($id);
        return view('backend.slider.edit')->with('sliderInfo', $data);
    }

    public function update(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $table = Slider::find($request->id);
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
        return redirect('slider')->with('success', 'Data update successfully');
    }

    public function delete($id) {
        $model = Slider::find($id);
        $model->delete();
        return redirect('slider')->with('success', 'Data delete successfully');
    }

}
