<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'item_id',
        'claimant_name',
        'claimant_email',
        'claimant_contact',
        'claim_date',
        'status'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}