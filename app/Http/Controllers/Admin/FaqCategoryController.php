<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        return view('admin.faq.categories.index', [
            'categories' => FaqCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.faq.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(['name' => 'required|string']);
        FaqCategory::create($data);

        return redirect()->route('admin.faq-categories.index');
    }

    public function edit(FaqCategory $faqCategory)
    {
        return view('admin.faq.categories.edit', compact('faqCategory'));
    }

    public function update(Request $request, FaqCategory $faqCategory)
    {
        $data = $request->validate(['name' => 'required|string']);
        $faqCategory->update($data);

        return redirect()->route('admin.faq-categories.index');
    }

    public function destroy(FaqCategory $faqCategory)
    {
        $faqCategory->delete();
        return back();
    }
}
