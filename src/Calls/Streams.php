<?php

namespace TSIHosting\TwitchSDK\Calls;

class Streams extends Base
{
  const URI = 'streams/';

  public function game($game)
  {
    return $this->request('GET', self::URI . '?game=' . $game);
  }

  public function channel($channel)
  {
    return $this->request('GET', self::URI . '?channel=' . $channel);
  }
}