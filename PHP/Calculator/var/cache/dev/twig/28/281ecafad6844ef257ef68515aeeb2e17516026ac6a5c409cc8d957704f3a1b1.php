<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_78f4ca4eb78661226448d9bfc99972b1af55d496c4fe507a8404f9e92affa8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c37115318dc87d2cc9b357a6b1c205183c30876436a5c0babe018ac28b55b45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37115318dc87d2cc9b357a6b1c205183c30876436a5c0babe018ac28b55b45b->enter($__internal_c37115318dc87d2cc9b357a6b1c205183c30876436a5c0babe018ac28b55b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37115318dc87d2cc9b357a6b1c205183c30876436a5c0babe018ac28b55b45b->leave($__internal_c37115318dc87d2cc9b357a6b1c205183c30876436a5c0babe018ac28b55b45b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a900cf67e3ac250091cb31d13d3c2cd14389f7791c24646bb6f0638ba2d9e2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a900cf67e3ac250091cb31d13d3c2cd14389f7791c24646bb6f0638ba2d9e2b6->enter($__internal_a900cf67e3ac250091cb31d13d3c2cd14389f7791c24646bb6f0638ba2d9e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a900cf67e3ac250091cb31d13d3c2cd14389f7791c24646bb6f0638ba2d9e2b6->leave($__internal_a900cf67e3ac250091cb31d13d3c2cd14389f7791c24646bb6f0638ba2d9e2b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1821209f780e864f75bc2ce5ca6ea023b63ca11477adf98823e9f1c57360019f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1821209f780e864f75bc2ce5ca6ea023b63ca11477adf98823e9f1c57360019f->enter($__internal_1821209f780e864f75bc2ce5ca6ea023b63ca11477adf98823e9f1c57360019f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1821209f780e864f75bc2ce5ca6ea023b63ca11477adf98823e9f1c57360019f->leave($__internal_1821209f780e864f75bc2ce5ca6ea023b63ca11477adf98823e9f1c57360019f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93ecc11648ed98c7903cabbe62464443223a906a0d5ae125ee360e9c3ded8e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ecc11648ed98c7903cabbe62464443223a906a0d5ae125ee360e9c3ded8e6c->enter($__internal_93ecc11648ed98c7903cabbe62464443223a906a0d5ae125ee360e9c3ded8e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_93ecc11648ed98c7903cabbe62464443223a906a0d5ae125ee360e9c3ded8e6c->leave($__internal_93ecc11648ed98c7903cabbe62464443223a906a0d5ae125ee360e9c3ded8e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
