<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('cover')){
            if(!$request->file('cover')->isValid()){
                return back()->with('upload', 'الصورة المختارة كبيرة جدًا.');
            }
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:product',
            'type' => 'required',
            'price' => 'required|numeric',
            'cover' => 'required|mimes:png,jpg,jpeg,gif,svg,avif|max:2048',
            'category' => [
                'required',
                'array',
                Rule::exists('category', 'id'),
            ],
        ],
        [
            'name.required' => 'الاسم مطلوب.',
            'name.unique' => 'هذا الاسم مستخدم بالفعل.',
            'type.required' => 'النوع مطلوب.',
            'price.required' => 'السعر مطلوب.',
            'price.numeric' => 'السعر يجب أن يكون رقمًا.',
            'cover.required' => 'الصورة مطلوبة.',
            'cover.max' => 'حجم الصورة يجب أن لا يتجاوز 2 ميجابايت.',
            'cover.mimes' => 'حجم الصورة يجب أن لا يتجاوز 2 ميجابايت.',
            'category.required' => 'الرجاء تحديد فئة واحدة على الأقل.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        
        $image = $request->file('cover');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/products',$imagename);

        $product = Product::create([
            'cover' => 'images/products/'.$imagename,
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'description' => ''
        ]);
        
        $product->categories()->attach($request->category);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $product = Product::findOrFail($id);
            $categories = Category::all();
            return view('admin.product.edit', compact('product', 'categories'));
        }catch (ModelNotFoundException $e){
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('cover')) {
            if (!$request->file('cover')->isValid()) {
                return back()->with('upload', 'الصورة المختارة كبيرة جدًا.');
            }
        }
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:product,name,' . $id,
            'type' => 'required',
            'price' => 'required|numeric',
            'cover' => 'nullable|mimes:png,jpg,jpeg,gif,svg,avif|max:2048',
            'category' => [
                'required',
                'array',
                Rule::exists('category', 'id'),
            ],
        ],
        [
            'name.required' => 'الاسم مطلوب.',
            'name.unique' => 'هذا الاسم مستخدم بالفعل.',
            'type.required' => 'النوع مطلوب.',
            'price.required' => 'السعر مطلوب.',
            'price.numeric' => 'السعر يجب أن يكون رقمًا.',
            'cover.max' => 'حجم الصورة يجب أن لا يتجاوز 2 ميجابايت.',
            'cover.mimes' => 'صيغة الصورة غير صالحة. الرجاء اختيار صورة بصيغة صحيحة.',
            'category.required' => 'الرجاء تحديد فئة واحدة على الأقل.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $product = Product::find($id);
    
        if (!$product) {
            return abort(404);
        }
    
        if ($request->file('cover')) {
            $image = $request->file('cover');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/products', $imagename);
    
            // Delete old image
            if (File::exists($product->cover)) {
                File::delete($product->cover);
            }
    
            $product->cover = 'images/products/' . $imagename;
        }
    
        $product->name = $request->name;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->save();
    
        // Sync categories
        $product->categories()->sync($request->category);
        return redirect('/products');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $product = Product::findOrFail($id);

            if ($product->cover && file_exists(public_path($product->cover))) {
                unlink(public_path($product->cover));
            }          
            $product->delete();

            return back();
        }catch (ModelNotFoundException $e){
            abort(404);
        }
    }
}
