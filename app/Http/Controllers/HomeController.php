<?php
/**
 * Created by PhpStorm.
 * User: adiag
 * Date: 19-Jun-20
 * Time: 3:55 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function achat (){
    return view('achat ');
}

}