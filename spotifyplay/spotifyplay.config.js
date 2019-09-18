/**
 * Spotify Play - Configuration javascript file
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

jQuery(function($){
  var
    $helpPopup = $('.spotifyplay-help-popup').hide(),
    $helpBtn   = $('.spotifyplay-help-btn').show();

  $helpPopup.css({position: 'absolute', top: $helpBtn.position().top + $helpBtn.height() + 10});
  $helpBtn.click(function(e){
    e.preventDefault();
    $helpPopup.fadeIn(function(){
      $(document).one('click', function(){
        $helpPopup.fadeOut();
      });
    });
  });
});
