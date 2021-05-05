<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> ['required', 'string', 'max:255'],
            'icon'=> ['nullable','string' ,'max:255'],
            'image'=>  ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],

        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->title , '-');

        $checktitle = Category::where('slug',$input['slug'])->get();

        if(sizeof($checktitle) == 0)
        {

            if($request->file('image')){

                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();

                $input['image'] = $image_name;

                $image->storeAs('/images/categories',$image_name);

            }

           Category::create($input);

           Session::flash('message','Category Added Sucessfully');
           Session::flash('alert-type','success');
           return redirect()->route('category.index');
        }
        Session::flash('message','Category Already exist');
        Session::flash('alert-type','error');
       return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category'=>$category,
            'categories'=>Category::where('id','!=',$category->id)->get(),
//            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'title'=> ['required', 'string', 'max:255'],
            'icon'=> ['nullable', 'string' ,'max:255'],
            'image'=>  ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ]);


        if($request->file('image')){

            $image = $request->file('image');

            $image_name = $image->getClientOriginalName();

            $checkImage = Category::where('image',$image_name)->get();

        }
        else{

            $value = $request->image_v;

            $checkImage = Category::where('image',$value)->get();

        }

        $slug = Str::slug($request->title , '-');

        $checktitle = Category::where('slug',$slug)->get();

        if(sizeof($checktitle) == 0 || $category->slug == $slug)
        {
            $category->parent_id = $request->parent_id;

            if($request->parent_id == null){

                $category->parent_id = 0;

            }

            $category->title = $request->title;
            $category->icon = $request->icon;
            $category->slug = $slug;

            if(sizeof($checkImage) == false){

                $image->storeAs('/images/categories',$image_name);

                $category->image = $image_name;

                $category->save();

                Session::flash('message','Category Updated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('category.index');

            }
            else{

                $category->save();

                Session::flash('message','Category Updated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('category.index');

            }

        }
        Session::flash('message','Category Already Exist');
        Session::flash('alert-type','error');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Session::flash('message','Category Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('category.index');
    }
}
