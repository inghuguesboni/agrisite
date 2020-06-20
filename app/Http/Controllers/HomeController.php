<?php
/**
 * Created by PhpStorm.
 * User: adiag
 * Date: 19-Jun-20
 * Time: 3:55 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class HomeController extends Controller
{
    public function index(){
        $products = Product::paginate(16);
        $categories = Category::all();
        return view('index')->withProducts($products)->withCategories($categories);
    }

    public function contact(){
        return view('contact');
    }

    public function achat (){
        $products = Product::paginate(30);
        $categories = Category::all();
        return view('achat')->withProducts($products)->withCategories($categories);
        // return view('achat ');
    }

    public function detail(){
        return view('detail')->withProducts($products)->withCategories($categories);
    }

    public function login(){
        return view('index');
    }

}