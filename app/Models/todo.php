<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\step;

class todo extends Model
{
    use HasFactory;
    protected $fillable = ['title','completed','user_id','description'];


    public function steps()
    {
        return $this->hasMany(Step::class);
    }

}

