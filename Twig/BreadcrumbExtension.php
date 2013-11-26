<?php
namespace Btn\BreadcrumbBundle\Twig;

class BreadcrumbExtension extends \Twig_Extension
{
    public function __construct($bc, $twig) {
        $this->bc = $bc;
        $this->twig = $twig;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('btn_bc', array($this, 'render')),
        );
    }

    /**
     * Render html
     *
     * @return Twig
     **/
    public function render($arr = array())
    {
        $this->bc->setParams(array_replace($this->bc->getParams(), $arr));

        return $this->twig->render($this->bc->getParam('template'), array('bc' => $this->bc));
    }

    public function getName()
    {
        return 'bc_extension';
    }
}