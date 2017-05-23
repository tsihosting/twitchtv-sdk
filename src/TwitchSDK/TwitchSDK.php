<?php

namespace TSIHosting\TwitchSDK;

use TSIHosting\TwitchSDK\Calls\Base;
use GuzzleHttp\Client as Guzzle;

class TwitchSDK
{
  /**
   * @var array
   */
  private $config = [];

  /**
   * @var string
   */
  private $path = '';

  /**
   * @var null | GuzzleHttp
   */
  private $guzzle = null;

  /**
   * TwitchSDK constructor.
   * @param array $config
   * @throws TwitchSDKException
   */
  public function __construct(array $config = [])
  {
    $this->path = dir(__FILE__);

    $this->guzzle = new Guzzle();
  }

  public function __call($Method, $Args)
  {
    $Class = 'TwitchSDK\\Calls\\' . $Method;
    $Object = null;

    try {
      $Object = new $Class($this->guzzle);

      if ($Object instanceof Base)
      {
        $Action = $Args['call'];
        unset($Args['call']);
        $Object->$Action($Args);
      }
    }
    catch (Exception $exception) {
      // TODO: Throw Exception
    }

    return $Object;
  }
}