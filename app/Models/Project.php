<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'server_id',
        'title',
        'description'
    ];

    public $timestamps = false;

    protected $dateFormat = 'Y-m-d';

    public function step(){
        return $this->hasMany(Step::class);
    }
}
