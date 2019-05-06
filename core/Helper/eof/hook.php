<?php

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @__CLASSREPLACE__ @hook_generator
 * --------------------------------------------------------------------------
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 * @package \Illuminate\Database\Schema\Blueprint
 * @see https://developers.whmcs.com/hooks/hook-index/
 * Vedi tutti i tipi di Hooks
 *
 */

use Core\Helper\MineHook as Hook;

class __CLASSREPLACE__ extends Hook
{
    /**
     * @param $params
     * @return Closure
     * int $priority, string|array|Closure $function
     *
     * For more detail,
     * @see https://developers.whmcs.com/hooks-reference
     */
    public function output($params)
    {
        return function ($params) {
            try {

                // Perform hook code here...
            } catch (Exception $e) {

                // Consider logging or reporting the error.
            }
        };
    }

}