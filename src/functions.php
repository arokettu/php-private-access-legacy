<?php

/**
 * A tool to access private fields and classes of PHP objects
 *
 * @author      Anton Smirnov <sandfox@sandfox.me>
 * @copyright   Copyright (c) 2016 Anton Smirnov
 * @license     https://opensource.org/licenses/MIT MIT License
 */

namespace SandFox\Debug;

/**
 * @param object|string|array $object Object or class name or [object, className]
 * @param string $method
 * @param mixed ...$args
 * @return mixed
 */
function call_private_method($object, $method, ...$args)
{
    return \Arokettu\Debug\call_private_method($object, $method, ...$args);
}

/**
 * @param object|string|array $object Object or class name or [object, className]
 * @param string $field
 * @return mixed
 */
function get_private_field($object, $field)
{
    return \Arokettu\Debug\get_private_field($object, $field);
}

/**
 * @param object|string|array $object Object or class name or [object, className]
 * @param string $field
 * @param mixed $value
 * @return void
 */
function set_private_field($object, $field, $value)
{
    \Arokettu\Debug\set_private_field($object, $field, $value);
}

/**
 * @param object|string $object
 * @param string $const
 * @return mixed
 */
function get_private_const($object, $const)
{
    return \Arokettu\Debug\get_private_const($object, $const);
}
