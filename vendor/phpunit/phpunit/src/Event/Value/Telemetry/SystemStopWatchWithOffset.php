<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetry;

use PHPUnit\Event\InvalidArgumentException;
use function hrtime;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SystemStopWatchWithOffset implements StopWatch
{
    private ?HRTime $offset;

    public function __construct(HRTime $offset)
    {
        $this->offset = $offset;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function current(): HRTime
    {
        if ($this->offset !== null) {
            $offset = $this->offset;

            $this->offset = null;

            return $offset;
        }

        return HRTime::fromSecondsAndNanoseconds(...hrtime());
    }
}
