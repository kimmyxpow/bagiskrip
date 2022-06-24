<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Visibility extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the codes for the Lang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function codes(): HasMany
    {
        return $this->hasMany(Code::class, 'lang_hash', 'hash');
    }
}
