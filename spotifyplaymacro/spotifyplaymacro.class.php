<?php
namespace Macro;
/**
 * Spotify Play Macro - macro class
 *
 * Macro for converting spotify link to spotify embed iframe.
 * Based on easyyoutubeembed macro.
 *
 * @copyright Roy Hadrianoro
 *
 * @license MIT
 *
 * @package spotifyplaymacro
 * @version 0.0.1
 * @author  Roy Hadrianoro <dev@maysora.com>
 * @link    https://www.schlix.com
 */

class SpotifyPlayMacro extends \SCHLIX\cmsMacro {
  public function processText($text) {
    switch ($this->config['int_option_dimension']) {
      case 2:
        $width = '300';
        $height = '380';
        break;
      default:
        $width = '300';
        $height = '80';
        break;
    }

    $match_items = [];
    if ($this->config['bool_match_track']) {
      // https://open.spotify.com/track/5Bm5p6dZ9v6T131zGUgAvj?si=CJclSXzATSWm1qIWw_dq2g
      $match_items[] = 'track\/\w+';
    }
    if ($this->config['bool_match_album']) {
      // https://open.spotify.com/album/47C57TQNELQqnJDS22ZKj6?si=xn2CI1x3RTyTwQ9zEkVoDg
      $match_items[] = 'album\/\w+';
    }
    if ($this->config['bool_match_artist']) {
      // https://open.spotify.com/artist/7dinImt4nrJSPBD7Q5LDPC?si=Di1SZzXzQ269-iEyUXNHAQ
      $match_items[] = 'artist\/\w+';
    }
    if ($this->config['bool_match_playlist']) {
      // https://open.spotify.com/user/bethesdanet/playlist/6odolWS2Iu1L3XjXZJifSF?si=-dnMnSOjROmSyPaclL-BVw
      $match_items[] = 'user\/\w+\/playlist\/\w+';
    }

    $items_regexp = join('|', $match_items);
    $search = '/<a(?:.*?)(?:href="https?:\/\/)?(?:open\.spotify\.com\/)(' . $items_regexp . ').*?<\/a>/';
    $replace = '<iframe width="'.$width.'" height="'.$height.'" src="https://open.spotify.com/embed/$1" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';
    $text = preg_replace($search, $replace, $text);

    return $text;
  }

  public function Run(&$data, $caller_object, $caller_function, $extra_info = NULL) {
    global $HTMLHeader;

    if (is_array($data)) {
      if (array_key_exists('summary', $data)) {
        $data['summary'] = $this->processText($data['summary']);
      }
      if (array_key_exists('description', $data)) {
        $data['description'] = $this->processText($data['description']);
      }
    } else {
      $data = $this->processText($data);
    }
  }

}
