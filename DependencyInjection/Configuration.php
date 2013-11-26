<?php

namespace Btn\BreadcrumbBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('btn_breadcrumb');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
            ->children()
                ->scalarNode('id')->end()
                ->scalarNode('class')->end()
                ->scalarNode('template')->end()
                ->scalarNode('separator')->end()
                ->scalarNode('item_class')->end()
                ->scalarNode('separator_class')->end()
                ->scalarNode('display_seperator')->end()
                ->scalarNode('root')->end()
                ->scalarNode('root_route')->end()
                ->scalarNode('display_root')->end()
                ->scalarNode('link_last')->end()
                ->scalarNode('show_last')->end()
            ->end();

        return $treeBuilder;
    }
}
