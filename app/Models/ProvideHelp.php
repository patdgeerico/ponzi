<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProvideHelp extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['created_at'];


    public function gethelp()
    {
        return $this->belongsTo(GetHelp::class, 'get_help_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getExpiryTimeAttribute()
    {
       return $this->created_at->addHours(24)->diffForHumans();
    }


}
