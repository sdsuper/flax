<?php
namespace Icecave\Flax;

use Icecave\Flax\TypeCheck\TypeCheck;

/**
 * Represents a string is serialized as a binary value.
 */
class Binary
{
    /**
     * @param string $data The binary data.
     */
    public function __construct($data = '')
    {
        $this->typeCheck = TypeCheck::get(__CLASS__, func_get_args());

        $this->data = $data;
    }

    /**
     * Get the binary data.
     *
     * @return string The binary data.
     */
    public function data()
    {
        $this->typeCheck->data(func_get_args());

        return $this->data;
    }

    private $typeCheck;
    private $data;
}