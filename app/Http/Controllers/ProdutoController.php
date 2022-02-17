<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoTag;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(15); 
        
        return view('app.produto.index', ['produtos' => $produtos, 'request' => $request->all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view ('app.produto.create', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$regras = [
            'name' => 'required|min:3|max:40',
            'tag_id' => 'exists:tags,id'
        ];

        $feedback = [
            'required' => 'O campo:attribute deve ser preenchido',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'tag_id.exists' => 'A tag precisa ser informada'
        ];

        $request->validate($regras, $feedback); */
        $nome = $request->input("name");
        $produto = Produto::create(["name" => $nome]);

        $tags = $request->input("tags");
            if(isset($tags)){
                foreach($tags as $tag){
                    ProdutoTag::create([
                        "produto_id" => $produto->id,
                        "tags_id" => $tag
                    ]);
                }
            }

        return redirect()->route('produto.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('app.produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $tags = Tag::all();
        return view('app.produto.edit', ['produto' => $produto, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $regras = [
            'name' => 'required|min:3|max:40',
        ];

        $feedback = [
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'name.required' => 'O campo precisa ser preenchido'
        ];

        $request->validate($regras, $feedback);
        
        $produto->update($request->all());
        return redirect()->route('produto.index', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index', ['produto' => $produto->id]);
    }
}
