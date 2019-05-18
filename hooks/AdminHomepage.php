<?php

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @AdminHomepage @hook_generator
 * --------------------------------------------------------------------------
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 * @package \Illuminate\Database\Schema\Blueprint
 * @see https://developers.whmcs.com/hooks/hook-index/
 * Vedi tutti i tipi di Hooks
 *
 */

class AdminHomepage
{
    /**
     * @param $params
     * @return Closure
     * int $priority, string|array|Closure $function
     *
     * For more detail,
     * @see https://developers.whmcs.com/hooks-reference/client-area-interface/#AdminHomepage
     */
    public function output($params)
    {
        return function ($params) {
            try {

                $addon = basename(dirname(__DIR__));

                return 'U Have thor Clear Install <b> <i class="fab fa-whmcs"></i> <a href="addonmodules.php?module=' . $addon . '">Thor Addon</a></b>';
            } catch (Exception $e) {

                // Consider logging or reporting the error.
            }
        };
    }

}