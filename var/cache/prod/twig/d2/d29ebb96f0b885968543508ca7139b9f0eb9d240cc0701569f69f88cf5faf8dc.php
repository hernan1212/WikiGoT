<?php

/* @GoT/Blog/list.html.twig */
class __TwigTemplate_f6fc78b87c03ea62c6fe606e09a0cff800270822b3289b48f49286da89a60404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@GoT/Blog/list.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Lista de Personajes";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h3>Lista de personajes</h3>
\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personajes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["personaje"]) {
            // line 9
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["personaje"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["personaje"], "nombre", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "@GoT/Blog/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  53 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@GoT/Blog/list.html.twig", "C:\\xampp\\htdocs\\GoT\\src\\GoTBundle\\Resources\\views\\Blog\\list.html.twig");
    }
}
