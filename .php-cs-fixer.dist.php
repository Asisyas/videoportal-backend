<?php

if (!file_exists(__DIR__.'/src')) {
    exit(0);
}

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
    ->exclude(__DIR__. '/src/App/Shared/Transfer')
    ->exclude(__DIR__ . '/src/App/Shared/GPBMetadata')
;

return (new PhpCsFixer\Config())
    ->setRules(array(
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'protected_to_private' => false,
        'semicolon_after_instruction' => false,
    ))
    ->setRiskyAllowed(true)
    ->setFinder($finder);
