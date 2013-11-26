<?php

namespace Btn\BreadcrumbBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class BtnBreadcrumbExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $arr = array(
            'separator'         => '/',
            'separator_class'   => '',
            'id'                => 'btn-breadcrumb',
            'class'             => 'btn-breadcrumb',
            'item_class'        => '',
            'template'          => "BtnBreadcrumbBundle::breadcrumb.html.twig",
            'display_seperator' => true,
            'root'              => 'Homepage',
            'root_route'        => '',
            'display_root'      => true,
            'link_last'         => false,
            'show_last'         => true,
        );



        $container->setParameter('btn_breadcrumb', array_replace($arr, $config));

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $loader->load('services.yml');
    }
}
