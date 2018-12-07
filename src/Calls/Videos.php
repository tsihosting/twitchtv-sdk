<?php

namespace TSIHosting\TwitchSDK\Calls;

class Videos extends Base
{
  const URI = 'channels';

  /** Get a users videos by channel id (usually the same as twitch user id)
   * optional limit
   */
  public function videosById($cid, $limit = null)
  {
    return $this->request('GET', self::URI . '/' . $cid . '/videos?limit=' . ($limit ? $limit : '100'));
  }

  public function video($id)
  {
    return $this->request('GET', self::URI . '/' . $id);
  }

}