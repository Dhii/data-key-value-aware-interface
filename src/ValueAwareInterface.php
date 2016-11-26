<?php

namespace Dhii\Data;

/**
 * Something that can represent or have a value.
 *
 * @since [*next-version*]
 */
interface ValueAwareInterface
{
    /**
     * Retrieves the value that this object represents.
     *
     * @since [*next-version*]
     *
     * @return mixed The value that this object represents.
     */
    public function getValue();
}
