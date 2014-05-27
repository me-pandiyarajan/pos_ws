<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the category(active).
	 *
	 * @return Response
	 */
	public function index()
	{
		$columnNames = array('category_id','category_name');
		$categories = Category::select($columnNames)
								->where('status','1')
								->get();

		$categories = array('categories' => $categories->toArray());
		return $categories;
	}

	/**
	 * reating a new category.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified category details.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Category::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}