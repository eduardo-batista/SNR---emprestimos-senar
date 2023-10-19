<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanText extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'content'];

    public function equipmentLoans()
    {
        return $this->hasMany(EquipmentLoan::class, 'text_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
