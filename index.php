<?php
/**
 * 23PartnerPage
 *
 * @author      Paweł Otlewski <otlet@jest.guru>
 * @copyright   2015 PanOtlet
 * @link        http://panotlet.tk/23PartnerPage
 * @license     http://panotlet.tk/23PartnerPage/LICENSE
 */

header('Content-Type: text/html; charset=UTF-8');
define('tag',1);

include ('global.php');

require BASEPATH.'siewo.php';
Siewo::Autoloader(BASEPATH);
$core   =   new Siewo\core(BASEPATH);
$layout =   new Siewo\template($theme);
$xml    =   new xml();

$config['tpl']              =   $theme  =   'content/theme/'.$style.'/';
$config['twitch_player']    =   $core->twitch($twitch);
$config['fbfeeds']          =   $xml->getRSS('https://www.facebook.com/feeds/page.php?format=rss20&id='.$fb_id);

if (!isset($_GET['p']) || empty($_GET['p'])){
        $layout->render($theme, 'index',$config, $lang);
} else {
    switch($_GET['p']){
        default:
            if (file_exists($theme.$_GET['p'].'.tpl')){
                $layout->render($theme, $_GET['p'], $config, $lang);
            } else {
                $layout->render($theme, '404',$config, $lang);
            }
    }
}