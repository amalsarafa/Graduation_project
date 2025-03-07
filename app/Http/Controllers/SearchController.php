<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $results = [];

        //
        $files = glob(resource_path('views/website/services/index.blade.php'));

        foreach ($files as $file) {
            $content = File::get($file);

            if (stripos($content, $query) !== false) {
                $results[] = basename($file, '.blade.php'); //    
            }
        }

        return view('website.search', compact('results', 'query'));
    }
    }


