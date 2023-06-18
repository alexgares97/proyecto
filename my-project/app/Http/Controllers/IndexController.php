<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getElement($id)
    {
        $content = Element::findOrFail($id);
        $latestElements = Element::latest()->limit(5)->get();

        return view('content.detail', compact('content','latestElements'));
    }

    public function getElements()
    {
        $contents = Element::all(); // Fetch the contents from the database
        return view('content.index', compact('contents'));
    }

    public function createElement(Request $request)
    {
       /* $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'link' => 'required',
            'image' => 'required',
            'tags' => 'required',
        ]);

        $element = Element::create($validatedData);*/
        return view('content.create');

        //return response()->json(['message' => 'Elemento creado exitosamente'], 201);
    }
    public function storeElement(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file type and size limits as needed
            'tags' => 'required',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');

        $element = Element::create([
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'desc' => $validatedData['desc'],
            'image' => $imagePath,
            'tags' => $validatedData['tags'],
            ]);
        return redirect()->route('content.index')->with('success', 'Elemento creado exitosamente');
        /*$element = new Element();
        $element->title = $validatedData['title'];
        $element->author = $validatedData['author'];
        $element->date = $validatedData['date'];
        $element->desc = $validatedData['desc'];
        $element->link = $validatedData['link'];
        $element->image = $validatedData['image'];
        $element->tags = $validatedData['tags'];
        $element->save();
    
        return redirect()->route('content.create')->with('success', 'Elemento creado exitosamente');*/
    }

    public function deleteElement($id)
    {
        $element = Element::findOrFail($id);
        $element->delete();

        return response()->json(['message' => 'Elemento eliminado exitosamente']);
    }

    public function updateElement(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'tags' => 'required',
        ]);

        $element = Element::findOrFail($id);
        $element->update($validatedData);

        return response()->json(['message' => 'Elemento actualizado exitosamente']);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $min_length = 1;

        if (strlen($query) >= $min_length) {
            $results = Element::where('title', 'like', '%' . $query . '%')
                ->orWhere('desc', 'like', '%' . $query . '%')
                ->get();

            if ($results->isNotEmpty()) {
                return view('content.search', compact('results'));
            } else {
                return view('search.no-results');
            }
        } else {
            return view('search.invalid-query', compact('min_length'));
        }
    }
}
