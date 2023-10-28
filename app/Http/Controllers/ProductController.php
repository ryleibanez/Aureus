<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    public function category(Request $request)
    {
        return view('category');
    }
    public function getAllProducts()
    {
        $products = Products::all();
    }


    public function productPage(Request $request)
    {
        $id = $request->query('id');
        $pd = Products::where('id', $id)->get();

        if ($pd) {
            return view('product_details', compact('pd'));
        } else {
        }
    }

    public function productsPage()
    {
        $pd = Products::orderBy('id', 'desc')->paginate(8);

        return view('products', compact('pd'));
    }

    public function searchProduct(Request $request)
    {
        $search = $request->query('search');

        $pd = Products::where('pdname', 'like', '%' . $search . '%')->orderBy('id', 'desc')->paginate(8);

        if ($request->is('categoryProduct')) {
            $pd = Products::where('category', 'like', '%' . $search . '%')->orderBy('id', 'desc')->paginate(8);
        }
        // Append the filter parameter to the pagination links
        $pd->appends(['search' => $search]);

        if ($pd->count() <= 0) {
            session()->flash('search', 'No Product Found');
            return Redirect(Route('index'));
        }

        return view('productsearch', compact('pd', 'search'));
    }

    public function getProductInfo($id)
    {
    }
}
