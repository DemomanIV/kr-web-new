<?php

/* BloggerBlogBundle:Prepod:index.html.twig */
class __TwigTemplate_2f5626d8f13957d708c78f4331d7c74bc1cf3b2da7b826c6ec4a8ce4057282a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Prepod:index.html.twig", 2);
        $this->blocks = array(
            'body_title' => array($this, 'block_body_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd58aa2da4953a6d770c55d21b3cf2740eafc68acc3c459a1ea83271cc19c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd58aa2da4953a6d770c55d21b3cf2740eafc68acc3c459a1ea83271cc19c09->enter($__internal_1fd58aa2da4953a6d770c55d21b3cf2740eafc68acc3c459a1ea83271cc19c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $__internal_5ea46405dc5d4c4ee808f86398068dd71440f7bad94ac2b6a654952a4e2aa762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea46405dc5d4c4ee808f86398068dd71440f7bad94ac2b6a654952a4e2aa762->enter($__internal_5ea46405dc5d4c4ee808f86398068dd71440f7bad94ac2b6a654952a4e2aa762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd58aa2da4953a6d770c55d21b3cf2740eafc68acc3c459a1ea83271cc19c09->leave($__internal_1fd58aa2da4953a6d770c55d21b3cf2740eafc68acc3c459a1ea83271cc19c09_prof);

        
        $__internal_5ea46405dc5d4c4ee808f86398068dd71440f7bad94ac2b6a654952a4e2aa762->leave($__internal_5ea46405dc5d4c4ee808f86398068dd71440f7bad94ac2b6a654952a4e2aa762_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_53cf186fe7fc28a0280157b3f63e38ebdb254f2f13008e6e66e2e81ab8557485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cf186fe7fc28a0280157b3f63e38ebdb254f2f13008e6e66e2e81ab8557485->enter($__internal_53cf186fe7fc28a0280157b3f63e38ebdb254f2f13008e6e66e2e81ab8557485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_406f2aff3f5220fd6565dd2160cd7a29e622ffd358f6b4175bc59c3037d3d37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406f2aff3f5220fd6565dd2160cd7a29e622ffd358f6b4175bc59c3037d3d37e->enter($__internal_406f2aff3f5220fd6565dd2160cd7a29e622ffd358f6b4175bc59c3037d3d37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Пенель преподавателя";
        
        $__internal_406f2aff3f5220fd6565dd2160cd7a29e622ffd358f6b4175bc59c3037d3d37e->leave($__internal_406f2aff3f5220fd6565dd2160cd7a29e622ffd358f6b4175bc59c3037d3d37e_prof);

        
        $__internal_53cf186fe7fc28a0280157b3f63e38ebdb254f2f13008e6e66e2e81ab8557485->leave($__internal_53cf186fe7fc28a0280157b3f63e38ebdb254f2f13008e6e66e2e81ab8557485_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4218161be4e63a4f43fd7fae6d6c11cf971fa6dc2d5ae7782d27cae80af7268d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4218161be4e63a4f43fd7fae6d6c11cf971fa6dc2d5ae7782d27cae80af7268d->enter($__internal_4218161be4e63a4f43fd7fae6d6c11cf971fa6dc2d5ae7782d27cae80af7268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01649eec0a28cfcf80788470c006260816c27ac60e13aceebbe3ef1a30e95e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01649eec0a28cfcf80788470c006260816c27ac60e13aceebbe3ef1a30e95e78->enter($__internal_01649eec0a28cfcf80788470c006260816c27ac60e13aceebbe3ef1a30e95e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <hr>
        <h3>Привет, <i>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "fio", array()), "html", null, true);
        echo "</i></h3>
        <hr>
        <h3><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Зявки</a></h3>
        <h3><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
        echo "\">Выход</a></h3>
    </div>
";
        
        $__internal_01649eec0a28cfcf80788470c006260816c27ac60e13aceebbe3ef1a30e95e78->leave($__internal_01649eec0a28cfcf80788470c006260816c27ac60e13aceebbe3ef1a30e95e78_prof);

        
        $__internal_4218161be4e63a4f43fd7fae6d6c11cf971fa6dc2d5ae7782d27cae80af7268d->leave($__internal_4218161be4e63a4f43fd7fae6d6c11cf971fa6dc2d5ae7782d27cae80af7268d_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Prepod:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  82 => 13,  78 => 12,  73 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Пенель преподавателя{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <hr>
        <h3>Привет, <i>{{ app.user.fio }}</i></h3>
        <hr>
        <h3><a href=\"{{ path('blogger_blog_bidd_index') }}\">Зявки</a></h3>
        <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"{{ path('_security_logout') }}\">Выход</a></h3>
    </div>
{% endblock %}", "BloggerBlogBundle:Prepod:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Prepod/index.html.twig");
    }
}
