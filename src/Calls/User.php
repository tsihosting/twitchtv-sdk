<?php

namespace TSIHosting\TwitchSDK\Calls;

class User extends Base
{
  const URI = 'users';

  public function lookup($account)
  {
    return $this->request('GET', self::URI . '?login=' . $account);
  }
}