<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applyModel extends Model
{
     protected $table="application";
    protected $primaryKey="application_id";

    protected $fillable=[
        'name',
        'father_name',
        'mother_name',
        'address',
        'phone_no',
        'email',
        'plot_area',
        'floor_amount',
        'status'
    ];
}
