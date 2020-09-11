<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Api\country;
use Illuminate\Http\Request;
use Validator;

class countryController extends Controller
{
    public function getCounty()
    {
        $country=country::paginate();
        return response()->json($country, 200);
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
        $rules =
            [
            'iso' => 'required|min:2|max:2',
            'name' => 'required|min:2|max:5',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {

            $country = country::create($request->all());

            return response()->json($country, 201);
        }
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

        $country = country::find($id);
        if (is_null($country)) {

            return response()->json(['message', 'this id data record is not found'], 400);
        } else {

            $country->delete();

            return response()->json(null, 204);
        }
    }
}
