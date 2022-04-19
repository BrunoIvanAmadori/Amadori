<?php

namespace Cybot\Dependencies\DI\Cybot\Dependencies\Invoker;

use Cybot\Dependencies\DI\Definition\Helper\DefinitionHelper;
use Cybot\Dependencies\DI\Definition\Resolver\DefinitionResolver;
use Cybot\Dependencies\Invoker\ParameterResolver\ParameterResolver;
use ReflectionFunctionAbstract;

/**
 * Resolves callable parameters using definitions.
 *
 * @since 5.0
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class DefinitionParameterResolver implements ParameterResolver
{
    /**
     * @var DefinitionResolver
     */
    private $definitionResolver;

    public function __construct(DefinitionResolver $definitionResolver)
    {
        $this->definitionResolver = $definitionResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters(
        ReflectionFunctionAbstract $reflection,
        array $providedParameters,
        array $resolvedParameters
    ) {
        foreach ($resolvedParameters as &$parameter) {
            if ($parameter instanceof DefinitionHelper) {
                $definition = $parameter->getDefinition('');
                $parameter = $this->definitionResolver->resolve($definition);
            }
        }

        return $resolvedParameters;
    }
}
