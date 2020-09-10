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
    public function saveCountydata(Request $request)
    {

        $country=country::create($request->all());
        return response()->json($country,201);
    }
    public function editCountrydata(Request $request,country $country)

    {
        $country->update($request->all());
        return response()->json($country,200);


    }

    public function deleteCountrydata(Request $request, country $country)
    {

        $country->delete();
        return response()->json(null,204);
    }
}
