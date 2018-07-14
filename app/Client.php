<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'rfc' => $this->rfc,
            'businessName' => $this->businessName,
            'username' => $this->username,
            'password' => $this->password,
            'email' => $this->email,
            'discount' => $this->discount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
