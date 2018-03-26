<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 3/26/2018
 * Time: 5:00 PM
 */

namespace Frozennode\Administrator;

use Illuminate\Foundation\Application;

trait CompatibleTrait
{
    /**
     * Be compatible with over 5.4.*
     *
     * @param mixed $lowVersion Be compatible lower version
     * @param mixed $highVersion Be compatible higher version
     * @return mixed
     */
    public function compatible($lowVersion, $highVersion)
    {
        // bugfix upgrade Laravel 5.3.* to Laravel 5.4.*
        // Why not use app()->version() ?
        // Because in unit test, the Application can't init, it can easy to run the unit test.
        if (version_compare(Application::VERSION, '5.4.0', '<')) {
            /**
             * @link https://github.com/laravel/framework/blob/5.3/src/Illuminate/Database/Eloquent/Relations/HasOneOrMany.php#L388
             */
            return value($lowVersion);
        } else {
            /**
             * @link https://github.com/laravel/framework/blob/5.4/src/Illuminate/Database/Eloquent/Relations/HasOneOrMany.php#L401
             */
            return value($highVersion);
        }
    }
}
