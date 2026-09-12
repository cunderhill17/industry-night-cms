<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPortfolio extends Model
{
    use HasFactory;

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
