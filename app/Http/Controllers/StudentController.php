<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $schools = School::query()->where('is_active', true)->orderBy('short_name')->get(['id', 'name']);
        $students = Student::query()->orderBy('last_name')->orderBy('first_name')->get(['id', 'school_id', 'last_name', 'first_name', 'street_address', 'apt_suite', 'city', 'state', 'zip_code']);

        return view('student.index', compact(['schools', 'students']));
    }

    public function create()
    {
        # get all schools
        $schools = School::query()->where('is_active', true)->orderBy('short_name')->get(['id', 'name']);
        return view('student/create', compact('schools'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'school_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address' => 'required',
            'apt_suite' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
        ]);

        $student = new Student();
        $student->school_id = $request->input('school_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->street_address = $request->input('street_address');
        $student->apt_suite = $request->input('apt_suite');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip_code = $request->input('zip_code');
        $student->checked_in = true;
        $student->save();

        \Session::flash('flash_message', 'Thank you, you have checked in successfully!');

        return redirect('/student');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'school_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address' => 'required',
            'apt_suite' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
        ]);

        $student = Student::find($request->id);
        $student->school_id = $request->input('school_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->street_address = $request->input('street_address');
        $student->apt_suite = $request->input('apt_suite');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip_code = $request->input('zip_code');
        $student->checked_in = true;
        $student->save();

        \Session::flash('flash_message', 'Thank you, you have checked in successfully!');

        return redirect('/student');
    }
}
