<?php
namespace Btn\BreadcrumbBundle\Model;

class BreadcrumbItem implements BreadcrumbItemInterface
{
    /**
     * Name for item
     *
     * @var string
     **/
    private $name;

    /**
     * Url for item
     *
     * @var string
     **/
    private $url;

    /**
     * Standard construct
     *
     **/
    public function __construct($name = null, $url = null)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Get name
     *
     * @return string
     **/
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get url
     *
     * @return string
     **/
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * __toString
     *
     **/
    public function __toString() {
        return $this->getName();
    }

}