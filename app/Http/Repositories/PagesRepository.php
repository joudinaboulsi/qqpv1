<?php

namespace App\Http\Repositories;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class PagesRepository {

	/*----------------------------------
    get content of projects page
    ------------------------------------*/
    public function show()
    {
        $q = \DB::select("SELECT *
			        	  FROM portfolio
                          ORDER BY type ASC");
        return $q;
    }

    /*----------------------------------
    get content of projects page
    ------------------------------------*/
    public function showFeatured()
    {
        $q = \DB::select("SELECT *
                          FROM projects
                          WHERE featured = 1
                          ORDER BY position ASC");
        return $q;
    }

    /*----------------------------------
    get categories of products page
    ------------------------------------*/
    public function getCategories()
    {
        $q = \DB::select("SELECT DISTINCT category, category_filter
                          FROM products");
        return $q;
    }

    /*----------------------------------
    get all products 
    ------------------------------------*/
    public function getProducts()
    {
        $q = \DB::select("SELECT *
                          FROM products
                          ORDER BY category_filter, id");
        return $q;
    }

}
