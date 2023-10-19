<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'brand_and_model', 'serial_number_patrimony', 'observation', 'stock', 'have_stock', 'has_power_supply', 'has_removable_battery', 'status', 'equipment_type_id'
    ];

    public function equipmentType(){
        return $this->belongsTo(EquipementType::class, 'equipment_type_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
