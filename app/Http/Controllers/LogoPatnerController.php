<?php

namespace App\Http\Controllers;

use App\Models\Logopatner;
use App\Http\Requests\LogopatnerRequest;
use App\Http\Requests\SliderEditRequest;
use Illuminate\Http\Request;

class LogoPatnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Logopatner::all();
        return view('pages.logopatner.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.logopatner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogopatnerRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'assets/logopatner',
            'public'
        );

        Logopatner::create($data);
        return redirect()->route('logopatner.index');
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
        $item = Logopatner::findOrFail($id);
        return view('pages.logopatner.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LogopatnerRequest $request, $id)
    {
        $data = $request->all();
        $item = Logopatner::findOrFail($id);
        $item->update($data);
        return redirect()->route('logopatner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Logopatner::findOrFail($id);
        $item->delete();
        return redirect()->route('logopatner.index');
    }
}
