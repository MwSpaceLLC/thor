<?php namespace App\Controller;

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @FormController @controller_generator
 * --------------------------------------------------------------------------
 *
 * Questo file ti aiuterò a gestire le funzioni del tuo addon
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 *
 */

use Core\Helper\MineController as Controller;

class FormController extends Controller
{

    /**
     * @Demo function in default route /
     */
    public function form()
    {
        return $this
            ->assign('name', 'Admin')
            ->display('Admin.form');
    }

    /**
     * Perform with data in tables
     * @see https://developers.whmcs.com/advanced/db-interaction/
     */
    public function formPostData()
    {
        if ($this->request->_dump) {

            dd($this->request->all());
        } else {

            $insert = $this->table('DemoTable')
                ->insert([
                    'text' => $this->request->text,
                    'email' => $this->request->email,
                    'number' => $this->request->number,
                    'textarea' => $this->request->textarea,
                ]);

            return $this->redirect('&postDataTable')
                ->with('alert', 'Fine! U have insert data');
        }
    }

    public function postDataTable()
    {
        $demos = $this->table('DemoTable')->get();
        $this
            ->assign('demos', $demos)
            ->display('Admin.formTable');
    }

}