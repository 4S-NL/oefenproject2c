<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function dashboard() {
        $buildings = Building::all();
        return view('dashboard', [
            'buildings' => $buildings
        ]);
    }

}
