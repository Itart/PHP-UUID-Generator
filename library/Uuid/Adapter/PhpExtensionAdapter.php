<?php
/**
 * PHP UUID extension adapter.
 *
 * @package Uuid
 * @version 0.1.0
 * @copyright 2011 Pavel Gopanenko
 * @author Pavel Gopanenko
 * @license MIT Licence
 * @link https://github.com/Itart/PHP-UUID-Generator
 */

namespace Uuid\Adapter;

use Uuid\Exception\PhpExtensionException;

/**
 * Use PHP extension for generate UUID.
 *
 * @package Uuid
 * @subpackage Adapter
 */
class PhpExtensionAdapter implements AdapterInterface
{
    protected $_uuidobject;

    /**
     * Generate UUID.
     *
     * @param int $level
     * @return string
     */
    protected function generate($level)
    {
        uuid_make($this->_uuidobject, $level);
        uuid_export($this->_uuidobject, UUID_FMT_STR, &$uuidstring);

        return trim($uuidstring);
    }

    /**
     * Constructor.

     * @throws PhpExtensionException Throw if extension not installed
     */
    public function __construct()
    {
        if (!extension_loaded('uuid')) {
            throw new PhpExtensionException('PHP UUID extension not installed.');
        }

        uuid_create(&$this->_uuidobject);
    }

    /**
     * (non-PHPdoc)
     * @see Uuid\Adapter.AdapterInterface::version4()
     */
    public function version4()
    {
        return $this->generate(AdapterInterface::VERSION_4);
    }

    /**
     * (non-PHPdoc)
     * @see Uuid\Adapter.AdapterInterface::version5()
     */
    public function version5()
    {
        return $this->generate(AdapterInterface::VERSION_5);
    }
}
