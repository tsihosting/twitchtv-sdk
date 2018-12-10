<?php

namespace TSIHosting\TwitchSDK\Calls;

class Videos extends Base
{
  const URI = 'channels';

  /**
   * Get a users channel by twitchid
   * @param $id
   * @return object | null:
   */
  public function channelById($id)
  {
    return $this->request('GET', self::URI . '/' . $id);
  }

  /** Get a users videos by id
   * @param limit int (default for API is 100
   * @param offset int (default 0)
   * @return object | null
   */
  public function videoById($cid, $limit = null, $offset = null)
  {
    return $this->request('GET', self::URI . '/' . $cid . '/videos?limit=' . ($limit ? $limit : '100') . ($offset ? ($limit ? '&' : '?') . 'offset=' . $offset : ''));
  }

}