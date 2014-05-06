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
        return array (  79 => 29,  62 => 24,  46 => 14,  42 => 12,  26 => 3,  105 => 25,  99 => 22,  90 => 20,  84 => 17,  81 => 16,  64 => 9,  56 => 8,  32 => 6,  24 => 2,  19 => 1,  227 => 58,  222 => 57,  219 => 56,  212 => 52,  210 => 51,  207 => 50,  201 => 43,  195 => 39,  188 => 44,  186 => 43,  182 => 41,  179 => 40,  177 => 39,  171 => 36,  168 => 35,  161 => 31,  156 => 29,  149 => 25,  144 => 23,  138 => 18,  133 => 17,  128 => 15,  122 => 12,  118 => 11,  114 => 10,  110 => 9,  106 => 8,  102 => 7,  98 => 6,  93 => 21,  88 => 60,  86 => 56,  83 => 30,  80 => 54,  78 => 15,  75 => 28,  72 => 48,  69 => 35,  63 => 29,  50 => 15,  40 => 6,  38 => 14,  36 => 5,  30 => 5,  95 => 37,  91 => 35,  85 => 32,  70 => 26,  66 => 25,  60 => 27,  57 => 23,  48 => 7,  45 => 17,  41 => 7,  35 => 5,  29 => 3,);
    }
}
