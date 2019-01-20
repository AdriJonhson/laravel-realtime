<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Utils\Utils;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->merge([
            'slug' => Utils::slugGenerate($request->name)
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->withSucces('Produto registrado com sucesso!');
    }

    public function productsPaginate()
    {
        return datatables(Product::all())->toJson();
    }
}
