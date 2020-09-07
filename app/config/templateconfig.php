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

            'css'=> array(
                'bootstrap' =>CSS.'bootstrap-'.$_SESSION['lang'].'.min.css',
                'fawsome'   =>CSS.'font-awesome.min.css',
                'fa-material'=>CSS.'material-icons.css',
                'pattern'   =>CSS.'pattern.min.css',
                'custom'    =>CSS.'custom'.$_SESSION['lang'].'.css',
            )

    ],
    'footer_resources' =>[
        'js'=>[
            'jquery'        =>JS.'jquery.min.js',
            'popper'        =>JS.'popper.min.js',
            'bootstrap'     =>JS.'bootstrap.min.js',
            'dataTables'    =>JS.'dataTables.bootstrap.min.js',
            'custom'        =>JS.'custom.js'

        ]
    ],


];
