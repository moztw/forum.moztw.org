<?php
/**
*
* recaptcha [正體中文]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB TW Group (心靈捕手)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
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

$lang = array_merge($lang, array(
    'RECAPTCHA_LANG'                => 'zh-TW',
    'RECAPTCHA_NOT_AVAILABLE'       => '為了使用 reCAPTCHA，您必須要在 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 註冊一個帳號。',
    'CAPTCHA_RECAPTCHA'             => 'reCAPTCHA',
    'RECAPTCHA_INCORRECT'           => '驗證失敗。',

    'RECAPTCHA_PUBLIC'              => 'reCAPTCHA 網站金鑰',
    'RECAPTCHA_PUBLIC_EXPLAIN'      => '您的 reCAPTCHA 網站金鑰。此關鍵碼可以在 <a href="www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。',
    'RECAPTCHA_PRIVATE'             => 'reCAPTCHA 密鑰',
    'RECAPTCHA_PRIVATE_EXPLAIN'     => '您的 reCAPTCHA 密鑰。此關鍵碼可以在 <a href="www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。',

    'RECAPTCHA_EXPLAIN'             => '為了防止機器人自動提交，我們要求您進行 reCAPTCHA 驗證。',
));

?>
