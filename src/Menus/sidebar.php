<?php

return [
  [
    'gate' => 'administrator.account',
    'name' => 'Account',
    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'route' => null,
    'isActive' => 'account/*',
    'icon' => null,
    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>',
    'id' => '',
    'gates' => [],
    'submenus' => [
      
      [
        'gate' => 'administrator.account.admin.index',
        'name' => 'User Admin',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        /**
         * Declaration route Example
         * ['administrator.account.admin.show', ['uuid-uuid-uuid', 'foo' => 'bar']] --> https://domain.com/administrator/account/admin/uuid-uuid-uuid?foo=bar
         */
        'route' => ['administrator.account.admin.index', []],
        'isActive' => 'account/admin*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.account.admin.create',
            'title' => 'Create admin',
            'description' => 'User can create new admin'
          ],
          [
            'gate' => 'administrator.account.admin.update',
            'title' => 'Update admin',
            'description' => 'User can update admin'
          ],
          [
            'gate' => 'administrator.account.admin.destroy',
            'title' => 'Delete account',
            'description' => 'User can delete account'
          ]
        ],
      ]

    ]
  ],

  [
    'gate' => 'administrator.access',
    'name' => 'Access',
    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'route' => null,
    'isActive' => 'access/*',
    'icon' => null,
    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.access.role.index',
        'name' => 'Role',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.access.role.index', []],
        'isActive' => 'access/role*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.role.create',
            'title' => 'Create Role',
            'description' => 'User can create new role'
          ],
          [
            'gate' => 'administrator.access.role.update',
            'title' => 'Update Role',
            'description' => 'User can update role'
          ],
          [
            'gate' => 'administrator.access.role.destroy',
            'title' => 'Delete Role',
            'description' => 'User can delete role'
          ]
        ],
      ],

      [
        'gate' => 'administrator.access.permission.index',
        'name' => 'Permission',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.access.permission.index', []],
        'isActive' => 'access/permission*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.permission.show',
            'title' => 'Views detail Permission',
            'description' => 'User can view detail for all permission'
          ],
          [
            'gate' => 'administrator.access.permission.assign',
            'title' => 'Assign Permission',
            'description' => 'User can assign for all permission'
          ],
          
        ],
      ]
    ]
  ],

  [
    'gate' => 'administrator.system',
    'name' => 'System',
    'description' => 'System application control',
    'route' => null,
    'isActive' => 'system*',
    'icon' => null,
    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
    'id' => '',
    'gates' => [],
    'submenus' => [
      [
        'gate' => 'administrator.system.log.index',
        'name' => 'System Log',
        'description' => 'Display for Ladmin error log',
        'route' => ['administrator.system.log.index', []],
        'isActive' => 'system/log*',
        'id' => '',
        'gates' => []
      ]
    ]
  ]
];
