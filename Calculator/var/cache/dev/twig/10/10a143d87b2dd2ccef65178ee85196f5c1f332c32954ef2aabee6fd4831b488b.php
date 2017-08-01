<?php

/* base.html.twig */
class __TwigTemplate_40da43832b4b66285d79ccc55310b04147700a490afa10bd5558589e9b9383ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e540c48b7695da4b0f7b51aa96f5386fb8c48b223c0b12336baabf0c50c4779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e540c48b7695da4b0f7b51aa96f5386fb8c48b223c0b12336baabf0c50c4779->enter($__internal_6e540c48b7695da4b0f7b51aa96f5386fb8c48b223c0b12336baabf0c50c4779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_6e540c48b7695da4b0f7b51aa96f5386fb8c48b223c0b12336baabf0c50c4779->leave($__internal_6e540c48b7695da4b0f7b51aa96f5386fb8c48b223c0b12336baabf0c50c4779_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f77f771bd13c863c3e9f02dacd14e558418137554298f4a75f0d187afbeb6641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77f771bd13c863c3e9f02dacd14e558418137554298f4a75f0d187afbeb6641->enter($__internal_f77f771bd13c863c3e9f02dacd14e558418137554298f4a75f0d187afbeb6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_f77f771bd13c863c3e9f02dacd14e558418137554298f4a75f0d187afbeb6641->leave($__internal_f77f771bd13c863c3e9f02dacd14e558418137554298f4a75f0d187afbeb6641_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ebd3a321b96d4f922b033a903552cd4b5d3ea33892dd297216d1fcf499e7207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebd3a321b96d4f922b033a903552cd4b5d3ea33892dd297216d1fcf499e7207->enter($__internal_3ebd3a321b96d4f922b033a903552cd4b5d3ea33892dd297216d1fcf499e7207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3ebd3a321b96d4f922b033a903552cd4b5d3ea33892dd297216d1fcf499e7207->leave($__internal_3ebd3a321b96d4f922b033a903552cd4b5d3ea33892dd297216d1fcf499e7207_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_70e33162db82d62eea988d46e1019b7096a1e1e3a47dcaea4811fe413958b55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e33162db82d62eea988d46e1019b7096a1e1e3a47dcaea4811fe413958b55a->enter($__internal_70e33162db82d62eea988d46e1019b7096a1e1e3a47dcaea4811fe413958b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_70e33162db82d62eea988d46e1019b7096a1e1e3a47dcaea4811fe413958b55a->leave($__internal_70e33162db82d62eea988d46e1019b7096a1e1e3a47dcaea4811fe413958b55a_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_b42a12fc57daf855e2e22d0015d66d3138f97d1f62f4c08b37a4f2fb3ec70e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42a12fc57daf855e2e22d0015d66d3138f97d1f62f4c08b37a4f2fb3ec70e26->enter($__internal_b42a12fc57daf855e2e22d0015d66d3138f97d1f62f4c08b37a4f2fb3ec70e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_b42a12fc57daf855e2e22d0015d66d3138f97d1f62f4c08b37a4f2fb3ec70e26->leave($__internal_b42a12fc57daf855e2e22d0015d66d3138f97d1f62f4c08b37a4f2fb3ec70e26_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf3e1585f18b1d0201234c8adfa9afb562527299210a8317a0b985a7b2055af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf3e1585f18b1d0201234c8adfa9afb562527299210a8317a0b985a7b2055af->enter($__internal_ebf3e1585f18b1d0201234c8adfa9afb562527299210a8317a0b985a7b2055af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_ebf3e1585f18b1d0201234c8adfa9afb562527299210a8317a0b985a7b2055af->leave($__internal_ebf3e1585f18b1d0201234c8adfa9afb562527299210a8317a0b985a7b2055af_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_e37b764e9c3a1f6539fe5b341f425a896d60440a34cf51052c84125317f6343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37b764e9c3a1f6539fe5b341f425a896d60440a34cf51052c84125317f6343b->enter($__internal_e37b764e9c3a1f6539fe5b341f425a896d60440a34cf51052c84125317f6343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e37b764e9c3a1f6539fe5b341f425a896d60440a34cf51052c84125317f6343b->leave($__internal_e37b764e9c3a1f6539fe5b341f425a896d60440a34cf51052c84125317f6343b_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e9165c96447985784357fbd9e36055462ad0a63edd669a9056fcedea6859876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9165c96447985784357fbd9e36055462ad0a63edd669a9056fcedea6859876->enter($__internal_9e9165c96447985784357fbd9e36055462ad0a63edd669a9056fcedea6859876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9e9165c96447985784357fbd9e36055462ad0a63edd669a9056fcedea6859876->leave($__internal_9e9165c96447985784357fbd9e36055462ad0a63edd669a9056fcedea6859876_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
