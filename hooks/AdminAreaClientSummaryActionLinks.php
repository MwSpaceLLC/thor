<?php

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @AdminAreaClientSummaryActionLinks @hook_generator
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

class AdminAreaClientSummaryActionLinks extends Hook
{
    /**
     * @param $params
     * @return Closure
     * int $priority, string|array|Closure $function
     *
     * For more detail,
     * @see https://developers.whmcs.com/hooks-reference/client-area-interface/#AdminAreaClientSummaryActionLinks
     */
    public function output($params)
    {
        return function ($params) {
            try {

                $rute = $this->adminModuleRoute("&user={$params['userid']}");

                $return = array();

                $return[] = '<a href="' . $rute . '"><i class="fab fa-whmcs"></i> See Detail User with Thor</a>';

                return $return;

            } catch (Exception $e) {

                // Consider logging or reporting the error.
            }
        };
    }

}