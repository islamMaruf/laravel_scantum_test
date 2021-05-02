<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
			$informations = DB::table('information')->orderBy('id', 'desc')->get();

			return response()->json([
				'informations' => $informations,
				'message' => 'Data sent successfully',
			]);
		} catch (Exception $e) {
			return response()->json([		
				'err' => $e->getMessage(),
			], 401);
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
		try {
			$information = new Information();
			$information->title = $request->title;
			$information->text = $request->text;
			$information->language = $request->library;
			$information->is_awesome = $request->isAwesome;
			$information->save();

			return response()->json([
				'information' => $information,
				'message' => 'Data saved Successfully',
			], 201);
		} catch (Exception $e) {
			return response()->json([
				'error_message' => $e->getMessage(),
			]);
		}
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
