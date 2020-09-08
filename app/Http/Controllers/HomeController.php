<?php

namespace App\Http\Controllers;

use App\Product;
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
        
        if(request()->ajax()){
            
            if(request()->has('latest')){
                $plants = DB::table('products')
                ->orderByDesc('id')
                ->where([['is_published','yes'],['status','available'],['type','plant']])
                ->take(6)
                ->get()
                ->map(function($plant){
                    return [
                        'name' => $plant->name,
                        'slug' => $plant->slug,
                        // 'short_desc' => $plant->short_description,
                        // 'desc' => $plant->description,
                        // 'key_features' => $plant->key_features,
                        'key_features' => explode("",$plant->key_features),

                        // 'care_do' => explode("",$plant->care_do),
                        // 'care_do_not' => explode('.',$plant->care_do_not),
                        'image_url' => $plant->main_image_url,
                        'mrp' => $plant->mrp,
                        'sp' => $plant->sale_price,
                        'discount' => Product::discountCalc($plant->mrp,$plant->sale_price)
                        // 'type' => $plant->type

                    ];
                });
        // dd($plants);
                $output = '<div class="container">
                <h2>Latest Arrivals</h2>

                <div class="latest-plant-slider plants-slider owl-carousel">';
                foreach($plants as $plant){
                    $output .= '
                    <div class="latest-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="'.asset("images/indoor-plants/dan-gold.jpg").'" alt="img" class="back-img">
                                <img src="'.asset("images/product/".$plant['image_url']."").'" alt="img" class="front-img">
                            </a>
                            <ul class="card-option">
                                <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i
                                            class="fas fa-shopping-cart"></i> </a></li>
                                <li><a href="" class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                            class="fas fa-heart"></i> </a></li>
                            </ul>
                        </div>
                        <div class="card-body plant_info">
                            <span class="tag">Indoor Plants</span>
                            <h5 class="plant-name"><a href="product.html">'.$plant['name'].'</a></h5>
                            <input type="number" class="rating" value="3" data-readonly>
                        </div>
                        <div class="card-footer">
                            <div class="cm-flex-center">
                                <p class="plant-price">'.$plant['sp'].'</p>
                                <div>
                                    <span class="original-price">'.$plant['mrp'].'</span><span class="discount-rate">'.$plant['discount'].'% off</span>
                                </div>
                            </div>
                            <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                        </div>
                    </div>
                    

                ';
                }
                $output .= '
                    <div class="latest-plant last-card card">
                        <a href="/all-plants" title="view more">View More <span>Plants</span></a>
                    </div>
                </div>
                </div>';
                echo $output;
            exit;
            }
            if(request()->has('featured')){
                $plants = DB::table('products')
                ->where([['status','available'],['type','plant'],['is_featured',1],['is_published','yes']])
                ->take(6)
                ->get()
                ->map(function($plant){
                    return [
                        'name' => $plant->name,
                        'slug' => $plant->slug,
                        // 'short_desc' => $plant->short_description,
                        // 'desc' => $plant->description,
                        // 'key_features' => $plant->key_features,
                        // 'key_features' => explode("",$plant->key_features),

                        // 'care_do' => explode("",$plant->care_do),
                        // 'care_do_not' => explode('.',$plant->care_do_not),
                        'image_url' => $plant->main_image_url,
                        'mrp' => $plant->mrp,
                        'sp' => $plant->sale_price,
                        'discount' => Product::discountCalc($plant->mrp,$plant->sale_price)
                        // 'type' => $plant->type

                    ];
                });
        // dd($plants);
                echo json_encode($plants);
            exit;
            }
            
        }
        return view('home');
    }
    public function ajax(){
        if(request()->ajax()){
            $latest_plants = DB::table('products')
                ->orderByDesc('id')
                ->where([['is_published','yes'],['status','available'],['type','plant']])
                ->take(6)
                ->get()
                ->map(function($plant){
                    return [
                        'name' => $plant->name,
                        'slug' => $plant->slug,
                        'image_url' => $plant->main_image_url,
                        'mrp' => $plant->mrp,
                        'sp' => $plant->sale_price,
                        'discount' => Product::discountCalc($plant->mrp,$plant->sale_price)
                    ];
                });
            $featured_plants = DB::table('products')
                ->where([['status','available'],['type','plant'],['is_featured',1],['is_published','yes']])
                ->take(6)
                ->get()
                ->map(function($plant){
                    return [
                        'name' => $plant->name,
                        'slug' => $plant->slug,
                        'image_url' => $plant->main_image_url,
                        'mrp' => $plant->mrp,
                        'sp' => $plant->sale_price,
                        'discount' => Product::discountCalc($plant->mrp,$plant->sale_price)
                    ];
                });
            $output = '
            <div class="hero-area-wrapper d-none d-md-block">
                <div class="container">
                    <div class="banner-slider owl-carousel">
                        <div class="caption-text hero-area" style="background-image:url('.asset('images/Gnome-Garden-Plant-StatueGnome-Garden-Plant-Statuepng.png').');">
                            <div class=" col-md-8">
                                <h2>Plants for Office Desk</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui aliquid voluptates at, quam nam earum repudiandae soluta.</p>
                                <a href="#" class="button">View More</a>
                            </div>
                        </div>

                        <div class="caption-text hero-area" style="background-image:url('.asset('images/1.png').');">
                            <div class="col-md-8">
                                <h2>Hanging Plants</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui aliquid voluptates at, quam nam earum repudiandae soluta.</p>
                                <a href="#" class="button">View More</a>
                            </div>
                        </div>

                        <div class="caption-text hero-area" style="background-image:url('.asset('images/FAVPNG_flowerpot-pattern_0TB3MHGY.png').');">
                            <div class="col-md-8">
                                <h2>Living Room Plant</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui aliquid voluptates at, quam nam earum repudiandae soluta.</p>
                                <a href="#" class="button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="hero-area-wrapper d-md-none">
            <div class="container">
                <div class="hero-area">
                    <div class="caption-text col-md-8">
                        <h2>Plants for Office Desk</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui aliquid voluptates at, quam nam earum repudiandae soluta.</p>
                        <a href="#" class="button">View More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- start Offers on Plants -->
        <section class="inner-wrapper offer-area-wrapper">
            <div class="offers-area container">
                <h2>Offers on Plants</h2>
                <div class="offers-slider-wrapper owl-carousel">
                    <div>
                        <a href="/offers" class="deals-card indoor-offer text-right" style="background-image: url('.asset("images/green-plant.jpg").');">
                            <span class="discount-rate">40%</span>
                            <p>On Indoor Plants</p>
                        </a>
                    </div>
                    <div>
                        <a href="/offers" class="deals-card moneyplant-offer text-left" style="background-image: url('.asset('images/green-leaves.jpg').');">
                            <span class="discount-rate">20%</span>
                            <p>On Money Plant</p>
                        </a>
                    </div>
                    <div>
                        <a href="/offers" class="deals-card bonsai-offer text-right" style="background-image: url('.asset('images/placement/bathroom/sarah-dorweiler.jpg').');">
                            <span class="discount-rate">60%</span>
                            <p>On Bonsai Plant</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Offers on Plants -->

        <!-- start Latest Arrivals -->
        <section class="latest-plant-wrapper inner-wrapper">
            <div class="container">
                <h2>Latest Arrivals</h2>

                <div class="latest-plant-slider plants-slider owl-carousel">';
                foreach($latest_plants as $latest_plant){
                    $output .= '<div class="latest-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="'.asset('images/indoor-plants/dan-gold.jpg').'" alt="img" class="back-img">
                                <img src="'.asset('images/product/'.$latest_plant['image_url'].'').'" alt="img" class="front-img">
                            </a>
                            <ul class="card-option">
                                <li><a href="#" class="button light-btn cart-btn" title="Add to Cart"><i
                                            class="fas fa-shopping-cart"></i> </a></li>
                                <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                            class="fas fa-heart"></i> </a></li>
                            </ul>
                        </div>
                        <div class="card-body plant_info">
                            <span class="tag">Indoor Plants</span>
                            <h5 class="plant-name"><a href="product.html">'.$latest_plant['name'].'</a></h5>
                            <input type="number" class="rating" value="3" data-readonly>
                        </div>
                        <div class="card-footer">
                            <div class="cm-flex-center">
                                <p class="plant-price">'.$latest_plant['sp'].'</p>
                                <div>
                                    <span class="original-price">'.$latest_plant['mrp'].'</span><span class="discount-rate">'.$latest_plant['discount'].'% off</span>
                                </div>
                            </div>
                            <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                        </div>
                    </div>';
                }
                    
                    
                   $output .= '<div class="latest-plant last-card card">
                        <a href="/all-plants" title="view more">View More <span>Plants</span></a>
                    </div>

                </div>

            </div>
        </section>
        <!-- end Latest Arrivals -->

        <!-- start deals of the day -->
        <section class="deals-wrapper inner-wrapper">
            <div class="container">
                <h2>Deals of the Day</h2>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href="" class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="'.asset('images/stages/sales-woman.png').'" alt="discount">
                            <h3 class="discount-rate">40% Off</h3>
                            <p>On Indoor Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href="" class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="'.asset('images/stages/online-sales.png').'" alt="discount">
                            <h3 class="discount-rate">60% Off</h3>
                            <p>On Bonsai Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href="" class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="'.asset('images/stages/sale-now.png').'" alt="discount">
                            <h3 class="discount-rate">30% Off</h3>
                            <p>On Any Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href="" class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="'.asset('images/stages/telesales-agent.png').'" alt="discount">
                            <h3 class="discount-rate">30% Off</h3>
                            <p>On Office Desk Plants</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end deals of the day -->

        <!-- start featured Plants -->
        <section class="featured-plant-wrapper inner-wrapper">
            <div class="container">
                <h2>Featured Plants</h2>

                <div class="featured-plant-slider plants-slider owl-carousel">';
                foreach($featured_plants as $featured_plant){
                    $output .= '<div class="featured-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="'.asset('images/indoor-plants/stephanie-harvey-.jpg').'" alt="img" class="front-img">
                                <img src="'.asset('images/product/'.$featured_plant['image_url'].'').'" alt="img" class="back-img">
                            </a>
                            <ul class="card-option">
                                <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i
                                            class="fas fa-shopping-cart"></i> </a></li>
                                <li><a href="" class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                            class="fas fa-heart"></i> </a></li>
                            </ul>
                        </div>
                        <div class="card-body plant_info">
                            <span class="tag">Indoor Plants</span>
                            <h5 class="plant-name"><a href="product.html">'.$featured_plant['name'].'</a></h5>
                            <input type="number" class="rating" value="3" data-readonly>
                        </div>
                        <div class="card-footer">
                            <div class="cm-flex-center">
                                <p class="plant-price">'.$featured_plant['sp'].'</p>
                                <div>
                                    <span class="original-price">'.$featured_plant['mrp'].'</span><span class="discount-rate">'.$featured_plant['discount'].'% off</span>
                                </div>
                            </div>
                            <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                        </div>
                    </div>';
                }

                    
                    $output .= '<div class="featured-plant last-card card">
                        <a href="/all-pots" title="view more">View More <span>Plants</span></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- end featured Plants -->

        <!-- start testimonial -->
        <section class="inner-wrapper testmonial-section">
            <div class="container">
                <h2>What our buyer say</h2>
                <!-- testimonial slider -->
                <div class="owl-carousel testimonial_wrapper">

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Austin Wade</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Luis Villasmil</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Stefan Stefancik</em></div>
                        </div>
                    </div>
                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Luis Villasmil</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Stefan Stefancik</em></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>';
        return $output;
        exit;
        }
        return view('demo');
    }
}
