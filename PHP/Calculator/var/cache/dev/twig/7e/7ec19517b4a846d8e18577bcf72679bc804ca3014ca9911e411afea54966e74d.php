<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70353ac508a44f772a6a9ad86187baee5c96105ef07dada5e495aca4a1d6a485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a2ecc0eb0f3db1d77f440dc8aac30c0091c68bf2a3d82e6707c55bf91ff2e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2ecc0eb0f3db1d77f440dc8aac30c0091c68bf2a3d82e6707c55bf91ff2e6a->enter($__internal_5a2ecc0eb0f3db1d77f440dc8aac30c0091c68bf2a3d82e6707c55bf91ff2e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2ecc0eb0f3db1d77f440dc8aac30c0091c68bf2a3d82e6707c55bf91ff2e6a->leave($__internal_5a2ecc0eb0f3db1d77f440dc8aac30c0091c68bf2a3d82e6707c55bf91ff2e6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a182b7d1e024e24f611e39b85add809998218a8660b53efda8aaac7d3ac24597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a182b7d1e024e24f611e39b85add809998218a8660b53efda8aaac7d3ac24597->enter($__internal_a182b7d1e024e24f611e39b85add809998218a8660b53efda8aaac7d3ac24597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a182b7d1e024e24f611e39b85add809998218a8660b53efda8aaac7d3ac24597->leave($__internal_a182b7d1e024e24f611e39b85add809998218a8660b53efda8aaac7d3ac24597_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b817fca929c787b5b781314c5ad11cca5a019ce7a559e71dbdf868194a519df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b817fca929c787b5b781314c5ad11cca5a019ce7a559e71dbdf868194a519df->enter($__internal_7b817fca929c787b5b781314c5ad11cca5a019ce7a559e71dbdf868194a519df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b817fca929c787b5b781314c5ad11cca5a019ce7a559e71dbdf868194a519df->leave($__internal_7b817fca929c787b5b781314c5ad11cca5a019ce7a559e71dbdf868194a519df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14c977e79136a5dbb9ddd6dd24ad8ea0637b3d58a019403f980bb5819bfbf2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c977e79136a5dbb9ddd6dd24ad8ea0637b3d58a019403f980bb5819bfbf2be->enter($__internal_14c977e79136a5dbb9ddd6dd24ad8ea0637b3d58a019403f980bb5819bfbf2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14c977e79136a5dbb9ddd6dd24ad8ea0637b3d58a019403f980bb5819bfbf2be->leave($__internal_14c977e79136a5dbb9ddd6dd24ad8ea0637b3d58a019403f980bb5819bfbf2be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
