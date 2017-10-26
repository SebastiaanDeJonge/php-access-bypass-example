<?php
namespace SebastiaanDeJonge\PhpAccessBypassExample;

/**
 * Secret object
 *
 * @package SebastiaanDeJonge\PhpAccessBypassExample
 */
class SecretObject
{
    /**
     * This is a very secret string, only accessible inside this class!
     *
     * @var string
     */
    private $secretProperty = 'This is a secret!';
}