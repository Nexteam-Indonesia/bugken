<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Generate Key
     * @param int $length
     * @return string
     */
    function generateKey($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $keyGenerate = '';
        for ($i = 0; $i < $length; $i++) {
            $keyGenerate .= $characters[rand(0, $charactersLength - 1)];
        }
        return $keyGenerate;
    }

    /**
     * Display a listing of the project.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::query()
            ->with('user')
            ->get();
        return view('dashbord');
    }

    /**
     * Show the form for creating a new project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Project::query()
            ->create([
                'user_id' => Auth::user()->id,
                'title'   => $request->title,
                'project' => $request->project,
                'key'     => $this->generateKey(),
            ]);
        return view('', compact($data));
    }

    /**
     * Display the specified project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Project::query()
            ->update([
                'user_id' => Auth::user()->id,
                'title'   => $request->title,
                'project' => $request->project,
                'key'     => $this->generateKey(),
            ]);
        return view('');
    }

    /**
     * Remove the specified project from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
