<?php

namespace App\Http\Controllers;

use App\Models\ProdutoTag;
use Illuminate\Http\Request;

class ProdutoTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtotag = ProdutoTag::create([
            "produto_id" => $request->input('produto_id'),
            "tags_id" => $request->input('tag')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdutoTag  $produtoTag
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoTag $produtoTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdutoTag  $produtoTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoTag $produtoTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdutoTag  $produtoTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoTag $produtoTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdutoTag  $produtoTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoTag $produtoTag)
    {
        //
    }
}
