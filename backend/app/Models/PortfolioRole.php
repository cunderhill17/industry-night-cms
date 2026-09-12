<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'role'
    ];

    public function studentPortfolio()
    {
        return $this->belongsTo(StudentPortfolio::class);
    }
}
