<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\NavigationDropdown;
use App\Http\Requests\DropdownStoreRequest;
use Illuminate\Http\Request;

class DropdownController extends Controller
{

    public function show()
    {
        return NavigationDropdown::all();
    }

    public function store(DropdownStoreRequest $request)
    {
        $navigationDropdown = new NavigationDropdown();
        $navigationDropdown->name = $request->name;
        if ($navigationDropdown->save()) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

}
