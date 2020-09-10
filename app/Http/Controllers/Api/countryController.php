<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Api\country;


class countryController extends Controller
{
    public function getCounty()
    {

        return response()->json(country::get(),200);
    }
    public function getCountryById($id)
    {
        return response()->json(country::find($id),200);
    }
}
