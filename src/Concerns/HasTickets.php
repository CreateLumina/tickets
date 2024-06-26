<?php

namespace Lumina\Tickets\Concerns;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Lumina\Tickets\Models\Message;
use Lumina\Tickets\Models\Ticket;

trait HasTickets
{
    /**
     * Get User tickets relationship
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'user_id');
    }

    /**
     * Get User tickets relationship
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'user_id');
    }
}
