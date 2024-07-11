<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Listar os cursos
    public function index(){
        //Recuperar registros do banco de dados
        //$courses = Course::where('id', 100)->get();
        $courses = Course::orderBy('id', 'Desc')->get();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    //Visualizar o curso
    public function show(Request $request){
        $course = Course::where('id', $request->course)->first();        
        //dd($course);
        return view('courses.show',[
            'course' => $course
        ]);
    }

    //Carregar o formulário do curso
    public function create(){
        return view('courses.create');
    }

    //Cadstrar o curso
    public function store(Request $request){

        Course::create([
            'name' => $request->name
        ]);

        return redirect()->route('courses.create')->with('success', 'Curso cadastrado com sucesso!');
        
    }

    
    //Visualizar o curso
    public function edit(){
        return view('courses.edit');
    }

    //Visualizar o curso
    public function update(){
        dd('update');
    }

    //Visualizar o curso
    public function destroy(){
        dd('destroy');
    }
}
