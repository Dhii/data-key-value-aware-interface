<?php

namespace Dhii\Data\FuncTest;

/**
 * Tests {@see \Dhii\Data\KeyValueAwareInterface
 *
 * @since [*next-version*]
 */
class KeyValueAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\KeyValueAwareInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\KeyValueAwareInterface')
            ->getKey()
            ->getValue()
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

        $this->assertInstanceOf('Dhii\\Data\\KeyValueAwareInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}