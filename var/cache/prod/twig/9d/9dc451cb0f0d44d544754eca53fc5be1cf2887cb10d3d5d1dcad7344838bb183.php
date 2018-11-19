<?php

/* GoTBundle:Blog:show.html.twig */
class __TwigTemplate_4b3a4558ca1112673c011156de21e51bfebb86e52f4724758b6d665770f5ebb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GoTBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles del personaje";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h3>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["personaje"] ?? null), "nombre", array()), "html", null, true);
        echo "</h3>
\t<ul>
\t\t<li>
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["personaje"] ?? null), "description", array()), "html", null, true);
        echo "
\t\t</li>
\t</ul>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GoTBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  55 => 14,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GoTBundle:Blog:show.html.twig", "C:\\xampp\\htdocs\\GoT\\src\\GoTBundle/Resources/views/Blog/show.html.twig");
    }
}
