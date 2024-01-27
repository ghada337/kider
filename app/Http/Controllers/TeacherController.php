<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Traits\Common;
use DB;

// sweet alert
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('admin/teacher/teachers', compact('teachers'));
        // return dd($teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'designation'=>'required',
            'facebook' => 'required|email',
            'twitter' => 'required|email',
            'instgram' => 'required|email',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['published'] = isset($request->published);
        Teacher::create($data);
        return redirect('teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin/teacher/showTeacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin/teacher/editTeacher', compact("teacher"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'designation'=>'required',
            'facebook' => 'required|email',
            'twitter' => 'required|email',
            'instgram' => 'required|email',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        if($request->hasFile('image')){
            //use method from traits called uploadFile
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
            //remove old image from server
            unlink("assets/images/".$request->oldImageName);
        }
        $data['published'] = isset($request->published);
        Teacher::where('id', $id)->update($data);
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $found = Classroom::where('teacher_id', $id)->count();
        if($found){
            // return redirect('teachers');
            return back()->with('error',"This teacher is linked to a class. It can't be deleted");
        }else{
            Teacher::where('id', $id)->delete();    // softdelete
            return redirect('teachers');
        }
    }

    public function trashed()
    {
        $teachers = Teacher::onlyTrashed()->get();
        return view('admin/teacher/trashedTeachers', compact("teachers"));
    }

    public function restore(string $id)
    {
        Teacher::where('id', $id)->restore(); 
        return redirect('trashedTeachers');
    }

    public function destroy(string $id)
    {
        $sql = "SELECT `image` FROM `teachers` WHERE `id` = $id";
        $imageName = DB::select($sql);
        Teacher::where('id', $id)->forceDelete();
        unlink("assets/images/".$imageName[0]->image);
        return redirect('trashedTeachers');
    }

    public function messages()
    {
        return [
            'name.string'=>'Should be string',
            'profession.string'=>'Should be text',
            'image.required'=>'Please be sure to select an image',
            'image.mimes'=>'Incorrect image type',
            'image.max'=>'Max file size exeeced',
        ];
    }
}
