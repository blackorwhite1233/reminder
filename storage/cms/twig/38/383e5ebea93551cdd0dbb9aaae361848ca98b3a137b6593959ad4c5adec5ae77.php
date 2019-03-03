<?php

/* /var/www/chichngua/themes/rainlab-vanilla/pages/account.htm */
class __TwigTemplate_58815cb9cd65f427dabc5d2f5baac8b7e0876d34bfe46f67e2bc25b5065a4b5a extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />

<p><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
        echo "\">Forgotten your password?</a></p>";
    }

    public function getTemplateName()
    {
        return "/var/www/chichngua/themes/rainlab-vanilla/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'account' %}

<hr />

<p><a href=\"{{ 'forgot-password'|page }}\">Forgotten your password?</a></p>", "/var/www/chichngua/themes/rainlab-vanilla/pages/account.htm", "");
    }
}
