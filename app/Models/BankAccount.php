<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    // Required because primary key is uuid.
    //public $incrementing = false;

    protected $guarded = [];

    protected $hidden = [
        'beneficiary_name',
        'bic',
        'iban'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
