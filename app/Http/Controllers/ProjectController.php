<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            return view('projects.index', [
                'projects' => Project::where('title', 'LIKE', '%' . $query . '%')
                    ->orderBy('created_at', 'DESC')
                    ->paginate(5),
                'search' => $query
            ]);
        }else{
            return view('projects.index', [
                'projects' => Project::orderBy('created_at', 'DESC')->paginate(5)
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //Guardando el proyecto en la base de datos
        $fields = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'progLang' => '',
            'role' => 'required',
            'companyMade' => '',
            'companyTo' => '',
            'duration' => 'required',
            'description' => 'required'
        ]);

        Project::create($fields);

        return redirect()->route('projects.index')->with('status', __('The project was successfully created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $fields = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'progLang' => '',
            'role' => 'required',
            'companyMade' => '',
            'companyTo' => '',
            'duration' => 'required',
            'description' => 'required'
        ]);
        //Actualizamos projecto en la base de datos
        $project->update($fields);

        return redirect()->route('projects.show', $project)->with('status', __('The project was successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project -> delete();

        return redirect()->route('projects.index')->with('status', __('The project was successfully eliminated'));
    }
}
