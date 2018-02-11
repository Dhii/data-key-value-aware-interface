<?php

namespace Dhii\Data;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can have a name retrieved.
 *
 * @since [*next-version*]
 */
interface NameAwareInterface
{
    /**
     * Retrieves the name associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The name.
     */
    public function getName();
}
