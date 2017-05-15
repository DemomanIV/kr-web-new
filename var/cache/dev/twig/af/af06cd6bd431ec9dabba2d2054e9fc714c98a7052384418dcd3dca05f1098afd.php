<?php

/* @BloggerBlog/Bidd/edit.html.twig */
class __TwigTemplate_5af11c6a8b69b77cc19bf00ad806e30870e336077100b8497588167eb5738bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/edit.html.twig", 1);
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
        $__internal_5b4d9888fe7137dbf7270e9df38f78b0e2e97938c8dc50c36e3a7692cc610e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4d9888fe7137dbf7270e9df38f78b0e2e97938c8dc50c36e3a7692cc610e12->enter($__internal_5b4d9888fe7137dbf7270e9df38f78b0e2e97938c8dc50c36e3a7692cc610e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/edit.html.twig"));

        $__internal_603b033e1b63dcb8c67f7599dfda8197338e01bac5e3f98961d623dc47dd1032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603b033e1b63dcb8c67f7599dfda8197338e01bac5e3f98961d623dc47dd1032->enter($__internal_603b033e1b63dcb8c67f7599dfda8197338e01bac5e3f98961d623dc47dd1032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4d9888fe7137dbf7270e9df38f78b0e2e97938c8dc50c36e3a7692cc610e12->leave($__internal_5b4d9888fe7137dbf7270e9df38f78b0e2e97938c8dc50c36e3a7692cc610e12_prof);

        
        $__internal_603b033e1b63dcb8c67f7599dfda8197338e01bac5e3f98961d623dc47dd1032->leave($__internal_603b033e1b63dcb8c67f7599dfda8197338e01bac5e3f98961d623dc47dd1032_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af59a16503ceeab30bbad053c0173f47df6636fc90a3ce7742d3a99a2511d26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af59a16503ceeab30bbad053c0173f47df6636fc90a3ce7742d3a99a2511d26c->enter($__internal_af59a16503ceeab30bbad053c0173f47df6636fc90a3ce7742d3a99a2511d26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa89f2a50f3b0bb1cd617ccf9d764af71469044f28a56eb58a41199bb7378c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa89f2a50f3b0bb1cd617ccf9d764af71469044f28a56eb58a41199bb7378c92->enter($__internal_aa89f2a50f3b0bb1cd617ccf9d764af71469044f28a56eb58a41199bb7378c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Редактирование заявки</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aa89f2a50f3b0bb1cd617ccf9d764af71469044f28a56eb58a41199bb7378c92->leave($__internal_aa89f2a50f3b0bb1cd617ccf9d764af71469044f28a56eb58a41199bb7378c92_prof);

        
        $__internal_af59a16503ceeab30bbad053c0173f47df6636fc90a3ce7742d3a99a2511d26c->leave($__internal_af59a16503ceeab30bbad053c0173f47df6636fc90a3ce7742d3a99a2511d26c_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Редактирование заявки</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\">
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('blogger_blog_bidd_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@BloggerBlog/Bidd/edit.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\edit.html.twig");
    }
}
