<?php

/*
 * Copyright (c) 2021 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\FilenameSanitizerBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use HeimrichHannot\FilenameSanitizerBundle\HeimrichHannotContaoFilenameSanitizerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;

class Plugin implements BundlePluginInterface, ConfigPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HeimrichHannotContaoFilenameSanitizerBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader, array $managerConfig)
    {
        $loader->load('@HeimrichHannotContaoFilenameSanitizerBundle/Resources/config/datacontainers.yml');
        $loader->load('@HeimrichHannotContaoFilenameSanitizerBundle/Resources/config/services.yml');
        $loader->load('@HeimrichHannotContaoFilenameSanitizerBundle/Resources/config/listeners.yml');
        $loader->load('@HeimrichHannotContaoFilenameSanitizerBundle/Resources/config/commands.yml');
    }
}
