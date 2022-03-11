<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Manager;
use App\Models\Player;
use App\Models\Stadium;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landing-page.index');
    }

    public function club()
    {
        $clubs = Club::orderBy('trophy', 'desc')->paginate(10);

        return view('pages.landing-page.club', compact('clubs'));
    }

    public function manager()
    {
        $managers = Manager::paginate(10);

        return view('pages.landing-page.manager', compact('managers'));
    }

    public function player()
    {
        $players = Player::paginate(10);

        return view('pages.landing-page.player', compact('players'));
    }

    public function stadium()
    {
        $stadia = Stadium::paginate(10);

        return view('pages.landing-page.stadium', compact('stadia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
