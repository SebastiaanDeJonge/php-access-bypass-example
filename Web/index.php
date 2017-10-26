<?php
define('APPLICATION_ROOT', dirname(__DIR__));
require_once(APPLICATION_ROOT . '/Libraries/autoload.php');

/**
 * The methods found inside \SebastiaanDeJonge\PhpAccessBypassExample\Utility\AccessUtility are used to manipulate
 * variables inside the object which or otherwise inaccessible from our current perspective.
 */
$secretObject = new \SebastiaanDeJonge\PhpAccessBypassExample\SecretObject();
$secretValue = \SebastiaanDeJonge\PhpAccessBypassExample\Utility\AccessUtility::getInaccessibleProperty('secretProperty', $secretObject);

// Output:
// The value of the secret property: This is a secret!
echo 'The value of the secret property: ' . $secretValue;