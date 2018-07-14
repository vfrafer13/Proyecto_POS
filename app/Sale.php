<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function saleDetails()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'serie' => $this->serie,
            'date' => $this->date,
            'time' => $this->time,
            'client_id' => $this->client_id,
            'clientDiscount' => $this->clientDiscount,
            'subtotal' => $this->subtotal,
            'discountSubtotal' => $this->discountSubtotal,
            'taxes' => $this->taxes,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
