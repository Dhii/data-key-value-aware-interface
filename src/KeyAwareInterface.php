<?php

namespace Dhii\Data;

/**
 * Something that can have a key.
 *
 * A key is an identifier, i.e. a code.
 *
 * @since [*next-version*]
 */
interface KeyAwareInterface
{
    /**
     * Retrieve the key of interface.
     *
     * @since [*next-version*]
     *
     * @return string The key that this interface has.
     */
    public function getKey();
}
