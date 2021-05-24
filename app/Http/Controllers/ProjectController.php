<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{

    public function __construct(){
         $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index',[
            'proyectos'=>Project::latest()->paginate()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show',[
            'project'=> $project
        ]);
    }

    public function create(Project $project)
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',['project'=>$project]);
    }

    public function update(Project $project)
    {   
        $project->update([
            'title' => request('title'),
            'url' => request('url'),
            'description' =>request('description'),
        ]);

        return redirect()->route('projects.show',$project)->with('status','El proyecto fue actualizado con exito.');

    }

    public function destroy(Project $project){
        
        $project->delete();
        return redirect()->route('projects.index')->with('El proyecto fue eliminado con exito.');
    }


}
