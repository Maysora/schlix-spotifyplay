<?php
/**
 * Spotify Play - Main page view template.
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<x-ui:panel type="panel-primary" id="<?= ___h($this->block_name) ?>">
  <?php if ($title): ?>
    <x-ui:panel-header>
        <h2><?= ___h($title) ?></h2>
    </x-ui:panel-header>
  <?php endif ?>
    
    <x-ui:panel-body>
        <iframe src="<?= ___h($url) ?>" width="<?= (int) $width ?>" height="<?= (int) $height ?>" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </x-ui:panel-body>
</x-ui:panel>