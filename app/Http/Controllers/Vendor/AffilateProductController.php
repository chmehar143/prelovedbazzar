<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{ Auth, File, DB, Redirect };
use App\Models\{ Category, SubCategory, ChildCategory, AffiliateProduct, OrderDetail };
use Validator;
use Config;


class AffilateProductController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('vendor.auth:vendor');
        $orders = OrderDetail::where('vendor_id', Auth::guard('vendor')->id())->where('sub_status', 5)->get();
        $amount = $orders->sum('subtotal') + $orders->sum('sub_shipping');

        $vendordata = array(
            'orders' => $orders,
            'amount' => $amount
        );

        view()->share('vendordata', $vendordata);

    }

    /**
     * Show the Vendor dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $affiliateProducts = AffiliateProduct::whereNotNull('vendor_id')
                ->where('vendor_id', Auth::guard('vendor')->id())->get();
        $status = Config::get('constants.status');
        $type = Config::get('constants.type');
        return view('vendor.affilateproduct.list', compact('affiliateProducts', 'type','status'));
    }

    public  function  create()
    {
        $categories = Category::all();
        $conditions = Config::get('constants.condition');
        return view('vendor.affilateproduct.create', compact('categories', 'conditions'));
    }

    //save affiliated products...
    public  function  store(Request $request)
    {
        //--- Validation Section
        $rules = [
            'a_name' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            'a_sku' => 'required|unique:affiliate_products|',
            'con' => 'required',
            'a_ship_time' => 'required',
            'a_color' => 'required',
            'a_catog' => 'required',
            'a_sub_catog' => 'required',
            'a_new_price' => 'required',
            'a_old_price' => 'required',
            'a_stock' => 'required|integer|min:0',
            'a_link' => 'required'

        ];
        $customs = [
            'avatar.mimes' => 'File must be with extension jpeg,png,jpg,gif or svg.',
            'avatar.max' => 'Fil size must be less than 2MB.',
            'a_sku.unique' => 'This SKU has already been taken.',
            'a_sku.regex' => 'SKU Must Not Have Any Special Characters.',
        ];
        $validator = Validator::make($request->all(), $rules, $customs);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        //end validation
        $product = new AffiliateProduct();
        $product->vendor_id = Auth::guard('vendor')->id();
        $product->a_type = $request->input('a_type');
        $product->a_name = $request->input('a_name');
        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('uploads/products/', $filename, 'public');
            $product->a_image = $filename;

        }
        $product->a_sku = $request->input('a_sku');
        $product->a_ship_time = $request->input('a_ship_time');
        $product->a_color = $request->input('a_color');
        $product->a_catog = $request->input('a_catog');
        $product->a_sub_catog = $request->input('a_sub_catog');
        $product->a_child_catog = $request->input('a_child_catog');
        $product->a_new_price = $request->input('a_new_price');
        $product->a_old_price = $request->input('a_old_price');
        $product->a_stock = $request->input('a_stock');
        $product->a_detail = $request->input('a_detail');
        $product->a_r_policy = $request->input('a_r_policy');
        if($request->input('url_link') == NULL){
        $product->url_link = 'https://www.youtube.com/';
        } else{
            $product->url_link =  $request->input('url_link');
        }
        $product->plink = $request->input('a_link');
        $product->a_r_policy = $request->input('a_r_policy');
        $product->a_status = 1;
        if($request->input('a_small') == true){
            $product->a_small = 1;
        }else{
            $product->a_small = 0;
        }
        if($request->input('a_medium') == true){
            $product->a_medium = 1;
        }else{
            $product->a_medium = 0;
        }
        if($request->input('a_large') == true){
            $product->a_large = 1;
        }else{
            $product->a_large = 0;
        }
        $product->save();
        return redirect()->route('vendor.affilateproduct_list');

    }
    //end save...

    public  function  edit($id)
    {
        $product = AffiliateProduct::where('affiliate_products.id', $id )
                ->where('vendor_id', Auth::guard('vendor')->id())
                ->leftJoin('subcategories', 'a_sub_catog', '=', 'subcategories.id')
                ->leftJoin('childcategories', 'a_child_catog', '=', 'childcategories.id')
                ->select('affiliate_products.*', 'subcategories.name as sub_name', 'childcategories.name as child_name')
                ->first();
        $categories = Category::all();
        $type = Config::get('constants.type');
        $conditions = Config::get('constants.condition');
        return view('vendor.affilateproduct.edit', compact('product', 'categories', 'type', 'conditions'));
    }
    // update ...
    public function update(Request $request, $id)
    {
        //--- Validation Section
        $rules = [
            'a_name' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            'a_sku' => 'required',
            'con' => 'required',
            'a_ship_time' => 'required',
            'a_color' => 'required',
            'a_catog' => 'required',
            'a_sub_catog' => 'required',
            'a_new_price' => 'required|numeric',
            'a_old_price' => 'required|numeric',
            'a_stock' => 'required|integer|min:0',
        ];
        $customs = [
            'avatar.mimes' => 'File must be with extension jpeg,png,jpg,gif or svg.',
            'avatar.max' => 'Fil size must be less than 2MB.',
            'a_sku.regex' => 'SKU Must Not Have Any Special Characters.',
            'a_new_price.numeric' => 'Numeric value accepted only.',
            'a_old_price.numeric' => 'Numeric value accepted only.'

        ];
        $validator = Validator::make($request->all(), $rules, $customs);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        //end validation
        $product = AffiliateProduct::where('id', $id)
        ->where('vendor_id', Auth::guard('vendor')->id())->first();
        $product->a_name = $request->input('a_name');
        if($request->hasfile('avatar'))
        {
            //new 
            $destination = 'storage/uploads/products/'.$product->a_image;
            if(File::exists($destination))
                {
                    File::delete($destination);
                }
            //end new
            $file = $request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('uploads/products/', $filename, 'public');
            $product->a_image = $filename;

        }
        $product->a_sku = $request->input('a_sku');
        $product->a_ship_time = $request->input('a_ship_time');
        $product->a_color = $request->input('a_color');
        $product->a_catog = $request->input('a_catog');
        $product->a_sub_catog = $request->input('a_sub_catog');
        $product->a_child_catog = $request->input('a_child_catog');
        $product->a_new_price = $request->input('a_new_price');
        $product->a_old_price = $request->input('a_old_price');
        $product->a_stock = $request->input('a_stock');
        $product->a_detail = $request->input('a_detail');
        $product->a_r_policy = $request->input('a_r_policy');
        if($request->input('a_small') == true){
            $product->a_small = 1;
        }else{
            $product->a_small = 0;
        }
        if($request->input('a_medium') == true){
            $product->a_medium = 1;
        }else{
            $product->a_medium = 0;
        }
        if($request->input('a_large') == true){
            $product->a_large = 1;
        }else{
            $product->a_large = 0;
        }
        if($request->input('checkbox') == true){
            $product->a_status = 1;
        }else{
            $product->a_status = 0;
        }
        $product->update();
        return redirect()->route('vendor.affilateproduct_list');
    }

    public  function  view($id)
    {
        $product = AffiliateProduct::where('id', $id)->where('vendor_id', Auth::guard('vendor')->id())->first();
        $category = Category::where('id', $product->a_catog)->first();   
        $subcategory = Subcategory::where('id', $product->a_sub_catog)->first();
        $childcategory = ChildCategory::where('id', $product->a_child_catog)->first(); 
        return view('vendor.affilateproduct.view', compact('product', 'category', 'subcategory', 'childcategory'));
    }

    public function destroy($id)
    {
         $product = AffiliateProduct::where('id', $id)->where('vendor_id', Auth::guard('vendor')->id())->first();
         $destination = 'storage/uploads/products/'.$product->a_image;
         if(File::exists($destination))
           {
               File::delete($destination);
           }
         $product->delete();
         return response()->json(['success' => 'Record Has Been Deleted!..']);
    }


}
