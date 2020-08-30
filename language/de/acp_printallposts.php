<?php
/**
*
* @package Print all posts in a topic
* @copyright (c) 2020 Rich McGirr(RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Mit PayPal spenden',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Kauf mir ein Bier für die Erstellung dieser Erweiterung',
	'BUY_ME_A_BEER_SHORT'		=> 'Sende eine Spende für diese Erweiterung',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'Diese Erweiterung ist vollständig kostenlos. Es ist ein Projekt, mit dem ich meine Zeit verbringe zum Spaß und für den Nutzen der Community. Wenn dir diese Erweiterung gefällt, oder wenn dein Forum davon profitiert hat, erwäge bitte <a href="https://paypal.me/RMcGirr83" target="_blank" rel=”noreferrer noopener”>mir ein Bier zu kaufen</a>. Das würde sehr geschätzt werden. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
