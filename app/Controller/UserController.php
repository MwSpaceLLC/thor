<?php namespace App\Controller;

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @UserController @controller_generator
 * --------------------------------------------------------------------------
 *
 * Questo file ti aiuterò a gestire le funzioni del tuo addon
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 *
 */

use Core\Helper\MineController as Controller;

class UserController extends Controller
{
    public function viewTemplate($vars = null)
    {
        $user = $this
            ->schema('tblclients')
            ->where('id', $vars->uid)
            ->first();

        return $this->assign('user', $user)->display('Admin.userDetail');
    }

    public function data()
    {
        dd($this->request->all());
    }

    public function database()
    {
        dd($this->request->all());
    }

}