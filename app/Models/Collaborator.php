<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cpf', 'email'
    ];

    public function hasEquipmentLoans()
    {
        return $this->hasMany(EquipmentLoan::class, 'borrower_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
