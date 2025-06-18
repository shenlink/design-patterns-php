<?php

declare(strict_types=1);

namespace Shenlink\DesignPattern\Proxy\Solution;

class ProxySearcher implements Searcher
{
    private Searcher $realSearcher;
    private AccessValidator $accessValidator;
    private Logger $logger;

    public function __construct()
    {
        $this->accessValidator = new AccessValidator();
        $this->logger = new Logger();
        $this->realSearcher = new RealSearcher();
    }

    public function search(string $userId, string $keyword): string
    {
        if (!$this->accessValidator->validate($userId)) {
            return '无权限';
        }

        $result = $this->realSearcher->search($userId, $keyword);

        $this->logger->log($userId);

        return $result;
    }
}
