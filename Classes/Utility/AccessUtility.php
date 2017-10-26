<?php
namespace SebastiaanDeJonge\PhpAccessBypassExample\Utility;

/**
 * Class AccessUtility
 *
 * @package SebastiaanDeJonge\PhpAccessBypassExample\Utility
 */
class AccessUtility
{
    /**
     * This method sets a property which is not publicly accessible otherwise
     *
     * @param string $propertyName
     * @param mixed $variable
     * @param object $object
     * @return void
     */
    public static function setInaccessibleProperty($propertyName, $variable, $object)
    {
        $closure = function ($_variableName, $_value) {
            $this->$_variableName = $_value;
        };
        $boundClosure = \Closure::bind($closure, $object, $object);
        $boundClosure($propertyName, $variable);
    }

    /**
     * This method gets a property which is not publicly accessible otherwise
     *
     * @param $propertyName
     * @param $object
     * @return mixed
     */
    public static function getInaccessibleProperty($propertyName, $object)
    {
        $closure = function ($_variableName) {
            return $this->$_variableName;
        };
        $boundClosure = \Closure::bind($closure, $object, $object);
        return $boundClosure($propertyName);
    }
}