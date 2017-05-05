<?php

namespace Kore\PageBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function sideMenu(FactoryInterface $factory, array $options)
    {
        $sidemenu = $factory->createItem('root');
        $sidemenu->setChildrenAttribute('class', 'nav');
        $sidemenu->setChildrenAttribute('id', 'side-menu');

        $sidemenu->addChild('sidemenu.frontpage')->setAttribute('icon', 'database fa-fw')->setAttribute('translation_domain', 'KorePageBundle');
        $sidemenu['sidemenu.frontpage']->setChildrenAttribute('class', 'nav nav-second-level collapse');
        $sidemenu['sidemenu.frontpage']->addChild('sidemenu.community', array('route' => 'kore_page_dashboard'))->setAttribute('translation_domain', 'KorePageBundle');

        return $sidemenu;
    }

}