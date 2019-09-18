<?php
namespace Block;
/**
 * Spotify Play - Main Class
 *
 * Block for adding spotify play button. Support playing song, album, artist or playlist.
 *
 * @copyright Roy Hadrianoro
 *
 * @license MIT
 *
 * @package spotifyplay
 * @version 0.0.1
 * @author  Roy Hadrianoro <dev@maysora.com>
 * @link    https://www.schlix.com
 */
class SpotifyPlay extends \SCHLIX\cmsBlock
{
  public function Run()
  {
    $title = $this->config['str_title'];
    $spotify_uri = $this->config['str_spotify_uri'];
    switch ($this->config['int_option_dimension']) {
      case 1:
        $width = '300';
        $height = '80';
        break;
      default:
        $width = '300';
        $height = '380';
        break;
    }
    $url = 'https://open.spotify.com/embed/';

    // spotify:album:47C57TQNELQqnJDS22ZKj6
    // spotify:user:bethesdanet:playlist:6odolWS2Iu1L3XjXZJifSF
    // spotify:track:5Bm5p6dZ9v6T131zGUgAvj
    // spotify:artist:7dinImt4nrJSPBD7Q5LDPC
    if (preg_match('/\Aspotify(\:\w+)+\z/', $spotify_uri)) {
      $path = preg_replace(['/(spotify\:)/i', '/\:/'], ['', '/'], $spotify_uri);
      $url = $url . $path;

      $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
    } else {
      // invalid spotify uri.. should we display error message?
    }
  }
}

