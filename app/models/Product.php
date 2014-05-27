<?php

class Product extends \Eloquent {
	
	protected $table = 'products';
	protected $primaryKey = 'product_gen_id';


	public function category() {
		return $this->hasMany( 'Category','category_id','categories_category_id');
	} 

	//protected $guarded = array('product_gen_id');

}