<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function equipmentLoansCreated()
    {
        return $this->hasMany(EquipmentLoan::class, 'lender_id');
    }

    public function loanTextsCreated()
    {
        return $this->hasMany(LoanText::class, 'lender_id');
    }

    public function collaboratorsCreated()
    {
        return $this->hasMany(Collaborator::class, 'lender_id');
    }

    public function equipmentsCreated()
    {
        return $this->hasMany(Equipment::class, 'lender_id');
    }

    public function equipmentTypesCreated()
    {
        return $this->hasMany(EquipmentType::class, 'lender_id');
    }
}
