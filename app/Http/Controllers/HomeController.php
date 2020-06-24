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
        $images = [
            'https://www.scidev.net/objects_store/thumbnail/91A50A6A64D9842F4F4059160388CB72.jpg',
            'https://ivoiremedplus.net/wp-content/uploads/2020/02/Ignames.jpg',
            'https://www.finedininglovers.fr/sites/g/files/xknfdk1291/files/original_comment-cuisiner-igname_0.jpg',
            'https://www.easymarket.pf/wp-content/uploads/2017/11/EM-Image-blog--730x330.jpg',
            'https://www.easymarket.pf/wp-content/uploads/2017/11/EM-Image-blog-.jpg',
            'https://img-3.journaldesfemmes.fr/qxnJGbDi6-DAHLFJNgCnAxfJ4Hg=/910x607/smart/537462875105486da7cd49bb69e7116d/ccmcms-jdf/10661604.jpg',
            'https://www.mediaterre.org/users/pexineg/images/mais01.jpg',
            'https://images.unsplash.com/photo-1518977822534-7049a61ee0c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
            'https://www.thermofisher.com/blog/wp-content/uploads/2014/08/tomatoes.jpg',
            'https://img-3.journaldesfemmes.fr/4PYoBAo1J5rsDbuMiSTNRGolvhc=/910x607/smart/3b81125b1cbd46f7af87766bb8430152/ccmcms-jdf/10659145.jpg'
        ];
        // $products = Product::paginate(16);
        // $products = Product::all();
        // foreach($products as $product){
        //     $image = $images[rand(0, count($images)-1)];
        //     $product->image =$image;
        //     $product->save();
        // }
        
        $products = Product::paginate(12);
        $products_caroussels = Product::paginate(8);
        $categories = Category::all();
        return view('index')->withProducts($products)->withCategories($categories)->withProductsCaroussels($products_caroussels);
    }

    public function contact(){
        return view('contact');
    }

    public function achat (){
        $products = Product::paginate(12);
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