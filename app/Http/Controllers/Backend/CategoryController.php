<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Storage;
use Alert;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->get();

      
  $tittle = 'Hapus Data';
        $text = "Apakah anda yakin?";
        confirmDelete($tittle, $text);
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;

        $category->slug = Str::slug($request->name, '-');
        $category->save();
        
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('backend.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'=>'required|unique:categories',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        toast('Data berhasil dihapus', 'success');
        return redirect()->route('backend.category.index');
    }
}