<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Roles
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            // App users
            'app-users-list',
            'app-users-create',
            'app-users-edit',
            'app-users-delete',
            'app-users-multiple-delete',
            'app-users-multiple-status',
            'app-users-status',
            'app-users-export',
            // Categories
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'category-multiple-delete',
            'category-multiple-status',
            'category-status',
            'category-multiple-filter',
            'category-filter',
            'category-export',
            // Channels
            'channel-list',
            'channel-create',
            'channel-edit',
            'channel-delete',
            'channel-multiple-delete',
            'channel-multiple-status',
            'channel-status',
            'channel-export',
            // Channel Posts
            'channel-post-list',
            'channel-post-create',
            'channel-post-edit',
            'channel-post-delete',
            'channel-post-multiple-delete',
            'channel-post-multiple-status',
            'channel-post-status',
            'channel-post-export',
            // Cms pages
            'cms-pages-list',
            'cms-pages-create',
            'cms-pages-edit',
            'cms-pages-delete',
            'cms-pages-multiple-delete',
            'cms-pages-multiple-status',
            'cms-pages-status',
            'cms-pages-export',
            // Coupons
            'coupons-list',
            'coupons-create',
            'coupons-edit',
            'coupons-delete',
            'coupons-multiple-delete',
            'coupons-multiple-status',
            'coupons-status',
            'coupons-export',
            // Email templates
            'email-templates-list',
            'email-templates-create',
            'email-templates-edit',
            'email-templates-multiple-status',
            'email-templates-status',
            'email-templates-export',
            // General messages
            'general-messages-list',
            'general-messages-create',
            'general-messages-edit',
            'general-messages-delete',
            'general-messages-multiple-delete',
            'general-messages-multiple-status',
            'general-messages-status',
            'general-messages-export',
            // Loyalty messages
            'loyalty-messages-list',
            'loyalty-messages-create',
            'loyalty-messages-edit',
            'loyalty-messages-delete',
            'loyalty-messages-multiple-delete',
            'loyalty-messages-multiple-status',
            'loyalty-messages-status',
            'loyalty-messages-export',
            // Loyalty messages
            'loyalty-point-list',
            'loyalty-point-create',
            'loyalty-point-edit',
            'loyalty-point-delete',
            'loyalty-point-multiple-delete',
            'loyalty-point-history',
            'loyalty-point-export',
            // Rating & reviews
            'rating-reviews-list',
            'rating-reviews-create',
            'rating-reviews-edit',
            'rating-reviews-delete',
            'rating-reviews-multiple-delete',
            'rating-reviews-multiple-status',
            'rating-reviews-status',
            'rating-reviews-image-delete',
            'rating-reviews-export',
            // Report notifications
            'report-notifications-list',
            'report-notifications-export',
            // Report stores
            'report-stores-list',
            'report-stores-delete',
            'report-stores-multiple-delete',
            'report-stores-multiple-status',
            'report-stores-status',
            'report-stores-export',
            // Report type
            'report-type-list',
            'report-type-create',
            'report-type-edit',
            'report-type-delete',
            'report-type-multiple-delete',
            'report-type-multiple-status',
            'report-type-status',
            'report-type-export',
            // Settings
            'settings-configs',
            'settings-configs-create',
            'settings-password',
            'settings-password-create',
            'settings-profile',
            'settings-profile-create',
            // Stores
            'stores-list',
            'stores-create',
            'stores-edit',
            'stores-delete',
            'stores-multiple-delete',
            'stores-multiple-status',
            'stores-status',
            'stores-type',
            'stores-multiple-type',
            'stores-verification',
            'stores-image-destroy',
            'stores-export',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
