<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

final class Venue extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'slug'];

    public function getSlugAttribute($value): string
    {
        return Str::slug($value);
    }

    public function setNameAttribute($value): void
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
