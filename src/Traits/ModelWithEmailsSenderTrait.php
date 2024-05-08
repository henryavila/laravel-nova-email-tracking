<?php

namespace HenryAvila\LaravelNovaEmailTracking\Traits;

use HenryAvila\LaravelNovaEmailTracking\Models\Email;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Trait ModelWithEmailsSenderTrait
 * @package App\Traits
 *
 * @property Collection|Email[] emails
 */
trait ModelWithEmailsSenderTrait
{
    public function emails(): MorphMany
    {
        return $this->morphMany(Email::class, 'sender');
    }
}
