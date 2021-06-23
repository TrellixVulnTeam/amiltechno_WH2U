<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/create.html.twig */
class __TwigTemplate_2a90314052e7ab0177539fe41090a33bf0549a7c52c49e16eb72453f9196ac66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 2, $this->source); })()), [0 => "Form/form_errors.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter Nouveau Produit | Admin 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <div 
           class=\"d-flex justify-content-center\"> 
           ";
        // line 9
        echo " 
           ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 10, $this->source); })()), 'form_start');
        echo " 
           ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 11, $this->source); })()), 'errors');
        echo " 
           <div class=\"form-group\"> 
                  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'label');
        echo " 
                  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 15
        echo " 
                  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'label');
        echo " 
                  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 21
        echo " 
                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 25, $this->source); })()), "quantite", [], "any", false, false, false, 25), 'label');
        echo " 
                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 26, $this->source); })()), "quantite", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 27
        echo " 
                  ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 28, $this->source); })()), "quantite", [], "any", false, false, false, 28), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 31, $this->source); })()), "rupture", [], "any", false, false, false, 31), 'label');
        echo " 
                  ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 32, $this->source); })()), "rupture", [], "any", false, false, false, 32), 'widget');
        echo " 
                  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 33, $this->source); })()), "rupture", [], "any", false, false, false, 33), 'errors');
        echo " 
            </div> 
            <div class=\"form-group\"> 
                  ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 36, $this->source); })()), "lienImage", [], "any", false, false, false, 36), 'label');
        echo " 
                  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 37, $this->source); })()), "lienImage", [], "any", false, false, false, 37), 'widget');
        echo " 
                  ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 38, $this->source); })()), "lienImage", [], "any", false, false, false, 38), 'errors');
        echo " 
            </div> 
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 40, $this->source); })()), "creer", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "btn btn- 
                         info"]]);
        // line 41
        echo " 
    </div> 

            <div class=\"form-group\"> 
             ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 45, $this->source); })()), "reference", [], "any", false, false, false, 45), 'label');
        echo " 
             ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 46, $this->source); })()), "reference", [], "any", false, false, false, 46), "numero", [], "any", false, false, false, 46), 'label');
        echo " 
             ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 47, $this->source); })()), "reference", [], "any", false, false, false, 47), "numero", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 48
        echo " 
             ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 49, $this->source); })()), "reference", [], "any", false, false, false, 49), "numero", [], "any", false, false, false, 49), 'errors');
        echo " 
            </div> 

            <div class=\"form-group\"> 
              ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 53, $this->source); })()), "distributeurs", [], "any", false, false, false, 53), 'label');
        echo " 
              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 54, $this->source); })()), "distributeurs", [], "any", false, false, false, 54), 'widget');
        echo " 
            </div> 
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["my_form"]) || array_key_exists("my_form", $context) ? $context["my_form"] : (function () { throw new RuntimeError('Variable "my_form" does not exist.', 56, $this->source); })()), 'form_end');
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 56,  213 => 54,  209 => 53,  202 => 49,  199 => 48,  197 => 47,  193 => 46,  189 => 45,  183 => 41,  180 => 40,  175 => 38,  171 => 37,  167 => 36,  161 => 33,  157 => 32,  153 => 31,  147 => 28,  144 => 27,  142 => 26,  138 => 25,  132 => 22,  129 => 21,  127 => 20,  123 => 19,  117 => 16,  114 => 15,  112 => 14,  108 => 13,  103 => 11,  99 => 10,  96 => 9,  82 => 6,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
{% form_theme my_form with ['Form/form_errors.html.twig'] %} 
{% block title %}Ajouter Nouveau Produit | Admin 
{% endblock %} 
 
{% block body %} 
    <div 
           class=\"d-flex justify-content-center\"> 
           {# {{ form(my_form) }} #} 
           {{ form_start(my_form) }} 
           {{ form_errors(my_form) }} 
           <div class=\"form-group\"> 
                  {{ form_label(my_form.nom) }} 
                  {{ form_widget(my_form.nom, {'attr':  
                  { 'class':'form-control'}}) }} 
                  {{ form_errors(my_form.nom) }} 
            </div> 
            <div class=\"form-group\"> 
                  {{ form_label(my_form.prix) }} 
                  {{ form_widget(my_form.prix, {'attr':  
                  { 'class':'form-control'}}) }} 
                  {{ form_errors(my_form.prix) }} 
            </div> 
            <div class=\"form-group\"> 
                  {{ form_label(my_form.quantite) }} 
                  {{ form_widget(my_form.quantite, {'attr':  
                  { 'class':'form-control'}}) }} 
                  {{ form_errors(my_form.quantite) }} 
            </div> 
            <div class=\"form-group\"> 
                  {{ form_label(my_form.rupture) }} 
                  {{ form_widget(my_form.rupture) }} 
                  {{ form_errors(my_form.rupture) }} 
            </div> 
            <div class=\"form-group\"> 
                  {{ form_label(my_form.lienImage) }} 
                  {{ form_widget(my_form.lienImage) }} 
                  {{ form_errors(my_form.lienImage) }} 
            </div> 
            {{ form_row(my_form.creer, {'attr': { 'class':'btn btn- 
                         info'}}) }} 
    </div> 

            <div class=\"form-group\"> 
             {{ form_label(my_form.reference) }} 
             {{ form_label(my_form.reference.numero) }} 
             {{ form_widget(my_form.reference.numero,  
                        {'attr': { 'class':'form-control'}}) }} 
             {{ form_errors(my_form.reference.numero) }} 
            </div> 

            <div class=\"form-group\"> 
              {{ form_label(my_form.distributeurs) }} 
              {{ form_widget(my_form.distributeurs) }} 
            </div> 
    {{ form_end(my_form) }} 
{% endblock %}", "admin/create.html.twig", "C:\\wamp64\\www\\monapplisymf\\templates\\admin\\create.html.twig");
    }
}
