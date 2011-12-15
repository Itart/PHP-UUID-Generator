<?php
/**
 * UUID generator interface.
 *
 * @package Uuid
 * @version 0.1.0
 * @copyright 2011 Pavel Gopanenko
 * @author Pavel Gopanenko
 * @license MIT Licence
 * @link https://github.com/Itart/PHP-UUID-Generator
 */

namespace Uuid\Adapter;

/**
 * Common generator adapter interface.
 *
 * @package Uuid
 * @subpackage Adapter
 */
interface AdapterInterface
{
    const VERSION_4 = 4;

    const VERSION_5 = 5;

    /**
     * Generate UUID Level 4.
     *
     * @return string
     */
    function version4();


    /**
     * Generate UUID Level 5.
     *
     * @return string
     */
    function version5();
}
