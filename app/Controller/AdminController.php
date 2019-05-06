<?php namespace App\Controller;

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @Default @Controller
 * --------------------------------------------------------------------------
 *
 * Questo file ti aiuterò a gestire le rotte del tuo addon
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 *
 */

use Core\Helper\MineController as Controller;

class AdminController extends Controller
{
    /**
     * @Demo function in default route /
     */
    public function helloword()
    {
        return $this
            ->assign('name', 'Admin')
            ->display('Admin.welcome');
    }

    /**
     * @Demo function in default route /
     */
    public function settings()
    {
        return $this
            ->assign('name', 'Admin')
            ->display('Admin.settings');
    }

}