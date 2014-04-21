<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_32643dfb32b4015b56d99c067fdcf5b160e9f32ec3e1bdc529a1f72a4179dd72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  62 => 24,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  346 => 127,  341 => 126,  338 => 125,  290 => 78,  287 => 77,  281 => 69,  275 => 65,  267 => 70,  265 => 69,  261 => 67,  258 => 66,  256 => 65,  250 => 62,  247 => 61,  239 => 54,  233 => 51,  227 => 50,  224 => 49,  218 => 46,  215 => 45,  212 => 44,  209 => 43,  198 => 38,  190 => 37,  182 => 36,  174 => 35,  166 => 34,  158 => 33,  150 => 29,  140 => 22,  134 => 17,  129 => 16,  124 => 14,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 5,  88 => 129,  86 => 125,  83 => 30,  80 => 123,  78 => 77,  75 => 28,  72 => 75,  69 => 61,  63 => 29,  50 => 15,  40 => 14,  38 => 13,  36 => 5,  30 => 5,  95 => 37,  91 => 35,  85 => 32,  70 => 26,  66 => 25,  60 => 27,  57 => 22,  48 => 9,  45 => 16,  41 => 7,  35 => 5,  29 => 3,);
    }
}
