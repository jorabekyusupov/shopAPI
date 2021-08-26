<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_has_role extends Model
{
    use HasFactory;
    protected $table = 'model_has_roles';
    protected $fillable = ['role_id', 'model_id', 'model_type'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'model_id', 'id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
