<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasseRequest;
use App\Models\Classe;
use App\Models\Course;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index(Course $course)
    {
        // dd($course);
        //Função with recupera os dados da tabela pai através do método criado na model belongsto
        $classes = Classe::with('course')
            ->where('course_id', $course->id)
            ->orderBy('order_classe')
            ->get();

        //Carregar a view 
        return view('classes.index', [
            'course' => $course,
            'classes' => $classes
        ]);
    }

    public function show(Classe $classe)
    {        
        return view('classes.show', [
            'classe' => $classe
        ]);
    }

    public function create(Course $course)
    {
        return view('classes.create', [
            'course' => $course
        ]);
    }

    public function store(ClasseRequest $request)
    {        
        //Validar formulário
        $request->validated();

        //Recebe o último id da order_classe de acordo com o código do curso
        $lastOrderClass = Classe::where('course_id', $request->course_id)
            ->orderBy('order_classe', 'DESC')
            ->first();        

        Classe::create([
            'name' => $request->name,
            'description' => $request->description,
            'order_classe' => $lastOrderClass ? $lastOrderClass->order_classe + 1 : 1,
            'course_id' => $request->course_id
        ]);

        return redirect()->route('classe.index', ['course' => $request->course_id])->with('success', 'Aulas cadastrada com sucesso');

    }

    public function edit(Classe $classe)
    {        
        return view('classes.edit', [
            'classe' => $classe
        ]);
    }

    public function update(ClasseRequest $request, Classe $classe)
    {
        $request->validated();

        $classe->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('classe.index', ['course' => $classe->course_id])->with('success', 'Aula editada com sucesso');

    }

    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classe.index', ['course' => $classe->course_id])->with('success', 'Aula excluída com sucesso');    
    }

}
