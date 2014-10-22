<?php

namespace Snowcap\MailjetBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('snowcap_mailjet')
            ->children()
                ->scalarNode('api_key')->isRequired()->end()
                ->scalarNode('secret_key')->isRequired()->end()
                ->scalarNode('debug')
                    ->defaultValue(0)
                    ->validate()
                        ->ifNotInArray(array(0,1,2))
                        ->thenInvalid('Debug must be 0, 1 or 2')
                    ->end()
                ->end()
				->scalarNode('get_response_code')->end()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
