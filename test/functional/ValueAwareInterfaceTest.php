<?php

namespace Dhii\Data\FuncTest;

/**
 * Tests {@see \Dhii\Data\ValueAwareInterface}.
 *
 * @since [*next-version*]
 */
class ValueAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\ValueAwareInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\ValueAwareInterface')
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

        $this->assertInstanceOf('Dhii\\Data\\ValueAwareInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}