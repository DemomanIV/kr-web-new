<?php

/* @BloggerBlog/Bidd/new.html.twig */
class __TwigTemplate_4bbca01ff91f98f277e4a01ca0c0bc304b576058b5019a7ba568d984f0b30ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf08d7678c8b63a4f91be44175d664ad8e1b3bfc4b7ff45a114e602bae2f5ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf08d7678c8b63a4f91be44175d664ad8e1b3bfc4b7ff45a114e602bae2f5ba3->enter($__internal_bf08d7678c8b63a4f91be44175d664ad8e1b3bfc4b7ff45a114e602bae2f5ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/new.html.twig"));

        $__internal_7b603221c31e64afe123701d58db20dd550407dd0a3d28f2567076cd0a57b4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b603221c31e64afe123701d58db20dd550407dd0a3d28f2567076cd0a57b4b8->enter($__internal_7b603221c31e64afe123701d58db20dd550407dd0a3d28f2567076cd0a57b4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf08d7678c8b63a4f91be44175d664ad8e1b3bfc4b7ff45a114e602bae2f5ba3->leave($__internal_bf08d7678c8b63a4f91be44175d664ad8e1b3bfc4b7ff45a114e602bae2f5ba3_prof);

        
        $__internal_7b603221c31e64afe123701d58db20dd550407dd0a3d28f2567076cd0a57b4b8->leave($__internal_7b603221c31e64afe123701d58db20dd550407dd0a3d28f2567076cd0a57b4b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a7d8d3aed07e1d7e9795225d78aa2ac4bdd1018f9e3e9f0cee39ec1e9d3f84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7d8d3aed07e1d7e9795225d78aa2ac4bdd1018f9e3e9f0cee39ec1e9d3f84a->enter($__internal_7a7d8d3aed07e1d7e9795225d78aa2ac4bdd1018f9e3e9f0cee39ec1e9d3f84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e357cda3ae610512f50c04aca6a47bddefa9b8831064b782d039227d8f75ef89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e357cda3ae610512f50c04aca6a47bddefa9b8831064b782d039227d8f75ef89->enter($__internal_e357cda3ae610512f50c04aca6a47bddefa9b8831064b782d039227d8f75ef89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Подача заявки</h1>
        <hr>
        ";
        // line 7
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'errors');
        echo "
            <label for=\"title\">ФИО:</label>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "fio", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_fio", "placeholder" => "Введите фио")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark1\">Оценка по 1-му предмету:</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "mark1", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark1", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark2\">Оценка по 2-му предмету:</label>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "mark2", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark2", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark3\">Оценка по 3-му предмету:</label>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "mark3", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_mark3", "placeholder" => "Введите оценку", "min" => "0", "max" => "100")));
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Специальность:</label>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "specialty", array()), 'widget', array("attr" => array("class" => "form-control form-field", "id" => "blogger_blogbundle_bidd_check1")));
        echo "
        </div>
        <div class=\"hidden\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "check1", array()), 'widget');
        echo "
        </div>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), 'rest');
        echo "
            <input class=\"btn btn-success\" type=\"submit\" value=\"Загрузить\">
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "

        <hr>
        <h3><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
    </div>
";
        
        $__internal_e357cda3ae610512f50c04aca6a47bddefa9b8831064b782d039227d8f75ef89->leave($__internal_e357cda3ae610512f50c04aca6a47bddefa9b8831064b782d039227d8f75ef89_prof);

        
        $__internal_7a7d8d3aed07e1d7e9795225d78aa2ac4bdd1018f9e3e9f0cee39ec1e9d3f84a->leave($__internal_7a7d8d3aed07e1d7e9795225d78aa2ac4bdd1018f9e3e9f0cee39ec1e9d3f84a_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  122 => 40,  117 => 38,  112 => 36,  106 => 33,  99 => 29,  92 => 25,  85 => 21,  78 => 17,  73 => 15,  68 => 13,  65 => 12,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Подача заявки</h1>
        <hr>
        {% if message  %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endif %}

        {{ form_start(form) }}
        <div class=\"form-group\">
            {{ form_errors(form) }}
            <label for=\"title\">ФИО:</label>
            {{ form_widget(form.fio, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_fio', 'placeholder': 'Введите фио'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark1\">Оценка по 1-му предмету:</label>
            {{ form_widget(form.mark1, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark1', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark2\">Оценка по 2-му предмету:</label>
            {{ form_widget(form.mark2, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark2', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_mark3\">Оценка по 3-му предмету:</label>
            {{ form_widget(form.mark3, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_mark3', 'placeholder': 'Введите оценку', 'min': '0', 'max': '100'}}) }}
        </div>
        <div class=\"form-group\">
            <label for=\"blogger_blogbundle_bidd_check1\">Специальность:</label>
            {{ form_widget(form.specialty, {'attr': {'class':'form-control form-field', 'id': 'blogger_blogbundle_bidd_check1'}}) }}
        </div>
        <div class=\"hidden\">
        {{ form_widget(form.check1) }}
        </div>
        {{ form_rest(form) }}
            <input class=\"btn btn-success\" type=\"submit\" value=\"Загрузить\">
        {{ form_end(form) }}

        <hr>
        <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
    </div>
{% endblock %}
", "@BloggerBlog/Bidd/new.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\new.html.twig");
    }
}
