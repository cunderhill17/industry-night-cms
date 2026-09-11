<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPortfolio extends Model
{
    protected $fillable = [
        'student_name',
        'portfolio_url',
        'student_image',
        'archived'
    ];

    public function portfolioRoles()
    {
        return $this->hasMany(PortfolioRole::class);
    }
}
