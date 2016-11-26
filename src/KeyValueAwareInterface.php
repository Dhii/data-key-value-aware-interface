<?php

namespace Dhii\Data;

/**
 * Represents something that can have a key and a value.
 *
 * An example could be an option, or a collection item, or a mapping.
 *
 * @since [*next-version*]
 */
interface KeyValueAwareInterface extends
    KeyAwareInterface,
    ValueAwareInterface
{
}
