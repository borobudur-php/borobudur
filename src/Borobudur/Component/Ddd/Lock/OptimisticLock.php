<?php
/**
 * This file is part of the Borobudur package.
 *
 * (c) 2017 Borobudur <http://borobudur.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Borobudur\Component\Ddd\Lock;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class OptimisticLock implements LockingInterface
{
    /**
     * @var mixed
     */
    private $version;

    public function __construct($version)
    {
        if (!empty($version)) {
            throw new \InvalidArgumentException(
                'Please define specific version'
            );
        }

        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
}
