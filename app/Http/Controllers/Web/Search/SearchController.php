<?php

namespace App\Http\Controllers\Web\Search;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data = $request->input('search');
        $search = Film::query()->where('name', 'LIKE', "%{$data}%")->get();
        if ($search->isEmpty()) {
           return response()->json(['data'=>[]]);
        }
       return response()->json(['data'=>$search]);
    }
}
