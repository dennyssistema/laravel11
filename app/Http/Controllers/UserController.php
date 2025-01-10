<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar os cursos
    public function index(){
        //Recuperar registros do banco de dados
        //$courses = Course::where('id', 100)->get();
        $users = User::orderBy('id', 'ASC')
            // ->where('id', 1000)
            //->get();
            ->paginate(5);

        return view('users.index', [
            'users' => $users
        ]);
        
    }

    //Visualizar o curso
    // public function show(Course $course){
    //     //$course = Course::where('id', $request->course)->first();        
    //     //dd($course);
    //     return view('courses.show',[
    //         'course' => $course
    //     ]);
    // }

    //Carregar o formulário do curso
    public function create(){
        return view('users.create');
    }

    //Cadstrar o curso
    public function store(UserRequest $request){

        //Validar formulário
        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->passwd
        ]);

        return redirect()->route('user.create')->with('success', 'Usuário cadastrado com sucesso!');
        
    }
    
    // //Editar o curso
    // public function edit(Course $course){
    //     //dd($course);
    //     return view('courses.edit',[
    //         'course' => $course
    //     ]);
    // }

    // //Editar o curso
    // public function update(Request $request, Course $course){
    //     $course->update([
    //         'name' => $request->name,
    //         'price' => str_replace(',', '.', str_replace('.', '', $request->price))
    //     ]);

    //     return redirect()->route('course.show', ['course' => $course->id])->with('success', 'Curso editado');

    // }

    // //Deletar o curso
    // public function destroy(Course $course){
    //     $course->delete();

    //     return redirect()->route('course.index')->with('success', 'Curso excluído com sucesso');
    // }
}
