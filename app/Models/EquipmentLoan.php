<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_date', 'expected_return_date', 'return_date', 'observation', 'equipment_id', 'borrower_id', 'lender_id', 'text_id'
    ];

    public function hasEquipments()
    {
        return $this->hasMany(Equipment::class, 'equipment-id');
    }
    public function borrower()
    {
        return $this->belongsTo(Collaborator::class, 'borrower_id');
    }
    public function lender()
    {
        return $this->belongsTo(User::class, 'lender_id');
    }
    public function loanText()
    {
        return $this->belongsTo(LoanText::class, 'text_id');
    }
}

