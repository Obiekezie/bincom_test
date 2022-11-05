<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollenUnitResult extends Model
{
    use HasFactory;
    protected $table="announced_pu_results";

    public function sumTotal()
    {
        return $this->belongsTo('App\SumTotalResult');
    }
}
