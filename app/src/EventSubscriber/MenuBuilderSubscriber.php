<?php
// src/EventSubscriber/MenuBuilderSubscriber.php
namespace App\EventSubscriber;

use KevinPapst\AdminLTEBundle\Event\BreadcrumbMenuEvent;
use KevinPapst\AdminLTEBundle\Event\SidebarMenuEvent;
use KevinPapst\AdminLTEBundle\Model\MenuItemModel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MenuBuilderSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            SidebarMenuEvent::class => ['onSetupMenu', 100],
            BreadcrumbMenuEvent::class => ['onSetupMenu', 100],
        ];
    }

    public function onSetupMenu(SidebarMenuEvent $event): void
    {
        foreach ($this->getMenuItems() as $menuItem) {
            $menuItemModel = new MenuItemModel(
                $menuItem['key'],
                $menuItem['label'],
                $menuItem['route'],
                [],
                $menuItem['icon']
            );

            foreach ($menuItem['subMenu'] as $menuItemChild) {
                $menuItemModel->addChild(
                    new MenuItemModel(
                        $menuItemChild['key'],
                        $menuItemChild['label'],
                        $menuItemChild['route'],
                        [],
                        $menuItemChild['icon']
                    )
                );
            }

            $event->addItem($menuItemModel);
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
            [
                'label' => 'Dashboard',
                'icon' => 'fas fa-regular fa-chart-line',
                'route' => 'app_index',
                'key' => 'Dashboard',
                'subMenu' => []
            ], [
                'label' => 'Clients',
                'icon' => 'fas fa-users',
                'route' => 'app_client_management',
                'key' => 'Clients',
                'subMenu' => []
            ], [
                'label' => 'Fournisseurs',
                'icon' => 'fas fa-truck',
                'route' => 'app_supplier_management',
                'key' => 'Fournisseurs',
                'subMenu' => []
            ], [
                'label' => 'Article categories',
                'icon' => 'fas fa-truck',
                'route' => 'app_article_category',
                'key' => 'ArticleCategories',
                'subMenu' => []
            ], [
                'label' => 'Articles',
                'icon' => 'fas fa-sitemap',
                'route' => 'app_article_management_list',
                'key' => 'Articles',
                'subMenu' => []
            ], [
                'label' => 'Achat',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'app_login',
                'key' => 'Achat',
                'subMenu' => [
                    [
                        'label' => 'Commande Fournissuer',
                        'icon' => 'fas fa-regular fa-chart-line',
                        'route' => 'app_supplier_order_list',
                        'key' => 'CF',
                    ],[
                        'label' => 'Bon de reception',
                        'icon' => 'fas fa-regular fa-chart-line',
                        'route' => 'app_supplier_receipt',
                        'key' => 'BR',
                    ],[
                        'label' => 'Supplier invoice',
                        'icon' => 'fas fa-regular fa-chart-line',
                        'route' => 'app_supplier_invoice',
                        'key' => 'FF',
                    ]
                ]
            ], [
                'label' => 'Vente Client',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'app_login',
                'key' => 'Vente Client',
                'subMenu' => []
            ], [
                'label' => 'Recouvrement',
                'icon' => 'fas fa-users',
                'route' => 'app_login',
                'key' => 'Recuvrement',
                'subMenu' => []
            ], [
                'label' => 'cash box',
                'icon' => 'fas fa-inbox',
                'route' => 'app_login',
                'key' => 'Caisse',
                'subMenu' => []
            ], [
                'label' => 'Configuration',
                'icon' => 'fas fa-cogs',
                'route' => 'app_company_settings',
                'key' => 'Configuration',
                'subMenu' => []
            ],
        ];
    }
}
