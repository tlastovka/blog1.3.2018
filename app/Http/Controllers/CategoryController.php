<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {

    //return 'list of all categories'
    $categories = Category::all();
    return view('categories.index', ['categories' => $categories]);


    //
    //
    }
    public function create()

    {
        return view('categories.form');
    }




}
