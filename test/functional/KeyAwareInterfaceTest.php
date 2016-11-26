<?php

namespace Dhii\Data\FuncTest;

/**
 * Tests {@see \Dhii\Data\ValueAwareInterface}.
 *
 * @since [*next-version*]
 */
class KeyAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\KeyAwareInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\KeyAwareInterface')
            ->getKey()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Data\\KeyAwareInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}