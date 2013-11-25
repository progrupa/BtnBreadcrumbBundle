<?php
namespace Btn\BreadcrumbBundle;

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
     * Set name
     *
     **/
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set url
     *
     **/
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
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
}