<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Event extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'poster', 'date_event', 'venue_id'];

    protected array $dates = ['date_event'];

    public function dateEvent(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('Y M d'),
        );
    }

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }
}
