<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Auth, validation;
use App\User, App\Product;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function createProduct()
    {
        return view('createProduct');
    }
     public function aboutUs()
    {
        return view('aboutUs');
    }
     public function viewProduct()
    {
         $products = Product::all();
        return view('viewProduct')->with('products', $products);
        //return view('viewProduct');
    }
    public function postAddProduct(Request $request)
    {

        //
 $rules = [
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price'=> 'required',
           // 'product_details'=> 'required'
         'product_pic' => 'required'
        ];

        $input = $request->all();
        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            //return redirect()->back()->withInput()->withErrors($validation);
            return 2;
        }
        

        //Nothing in the post model
            $product = new Product();
            $product->user_id = Auth::user()->id;
            $product->product_name = $input['product_name'];
            $product->category = $input['product_category'];
            $product->price = $input['product_price'];
            $product->photo = $input['product_pic'];

        
      

         if($product->save()){

             $products = Product::all();
        return view('viewProduct')->with('products', $products);
         }
                
         
                
            else
                return 3;
                //return redirect()->back();

      
    }
}

