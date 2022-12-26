<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurrantSurvey extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded=['_token'];

        public function results(){

            return $this->hasMany(Result::class);

    }
    public function employee(){

        return $this->belongsTo(User::class);

    }
    public function survey(){

        return $this->belongsTo(Survey::class)->withDefault();;

    }

    public function evaluator(){

        return $this->belongsTo(User::class,'evaluator_id');

    }

}
