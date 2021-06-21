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

/* setting/setting.twig */
class __TwigTemplate_b71dce25f48ff2162e67521c5527b696f53eedf3a27cf19e4c1e954e7132aaf2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-ftp\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_ftp"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if (($context["error_name"] ?? null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_owner"] ?? null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 127
        if (($context["error_address"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_email"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if (($context["error_telephone"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if (($context["locations"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182), ($context["config_location"] ?? null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 184);
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 186);
                    echo "\" />
                      ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 187);
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200) == ($context["config_country_id"] ?? null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 206);
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 222
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 226
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 226) == ($context["config_timezone"] ?? null))) {
                // line 227
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 227);
                echo "</option>
                      ";
            } else {
                // line 229
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 229);
                echo "</option>
                      ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 236
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 241
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 241) == ($context["config_language"] ?? null))) {
                // line 242
                echo "                    
                    <option value=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 243);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 243);
                echo "</option>
                    
                    ";
            } else {
                // line 246
                echo "                    
                    <option value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 247);
                echo "</option>
                    
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 256
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 261
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261) == ($context["config_admin_language"] ?? null))) {
                // line 262
                echo "                    
                    <option value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 263);
                echo "</option>
                    
                    ";
            } else {
                // line 266
                echo "                    
                    <option value=\"";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 267);
                echo "</option>
                    
                    ";
            }
            // line 270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 276
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 281
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 281) == ($context["config_currency"] ?? null))) {
                // line 282
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 283);
                echo "</option>
                    
                    ";
            } else {
                // line 286
                echo "                    
                    <option value=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 287);
                echo "</option>
                    
                    ";
            }
            // line 290
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 296
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 298
        if (($context["config_currency_auto"] ?? null)) {
            // line 299
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 300
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 302
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 303
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 304
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 305
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 306
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 309
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 310
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 311
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 315
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 320
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 320) == ($context["config_length_class_id"] ?? null))) {
                // line 321
                echo "                    
                    <option value=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 322);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 322);
                echo "</option>
                    
                    ";
            } else {
                // line 325
                echo "                    
                    <option value=\"";
                // line 326
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 326);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 326);
                echo "</option>
                    
                    ";
            }
            // line 329
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 335
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 340
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 340) == ($context["config_weight_class_id"] ?? null))) {
                // line 341
                echo "                    
                    <option value=\"";
                // line 342
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 342);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 342);
                echo "</option>
                    
                    ";
            } else {
                // line 345
                echo "                    
                    <option value=\"";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 346);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 346);
                echo "</option>
                    
                    ";
            }
            // line 349
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 357
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 359
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 361
        if (($context["config_product_count"] ?? null)) {
            // line 362
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 363
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 365
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 366
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 367
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 368
        if ( !($context["config_product_count"] ?? null)) {
            // line 369
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 370
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 372
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 373
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 374
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 378
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 380
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 381
        if (($context["error_limit_admin"] ?? null)) {
            // line 382
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 383
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 387
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 389
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 391
        if (($context["config_review_status"] ?? null)) {
            // line 392
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 393
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 395
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 396
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 397
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 398
        if ( !($context["config_review_status"] ?? null)) {
            // line 399
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 400
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 402
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 403
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 404
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 408
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 410
        if (($context["config_review_guest"] ?? null)) {
            // line 411
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 412
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 415
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 416
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 417
        if ( !($context["config_review_guest"] ?? null)) {
            // line 418
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 421
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 423
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 428
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 432
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 433
        if (($context["error_voucher_min"] ?? null)) {
            // line 434
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 435
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 438
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 440
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 441
        if (($context["error_voucher_max"] ?? null)) {
            // line 442
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 443
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 447
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 449
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 451
        if (($context["config_tax"] ?? null)) {
            // line 452
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 453
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 455
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 456
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 457
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 458
        if ( !($context["config_tax"] ?? null)) {
            // line 459
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 460
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 462
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 463
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 464
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 468
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 471
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 473
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 474
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 475
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 478
            echo "                      
                      <option value=\"shipping\">";
            // line 479
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 482
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 483
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 484
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 487
            echo "                      
                      <option value=\"payment\">";
            // line 488
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 491
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 496
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 499
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 501
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 502
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 503
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 506
            echo "                      
                      <option value=\"shipping\">";
            // line 507
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 510
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 511
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 512
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 515
            echo "                      
                      <option value=\"payment\">";
            // line 516
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 519
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 525
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 527
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 529
        if (($context["config_customer_online"] ?? null)) {
            // line 530
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 531
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 533
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 534
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 535
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 536
        if ( !($context["config_customer_online"] ?? null)) {
            // line 537
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 538
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 540
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 541
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 542
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 546
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 548
        if (($context["config_customer_activity"] ?? null)) {
            // line 549
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 550
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 553
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 554
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 555
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 556
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 557
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 559
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 560
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 561
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 565
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 567
        if (($context["config_customer_search"] ?? null)) {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 569
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 572
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 573
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 574
        if ( !($context["config_customer_search"] ?? null)) {
            // line 575
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 576
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 578
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 579
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 580
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 584
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 589
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 589) == ($context["config_customer_group_id"] ?? null))) {
                // line 590
                echo "                      
                      <option value=\"";
                // line 591
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 591);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 591);
                echo "</option>
                      
                      ";
            } else {
                // line 594
                echo "                      
                      <option value=\"";
                // line 595
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 595);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 595);
                echo "</option>
                      
                      ";
            }
            // line 598
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 604
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 606
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 607
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 607), ($context["config_customer_group_display"] ?? null))) {
                // line 608
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 608);
                echo "\" checked=\"checked\" />
                        ";
                // line 609
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 609);
                echo "
                        ";
            } else {
                // line 611
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 611);
                echo "\" />
                        ";
                // line 612
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 612);
                echo "
                        ";
            }
            // line 613
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 617
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 618
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 621
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 623
        if (($context["config_customer_price"] ?? null)) {
            // line 624
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 625
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 627
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 628
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 629
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 630
        if ( !($context["config_customer_price"] ?? null)) {
            // line 631
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 632
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 634
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 635
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 636
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 640
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 642
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 643
        if (($context["error_login_attempts"] ?? null)) {
            // line 644
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 645
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 648
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 651
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 654
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 654) == ($context["config_account_id"] ?? null))) {
                // line 655
                echo "                      
                      <option value=\"";
                // line 656
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 656);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 656);
                echo "</option>
                      
                      ";
            } else {
                // line 659
                echo "                      
                      <option value=\"";
                // line 660
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 660);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 660);
                echo "</option>
                      
                      ";
            }
            // line 663
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 664
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 670
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 672
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 674
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 678
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 680
        if (($context["config_cart_weight"] ?? null)) {
            // line 681
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 682
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 684
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 685
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 686
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 687
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 688
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 689
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 691
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 692
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 693
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 697
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 699
        if (($context["config_checkout_guest"] ?? null)) {
            // line 700
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 701
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 703
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 704
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 705
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 706
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 707
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 708
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 710
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 711
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 712
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 716
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 719
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 722
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 722) == ($context["config_checkout_id"] ?? null))) {
                // line 723
                echo "                      
                      <option value=\"";
                // line 724
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 724);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 724);
                echo "</option>
                      
                      ";
            } else {
                // line 727
                echo "                      
                      <option value=\"";
                // line 728
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 728);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 728);
                echo "</option>
                      
                      ";
            }
            // line 731
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 737
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 742
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 742) == ($context["config_order_status_id"] ?? null))) {
                // line 743
                echo "                      
                      <option value=\"";
                // line 744
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 744);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 744);
                echo "</option>
                      
                      ";
            } else {
                // line 747
                echo "                      
                      <option value=\"";
                // line 748
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 748);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 748);
                echo "</option>
                      
                      ";
            }
            // line 751
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 752
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 757
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 760
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 761
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 761), ($context["config_processing_status"] ?? null))) {
                // line 762
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 762);
                echo "\" checked=\"checked\" />
                          ";
                // line 763
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 763);
                echo "
                          ";
            } else {
                // line 765
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 765);
                echo "\" />
                          ";
                // line 766
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 766);
                echo "
                          ";
            }
            // line 767
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 769
        echo " </div>
                    ";
        // line 770
        if (($context["error_processing_status"] ?? null)) {
            // line 771
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 772
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 775
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 778
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 779
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 779), ($context["config_complete_status"] ?? null))) {
                // line 780
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 780);
                echo "\" checked=\"checked\" />
                          ";
                // line 781
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 781);
                echo "
                          ";
            } else {
                // line 783
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 783);
                echo "\" />
                          ";
                // line 784
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 784);
                echo "
                          ";
            }
            // line 785
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 787
        echo " </div>
                    ";
        // line 788
        if (($context["error_complete_status"] ?? null)) {
            // line 789
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 790
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 793
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 798
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 798) == ($context["config_fraud_status_id"] ?? null))) {
                // line 799
                echo "                      
                      <option value=\"";
                // line 800
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 800);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 800);
                echo "</option>
                      
                      ";
            } else {
                // line 803
                echo "                      
                      <option value=\"";
                // line 804
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 804);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 804);
                echo "</option>
                      
                      ";
            }
            // line 807
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 808
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 813
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 816
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 819
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 819) == ($context["config_api_id"] ?? null))) {
                // line 820
                echo "                      
                      <option value=\"";
                // line 821
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 821);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 821);
                echo "</option>
                      
                      ";
            } else {
                // line 824
                echo "                      
                      <option value=\"";
                // line 825
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 825);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 825);
                echo "</option>
                      
                      ";
            }
            // line 828
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 829
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 835
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 837
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 839
        if (($context["config_stock_display"] ?? null)) {
            // line 840
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 841
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 843
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 844
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 845
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 846
        if ( !($context["config_stock_display"] ?? null)) {
            // line 847
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 848
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 850
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 851
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 852
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 856
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 858
        if (($context["config_stock_warning"] ?? null)) {
            // line 859
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 860
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 862
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 863
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 864
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 865
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 866
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 867
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 869
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 870
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 871
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 875
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 877
        if (($context["config_stock_checkout"] ?? null)) {
            // line 878
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 879
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 881
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 882
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 883
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 884
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 885
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 886
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 888
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 889
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 890
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 895
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 897
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 902
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 902) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 903
                echo "                      
                      <option value=\"";
                // line 904
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 904);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 904);
                echo "</option>
                      
                      ";
            } else {
                // line 907
                echo "                      
                      <option value=\"";
                // line 908
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 908);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 908);
                echo "</option>
                      
                      ";
            }
            // line 911
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 917
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 919
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 920
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 921
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 923
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 924
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 925
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 926
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 927
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 928
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 930
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 931
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 932
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 936
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 938
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 939
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 940
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 942
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 943
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 944
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 945
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 946
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 947
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 949
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 950
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 951
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 955
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 957
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 961
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 964
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 967
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 967) == ($context["config_affiliate_id"] ?? null))) {
                // line 968
                echo "                      
                      <option value=\"";
                // line 969
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 969);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 969);
                echo "</option>
                      
                      ";
            } else {
                // line 972
                echo "                      
                      <option value=\"";
                // line 973
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 973);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 973);
                echo "</option>
                      
                      ";
            }
            // line 976
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 977
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 983
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 985
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 988
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 990
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 991
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 991) == ($context["config_return_id"] ?? null))) {
                // line 992
                echo "                      
                      <option value=\"";
                // line 993
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 993);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 993);
                echo "</option>
                      
                      ";
            } else {
                // line 996
                echo "                      
                      <option value=\"";
                // line 997
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 997);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 997);
                echo "</option>
                      
                      ";
            }
            // line 1000
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1001
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1006
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1010
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1011
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1011) == ($context["config_return_status_id"] ?? null))) {
                // line 1012
                echo "                      
                      <option value=\"";
                // line 1013
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1013);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1013);
                echo "</option>
                      
                      ";
            } else {
                // line 1016
                echo "                      
                      <option value=\"";
                // line 1017
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1017);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1017);
                echo "</option>
                      
                      ";
            }
            // line 1020
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1027
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1029
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1032
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1034
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1035
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1035) == ($context["config_captcha"] ?? null))) {
                // line 1036
                echo "                      
                      <option value=\"";
                // line 1037
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1037);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1037);
                echo "</option>
                      
                      ";
            } else {
                // line 1040
                echo "                      
                      <option value=\"";
                // line 1041
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1041);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1041);
                echo "</option>
                      
                      ";
            }
            // line 1044
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1050
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1052
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1053
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1054
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1054), ($context["config_captcha_page"] ?? null))) {
                // line 1055
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1055);
                echo "\" checked=\"checked\" />
                          ";
                // line 1056
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1056);
                echo "
                          ";
            } else {
                // line 1058
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1058);
                echo "\" />
                          ";
                // line 1059
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1059);
                echo "
                          ";
            }
            // line 1060
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1062
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1069
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1070
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1071
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1075
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1076
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1077
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1083
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1085
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1089
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1090
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1091
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1094
            echo "                      
                      <option value=\"mail\">";
            // line 1095
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1098
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1099
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1100
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1103
            echo "                      
                      <option value=\"smtp\">";
            // line 1104
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1107
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1112
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1114
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1118
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1120
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1124
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1126
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1130
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1132
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1136
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1138
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1142
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1144
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1149
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1151
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1154
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1155
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1155), ($context["config_mail_alert"] ?? null))) {
                // line 1156
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1156);
                echo "\" checked=\"checked\" />
                          ";
                // line 1157
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1157);
                echo "
                          ";
            } else {
                // line 1159
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1159);
                echo "\" />
                          ";
                // line 1160
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1160);
                echo "
                          ";
            }
            // line 1161
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1163
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1167
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1169
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1176
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1178
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1180
        if (($context["config_maintenance"] ?? null)) {
            // line 1181
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1182
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1184
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1185
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1186
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1187
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1188
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1189
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1191
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1192
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1193
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1197
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1199
        if (($context["config_seo_url"] ?? null)) {
            // line 1200
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1201
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1203
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1204
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1205
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1206
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1207
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1208
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1210
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1211
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1212
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1216
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1218
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1222
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1224
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1229
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1231
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1233
        if (($context["config_secure"] ?? null)) {
            // line 1234
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1235
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1237
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1238
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1239
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1240
        if ( !($context["config_secure"] ?? null)) {
            // line 1241
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1242
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1244
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1245
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1246
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1250
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1252
        if (($context["config_password"] ?? null)) {
            // line 1253
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1254
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1256
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1257
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1258
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1259
        if ( !($context["config_password"] ?? null)) {
            // line 1260
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1261
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1263
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1264
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1265
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1269
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1271
        if (($context["config_shared"] ?? null)) {
            // line 1272
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1273
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1275
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1276
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1277
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1278
        if ( !($context["config_shared"] ?? null)) {
            // line 1279
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1280
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1282
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1283
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1284
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1288
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1290
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1291
        if (($context["error_encryption"] ?? null)) {
            // line 1292
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1293
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1297
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1299
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1301
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1305
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1307
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1311
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1313
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1318
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1320
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1322
        if (($context["config_error_display"] ?? null)) {
            // line 1323
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1324
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1326
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1327
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1328
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1329
        if ( !($context["config_error_display"] ?? null)) {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1331
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1333
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1334
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1335
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1339
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1341
        if (($context["config_error_log"] ?? null)) {
            // line 1342
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1343
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1345
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1346
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1347
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1348
        if ( !($context["config_error_log"] ?? null)) {
            // line 1349
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1350
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1352
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1353
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1354
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1358
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1360
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1361
        if (($context["error_log"] ?? null)) {
            // line 1362
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1363
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1375
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1397
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1406
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1412
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1419
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1434
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3728 => 1434,  3710 => 1419,  3700 => 1412,  3691 => 1406,  3679 => 1397,  3654 => 1375,  3640 => 1363,  3634 => 1362,  3632 => 1361,  3626 => 1360,  3621 => 1358,  3615 => 1354,  3610 => 1353,  3607 => 1352,  3602 => 1350,  3599 => 1349,  3597 => 1348,  3594 => 1347,  3589 => 1346,  3586 => 1345,  3581 => 1343,  3578 => 1342,  3576 => 1341,  3571 => 1339,  3565 => 1335,  3560 => 1334,  3557 => 1333,  3552 => 1331,  3549 => 1330,  3547 => 1329,  3544 => 1328,  3539 => 1327,  3536 => 1326,  3531 => 1324,  3528 => 1323,  3526 => 1322,  3521 => 1320,  3516 => 1318,  3506 => 1313,  3499 => 1311,  3490 => 1307,  3483 => 1305,  3474 => 1301,  3467 => 1299,  3462 => 1297,  3456 => 1293,  3450 => 1292,  3448 => 1291,  3442 => 1290,  3435 => 1288,  3429 => 1284,  3424 => 1283,  3421 => 1282,  3416 => 1280,  3413 => 1279,  3411 => 1278,  3408 => 1277,  3403 => 1276,  3400 => 1275,  3395 => 1273,  3392 => 1272,  3390 => 1271,  3383 => 1269,  3377 => 1265,  3372 => 1264,  3369 => 1263,  3364 => 1261,  3361 => 1260,  3359 => 1259,  3356 => 1258,  3351 => 1257,  3348 => 1256,  3343 => 1254,  3340 => 1253,  3338 => 1252,  3331 => 1250,  3325 => 1246,  3320 => 1245,  3317 => 1244,  3312 => 1242,  3309 => 1241,  3307 => 1240,  3304 => 1239,  3299 => 1238,  3296 => 1237,  3291 => 1235,  3288 => 1234,  3286 => 1233,  3279 => 1231,  3274 => 1229,  3264 => 1224,  3257 => 1222,  3248 => 1218,  3241 => 1216,  3235 => 1212,  3230 => 1211,  3227 => 1210,  3222 => 1208,  3219 => 1207,  3217 => 1206,  3214 => 1205,  3209 => 1204,  3206 => 1203,  3201 => 1201,  3198 => 1200,  3196 => 1199,  3189 => 1197,  3183 => 1193,  3178 => 1192,  3175 => 1191,  3170 => 1189,  3167 => 1188,  3165 => 1187,  3162 => 1186,  3157 => 1185,  3154 => 1184,  3149 => 1182,  3146 => 1181,  3144 => 1180,  3137 => 1178,  3132 => 1176,  3120 => 1169,  3113 => 1167,  3107 => 1163,  3099 => 1161,  3094 => 1160,  3089 => 1159,  3084 => 1157,  3079 => 1156,  3077 => 1155,  3074 => 1154,  3070 => 1153,  3063 => 1151,  3058 => 1149,  3048 => 1144,  3043 => 1142,  3034 => 1138,  3029 => 1136,  3020 => 1132,  3013 => 1130,  3004 => 1126,  2999 => 1124,  2990 => 1120,  2983 => 1118,  2974 => 1114,  2967 => 1112,  2960 => 1107,  2954 => 1104,  2951 => 1103,  2945 => 1100,  2942 => 1099,  2939 => 1098,  2933 => 1095,  2930 => 1094,  2924 => 1091,  2921 => 1090,  2919 => 1089,  2910 => 1085,  2905 => 1083,  2896 => 1077,  2890 => 1076,  2884 => 1075,  2877 => 1071,  2871 => 1070,  2867 => 1069,  2858 => 1062,  2850 => 1060,  2845 => 1059,  2840 => 1058,  2835 => 1056,  2830 => 1055,  2828 => 1054,  2825 => 1053,  2821 => 1052,  2816 => 1050,  2809 => 1045,  2803 => 1044,  2795 => 1041,  2792 => 1040,  2784 => 1037,  2781 => 1036,  2778 => 1035,  2774 => 1034,  2769 => 1032,  2761 => 1029,  2756 => 1027,  2748 => 1021,  2742 => 1020,  2734 => 1017,  2731 => 1016,  2723 => 1013,  2720 => 1012,  2717 => 1011,  2713 => 1010,  2704 => 1006,  2697 => 1001,  2691 => 1000,  2683 => 997,  2680 => 996,  2672 => 993,  2669 => 992,  2666 => 991,  2662 => 990,  2657 => 988,  2649 => 985,  2644 => 983,  2636 => 977,  2630 => 976,  2622 => 973,  2619 => 972,  2611 => 969,  2608 => 968,  2605 => 967,  2601 => 966,  2596 => 964,  2588 => 961,  2579 => 957,  2572 => 955,  2566 => 951,  2561 => 950,  2558 => 949,  2553 => 947,  2550 => 946,  2548 => 945,  2545 => 944,  2540 => 943,  2537 => 942,  2532 => 940,  2529 => 939,  2527 => 938,  2520 => 936,  2514 => 932,  2509 => 931,  2506 => 930,  2501 => 928,  2498 => 927,  2496 => 926,  2493 => 925,  2488 => 924,  2485 => 923,  2480 => 921,  2477 => 920,  2475 => 919,  2468 => 917,  2461 => 912,  2455 => 911,  2447 => 908,  2444 => 907,  2436 => 904,  2433 => 903,  2430 => 902,  2426 => 901,  2419 => 897,  2414 => 895,  2407 => 890,  2402 => 889,  2399 => 888,  2394 => 886,  2391 => 885,  2389 => 884,  2386 => 883,  2381 => 882,  2378 => 881,  2373 => 879,  2370 => 878,  2368 => 877,  2361 => 875,  2355 => 871,  2350 => 870,  2347 => 869,  2342 => 867,  2339 => 866,  2337 => 865,  2334 => 864,  2329 => 863,  2326 => 862,  2321 => 860,  2318 => 859,  2316 => 858,  2309 => 856,  2303 => 852,  2298 => 851,  2295 => 850,  2290 => 848,  2287 => 847,  2285 => 846,  2282 => 845,  2277 => 844,  2274 => 843,  2269 => 841,  2266 => 840,  2264 => 839,  2257 => 837,  2252 => 835,  2244 => 829,  2238 => 828,  2230 => 825,  2227 => 824,  2219 => 821,  2216 => 820,  2213 => 819,  2209 => 818,  2204 => 816,  2196 => 813,  2189 => 808,  2183 => 807,  2175 => 804,  2172 => 803,  2164 => 800,  2161 => 799,  2158 => 798,  2154 => 797,  2145 => 793,  2140 => 790,  2134 => 789,  2132 => 788,  2129 => 787,  2121 => 785,  2116 => 784,  2111 => 783,  2106 => 781,  2101 => 780,  2099 => 779,  2096 => 778,  2092 => 777,  2085 => 775,  2080 => 772,  2074 => 771,  2072 => 770,  2069 => 769,  2061 => 767,  2056 => 766,  2051 => 765,  2046 => 763,  2041 => 762,  2039 => 761,  2036 => 760,  2032 => 759,  2025 => 757,  2018 => 752,  2012 => 751,  2004 => 748,  2001 => 747,  1993 => 744,  1990 => 743,  1987 => 742,  1983 => 741,  1974 => 737,  1967 => 732,  1961 => 731,  1953 => 728,  1950 => 727,  1942 => 724,  1939 => 723,  1936 => 722,  1932 => 721,  1927 => 719,  1919 => 716,  1913 => 712,  1908 => 711,  1905 => 710,  1900 => 708,  1897 => 707,  1895 => 706,  1892 => 705,  1887 => 704,  1884 => 703,  1879 => 701,  1876 => 700,  1874 => 699,  1867 => 697,  1861 => 693,  1856 => 692,  1853 => 691,  1848 => 689,  1845 => 688,  1843 => 687,  1840 => 686,  1835 => 685,  1832 => 684,  1827 => 682,  1824 => 681,  1822 => 680,  1815 => 678,  1806 => 674,  1799 => 672,  1794 => 670,  1786 => 664,  1780 => 663,  1772 => 660,  1769 => 659,  1761 => 656,  1758 => 655,  1755 => 654,  1751 => 653,  1746 => 651,  1738 => 648,  1733 => 645,  1727 => 644,  1725 => 643,  1719 => 642,  1712 => 640,  1706 => 636,  1701 => 635,  1698 => 634,  1693 => 632,  1690 => 631,  1688 => 630,  1685 => 629,  1680 => 628,  1677 => 627,  1672 => 625,  1669 => 624,  1667 => 623,  1660 => 621,  1655 => 618,  1649 => 617,  1646 => 616,  1638 => 613,  1633 => 612,  1628 => 611,  1623 => 609,  1618 => 608,  1616 => 607,  1613 => 606,  1609 => 605,  1603 => 604,  1596 => 599,  1590 => 598,  1582 => 595,  1579 => 594,  1571 => 591,  1568 => 590,  1565 => 589,  1561 => 588,  1552 => 584,  1546 => 580,  1541 => 579,  1538 => 578,  1533 => 576,  1530 => 575,  1528 => 574,  1525 => 573,  1520 => 572,  1517 => 571,  1512 => 569,  1509 => 568,  1507 => 567,  1502 => 565,  1496 => 561,  1491 => 560,  1488 => 559,  1483 => 557,  1480 => 556,  1478 => 555,  1475 => 554,  1470 => 553,  1467 => 552,  1462 => 550,  1459 => 549,  1457 => 548,  1450 => 546,  1444 => 542,  1439 => 541,  1436 => 540,  1431 => 538,  1428 => 537,  1426 => 536,  1423 => 535,  1418 => 534,  1415 => 533,  1410 => 531,  1407 => 530,  1405 => 529,  1398 => 527,  1393 => 525,  1385 => 519,  1379 => 516,  1376 => 515,  1370 => 512,  1367 => 511,  1364 => 510,  1358 => 507,  1355 => 506,  1349 => 503,  1346 => 502,  1344 => 501,  1339 => 499,  1331 => 496,  1324 => 491,  1318 => 488,  1315 => 487,  1309 => 484,  1306 => 483,  1303 => 482,  1297 => 479,  1294 => 478,  1288 => 475,  1285 => 474,  1283 => 473,  1278 => 471,  1270 => 468,  1264 => 464,  1259 => 463,  1256 => 462,  1251 => 460,  1248 => 459,  1246 => 458,  1243 => 457,  1238 => 456,  1235 => 455,  1230 => 453,  1227 => 452,  1225 => 451,  1220 => 449,  1215 => 447,  1209 => 443,  1203 => 442,  1201 => 441,  1195 => 440,  1188 => 438,  1183 => 435,  1177 => 434,  1175 => 433,  1169 => 432,  1162 => 430,  1157 => 428,  1150 => 423,  1145 => 422,  1142 => 421,  1137 => 419,  1134 => 418,  1132 => 417,  1129 => 416,  1124 => 415,  1121 => 414,  1116 => 412,  1113 => 411,  1111 => 410,  1104 => 408,  1098 => 404,  1093 => 403,  1090 => 402,  1085 => 400,  1082 => 399,  1080 => 398,  1077 => 397,  1072 => 396,  1069 => 395,  1064 => 393,  1061 => 392,  1059 => 391,  1052 => 389,  1047 => 387,  1041 => 383,  1035 => 382,  1033 => 381,  1027 => 380,  1020 => 378,  1014 => 374,  1009 => 373,  1006 => 372,  1001 => 370,  998 => 369,  996 => 368,  993 => 367,  988 => 366,  985 => 365,  980 => 363,  977 => 362,  975 => 361,  968 => 359,  963 => 357,  954 => 350,  948 => 349,  940 => 346,  937 => 345,  929 => 342,  926 => 341,  923 => 340,  919 => 339,  912 => 335,  905 => 330,  899 => 329,  891 => 326,  888 => 325,  880 => 322,  877 => 321,  874 => 320,  870 => 319,  863 => 315,  857 => 311,  852 => 310,  849 => 309,  844 => 307,  841 => 306,  839 => 305,  836 => 304,  831 => 303,  828 => 302,  823 => 300,  820 => 299,  818 => 298,  811 => 296,  804 => 291,  798 => 290,  790 => 287,  787 => 286,  779 => 283,  776 => 282,  773 => 281,  769 => 280,  760 => 276,  753 => 271,  747 => 270,  739 => 267,  736 => 266,  728 => 263,  725 => 262,  722 => 261,  718 => 260,  711 => 256,  704 => 251,  698 => 250,  690 => 247,  687 => 246,  679 => 243,  676 => 242,  673 => 241,  669 => 240,  662 => 236,  656 => 232,  650 => 231,  642 => 229,  634 => 227,  631 => 226,  627 => 225,  621 => 222,  611 => 215,  604 => 210,  598 => 209,  590 => 206,  587 => 205,  579 => 202,  576 => 201,  573 => 200,  569 => 199,  562 => 195,  557 => 192,  552 => 190,  544 => 188,  539 => 187,  534 => 186,  529 => 184,  524 => 183,  522 => 182,  519 => 181,  515 => 180,  509 => 179,  506 => 178,  504 => 177,  496 => 174,  489 => 172,  480 => 168,  473 => 166,  466 => 162,  460 => 161,  456 => 160,  447 => 156,  442 => 154,  437 => 151,  431 => 150,  429 => 149,  423 => 148,  418 => 146,  413 => 143,  407 => 142,  405 => 141,  399 => 140,  394 => 138,  385 => 134,  378 => 132,  373 => 129,  367 => 128,  365 => 127,  359 => 126,  354 => 124,  349 => 121,  343 => 120,  341 => 119,  335 => 118,  330 => 116,  325 => 113,  319 => 112,  317 => 111,  311 => 110,  306 => 108,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
