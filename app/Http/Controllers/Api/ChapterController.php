<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;


class ChapterController extends Controller
{
    public function show(int $id)
    {
        $chapter = Chapter::with('choices')->findOrFail($id);

        return response()->json($chapter);
    }
}
