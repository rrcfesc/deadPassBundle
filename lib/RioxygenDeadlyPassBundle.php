<?php
namespace Rioxygen\DeadlyPassBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Rioxygen\DeadlyPassBundle\DependencyInjection\Compiler\CheckForSessionPass;

class RioxygenDeadlyPassBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container); // TODO: Change the autogenerated stub
        $container->addCompilerPass(new CheckForSessionPass());
    }

}