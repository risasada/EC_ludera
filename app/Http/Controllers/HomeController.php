<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\Cart;
use app\Models\Items as ModelsItems;
use phpDocumentor\Reflection\Types\Null_;
use Stripe\Stripe;
use Stripe\Charge;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /*public function show__women_all()
    {
        $items = Items::where('gender', "women's")->get();;

        return view('list', compact('items'));
    }

    public function show__men_all()
        {
        $items = Items::where('gender', "men's")->get();;

        return view('list', compact('items'));
    }*/

    public function show_men($gender,$categories = 'none', $designers = 'none')
    {
        if ($categories == 'none' and $designers == 'none'){
            $items =Items::where('gender', $gender)->paginate(21);;
        }
        elseif( $designers == 'none' and $categories != 'none'){
            if ($categories == 'ACCESSORIES') {
                $items = Items::where('categories', ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "BAGS") {
                $items = Items::where('categories', ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "CLOTHINGS") {
                $items = Items::where('categories', ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"])->where('gender', "men's")->paginate(21);;
            } elseif ($categories == "SHOES") {
                $items = Items::where('categories', ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"])->where('gender', "men's")->paginate(21);;
            } else {
                $items = Items::where('categories', $categories)->where('gender', "men's")->paginate(21);;
            }
        }
        elseif($designers != 'none' and $categories == 'none'){
            
            $items = Items::where('gender', "men's")->where('designers', $designers)->paginate(21);;
        }
        else{
            if ($categories == 'ACCESSORIES') {
                $items = Items::where('categories', ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "BAGS") {
                $items = Items::where('categories', ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "CLOTHINGS") {
                $items[] = Items::where('categories', ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"])->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            } elseif ($categories == "SHOES") {
                $items[] = Items::where('categories', ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"])->where('gender', "men's")->where('designers', $designers);;
            } else {
                $items[] = Items::where('categories', $categories)->where('gender', "men's")->where('designers', $designers)->paginate(21);;
            }
        }
        
        $inform['gender'] = $gender;
        $inform['designers'] = $designers;
        $inform['categories'] = $categories;
        return view('list', compact('items', 'inform'));
    }

    
    
    


    public function store(request $request)
    {
        $data = $request->all();
        //dd($data);
        //$request->validate([
            //'img_url1' => 'required|file|image|mimes:png,jpeg'
        //]);
        $upload_image1 = $request->file('img1');
        $path1 = $upload_image1->store('uploads', "public");
        $upload_image2 = $request->file('img1');
        $path2 = $upload_image2->store('uploads', "public");
        $upload_image3 = $request->file('img1');
        $path3 = $upload_image3->store('uploads', "public");
        $upload_image4 = $request->file('img1');
        $path4 = $upload_image4->store('uploads', "public");
        Items::create(['name' => $data['name'],
            'price' => $data['price(not_including_tax)'],
            'gender' => $data['gender'],
            'categories' => $data['categories'],
            'designers' => $data['designers'],
            'made_in' => $data['made_in'],
            'material' => $data['material'],
            'XS' => $data['xs'],
            'S' => $data['s'],
            'M' => $data['m'],
            'L' => $data['l'],
            'LL' => $data['ll'],
            'img_url1' => $path1,
            'img_url2' => $path2,
            'img_url3' => $path3,
            'img_url4' => $path4
        ]);
        return redirect()->route('manage');
    }

    public function item_show($id){
        
        $item = Items::where('id', $id)->get();;
        return view('item_menu', compact('item'));
    }

    public function insert_cart(request $request){
        
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($user_id)){

            Cart::create(['user_id' => $user_id,
            'item_id' => $data['item_id'],
            'size' => $data['size']
            ]);
            return redirect()->route('show_item', ['id' => $data['item_id']]);
        }else{
            return route('login');
        }

    }

    public function show_cart(){
        $counter = 0;
        $user_id = Auth::id();
        $cart_info = Cart::where('user_id', $user_id)->paginate(10);;
        $cart_item = [];
        foreach($cart_info as $info){
            $cart_item []= Items::where('id', $info['item_id'])->get();;
            $cart_item[0][0]['size'] = $info['size'];
            $counter++;
        }

        return view('cart', compact('cart_item', 'cart_info'));
    }

    public function delete_cart_item(request $request){
        $user_id = Auth::id();
        $data = $request->all();
        Cart::where('item_id', $data["item_id"])->where("user_id", $user_id)->delete();
        return redirect()->route('cart');
    }
}