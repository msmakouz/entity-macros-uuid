<?php

declare(strict_types=1);

namespace Cycle\ORM\Entity\Macros\Uuid\Tests\Functional\Driver\Postgres\Uuid;

// phpcs:ignore
use Cycle\ORM\Entity\Macros\Uuid\Tests\Functional\Driver\Common\Uuid\UuidListenerTest as CommonClass;

/**
 * @group driver
 * @group driver-postgres
 */
class UuidListenerTest extends CommonClass
{
    public const DRIVER = 'postgres';
}