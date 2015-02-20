<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Api\Factory;

use Sylius\Api\AdapterInterface;
use Sylius\Api\Paginator;

/**
 * @author Michał Marcinkowski <michal.marcinkowski@lakion.com>
 */
class PaginatorFactory implements PaginatorFactoryInterface
{
    /**
     * {@inheritdoc }
     */
    public function create(AdapterInterface $adapter, $limit, array $uriParameters = [])
    {
        return new Paginator($adapter, $limit, $uriParameters);
    }
}
