<?php

namespace Camspiers\LoggerBridge\BacktraceReporter;

/**
 * Class BacktraceReporter
 * @package Camspiers\LoggerBridge\BacktraceReporter
 */
interface BacktraceReporter
{
    /**
     * Returns a backtrace for logging
     * @param  \Throwable $exception
     * @return array
     */
    public function getBacktrace(\Throwable $exception = null);
}
