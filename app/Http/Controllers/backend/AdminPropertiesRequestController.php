<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class AdminPropertiesRequestController extends Controller
{
    public function propertiesRequest()
    {
        $propertiesRequest = PropertyRequest::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.properties-request.index', [
            'propertiesRequest' => $propertiesRequest
        ]);
    }
}
