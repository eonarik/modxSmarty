<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */


function smarty_function_link($params, & $smarty)
{
    if(!isset($params['id']) OR !$id = $params['id']){return;}
    if(!empty($params['assign'])){
        $assign = (string)$params['assign'];
    }
    $output = $smarty->modx->makeUrl($id);
    return !empty($assign) ? $smarty->assign($assign, $output) : $output;
}

?>