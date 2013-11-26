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

4. In your application controller methods:

        use Btn\BreadcrumbBundle\Model\Breadcrumb;
        use Btn\BreadcrumbBundle\Model\BreadcrumbItem; //optional

        $bcManager = $this->get('btn.bc');

        $bc = $bcManager
            ->addItem(new BreadcrumbItem('Name 1', 'Url 1')) //add from
            ->createItem('Name 2', 'Url 2') //add and save
        ;

        $item = $bcManager->getCreateItem('Create item', 'Url for create item'); //create and return
        $bcManager->addItem($item);

        //create child
        $collection = $bcManager->createCollection();
        $collection
            ->createItem('Collection 1', 'url1')
            ->createItem('Collection 2', 'url2')
            ->createItem('Collection 3', 'url3')
        ;

        //create items from array
        $collection->fromArray(array(
            'Name from array'   => 'url1',
            'Name from array 2' => 'url2',
        ));

        //add childs collection
        $bc->addItem($collection);

        //add more childs
        $collection2 = $bcManager->createCollection();
        $collection2
            ->createItem('New Collection 5', 'url1')
            ->createItem('New Collection 6', 'url2')
            ->addItem($collection)
        ;

        $bc->addItem($collection2);

        $bc = $bcManager
            ->createItem('Last!', 'Url 6')
        ;

5. Usage in twig template:

        {{ btn_bc()|raw }}
