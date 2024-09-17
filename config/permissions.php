<?php

/*
 |--------------------------------------------------------------------------
 | DO NOT EDIT THIS FILE DIRECTLY.
 |--------------------------------------------------------------------------
*/

return [

    'Global' => [
        [
            'permission' => 'superuser',
            'label' => 'Super User',
            'note' => 'Determines whether the user has full access to all aspects of the admin. This setting overrides any more specific permissions throughout the system. ',
            'display' => true,
        ],
    ],

    'Admin' => [
        [
            'permission' => 'admin',
            'label' => '',
            'note' => 'Determines whether the user has access to most aspects of the admin. ',
            'display' => true,
        ],
    ],

    'CSV Import' => [
        [
            'permission' => 'import',
            'label' => '',
            'note' => 'This will allow users to import even if access to users, assets, etc is denied elsewhere.',
            'display' => true,
        ],
    ],

    'Reports' => [
        [
            'permission' => 'reports.view',
            'label' => 'View',
            'note' => 'Determines whether the user has the ability to view reports.',
            'display' => true,
        ],
    ],

    'Assets' => [
        [
            'permission' => 'assets.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'assets.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'assets.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'assets.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'assets.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => false,
        ],

        [
            'permission' => 'assets.checkin',
            'label' => 'Checkin ',
            'note' => '',
            'display' => true,
        ],

        [
            'permission' => 'assets.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => true,
        ],

        [
            'permission' => 'assets.audit',
            'label' => 'Audit ',
            'note' => 'Allows the user to mark an asset as physically inventoried.',
            'display' => true,
        ],

        [
            'permission' => 'assets.view.requestable',
            'label' => 'View Requestable Assets',
            'note' => '',
            'display' => true,
        ],

        [
            'permission' => 'assets.view.encrypted_custom_fields',
            'label' => 'View and Modify Encrypted Custom Fields',
            'note' => '',
            'display' => true,
        ],

    ],

    'Accessories' => [
        [
            'permission' => 'accessories.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.edit',
            'label' => 'Edit ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.checkin',
            'label' => 'Checkin ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'accessories.files',
            'label' => 'View and Modify Accessory Files',
            'note' => '',
            'display' => true,
        ],

    ],

    'Consumables' => [
        [
            'permission' => 'consumables.view',
            'label' => 'View',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'consumables.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'consumables.edit',
            'label' => 'Edit ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'consumables.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'consumables.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'consumables.files',
            'label' => 'View and Modify Consumable Files',
            'note' => '',
            'display' => true,
        ],
    ],

    'Licenses' => [
        [
            'permission' => 'licenses.view',
            'label' => 'View',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.edit',
            'label' => 'Edit ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.keys',
            'label' => 'View License Keys',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'licenses.files',
            'label' => 'View and Modify License Files',
            'note' => '',
            'display' => true,
        ],
    ],

    'Components' => [
        [
            'permission' => 'components.view',
            'label' => 'View',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.edit',
            'label' => 'Edit ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.checkout',
            'label' => 'Checkout ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.checkin',
            'label' => 'Checkin ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'components.files',
            'label' => 'View and Modify Component Files',
            'note' => '',
            'display' => true,
        ],

    ],

    'Kits' => [
        [
            'permission' => 'kits.view',
            'label' => 'View ',
            'note' => 'These are predefined kits that can be used to quickly checkout assets, licenses, etc.',
            'display' => true,
        ],
        [
            'permission' => 'kits.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'kits.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'kits.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Users' => [
        [
            'permission' => 'users.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'users.create',
            'label' => 'Create Users',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'users.edit',
            'label' => 'Edit Users',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'users.delete',
            'label' => 'Delete Users',
            'note' => '',
            'display' => true,
        ],

    ],

    'Models' => [
        [
            'permission' => 'models.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'models.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'models.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'models.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],

    ],

    'Categories' => [
        [
            'permission' => 'categories.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'categories.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'categories.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'categories.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Departments' => [
        [
            'permission' => 'departments.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'departments.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'departments.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'departments.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Status Labels' => [
        [
            'permission' => 'statuslabels.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'statuslabels.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'statuslabels.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'statuslabels.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Custom Fields' => [
        [
            'permission' => 'customfields.view',
            'label' => 'View',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'customfields.create',
            'label' => 'Create',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'customfields.edit',
            'label' => 'Edit',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'customfields.delete',
            'label' => 'Delete',
            'note' => '',
            'display' => true,
        ],
    ],

    'Suppliers' => [
        [
            'permission' => 'suppliers.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'suppliers.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'suppliers.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'suppliers.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Manufacturers' => [
        [
            'permission' => 'manufacturers.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'manufacturers.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'manufacturers.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'manufacturers.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Depreciations' => [
        [
            'permission' => 'depreciations.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'depreciations.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'depreciations.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'depreciations.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Locations' => [
        [
            'permission' => 'locations.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'locations.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'locations.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'locations.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Companies' => [
        [
            'permission' => 'companies.view',
            'label' => 'View ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'companies.create',
            'label' => 'Create ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'companies.edit',
            'label' => 'Edit  ',
            'note' => '',
            'display' => true,
        ],
        [
            'permission' => 'companies.delete',
            'label' => 'Delete ',
            'note' => '',
            'display' => true,
        ],
    ],

    'Self' => [
        [
            'permission' => 'self.two_factor',
            'label' => 'Two-Factor Authentication',
            'note' => 'The user may disable/enable two-factor authentication themselves if two-factor is enabled and set to selective.',
            'display' => true,
        ],

        [
            'permission' => 'self.api',
            'label' => 'Create API Keys',
            'note' => 'The user create personal API keys to utilize the REST API.',
            'display' => true,
        ],

        [
            'permission' => 'self.edit_location',
            'label' => 'Profile Edit Location',
            'note' => 'The user may update their own location in their profile. Note that this is not affected by any additional Users permissions you grant to this user or group.',
            'display' => true,
        ],

        [
            'permission' => 'self.checkout_assets',
            'label' => 'Self-Checkout',
            'note' => 'This user may check out assets that are marked for self-checkout.',
            'display' => true,
        ],

        [
            'permission' => 'self.view_purchase_cost',
            'label' => 'View Purchase-Cost Column',
            'note' => 'This user can see the purchase cost column of items assigned to them.',
            'display' => true,
        ],

    ],

];
