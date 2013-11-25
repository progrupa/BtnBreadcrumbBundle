<?php
namespace Btn\BreadcrumbBundle\Model;

interface BreadcrumbInterface
{
    public function addItem(BreadcrumbItemInterface $item);

    public function getItems();

    public function setItems(array $items);
}