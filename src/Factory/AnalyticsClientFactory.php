<?php

namespace Zf2Analytics\Factory;

use Racecore\GATracking\GATracking;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zf2Analytics\Exception;

class AnalyticsClientFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config')['zf2-analytics'];
        if (!isset($config['account_id']) || empty($config['account_id'])) {
            throw new Exception\RuntimeException('Google Account ID required and missing in options');
        }
        return new GATracking($config['account_id'], $config);
    }
}
