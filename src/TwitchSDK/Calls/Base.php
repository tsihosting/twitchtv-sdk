<?php

namespace TSIHosting\TwitchSDK\Calls;

class Base
{
  protected $guzzle;

  public function __construct(Guzzle $guzzle)
  {
    $this->guzzle = $guzzle;
  }
}