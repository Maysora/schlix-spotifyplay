<?php
/**
 * Spotify Play Macro - Configuration
 *
 * Macro for converting spotify link to spotify embed iframe.
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php
$block_base = CURRENT_SUBSITE_URL_PATH . '/macros/spotifyplaymacro';
?>

<h2><?= ___('Options') ?></h2>
<schlix-config:checkbox config-key='bool_match_track' label='<?= ___('Match track links') ?>' config-default-value="true" />
<schlix-config:checkbox config-key='bool_match_album' label='<?= ___('Match album links') ?>' config-default-value="true" />
<schlix-config:checkbox config-key='bool_match_artist' label='<?= ___('Match artist links') ?>' config-default-value="true" />
<schlix-config:checkbox config-key='bool_match_playlist' label='<?= ___('Match playlist links') ?>' config-default-value="true" />

<schlix-config:radiogroup config-key="int_option_dimension" config-default-value="1" label="<?= ___('Player Size') ?>">
    <schlix-config:option value="2"><?= ___('Large (300 x 380)') ?></schlix-config:option>
    <schlix-config:option value="1"><?= ___('Compact (300 x 80)') ?></schlix-config:option>
</schlix-config:radiogroup>

<hr />
<h2><?= ___('Usage') ?></h2>

<ol>
    <li>
        <p><?= ___('Copy Spotify Link by right clicking on album / artist / track / playlist in Spotify App') ?> :</p>
        <img src="<?= $block_base ?>/spotifyplay-link.png" alt="Spotify Copy Link" />
    </li>
    <li>
        <p><?= ___('Then paste it in page editor') ?> :</p>
        <img src="<?= $block_base ?>/spotifyplay-editor.png" alt="Spotify Paste Link" />
    </li>
    <li>
        <p><?= ___('The macro will automatically convert it to spotify play widget') ?> :</p>
        <img src="<?= $block_base ?>/spotifyplay-widget.png" alt="Spotify Widget" />
    </li>
</ol>