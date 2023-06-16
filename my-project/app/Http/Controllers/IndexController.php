<?php
namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getElement($id)
    {
        return Element::findOrFail($id);
    }

    public function getElements()
    {
        return Element::all();
    }

    public function createElement(Request $request)
    {
        $element = Element::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'date' => $request->input('date'),
            'desc' => $request->input('desc'),
            'link' => $request->input('link'),
            'image' => $request->input('image'),
            'tags' => $request->input('tags'),
        ]);

        return response()->json(['message' => 'Elemento creado exitosamente'], 201);
    }

    public function deleteElement($id)
    {
        $element = Element::findOrFail($id);
        $element->delete();

        return response()->json(['message' => 'Elemento eliminado exitosamente']);
    }

    public function updateElement(Request $request, $id)
    {
        $element = Element::findOrFail($id);

        $element->title = $request->input('title');
        $element->author = $request->input('author');
        $element->date = $request->input('date');
        $element->desc = $request->input('desc');
        $element->link = $request->input('link');
        $element->image = $request->input('image');
        $element->tags = $request->input('tags');

        $element->save();

        return response()->json(['message' => 'Elemento actualizado exitosamente']);
    }
}
?>