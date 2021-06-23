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

/* liste_produits/index.html.twig */
class __TwigTemplate_45778f17c2435a00894d5d3d9340b67813426ff547f393eab7a2419f39b82cce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_produits/index.html.twig", 1);
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

        echo "Liste des produits 
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
    <div class=\"alert alert-primary\">Réduction 20% sur le produit: 
           ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastproduit"]) || array_key_exists("lastproduit", $context) ? $context["lastproduit"] : (function () { throw new RuntimeError('Variable "lastproduit" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>

";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " 
<a class=\"btn btn-info mb-2\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert");
            echo "\" >  
         Insertion d'un nouveau produit 
</a> 
";
        }
        // line 14
        echo " 

    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeproduits"]) || array_key_exists("listeproduits", $context) ? $context["listeproduits"] : (function () { throw new RuntimeError('Variable "listeproduits" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo " 
                  <div class=\"card\" style=\"width: 18rem;\"> 
                         <img class=\"card-img-top\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source,             // line 20
$context["produit"], "lienImage", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" height=\"200px\" alt=\"image\"> 
 
    <div class=\"card-body\"> 
           <h5 class=\"card-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5> 
           <ul class=\"list-group list-group-flush\"> 
                  <li class=\"list-group-item\"> 
                  ";
            // line 26
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 26))) {
                echo " 
                  Référence: 
                        ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 28), "numero", [], "any", false, false, false, 28), "html", null, true);
                echo " 
                  ";
            }
            // line 29
            echo " 
                  </li> 
                  <li class=\"list-group-item\">Distributeurs: 
                  ";
            // line 32
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 32))) {
                echo " 
                        ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "distributeurs", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
                    echo " 
                              ";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 34), "html", null, true);
                    echo "&nbsp; 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo " 
                  ";
            } else {
                // line 36
                echo " 
                        pas de distributeur joint 
                  ";
            }
            // line 38
            echo " 
                  </li> 
                  <li class=\"list-group-item\"> 
                  Prix: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 41), "html", null, true);
            echo " Euros</li> 
                  <li class=\"list-group-item\"> 
                  ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "rupture", [], "any", false, false, false, 43)) {
                echo " 
                         <strong>Rupture de stock</strong> 
                  ";
            } else {
                // line 45
                echo " 
                         Quantité: ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 46), "html", null, true);
                echo " 
                  ";
            }
            // line 47
            echo " 
                  </li> 
                  </ul> 
    <div class=\"card-body\"> 
           <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a> 

              ";
            // line 53
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo " 
              <a  class=\"btn btn-warning mt-2\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source,                 // line 55
$context["produit"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"> 
                     Editer le produit 
              </a> 
              <a class=\"btn btn-danger mt-2\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source,                 // line 59
$context["produit"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" > 
                     Supprimer le produit 
              </a> 
              ";
            }
            // line 62
            echo " 
 
    </div> 
</div> 
</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo " 
    </div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "liste_produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 67,  226 => 62,  219 => 59,  218 => 58,  212 => 55,  211 => 54,  207 => 53,  199 => 47,  194 => 46,  191 => 45,  185 => 43,  180 => 41,  175 => 38,  170 => 36,  166 => 35,  158 => 34,  152 => 33,  148 => 32,  143 => 29,  138 => 28,  133 => 26,  127 => 23,  121 => 20,  120 => 19,  113 => 17,  108 => 14,  101 => 11,  97 => 10,  92 => 8,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block title %}Liste des produits 
{% endblock %} 
 
{% block body %} 
    <div class=\"alert alert-primary\">Réduction 20% sur le produit: 
           {{ lastproduit.nom }}</div>

{% if is_granted('ROLE_ADMIN')  %} 
<a class=\"btn btn-info mb-2\" href=\"{{ path('insert') }}\" >  
         Insertion d'un nouveau produit 
</a> 
{% endif %} 

    <div class=\"d-flex flex-row justify-content-around flex-wrap\"> 
           {% for produit in listeproduits %} 
                  <div class=\"card\" style=\"width: 18rem;\"> 
                         <img class=\"card-img-top\" src=\"{{ asset 
('img/'~produit.lienImage) }}\" height=\"200px\" alt=\"image\"> 
 
    <div class=\"card-body\"> 
           <h5 class=\"card-title\">{{ produit.nom }}</h5> 
           <ul class=\"list-group list-group-flush\"> 
                  <li class=\"list-group-item\"> 
                  {% if  produit.reference is not null %} 
                  Référence: 
                        {{ produit.reference.numero }} 
                  {% endif %} 
                  </li> 
                  <li class=\"list-group-item\">Distributeurs: 
                  {% if produit.distributeurs is not empty %} 
                        {%for distributeur in produit.distributeurs %} 
                              {{ distributeur.nom }}&nbsp; 
                        {% endfor %} 
                  {% else %} 
                        pas de distributeur joint 
                  {% endif %} 
                  </li> 
                  <li class=\"list-group-item\"> 
                  Prix: {{ produit.prix }} Euros</li> 
                  <li class=\"list-group-item\"> 
                  {% if produit.rupture %} 
                         <strong>Rupture de stock</strong> 
                  {% else %} 
                         Quantité: {{ produit.quantite }} 
                  {% endif %} 
                  </li> 
                  </ul> 
    <div class=\"card-body\"> 
           <a href=\"#\" class=\"btn btn-primary\">Ajouter au Panier</a> 

              {% if is_granted('ROLE_ADMIN')  %} 
              <a  class=\"btn btn-warning mt-2\" href=\"{{ path('update', {'id':  
              produit.id }) }}\"> 
                     Editer le produit 
              </a> 
              <a class=\"btn btn-danger mt-2\" href=\"{{ path('delete', {'id':  
              produit.id }) }}\" > 
                     Supprimer le produit 
              </a> 
              {% endif %} 
 
    </div> 
</div> 
</div> 
{% endfor %} 
    </div> 
{% endblock %} ", "liste_produits/index.html.twig", "C:\\wamp64\\www\\monapplisymf\\templates\\liste_produits\\index.html.twig");
    }
}
