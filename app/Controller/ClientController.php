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

class ClientController extends Controller
{

    public function helloword()
    {
        return 'ciao';
    }

    public function settings()
    {
        return 'Settings';
    }

}