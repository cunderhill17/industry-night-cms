<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioRole extends Model
{
    protected $fillable = [
        'role'
    ];

    public function studentPortfolio()
    {
        return $this->belongsTo(StudentPortfolio::class);
    }
}
