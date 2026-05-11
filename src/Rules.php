<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle;

final class Rules
{
	/** @var array<string,mixed> */
	public const array All = [
		...self::Base,
		...self::Syntax,
		...self::Imports,
		...self::Operators,
		...self::Functions,
		...self::PhpDoc,
		...self::Classes,
	];

	/** @var array<string,mixed> */
	public const array Base = [
		'@PER-CS' => true,
		'@autoPHPMigration' => true,
	];

	/** @var array<string,mixed> */
	public const array Syntax = [
		'declare_strict_types' => true,
		'blank_line_after_opening_tag' => false,
		'linebreak_after_opening_tag' => false,
		'single_blank_line_at_eof' => true,
		'no_empty_statement' => true,
		'no_unneeded_control_parentheses' => [
			'statements' => [
				'break',
				'clone',
				'continue',
				'echo_print',
				'negative_instanceof',
				'others',
				'return',
				'switch_case',
				'yield',
				'yield_from',
			],
		],
		'no_useless_else' => true,
	];

	/** @var array<string,mixed> */
	public const array Imports = [
		'blank_line_between_import_groups' => false,
		'no_unneeded_import_alias' => true,
		'no_unused_imports' => true,
		'fully_qualified_strict_types' => [
			'import_symbols' => true,
		],
		'ordered_imports' => [
			'imports_order' => [
				'class',
				'function',
				'const',
			],
			'sort_algorithm' => 'alpha',
		],
		'single_line_after_imports' => true,
		'single_import_per_statement' => [
			'group_to_single_imports' => true,
		],
	];

	/** @var array<string,mixed> */
	public const array Operators = [
		'binary_operator_spaces' => [
			'default' => 'single_space',
		],
		'unary_operator_spaces' => [
			'only_dec_inc' => false,
		],
		'strict_comparison' => true,
	];

	/** @var array<string,mixed> */
	public const array Functions = [
		'strict_param' => true,
		'no_alias_functions' => [
			'sets' => ['@internal'],
		],
		'is_null' => true,
		'use_arrow_functions' => true,
	];

	/** @var array<string,mixed> */
	public const array PhpDoc = [
		'no_superfluous_phpdoc_tags' => [
			'allow_hidden_params' => true,
			'allow_mixed' => true,
			'remove_inheritdoc' => true,
		],
	];

	/** @var array<string,mixed> */
	public const array Classes = [
		'no_redundant_readonly_property' => true,
		'ordered_class_elements' => [
			'order' => [
				'use_trait',
				'case',
				'constant_public',
				'constant_protected',
				'constant_private',
				'property_public_static',
				'property_public',
				'property_protected_static',
				'property_protected',
				'property_private_static',
				'property_private',
				'construct',
				'destruct',
				'method_public_abstract_static',
				'method_public_static',
				'method_public_abstract',
				'method_public',
				'method_protected_abstract_static',
				'method_protected_static',
				'method_protected_abstract',
				'method_protected',
				'method_private_abstract_static',
				'method_private',
				'magic',
			],
			'sort_algorithm' => 'none',
		],
		'class_attributes_separation' => [
			'elements' => [
				'const' => 'one',
				'property' => 'one',
				'method' => 'one',
				'trait_import' => 'none',
				'case' => 'none',
			],
		],
	];
}
