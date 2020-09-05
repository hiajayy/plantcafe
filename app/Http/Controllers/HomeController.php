<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plants = DB::table('products')
                ->where([['status','available'],['type','plant']])
                ->take(6)
                ->get()
                ->map(function($plant){
                    return [
                        'name' => $plant->name,
                        'slug' => $plant->slug,
                        // 'short_desc' => $plant->short_description,
                        // 'desc' => $plant->description,
                        // 'key_features' => $plant->key_features,
                        'key_features' => explode('#',$plant->key_features),

                        // 'care_do' => explode('#',$plant->care_do),
                        // 'care_do_not' => explode('.',$plant->care_do_not),
                        'image_url' => $plant->main_image_url,
                        'mrp' => $plant->mrp,
                        'sp' => $plant->sale_price,
                        'discount' => Product::discountCalc($plant->mrp,$plant->sale_price)
                        // 'type' => $plant->type

                    ];
                });
        // dd($plants);
        if(request()->ajax()){
            return $plants;
        }
        return view('home',compact('plants'));
    }
}
