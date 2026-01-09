<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('news.index', compact('news'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'required|date',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('news.index')
            ->with('success', 'News item created');
    }


    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        // Force correcte datum
        $data['published_at'] = Carbon::parse($data['published_at']);

        // Image alleen overschrijven als er een nieuwe is
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        } else {
            unset($data['image']);
        }

        $news->update($data);

        return redirect()
            ->route('news.index')
            ->with('success', 'News updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'News item deleted');
    }

}
