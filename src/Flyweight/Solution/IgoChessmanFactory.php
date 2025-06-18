<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Flyweight\Solution;

class IgoChessmanFactory
{
    private array $igoChessmanList = [];
    private static $instance;

    private function __construct()
    {
        $this->igoChessmanList['black'] = new BlackIgoChessman();
        $this->igoChessmanList['white'] = new WhiteIgoChessman();
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getIgoChessman(string $color): IgoChessman
    {
        return $this->igoChessmanList[$color];
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception('Cannot unserialize singleton');
    }
}
