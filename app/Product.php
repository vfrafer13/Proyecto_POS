<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function saleDetails()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'taxes' => $this->taxes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
