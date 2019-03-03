<?php

/* /var/www/chichngua/themes/rainlab-vanilla/pages/404.htm */
class __TwigTemplate_ed34dfd74e00c6809d012135ba820114557a179799e282a963baf1291cc58d4e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>We're sorry, but the page you requested cannot be found.</p>";
    }

    public function getTemplateName()
    {
        return "/var/www/chichngua/themes/rainlab-vanilla/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>We're sorry, but the page you requested cannot be found.</p>", "/var/www/chichngua/themes/rainlab-vanilla/pages/404.htm", "");
    }
}
