<?php

/**
 * @see       https://github.com/mezzio/mezzio-swoole for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-swoole/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-swoole/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Swoole\Event;

use Swoole\Http\Server as SwooleHttpServer;

abstract class AbstractSwooleWorkerEvent
{
    protected SwooleHttpServer $server;

    protected int $workerId;

    public function __construct(SwooleHttpServer $server, int $workerId)
    {
        $this->server   = $server;
        $this->workerId = $workerId;
    }

    public function getServer(): SwooleHttpServer
    {
        return $this->server;
    }

    public function getWorkerId(): int
    {
        return $this->workerId;
    }
}