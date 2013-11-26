<?php
namespace Btn\BreadcrumbBundle\Model;

class BreadcrumbManager extends Breadcrumb
{
    private $params;
    private $twig;

    public function __construct(array $params) {
        $this->params = $params;
    }

    /**
     * create self and return
     *
     * @return BreadcrumbManager
     **/
    public function createCollection()
    {
        return new Breadcrumb();
    }

    /**
     * function for get params
     *
     **/
    public function getParams() {
        return $this->params;
    }

    /**
     * function for get one item from params
     *
     **/
    public function getParam($key) {
        return $this->params[$key];
    }

    /**
     * function for set one item from params
     *
     **/
    public function setParam($key, $value) {
        return $this->params[$key] = $value;
    }

    /**
     * function for set params
     *
     **/
    public function setParams($params) {
        $this->params = $params;
    }


}