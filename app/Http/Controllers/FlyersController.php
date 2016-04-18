<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Flyer;

class FlyersController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function index()
	{
		//
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		
		return view('flyers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  FlyerRequest  $request
	 * @return Response
	 */
	public function store(FlyerRequest $request)
	{
		 Flyer::create($request->all());

		 return redirect()->back()->with('success','Flyer Added Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($zip, $street)
	{
		$flyer = Flyer::LocatedAt($zip, $street);  
		return view('flyers.show',compact('flyer')); 
	}

	public function addPhoto($zip, $street, Request $request) {
		$this->validate($request, [
			'photo' => 'required|mimes:jpg,png,jpeg'
		]);
		$photo = Photo::fromForm($request->file('photo'));

		Flyer::LocatedAt($zip, $street)->addPhoto($photo); // Find the current Flyer
		
 		return 'Done';    
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
