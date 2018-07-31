<?php

namespace App\Http\Controllers\Admin;

use App\Actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActorFormRequest;
use Carbon\Carbon;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();
        return view('backend.actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActorFormRequest $request)
    {
        $data = $request->all();
        $data['name'] = $request->get('name');
        $data['birthday'] = Carbon::parse($request->birthday);
        $data['infor'] = $request->get('information');
        $data['country_id'] = $request->get('country');
//        $data['avarta'] = '1';
        Actor::create($data);
//        $actor->save()
//        $newActor = Actor::orderBy('id', 'desc')->take(1)->get();
        return redirect()->route('home')->with('status', __('Your review has been created'));
//        $birthday = Carbon::createFromFormat('dd-mm-yy', $request->input('birthday'))->format('Y-m-d');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
