<?php
namespace Btn\BreadcrumbBundle;

interface BreadcrumbInterface
{
    private $items;

    public function addItem(BreadcrumbItemInterface $item);

    public function getItems();

    public function setItems();
}