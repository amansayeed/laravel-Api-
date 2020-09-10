<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Api\country;
use Illuminate\Http\Request;

class countryController extends Controller
{
    public function getCounty()
    {

        return response()->json(country::get(), 200);
    }
    public function getCountryById($id)
    {

        $country = country::find($id);
        if (is_null($country)) {
            return response()->json(['message', ' This id data record not found'], 400);
        } else {
            return response()->json($country, 200);
        }

    }
    public function saveCountydata(Request $request)
    {

        $country = country::create($request->all());
        return response()->json($country, 201);
    }

    public function editCountrydata(Request $request, $id)
    {
        $country = country::find($id);

        if (is_null($country)) {
            return response()->json(['message', ' This id data record not found'], 400);
        } else {
            $country->update($request->all());

            return response()->json($country, 200);

        }
    }

    public function deleteCountrydata(Request $request, $id)
    {

        $country=country::find($id);
        if(is_null($country))
        {

            return response()->json(['message','this id data record is not found'],400);
        }
        else 
        {

        $country->delete();

        return response()->json(null, 204);
            }
    }
}
