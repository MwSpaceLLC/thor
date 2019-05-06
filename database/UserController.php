<?php

/**
 * @Refactoring
 * @author Aleksandr Ivanovitch (MwSpace LLC) Lang - IT
 * @copyright (c) MwSpace LLC 2019
 * @license MIT
 *
 * --------------------------------------------------------------------------
 * @UserController @database_generator
 * --------------------------------------------------------------------------
 *
 * Per ulteriori informazioni, consultare la documentazione originale online.
 * @see https://developers.whmcs.com/addon-modules/
 * @package \Illuminate\Database\Schema\Blueprint
 * @see avaible https://laravel.com/docs/5.2/migrations
 * Available Column Types
 */

use Core\Helper\MineTable as Table;
use WHMCS\Database\Capsule as Database;

class UserController extends Table
{
    /**
     * Automatic name, insert only column
     */
    public function up()
    {
        Database::schema()->create($this->table, function ($table) {

            $table->bigIncrements('id');

            $table->string('text');

            $table->timestamp('created_at');

        });
    }

    /**
     * Deactivation of module.
     * @return void
     */
    public function down()
    {
        Database::schema()
            ->dropIfExists($this->table);
    }

}