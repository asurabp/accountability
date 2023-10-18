<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];
    protected $attributes = [
        'active' => 1
    ];

    protected $fillable = [
            'name', 'email', 'active'
    ];

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Resigned',
        ];
    }

    public function issuances()
    {
        return $this->hasMany(Issuance::class);
    }

}
