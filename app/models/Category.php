<?php

class Category extends \Eloquent {
	protected $table = 'categories';
	protected $primaryKey = 'category_id';

	public function product() {
		return $this->hasMany('Product','categories_category_id','category_id');
	}

}