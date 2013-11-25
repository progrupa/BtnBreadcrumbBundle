<?php
namespace Btn\BreadcrumbBundle;

class Breadcrumb implements BreadcrumbInterface
{
    /**
     * Collection of items
     **/
    private $items = array();

    /**
     * standard construct
     *
     * @return void
     **/
    public function __construct(array $items = null)
    {
        if ($items) {
            $this->setItems($items);
        }
    }

    /**
     * Add breadcrumb item
     *
     **/
    public function addItem(BreadcrumbItemInterface $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Add array of items
     *
     **/
    function setItems(array $items)
    {
        foreach ($items as $item) {
            $this->addItem($item);
        }

        return $this;
    }

    /**
     * Get array of items
     *
     **/
    public function getItems()
    {
        return $items;
    }
}