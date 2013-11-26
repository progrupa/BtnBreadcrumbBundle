BtnBreadcrumbBundle
==================================================================
Simple breadcrumb for symfony 2.3

1. add the following to your `composer.json`:

        "bitnoise/breadcrumb-bundle": "dev-master"

    and

        "repositories": [
            {
                "type": "vcs",
                "url":  "https://github.com/Bitnoise/BtnBreadcrumbBundle.git"
            }
        ],

    and run:

        php composer.phar install
2. Add this bundle to your application's kernel:

        // app/AppKernel.php
        public function registerBundles()
        {
            return array(
                // ...
                new Btn\BreadcrumbBundle\BtnBreadcrumbBundle(),
                // ...
            );
        }
3. Configure the `btn_breadcrumb` service in your config.yml:

        btn_breadcrumb:
            separator:       '/'
            separator_class: ''
            id:              'btn-breadcrumb'
            class:           'btn-breadcrumb'
            item_class:      ''
            template:        "BtnBreadcrumbBundle::breadcrumb.html.twig"
            display_seperator: true
            root:            'Homepage'
            root_route:      '/'
            display_root:    true
            link_last:       false
            show_last:       true

4. usage:

    {{ btn_bc()|raw }}