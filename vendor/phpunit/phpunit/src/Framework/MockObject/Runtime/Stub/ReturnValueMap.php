<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use function array_pop;
use function count;
use function is_array;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueMap implements Stub
{
    private readonly array $valueMap;

    public function __construct(array $valueMap)
    {
        $this->valueMap = $valueMap;
    }

    public function invoke(Invocation $invocation): mixed
    {
        $parameterCount = count($invocation->parameters());

        foreach ($this->valueMap as $map) {
            if (!is_array($map) || $parameterCount !== (count($map) - 1)) {
                continue;
            }

            $return = array_pop($map);

            if ($invocation->parameters() === $map) {
                return $return;
            }
        }

        return null;
    }
}
