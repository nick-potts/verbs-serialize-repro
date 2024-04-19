<?php

namespace App\Events;

use App\Data\PlayerInfo;
use App\States\GameState;
use Thunk\Verbs\Attributes\Autodiscovery\AppliesToState;
use Thunk\Verbs\Event;

#[AppliesToState(GameState::class)]
class GameStarted extends Event
{
    public function __construct(
        public int|null $game_id,
        /** @var PlayerInfo[] */
        public array $players,
    )
    {
    }
}
