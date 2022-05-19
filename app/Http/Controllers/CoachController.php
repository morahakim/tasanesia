<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Instantion;
use App\Http\Requests\StoreCoachRequest;
use App\Http\Requests\UpdateCoachRequest;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_coach = Coach::all();
        if(auth()->guest()){
            abort(403); 
        } else if (auth()->user()->role !== 'pembina' && auth()->user()->role !== 'admin'){
            abort(403);
        }
        return view('coach.index', compact('data_coach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instantion = Instantion::all();
        return view('coach.create', compact('instantion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoachRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoachRequest $request)
    {
        // dd($request->all());

        Coach::query()->create([
            'name' => $request->name,
            'degree' => $request->degree,
            'institution_id' => $request->institution_id,
            'school' => $request->school,
            'faculty' => $request->faculty,
            'major' => $request->major,
            'organization' => $request->organization,
            'position_in_org' => $request->position_in_org,
            'project_name' => $request->project_name,
            'position_in_project' => $request->position_in_project,
            'skill' => $request->skill,
            'notes' => $request->notes,
        ]);

        return redirect()->route('coach.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach = \App\Models\Coach::find($id);
        return view('coach.edit', ['coach' =>$coach]);
    }

     /**
     * Showing the detail of the freakin nursery
     *
     * @param  \App\Models\coach  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $coach = \App\Models\Coach::find($id);
        return view('coach.data-pembina', ['coach' =>$coach]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoachRequest  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coach = \App\Models\Coach::find($id);
        $coach->Update($request->all());
        return redirect('/coach')->with('sukses','Data berhasil diupdate');
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coach.index');
    }
}
