<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issuance extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];
    protected $fillable =
    [
        'item_id', 'employee_id', 'quantity', 'amount', 'remark',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}

