<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('viewAny', Category::class);

        return view('dashboard.category.index', [
            'categories' => Category::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('create', Category::class);

        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Gate::authorize('create', Category::class);

        try {
            Category::create($request->only(['name']));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambah kategori: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menambah kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        Gate::authorize('view', $category);

        return view('dashboard.category.show', [
            'category' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        Gate::authorize('update', $category);

        return view('dashboard.category.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        Gate::authorize('update', $category);

        try {
            $category->update($request->only(['name']));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengubah kategori: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Gate::authorize('delete', $category);

        try {
            $category->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus kategori: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus kategori');
    }
}
