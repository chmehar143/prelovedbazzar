<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;

class ChildCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    public function index() {
        return view('admin.childcategory.list');
    }

    public  function  create()
    {
        $cats = Subcategory::all();
        return view('admin.childcategory.create',compact('cats'));
    }
    public  function  edit()
    {
        return view('admin.childcategory.edit');
    }

    public  function  view()
    {
        return view('admin.childcategory.view');
    }


    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
            'slug' => 'unique:subcategories|regex:/^[a-zA-Z0-9\s-]+$/'
        ];
        $customs = [
            'slug.unique' => 'This slug has already been taken.',
            'slug.regex' => 'Slug Must Not Have Any Special Characters.'
        ];
        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = new Childcategory();
        $input = $request->all();
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section
        return redirect()->route('admin.child_category_list');
        //--- Redirect Section Ends
    }
}
