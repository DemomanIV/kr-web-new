<?php

/* base.html.twig */
class __TwigTemplate_d4d0a9b3227fa79198035a537de49b076fed2d5e5c4774488a428f50c409be25 extends Twig_Template
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
        $__internal_9a09798edfc4cbaca7eae23efd0b3f2b3f1bec7e03f618249e155fe4328d84ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a09798edfc4cbaca7eae23efd0b3f2b3f1bec7e03f618249e155fe4328d84ff->enter($__internal_9a09798edfc4cbaca7eae23efd0b3f2b3f1bec7e03f618249e155fe4328d84ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_88b92402d553a9fe0977430f263f69852f950b4c2449ff11787a30f54b2c7169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b92402d553a9fe0977430f263f69852f950b4c2449ff11787a30f54b2c7169->enter($__internal_88b92402d553a9fe0977430f263f69852f950b4c2449ff11787a30f54b2c7169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9a09798edfc4cbaca7eae23efd0b3f2b3f1bec7e03f618249e155fe4328d84ff->leave($__internal_9a09798edfc4cbaca7eae23efd0b3f2b3f1bec7e03f618249e155fe4328d84ff_prof);

        
        $__internal_88b92402d553a9fe0977430f263f69852f950b4c2449ff11787a30f54b2c7169->leave($__internal_88b92402d553a9fe0977430f263f69852f950b4c2449ff11787a30f54b2c7169_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_24384c5ae1ff9dc3527a8dfe5a5c45e0667e88947e69e2020fd9b0b88c4d67db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24384c5ae1ff9dc3527a8dfe5a5c45e0667e88947e69e2020fd9b0b88c4d67db->enter($__internal_24384c5ae1ff9dc3527a8dfe5a5c45e0667e88947e69e2020fd9b0b88c4d67db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bc8f280841cf172f352545f872469c7015f2af22acf12ca36d0322f4b591a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc8f280841cf172f352545f872469c7015f2af22acf12ca36d0322f4b591a82->enter($__internal_6bc8f280841cf172f352545f872469c7015f2af22acf12ca36d0322f4b591a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Сайт";
        
        $__internal_6bc8f280841cf172f352545f872469c7015f2af22acf12ca36d0322f4b591a82->leave($__internal_6bc8f280841cf172f352545f872469c7015f2af22acf12ca36d0322f4b591a82_prof);

        
        $__internal_24384c5ae1ff9dc3527a8dfe5a5c45e0667e88947e69e2020fd9b0b88c4d67db->leave($__internal_24384c5ae1ff9dc3527a8dfe5a5c45e0667e88947e69e2020fd9b0b88c4d67db_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0a47a3ca2940cbc6d1b76cbf1ee1167927f631da40fe161726559600262816e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a47a3ca2940cbc6d1b76cbf1ee1167927f631da40fe161726559600262816e->enter($__internal_c0a47a3ca2940cbc6d1b76cbf1ee1167927f631da40fe161726559600262816e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1d6a6ec136844546b4b019a7deb6f65b9d5c33f48fc01b7339b04e458776672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d6a6ec136844546b4b019a7deb6f65b9d5c33f48fc01b7339b04e458776672->enter($__internal_c1d6a6ec136844546b4b019a7deb6f65b9d5c33f48fc01b7339b04e458776672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c1d6a6ec136844546b4b019a7deb6f65b9d5c33f48fc01b7339b04e458776672->leave($__internal_c1d6a6ec136844546b4b019a7deb6f65b9d5c33f48fc01b7339b04e458776672_prof);

        
        $__internal_c0a47a3ca2940cbc6d1b76cbf1ee1167927f631da40fe161726559600262816e->leave($__internal_c0a47a3ca2940cbc6d1b76cbf1ee1167927f631da40fe161726559600262816e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_4793163265fc211c171faf8320e83db4e20be755db4af18a664355436f094cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4793163265fc211c171faf8320e83db4e20be755db4af18a664355436f094cb9->enter($__internal_4793163265fc211c171faf8320e83db4e20be755db4af18a664355436f094cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce433484dc625c514634d91590465d3efdfe0494e0c8e1f219de8f208f9bdcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce433484dc625c514634d91590465d3efdfe0494e0c8e1f219de8f208f9bdcdc->enter($__internal_ce433484dc625c514634d91590465d3efdfe0494e0c8e1f219de8f208f9bdcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        ";
        
        $__internal_ce433484dc625c514634d91590465d3efdfe0494e0c8e1f219de8f208f9bdcdc->leave($__internal_ce433484dc625c514634d91590465d3efdfe0494e0c8e1f219de8f208f9bdcdc_prof);

        
        $__internal_4793163265fc211c171faf8320e83db4e20be755db4af18a664355436f094cb9->leave($__internal_4793163265fc211c171faf8320e83db4e20be755db4af18a664355436f094cb9_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa2fc51fde52f6cc98cd066469eb3392477c9bea735b48dc910c6fa4b8794a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2fc51fde52f6cc98cd066469eb3392477c9bea735b48dc910c6fa4b8794a4e->enter($__internal_fa2fc51fde52f6cc98cd066469eb3392477c9bea735b48dc910c6fa4b8794a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19e4aef63b7341b27b0a61f9a3360c09375ebb85d43883b8ba59f9d6eb0ae026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e4aef63b7341b27b0a61f9a3360c09375ebb85d43883b8ba59f9d6eb0ae026->enter($__internal_19e4aef63b7341b27b0a61f9a3360c09375ebb85d43883b8ba59f9d6eb0ae026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_19e4aef63b7341b27b0a61f9a3360c09375ebb85d43883b8ba59f9d6eb0ae026->leave($__internal_19e4aef63b7341b27b0a61f9a3360c09375ebb85d43883b8ba59f9d6eb0ae026_prof);

        
        $__internal_fa2fc51fde52f6cc98cd066469eb3392477c9bea735b48dc910c6fa4b8794a4e->leave($__internal_fa2fc51fde52f6cc98cd066469eb3392477c9bea735b48dc910c6fa4b8794a4e_prof);

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
", "base.html.twig", "D:\\krr\\kr\\app\\Resources\\views\\base.html.twig");
    }
}
