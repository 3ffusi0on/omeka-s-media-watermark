return [
    'view_manager' => [
        'template_path_stack' => [
            OMEKA_PATH.'/modules/MetadataBrowse/view',
        ],
    ],
    'controllers' => [
        'invokables' => [
            'MetadataBrowse\Controller\Admin\Index' => 'MetadataBrowse\Controller\Admin\IndexController',
        ],
    ],
    'form_elements' => [
        'factories' => [
            'MetadataBrowse\Form\ConfigForm' => 'MetadataBrowse\Service\Form\ConfigFormFactory',
        ],
    ],
];