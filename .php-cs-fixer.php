<?php

$finder = (new PhpCsFixer\Finder())->in([
    __DIR__ . '/src',
    __DIR__ . '/public',
    __DIR__ . '/tests'
])->exclude('vendor');

return (new PhpCsFixer\Config())->setRiskyAllowed(true)->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'ordered_imports' => true,
    'no_unused_imports' => true,
    'single_quote' => true,
    'binary_operator_spaces' => true,
    'no_trailing_whitespace' => true,
    'no_whitespace_in_blank_line' => true,
    'blank_line_before_statement' => ['statements' => ['return']]])->setFinder($finder);