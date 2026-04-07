<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\Nationality;
use App\Models\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function states($country_id)
    {
        return State::where('country_id', '=', $country_id)
            ->select('id', 'state_name')
            ->orderBy('state_name')
            ->get();
    }

    public function lgas($state_id)
    {
        return Lga::where('state_id', '=', $state_id)
            ->select('id', 'lga_name')
            ->orderBy('lga_name')
            ->get();
    }
}
