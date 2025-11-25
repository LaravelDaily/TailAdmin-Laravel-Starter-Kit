<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function getMenuData()
    {
        $menuGroups = [
            [
                'title' => 'Menu',
                'items' => [
                    [
                        'icon' => 'grid-icon',
                        'name' => 'Dashboard',
                        'subItems' => [
                            ['name' => 'Ecommerce', 'path' => '/'],
                            ['name' => 'Analytics', 'path' => '/analytics'],
                            ['name' => 'Marketing', 'path' => '/marketing'],
                            ['name' => 'CRM', 'path' => '/crm'],
                            ['name' => 'Stocks', 'path' => '/stocks'],
                            ['name' => 'SaaS', 'path' => '/saas', 'new' => true],
                            ['name' => 'Logistics', 'path' => '/logistics', 'new' => true],
                        ],
                    ],
                    [
                        'icon' => 'bot-icon',
                        'name' => 'AI Assistant',
                        'new' => true,
                        'subItems' => [
                            ['name' => 'Text Generator', 'path' => '/text-generator'],
                            ['name' => 'Image Generator', 'path' => '/image-generator'],
                            ['name' => 'Code Generator', 'path' => '/code-generator'],
                            ['name' => 'Video Generator', 'path' => '/video-generator'],
                        ],
                    ],
                    [
                        'icon' => 'cart-icon',
                        'name' => 'E-commerce',
                        'new' => true,
                        'subItems' => [
                            ['name' => 'Products', 'path' => '/products-list'],
                            ['name' => 'Add Product', 'path' => '/add-product'],
                            ['name' => 'Billing', 'path' => '/billing'],
                            ['name' => 'Invoices', 'path' => '/invoices'],
                            ['name' => 'Single Invoice', 'path' => '/single-invoice'],
                            ['name' => 'Create Invoice', 'path' => '/create-invoice'],
                            ['name' => 'Transactions', 'path' => '/transactions'],
                            ['name' => 'Single Transaction', 'path' => '/single-transaction'],
                        ],
                    ],
                    [
                        'icon' => 'calendar-icon',
                        'name' => 'Calendar',
                        'path' => '/calendar',
                    ],
                    [
                        'icon' => 'user-circle-icon',
                        'name' => 'User Profile',
                        'path' => '/profile',
                    ],
                    [
                        'icon' => 'task-icon',
                        'name' => 'Task',
                        'subItems' => [
                            ['name' => 'List', 'path' => '/task-list', 'pro' => false],
                            ['name' => 'Kanban', 'path' => '/task-kanban', 'pro' => false],
                        ],
                    ],
                    [
                        'icon' => 'list-icon',
                        'name' => 'Forms',
                        'subItems' => [
                            ['name' => 'Form Elements', 'path' => '/form-elements', 'pro' => false],
                            ['name' => 'Form Layout', 'path' => '/form-layout', 'pro' => false],
                        ],
                    ],
                    [
                        'icon' => 'table-icon',
                        'name' => 'Tables',
                        'subItems' => [
                            ['name' => 'Basic Tables', 'path' => '/basic-tables', 'pro' => false],
                            ['name' => 'Data Tables', 'path' => '/data-tables', 'pro' => false],
                        ],
                    ],
                    [
                        'icon' => 'page-icon',
                        'name' => 'Pages',
                        'subItems' => [
                            ['name' => 'File Manager', 'path' => '/file-manager', 'pro' => false],
                            ['name' => 'Pricing Tables', 'path' => '/pricing-tables', 'pro' => false],
                            ['name' => 'Faqs', 'path' => '/faq', 'pro' => false],
                            ['name' => 'API Keys', 'path' => '/api-keys', 'new' => true],
                            ['name' => 'Integrations', 'path' => '/integrations', 'new' => true],
                            ['name' => 'Blank Page', 'path' => '/blank', 'pro' => false],
                            ['name' => '404 Error', 'path' => '/error-404', 'pro' => false],
                            ['name' => '500 Error', 'path' => '/error-500', 'pro' => false],
                            ['name' => '503 Error', 'path' => '/error-503', 'pro' => false],
                            ['name' => 'Coming Soon', 'path' => '/coming-soon', 'pro' => false],
                            ['name' => 'Maintenance', 'path' => '/maintenance', 'pro' => false],
                            ['name' => 'Success', 'path' => '/success', 'pro' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Support',
                'items' => [
                    [
                        'icon' => 'chat-icon',
                        'name' => 'Chat',
                        'path' => '/chat',
                    ],
                    [
                        'icon' => 'call-icon',
                        'name' => 'Support Ticket',
                        'new' => true,
                        'subItems' => [
                            ['name' => 'Ticket List', 'path' => '/support-tickets'],
                            ['name' => 'Ticket Reply', 'path' => '/support-ticket-reply'],
                        ],
                    ],
                    [
                        'icon' => 'mail-icon',
                        'name' => 'Email',
                        'subItems' => [
                            ['name' => 'Inbox', 'path' => '/inbox', 'pro' => false],
                            ['name' => 'Details', 'path' => '/inbox-details', 'pro' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Others',
                'items' => [
                    [
                        'icon' => 'pie-chart-icon',
                        'name' => 'Charts',
                        'subItems' => [
                            ['name' => 'Line Chart', 'path' => '/line-chart', 'pro' => false],
                            ['name' => 'Bar Chart', 'path' => '/bar-chart', 'pro' => false],
                            ['name' => 'Pie Chart', 'path' => '/pie-chart', 'pro' => false],
                        ],
                    ],
                    [
                        'icon' => 'box-cube-icon',
                        'name' => 'UI Elements',
                        'subItems' => [
                            ['name' => 'Alerts', 'path' => '/alerts', 'pro' => false],
                            ['name' => 'Avatar', 'path' => '/avatars', 'pro' => false],
                            ['name' => 'Badge', 'path' => '/badge', 'pro' => false],
                            ['name' => 'Breadcrumb', 'path' => '/breadcrumb', 'pro' => false],
                            ['name' => 'Buttons', 'path' => '/buttons', 'pro' => false],
                            ['name' => 'Buttons Group', 'path' => '/buttons-group', 'pro' => false],
                            ['name' => 'Cards', 'path' => '/cards', 'pro' => false],
                            ['name' => 'Carousel', 'path' => '/carousel', 'pro' => false],
                            ['name' => 'Dropdowns', 'path' => '/dropdowns', 'pro' => false],
                            ['name' => 'Images', 'path' => '/image', 'pro' => false],
                            ['name' => 'Links', 'path' => '/links', 'pro' => false],
                            ['name' => 'List', 'path' => '/list', 'pro' => false],
                            ['name' => 'Modals', 'path' => '/modals', 'pro' => false],
                            ['name' => 'Notification', 'path' => '/notifications', 'pro' => false],
                            ['name' => 'Pagination', 'path' => '/pagination', 'pro' => false],
                            ['name' => 'Popovers', 'path' => '/popovers', 'pro' => false],
                            ['name' => 'Progressbar', 'path' => '/progress-bar', 'pro' => false],
                            ['name' => 'Ribbons', 'path' => '/ribbons', 'pro' => false],
                            ['name' => 'Spinners', 'path' => '/spinners', 'pro' => false],
                            ['name' => 'Tabs', 'path' => '/tabs', 'pro' => false],
                            ['name' => 'Tooltips', 'path' => '/tooltips', 'pro' => false],
                            ['name' => 'Videos', 'path' => '/videos', 'pro' => false],
                        ],
                    ],
                    [
                        'icon' => 'plug-in-icon',
                        'name' => 'Authentication',
                        'subItems' => [
                            ['name' => 'Sign In', 'path' => '/signin', 'pro' => false],
                            ['name' => 'Sign Up', 'path' => '/signup', 'pro' => false],
                            ['name' => 'Reset Password', 'path' => '/reset-password', 'pro' => false],
                            ['name' => 'Two Step Verification', 'path' => '/two-step-verification', 'pro' => false],
                        ],
                    ],
                ],
            ],
        ];

        return view('components.sidebar', compact('menuGroups'));
    }
}
