<?php
// src/EventSubscriber/MenuBuilderSubscriber.php
namespace App\EventSubscriber;

use KevinPapst\AdminLTEBundle\Event\SidebarMenuEvent;
use KevinPapst\AdminLTEBundle\Model\MenuItemModel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MenuBuilderSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            SidebarMenuEvent::class => ['onSetupMenu', 100],
            BreadcrumbMenuEvent::class => ['onSetupNavbar', 100],
        ];
    }

    public function onSetupMenu(SidebarMenuEvent $event)
    {
        foreach ($this->getMenuItems() as $menuItem) {
            $menuItem = new MenuItemModel($menuItem['key'], $menuItem['label'], $menuItem['route'], [], $menuItem['icon']);
            $event->addItem($menuItem);
        }

        $this->activateByRoute(
            $event->getRequest()->get('_route'),
            $event->getItems()
        );
    }

    /**
     * @param string $route
     * @param MenuItemModel[] $items
     */
    protected function activateByRoute(string $route, array $items)
    {
        foreach ($items as $item) {
            if ($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            } elseif ($item->getRoute() == $route) {
                $item->setIsActive(true);
            }
        }
    }

    protected function getMenuItems(): array
    {

        return [
            ['label' => 'Dashboard', 'icon' => 'fas fa-regular fa-chart-line', 'route' => 'app_index', 'key' => 'Dashboard'],
            ['label' => 'Clients', 'icon' => 'fas fa-users', 'route' => 'app_login', 'key' => 'Clients'],
            ['label' => 'Fournisseurs', 'icon' => 'fas fa-truck', 'route' => 'app_login', 'key' => 'Fournisseurs'],
            ['label' => 'Articles', 'icon' => 'fas fa-sitemap', 'route' => 'app_login', 'key' => 'Articles'],
            ['label' => 'Stock', 'icon' => 'fas fa-cubes', 'route' => 'app_login', 'key' => 'Stock'],
            ['label' => 'Achat Fournisseur', 'icon' => 'fas fa-tachometer-alt', 'route' => 'app_login', 'key' => 'Achat Fournisseur'],
            ['label' => 'Vente Client', 'icon' => 'fas fa-tachometer-alt', 'route' => 'app_login', 'key' => 'Vente Client'],
            ['label' => 'Recouvrement', 'icon' => 'fas fa-users', 'route' => 'app_login', 'key' => 'Recuvrement'],
            ['label' => 'cash box', 'icon' => 'fas fa-inbox', 'route' => 'app_login', 'key' => 'Caisse'],
            ['label' => 'Configuration', 'icon' => 'fas fa-cogs', 'route' => 'app_general_settings', 'key' => 'Configuration'],
        ];
    }
}