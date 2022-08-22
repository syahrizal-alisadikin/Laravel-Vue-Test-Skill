<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'email', 'company_id', 'phone'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
