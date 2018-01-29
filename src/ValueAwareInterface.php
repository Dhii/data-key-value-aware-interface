<?php

namespace Dhii\Data;

/**
 * Something that can represent or have a value.
 *
 * @since 0.1
 */
interface ValueAwareInterface
{
    /**
     * Retrieves the value associated with this instance.
     *
     * @since 0.1
     *
     * @return mixed The value.
     */
    public function getValue();
}
