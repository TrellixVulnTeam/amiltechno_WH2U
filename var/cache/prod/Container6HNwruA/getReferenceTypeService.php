<?php

namespace Container6HNwruA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReferenceTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ReferenceType' shared autowired service.
     *
     * @return \App\Form\ReferenceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ReferenceType'] = new \App\Form\ReferenceType();
    }
}