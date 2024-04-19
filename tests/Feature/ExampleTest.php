<?php

use App\Data\PlayerInfo;
use App\Events\GameStarted;
use Thunk\Verbs\Support\Serializer;

test('events serialize array objects', function () {

    $event = new GameStarted(
        1,
        [
            new PlayerInfo('steve', 'jobs'),
            new PlayerInfo('tim', 'cook')
        ]);

    $data = app(Serializer::class)->serialize($event);

    $event2 = app(Serializer::class)->deserialize(GameStarted::class, $data);

    $this->assertTrue($event2->players[0] instanceof PlayerInfo);
});
