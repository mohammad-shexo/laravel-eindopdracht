<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create()
    {
        return view('admin.faq.items.create', [
            'categories' => FaqCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        Faq::create($data);
        return redirect()->route('admin.faq-categories.index');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.items.edit', [
            'faq' => $faq,
            'categories' => FaqCategory::all()
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'faq_category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq->update($data);
        return redirect()->route('admin.faq-categories.index');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back();
    }
}
