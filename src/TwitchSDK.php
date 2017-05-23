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
   * @var null | GuzzleHttp
   */
  private $guzzle = null;

  /**
   * @const string
   */
  const baseUri = 'https://api.twitch.tv/kraken/';

  /**
   * TwitchSDK constructor.
   * @param array $config
   * @throws TwitchSDKException
   */
  public function __construct(array $config = [])
  {
    $this->guzzle = new Guzzle([
      'base_uri' => self::baseUri
    ]);

    $this->config = $config;
  }

  public function __call($Method, $Args)
  {
    $Class = 'TSIHosting\\TwitchSDK\\Calls\\' . ucfirst($Method);
    $Object = null;

    try {
      $Object = new $Class($this->guzzle, $this->config['Client-ID']);

      if ($Object instanceof Base)
      {
        return $Object;
      }
    }
    catch (Exception $exception) {
      // TODO: Throw Exception
    }

    return null;
  }
}