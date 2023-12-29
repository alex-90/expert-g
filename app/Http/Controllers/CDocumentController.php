<?php

namespace App\Http\Controllers;

use App\Models\CDocuments;
use App\Models\Document;
use Illuminate\Http\Request;

class CDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();

        return view('index', [
            'documents' => $documents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CDocuments $cDocuments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CDocuments $cDocuments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $content = $request->input('content');

        $document = Document::findOrFail($id);

        $v1 = $document->currentVersion()->version_id;

        $document->name = $name;
        $document->content = $content;

        $document->save();

        $v2 = $document->currentVersion()->version_id;

        if ($v1 != $v2) {
            self::notify($document, 'Document has been updated');
        }

        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CDocuments $cDocuments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editDocument($id)
    {
        $document = Document::findOrFail($id);

        return view('edit', [
            'document' => $document,
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delDocument($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        self::notify($document, 'Document has been deleted');

        return redirect(route('home'));
    }

    public static function notify(Document $document, string $text)
    {
        $users=[];
        foreach($document->users()->get() as $val){
            $user_id = $val->user_id;

            $users[] = $user_id;
        }

        foreach ($users as $user) {
            echo $text . PHP_EOL;
        }
    }

}
