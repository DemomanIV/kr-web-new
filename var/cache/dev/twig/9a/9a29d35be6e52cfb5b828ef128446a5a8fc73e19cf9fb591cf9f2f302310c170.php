<?php

/* BloggerBlogBundle:Security:login.html.twig */
class __TwigTemplate_145dc48c67d2de7ee630c7be1121351bb545fc89fa7e1c0969635d7179900042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425f024d8ca1d9d965a4db5650dbd9690de67e2e7c7ba228a1e359b4826d6e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425f024d8ca1d9d965a4db5650dbd9690de67e2e7c7ba228a1e359b4826d6e1a->enter($__internal_425f024d8ca1d9d965a4db5650dbd9690de67e2e7c7ba228a1e359b4826d6e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $__internal_b9e8124c1d53224cdfd0466d32ff779aa2443808ce4e217ed2fd3f9c3a3383a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e8124c1d53224cdfd0466d32ff779aa2443808ce4e217ed2fd3f9c3a3383a0->enter($__internal_b9e8124c1d53224cdfd0466d32ff779aa2443808ce4e217ed2fd3f9c3a3383a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425f024d8ca1d9d965a4db5650dbd9690de67e2e7c7ba228a1e359b4826d6e1a->leave($__internal_425f024d8ca1d9d965a4db5650dbd9690de67e2e7c7ba228a1e359b4826d6e1a_prof);

        
        $__internal_b9e8124c1d53224cdfd0466d32ff779aa2443808ce4e217ed2fd3f9c3a3383a0->leave($__internal_b9e8124c1d53224cdfd0466d32ff779aa2443808ce4e217ed2fd3f9c3a3383a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c7a5f3ec6ee8e48795b22416687bdeead143f6c91b2688bed388206f297d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c7a5f3ec6ee8e48795b22416687bdeead143f6c91b2688bed388206f297d78->enter($__internal_a7c7a5f3ec6ee8e48795b22416687bdeead143f6c91b2688bed388206f297d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_397f76a90aab91567dfd914fb30b5be4a789a9d4bff1a90b5a02b125f4922648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397f76a90aab91567dfd914fb30b5be4a789a9d4bff1a90b5a02b125f4922648->enter($__internal_397f76a90aab91567dfd914fb30b5be4a789a9d4bff1a90b5a02b125f4922648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Вход";
        
        $__internal_397f76a90aab91567dfd914fb30b5be4a789a9d4bff1a90b5a02b125f4922648->leave($__internal_397f76a90aab91567dfd914fb30b5be4a789a9d4bff1a90b5a02b125f4922648_prof);

        
        $__internal_a7c7a5f3ec6ee8e48795b22416687bdeead143f6c91b2688bed388206f297d78->leave($__internal_a7c7a5f3ec6ee8e48795b22416687bdeead143f6c91b2688bed388206f297d78_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_713537fbb0d795a7e87fee96a0d5853bd98620f67bf4591a232571ae567cb5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713537fbb0d795a7e87fee96a0d5853bd98620f67bf4591a232571ae567cb5b5->enter($__internal_713537fbb0d795a7e87fee96a0d5853bd98620f67bf4591a232571ae567cb5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e5f42235347785c43d02dc6bf3fc75af895aa952362fa2066f5d1815dce317e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5f42235347785c43d02dc6bf3fc75af895aa952362fa2066f5d1815dce317e->enter($__internal_3e5f42235347785c43d02dc6bf3fc75af895aa952362fa2066f5d1815dce317e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
        <hr>
    ";
        }
        // line 11
        echo "    <div class=\"container\">
        <hr>
        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <h3><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
        </div>
    </div>

";
        
        $__internal_3e5f42235347785c43d02dc6bf3fc75af895aa952362fa2066f5d1815dce317e->leave($__internal_3e5f42235347785c43d02dc6bf3fc75af895aa952362fa2066f5d1815dce317e_prof);

        
        $__internal_713537fbb0d795a7e87fee96a0d5853bd98620f67bf4591a232571ae567cb5b5->leave($__internal_713537fbb0d795a7e87fee96a0d5853bd98620f67bf4591a232571ae567cb5b5_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  88 => 16,  82 => 13,  78 => 11,  71 => 8,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Вход{% endblock%}


{% block body %}
    {% if error %}
        <div class=\"error\">{{ error.message }}</div>
        <hr>
    {% endif %}
    <div class=\"container\">
        <hr>
        <form action=\"{{ path('_security_check') }}\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
        </div>
    </div>

{% endblock %}", "BloggerBlogBundle:Security:login.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Security/login.html.twig");
    }
}
