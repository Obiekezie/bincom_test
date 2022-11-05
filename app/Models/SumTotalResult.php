<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumTotalResult extends Model
{
    use HasFactory;
    protected $table="polling_unit";


    protected $fillable = [
        'party_score', 'party_abbreviation', 'ward_id','lga_id','polling_unit_id','entered_by_user','polling_unit_name','polling_unit_description','polling_unit_number','uniquewardid'
    ];
    public function pollingUnit()
    {
        return $this->hasMany('App\PollenUnitResult');
    }
}
