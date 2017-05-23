<?php

namespace TSIHosting\TwitchSDK\Calls;

class Game extends Base
{
  const URI = 'users';

  public function lookup($Account)
  {
    return $this->guzzle('');
  }
}