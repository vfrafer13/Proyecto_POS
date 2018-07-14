<?php

namespace App\Http\Controllers;

use App\SaleDetail;
use App\Http\Resources\SaleDetail as SaleDetailResource;

class SaleDetailController extends Controller
{
    public function show ($id)
    {
        return new SaleDetailResource(SaleDetail::find($id));
    }
}
