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
            'btn_bc' => new \Twig_Function_Method($this, 'render', array(
                'is_safe' => array('html')
            ))
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