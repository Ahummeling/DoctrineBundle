<?php

namespace Doctrine\Bundle\DoctrineBundle\Tests\DependencyInjection;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Configuration;
use PHPUnit\Framework\TestCase;
use function class_exists;

class ConfigurationTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGetConfigTreeBuilderDoNotUseDoctrineCommon(): void
    {
        $configuration = new Configuration(true);
        $configuration->getConfigTreeBuilder();
        $this->assertFalse(class_exists('Doctrine\Common\Proxy\AbstractProxyFactory', false));
    }
}
