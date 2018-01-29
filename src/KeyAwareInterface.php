<?php

namespace Dhii\Data;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can have a key.
 *
 * A key is an identifier, i.e. a code.
 *
 * @since 0.1
 */
interface KeyAwareInterface
{
    /**
     * Retrieve the key associated with this instance.
     *
     * @since 0.1
     *
     * @return string|Stringable|null The key.
     */
    public function getKey();
}
