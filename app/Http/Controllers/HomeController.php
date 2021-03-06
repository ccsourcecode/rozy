<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;
use App\Category;
use App\Alias;
use App\Discount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
class HomeController extends Controller
{
    public function Index(Request $req){
        $viewedList = Cookie::get('viewedList');
        if($viewedList===null){
            Cookie::queue('viewedList',json_encode([]),9999999999);
        }
        $viewedList = json_decode(Cookie::get('viewedList'),true) ?? [];
        $alias = Alias::class;
        $products = Product::get();
        $flashsales = new Discount();
        $flashsales = $flashsales->Flashsales();
        return view('index',compact('products','alias','flashsales','viewedList'));
    }
    public function findProduct(Request $req){
        $keyword = $req->keyword;
        $products = Product::with('ImgAvt')->where('name','like',"%$keyword%")->orderBy('view_count','DESC')->limit(10)->get();
        return response()->json(['data'=>$products], 200, []);
    }
}
