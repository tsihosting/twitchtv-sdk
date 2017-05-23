<?php

namespace TSIHosting\TwitchSDK\Calls;

class Game extends Base
{
  const URI = 'games/top/';

  public function top()
  {
    return $this->guzzle('')
  }
}