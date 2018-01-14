<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces'=> ['operators' => ['=' => 'align_single_space', '=>' => 'align_single_space']],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing' => 'one'],
        'ereg_to_preg' => true,
        'escape_implicit_backslashes' => true,
        'heredoc_to_nowdoc' => true,
        'increment_style' => false,
        'is_null' => ['use_yoda_style' => false],
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'method_chaining_indentation' => true,
        'modernize_types_casting' => false,
        'no_empty_comment' => false, // non-compliance in Laravel generated files
        'no_homoglyph_names' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_php4_constructor' => true,
        'no_short_echo_tag' => true,
        'no_unneeded_curly_braces' => true,
        'no_unneeded_final_method' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_return' => true,
        'no_whitespace_in_blank_line' => true,
        'not_operator_with_space' => false,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => false, // param alignment inconsistent with PhpStorm
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_no_empty_return' => false, // non-compliance in Laravel generated files
        'phpdoc_no_package' => false, // non-compliance in Laravel generated files
        'phpdoc_order' => true,
        'phpdoc_separation' => false, // non-compliance in Laravel generated files
        'phpdoc_summary' => false, // no need to add dot at the end of short description
        'phpdoc_to_comment' => false, // allow use of docblock comment in function body
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'pow_to_exponentiation' => false,
        'pre_increment' => false,
        'simplified_null_return' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'yoda_style' => false,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('app/Console/Commands/Cache/stubs')
            ->notPath('app/Console/Kernel.php')
            ->notPath('app/Http/Kernel.php')
            ->exclude('bootstrap')
            ->exclude('config')
            ->exclude('database/factories')
            ->exclude('public')
            ->exclude('resources')
            ->exclude('routes')
            ->exclude('storage')
            ->exclude('vendor')
            ->notPath('.phpstorm.meta.php')
            ->notPath('_ide_helper.php')
            ->notPath('server.php')
            ->in(__DIR__)
    )
;
