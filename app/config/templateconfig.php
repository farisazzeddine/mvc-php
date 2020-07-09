<?php
return[
    'template' =>[
             'wrapper_start'      => TEMPLATE_PATH . 'wrapperstart.php',
             'sidebar'            => TEMPLATE_PATH . 'sidebar.php',
             'navbar'             => TEMPLATE_PATH . 'navbar.php',
             ':view'              => ':action_view',
             'wrapper_end'        => TEMPLATE_PATH . 'wrapperend.php',

    ],
    'header_resources' =>[
            'css'=>[
                'bootstrap' =>CSS.'bootstrap.min.css',
                'fawsome'   =>CSS.'font-awesome.min.css',
                'custom'    =>CSS.'custom.css'

            ]

    ],
    'footer_resources' =>[
        'js'=>[
            'jquery' =>JS.'jquery.min.js',
            'popper' =>JS.'popper.min.js',
            'bootstrap' =>JS.'bootstrap.min.js',
            'custom' =>JS.'custom.js'

        ]
    ]

];
