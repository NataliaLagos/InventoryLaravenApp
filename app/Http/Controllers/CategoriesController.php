<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    function show(){
    	$listCategories = Categories::all(); //select * from products
        return view('categories/list',['categories' => $listCategories]);
    }

}
