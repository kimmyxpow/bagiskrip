<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'code', 'lang', 'view','publish_by'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['s'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');;
        });
    }
}
