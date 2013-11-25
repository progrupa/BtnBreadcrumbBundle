<?php
namespace Btn\BreadcrumbBundle\Model;

interface BreadcrumbItemInterface
{
    public function getName();

    public function getUrl();
}