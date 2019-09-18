<?php
/**
 * Spotify Play - Configuration
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php
    global $HTMLHeader;
    $block_no_base = CURRENT_SUBSITE_URL_PATH_NO_BASE . '/blocks/spotifyplay';
    $block_base = CURRENT_SUBSITE_URL_PATH . '/blocks/spotifyplay';
    $HTMLHeader->CSS($block_no_base . '/spotifyplay.config.css');
    $HTMLHeader->Javascript($block_no_base . '/spotifyplay.config.js');
?>
<x-ui:form-group>
    <label><?= ___('Spotify URI') ?></label>
    <x-ui:input-group>
        <x-ui:input-addon><i class="fab fa-spotify"></i> </x-ui:input-addon>
        <schlix-config:textbox config-key="str_spotify_uri" placeholder="<?= ___('e.g. spotify:album:47C57TQNELQqnJDS22ZKj6') ?>" required="required" disable-form-group="1" />
        <x-ui:input-addon><a class="spotifyplay-help-btn" href="javascript:void(0)"><i class="fa fa-question-circle"></i></a></x-ui:input-addon>
    </x-ui:input-group>
    
</x-ui:form-group>


<schlix-config:radiogroup config-key="int_option_dimension" config-default-value="2" label="<?= ___('Dimension') ?>">
  <schlix-config:option value="2"><?= ___('Large (300 x 380)') ?></schlix-config:option>
  <schlix-config:option value="1"><?= ___('Compact (300 x 80)') ?></schlix-config:option>
</schlix-config:radiogroup>

<schlix-config:textbox config-key="str_title" label="<?= ___('Title') ?>" placeholder="<?= ___('optional') ?>" />

<hr />
<div class="spotifyplay-help-popup">
  <p><?= ___('Copy Spotify URI by right clicking the album/artist/track/playlist in Spotify App') ?></p>
  <img src="<?= $block_base ?>/spotifyplay-uri.png" alt="Spotify URI" />
</div>
