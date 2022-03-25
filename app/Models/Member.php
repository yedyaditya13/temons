<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'code_member',
        'address',
        'phone',
        'checkin',
        'checkout',
        'member_status'
    ];
    
    
    protected $dates = [
        'checkin',
        'checkout',
        'created_at',
        'updated_at',
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */



    public function getResourceUrlAttribute()
    {
        return url('/admin/members/'.$this->getKey());
    }

}
