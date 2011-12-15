<?php
/**
 * Common generator class.
 *
 * @package Uuid
 * @version 0.1.0
 * @copyright 2011 Pavel Gopanenko
 * @author Pavel Gopanenko
 * @license MIT Licence
 * @link https://github.com/Itart/PHP-UUID-Generator
 */

namespace Uuid;

use Uuid\Adapter\AdapterInterface;
use Uuid\Exception\WrongLevelException;

/**
 * Provides a simplified interface to generate UUID.
 *
 * @package Uuid
 */
class Generator
{
    /**
     * Generate UUID.
     *
     * @param AdapterInterface $adapter Generation adapter instance
     * @param int $version UUID Level, level 4 as default
     * @return string
     * @throws WrongLevelException Throw if UUID level not supported
     */
    public function generate(AdapterInterface $adapter, $version = null)
    {
        $version = $version ? $version : AdapterInterface::VERSION_4;
        if ($version > 5 || $version < 1) {
            throw new WrongLevelException(sprintf('Level %s not contain in sppecification.', $version));
        }

        $method = 'version' . $version;
        if (!method_exists($adapter, $method)) {
            throw new WrongLevelException(sprintf('Version %s not implement in adapter.', $version));
        }

        return $adapter->$method();
    }
}
