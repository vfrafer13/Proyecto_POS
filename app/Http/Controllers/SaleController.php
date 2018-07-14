<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Http\Resources\Sale as SaleResource;

class SaleController extends Controller
{
    public function show ($id)
    {
        return new SaleResource(Sale::find($id));
    }
}
