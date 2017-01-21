<?php

namespace Dhii\Data\FuncTest;

/**
 * Tests {@see \Dhii\Data\ValueAwareInterface}.
 *
 * @since [*next-version*]
 */
class ValueAwareInterfaceTest extends \Xpmock\TestCase
{
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\ValueAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\ValueAwareInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
    }
}