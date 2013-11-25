<?php
namespace Btn\BreadcrumbBundle;

interface BreadcrumbItemInterface
{
    public function getName();

    public function setName();

    public function getUrl();

    public function setUrl();
}