<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;
use RuntimeException;

final class ConfigFactory
{
	public static function create(string ...$path): ConfigInterface
	{
		if (empty($path)) {
			throw new RuntimeException('No such paths specified.');
		}

		$finder = new Finder()->in($path);

		$cacheIndex = hash('sha256', implode("\0", $path));

		return new Config()
			->setFinder($finder)
			->setCacheFile(sys_get_temp_dir() . '/.php-cs-fixer.' . $cacheIndex . '.cache')
			->setRiskyAllowed(true)
			->setIndent("\t")
			->setLineEnding("\n")
			->setRules(Rules::All);
	}
}
