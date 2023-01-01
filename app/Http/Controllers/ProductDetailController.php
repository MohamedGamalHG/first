<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

/**
 * Class ProductDetailController
 * @package App\Http\Controllers
 */
class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productDetails = ProductDetail::paginate();

        return view('product-detail.index', compact('productDetails'))
            ->with('i', (request()->input('page', 1) - 1) * $productDetails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productDetail = new ProductDetail();
        return view('product-detail.create', compact('productDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductDetail::$rules);

        $productDetail = ProductDetail::create($request->all());

        return redirect()->route('product-details.index')
            ->with('success', 'ProductDetail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productDetail = ProductDetail::find($id);

        return view('product-detail.show', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productDetail = ProductDetail::find($id);

        return view('product-detail.edit', compact('productDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductDetail $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDetail $productDetail)
    {
        request()->validate(ProductDetail::$rules);

        $productDetail->update($request->all());

        return redirect()->route('product-details.index')
            ->with('success', 'ProductDetail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productDetail = ProductDetail::find($id)->delete();

        return redirect()->route('product-details.index')
            ->with('success', 'ProductDetail deleted successfully');
    }
}
