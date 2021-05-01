<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class InformationController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
        try {
            $informations = Information::all();
            return response()->json([
                'data' => $informations,
                'message' => 'Data sent successfully'
            ]);
          }catch(Exception $e) {
            return response()->json([
                'data' => $informations,
                'message' => 'Data sent successfully'
            ],401);
          }
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
        return response()->json([
            'data' => $request->all()
        ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Information  $information
	 * @return \Illuminate\Http\Response
	 */
	public function show(Information $information)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Information  $information
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Information $information)
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Information  $information
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Information $information)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Information  $information
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Information $information)
	{
	}
}
