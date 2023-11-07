<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class pageControllers extends Controller
{
    //dashboard categorie route //
    public function category()
    {

        return view('Dashboard.Category.create_category');
    }
    public function categoryStore(Request $request)
    {
        Categorie::create([
            'name' => $request->name,
            // 'slug' => $request->slug,
        ]);
        return redirect('/categorys_view',);
    }
    public function categorys_view()
    {
        $categorys = Categorie::latest()->get();
        return view('Dashboard.Category.categorys_view', compact('categorys'));
    }
    public function edit_category(Categorie $category)
    {
      
        return view('Dashboard.Category.edit_category', compact('category'));
    }
    public function update_category(Categorie $category, Request $request)
    {
        $category->update([
            'name' => $request->name,
            // 'slug' => $request->slug,
        ]);
        return redirect('/categorys_view',);
    }


    //dashboard //

    public function slider()
    {
        return view('Dashboard.Slider.slider');
    }
    //slider data//
    public function sliderStore(Request $request)
    {

        Slider::create([
            'title' => $request->title,
            'name' => $request->name,
            'image' => $request->file('image')->store('public/posts'),
        ]);
        return redirect('/slider_view');
    }
    //slider data end//

    //slider view //
    public function slider_view()
    {
        $sliders = Slider::latest()->get();
        return view('Dashboard.Slider.slider_view', compact('sliders'));
    }
    //slider view end//

    //slider edit //
    public function slider_edit(Slider $slider)
    {
        return view('Dashboard.Slider.slider_edit', compact('slider'));
    }
    //slider edit end

    //slider update
    public function slider_update(Slider $slider, Request $request)
    {


        $slider->update([
            'title' => $request->title,
            'name' => $request->name,
            'image' => $request->file('image')->store('public/posts'),
        ]);
        return redirect('/slider_view',);
    }
    //dashboard end //

    //dashboard products //
    public function create_products()
    {
        $categorys=Categorie::latest()->get();
        return view('Dashboard.Products.create_product', compact('categorys'));
    }
    public function products_store(Request $request)
    {
  
        Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => $request->file('image')->store('public/posts'),
        ]);
        return redirect('/products_view');
    }
    public function products_view()
    {
        $products = Product::latest()->get();
        return view('Dashboard.Products.products_view', compact('products'));
    }
    public function product_edit(Product $product)
    {
        $categorys=Categorie::latest()->get();
        return view('Dashboard.Products.product_edit', compact('product','categorys'));
    }
    public function product_update(Product $product, Request $request)
    {
        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => $request->file('image')->store('public/posts'),
        ]);
        return redirect('/products_view',);
    }
    //dashboard products  end//



    public function index()
    {
        $mens = Product::where('category_id', 1)->latest()->limit(4)->get();
        $womens = Product::where('category_id', 2)->latest()->limit(4)->get();
        $bags = Product::where('category_id', 3)->latest()->limit(4)->get();
        $footwares = Product::where('category_id', 4)->latest()->limit(4)->get();


        return view('Main_Section.index', compact('mens', 'womens', 'bags', 'footwares'));
    }


    // public function nav()
    // {

    //     return view('/nav');
    // }

    public function products()
    {
        return view('Main_Section.products');
    }

    public function contact()
    {
        return view('Main_Section.contact');
    }

    // public function footer()
    // {
    //     return view('/footer');
    // }
}
