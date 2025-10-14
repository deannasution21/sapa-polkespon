<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $path = $request->path(); // e.g. "layanan/klinik/gizi"

        // Handle dynamic Klinik pages
        if (str_starts_with($path, 'layanan/klinik/')) {
            $segments = explode('/', $path);
            $page = $segments[2] ?? null; // e.g. "gizi", "umum", etc.

            return view('layanan.klinik.index', compact('page'));
        }

        // Handle normal static blade views
        if (view()->exists($path)) {
            return view($path);
        }

        abort(404);
    }
}
