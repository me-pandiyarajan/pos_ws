<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the Products.
	 *
	 * @return Response
	 */
	public function index()
	{
		$columnNames = array('Product_ID_PLU','sku');
		return Product::select($columnNames)
						->where('status',1)
						->where('deleted', 0)
						->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $product = Product::find($id)->category;
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

	/**
	 * Display a listing of the products in given category.
	 *
	 * @return Response
	 */
	public function getProductsByCategory($id)
	{	
		return $products = Product::where('categories_category_id',$id)
									->where('status',1)
									->where('deleted', 0)
									->get();
	}

}