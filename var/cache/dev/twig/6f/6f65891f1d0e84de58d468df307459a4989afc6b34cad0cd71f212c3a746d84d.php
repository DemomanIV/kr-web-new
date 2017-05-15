<?php

/* ::base.html.twig */
class __TwigTemplate_4e833a7fe4690efe8782547558dddc4ecb143d1804fd3612ebad32b7503d6f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_006a60ebca20f8cbe067e75ba6dc1ae5d0550834cf1709dfc63b461b88f74434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006a60ebca20f8cbe067e75ba6dc1ae5d0550834cf1709dfc63b461b88f74434->enter($__internal_006a60ebca20f8cbe067e75ba6dc1ae5d0550834cf1709dfc63b461b88f74434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a5cf39a6394a55ab2e5387811b7d950f6f786c95b8a12bc10ceba27affcb15ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cf39a6394a55ab2e5387811b7d950f6f786c95b8a12bc10ceba27affcb15ab->enter($__internal_a5cf39a6394a55ab2e5387811b7d950f6f786c95b8a12bc10ceba27affcb15ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    </body>
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</html>
";
        
        $__internal_006a60ebca20f8cbe067e75ba6dc1ae5d0550834cf1709dfc63b461b88f74434->leave($__internal_006a60ebca20f8cbe067e75ba6dc1ae5d0550834cf1709dfc63b461b88f74434_prof);

        
        $__internal_a5cf39a6394a55ab2e5387811b7d950f6f786c95b8a12bc10ceba27affcb15ab->leave($__internal_a5cf39a6394a55ab2e5387811b7d950f6f786c95b8a12bc10ceba27affcb15ab_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf03c4c1b88ae48e959efd398bc5df61b766f06e864492f2ceb05a474b95a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf03c4c1b88ae48e959efd398bc5df61b766f06e864492f2ceb05a474b95a6c->enter($__internal_8bf03c4c1b88ae48e959efd398bc5df61b766f06e864492f2ceb05a474b95a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b38674f1563505cd7e3c6ccd1c7adea98b573516a63319133238e12e9cf109f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38674f1563505cd7e3c6ccd1c7adea98b573516a63319133238e12e9cf109f1->enter($__internal_b38674f1563505cd7e3c6ccd1c7adea98b573516a63319133238e12e9cf109f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Сайт";
        
        $__internal_b38674f1563505cd7e3c6ccd1c7adea98b573516a63319133238e12e9cf109f1->leave($__internal_b38674f1563505cd7e3c6ccd1c7adea98b573516a63319133238e12e9cf109f1_prof);

        
        $__internal_8bf03c4c1b88ae48e959efd398bc5df61b766f06e864492f2ceb05a474b95a6c->leave($__internal_8bf03c4c1b88ae48e959efd398bc5df61b766f06e864492f2ceb05a474b95a6c_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dbeca4b55dbb39db18b197c2202e017e76b6d27d25f3709ae07fc0bc92fcfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbeca4b55dbb39db18b197c2202e017e76b6d27d25f3709ae07fc0bc92fcfff->enter($__internal_9dbeca4b55dbb39db18b197c2202e017e76b6d27d25f3709ae07fc0bc92fcfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e8c76a3fcc21e571d7926eacfe7551586c5144fc9426f51a836b9d9edc94e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8c76a3fcc21e571d7926eacfe7551586c5144fc9426f51a836b9d9edc94e5b->enter($__internal_3e8c76a3fcc21e571d7926eacfe7551586c5144fc9426f51a836b9d9edc94e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_3e8c76a3fcc21e571d7926eacfe7551586c5144fc9426f51a836b9d9edc94e5b->leave($__internal_3e8c76a3fcc21e571d7926eacfe7551586c5144fc9426f51a836b9d9edc94e5b_prof);

        
        $__internal_9dbeca4b55dbb39db18b197c2202e017e76b6d27d25f3709ae07fc0bc92fcfff->leave($__internal_9dbeca4b55dbb39db18b197c2202e017e76b6d27d25f3709ae07fc0bc92fcfff_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_829ef4e5a8c934371b9aad1f6973286baae6ee2bdc16678351ebc67df530aabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829ef4e5a8c934371b9aad1f6973286baae6ee2bdc16678351ebc67df530aabe->enter($__internal_829ef4e5a8c934371b9aad1f6973286baae6ee2bdc16678351ebc67df530aabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8eb0a97a159bc803182b1e9d4b42a451894d21a9583cde6fa2e410eb973d29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eb0a97a159bc803182b1e9d4b42a451894d21a9583cde6fa2e410eb973d29d->enter($__internal_d8eb0a97a159bc803182b1e9d4b42a451894d21a9583cde6fa2e410eb973d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        ";
        
        $__internal_d8eb0a97a159bc803182b1e9d4b42a451894d21a9583cde6fa2e410eb973d29d->leave($__internal_d8eb0a97a159bc803182b1e9d4b42a451894d21a9583cde6fa2e410eb973d29d_prof);

        
        $__internal_829ef4e5a8c934371b9aad1f6973286baae6ee2bdc16678351ebc67df530aabe->leave($__internal_829ef4e5a8c934371b9aad1f6973286baae6ee2bdc16678351ebc67df530aabe_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_223a9939e6e7ed5db42c349dcf964e9f1416324c1bef314a5f7c5bb08bcdb1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223a9939e6e7ed5db42c349dcf964e9f1416324c1bef314a5f7c5bb08bcdb1cd->enter($__internal_223a9939e6e7ed5db42c349dcf964e9f1416324c1bef314a5f7c5bb08bcdb1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d40755392dcd9d3005dd7f3c502fb9d5967a7b88b80028bf26791fc85ddcaf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40755392dcd9d3005dd7f3c502fb9d5967a7b88b80028bf26791fc85ddcaf44->enter($__internal_d40755392dcd9d3005dd7f3c502fb9d5967a7b88b80028bf26791fc85ddcaf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_d40755392dcd9d3005dd7f3c502fb9d5967a7b88b80028bf26791fc85ddcaf44->leave($__internal_d40755392dcd9d3005dd7f3c502fb9d5967a7b88b80028bf26791fc85ddcaf44_prof);

        
        $__internal_223a9939e6e7ed5db42c349dcf964e9f1416324c1bef314a5f7c5bb08bcdb1cd->leave($__internal_223a9939e6e7ed5db42c349dcf964e9f1416324c1bef314a5f7c5bb08bcdb1cd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 29,  151 => 26,  142 => 25,  132 => 23,  123 => 22,  111 => 16,  107 => 15,  102 => 14,  93 => 13,  75 => 8,  64 => 31,  62 => 25,  59 => 24,  57 => 22,  51 => 19,  48 => 18,  46 => 13,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{% block title %}Сайт{% endblock %}</title>

    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/font-awesome.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}

    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
    <body>
        {% block body %}
        {% endblock %}
    </body>
    {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    {% endblock %}
</html>
", "::base.html.twig", "D:\\krr\\kr\\app/Resources\\views/base.html.twig");
    }
}
