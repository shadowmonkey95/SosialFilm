!function(t,e){"use strict";function r(t,e){for(var r=0,n=t.length;n>r;r++)a=t[r].querySelector("."+v),a.addEventListener(e,i,!1)}function n(t){for(var e=0,r=t.length;r>e;e++)t[e].setAttribute(s,l),t[e].setAttribute(g,A)}function o(t){return e.querySelectorAll("["+s+'="'+t+'"]')}function i(t){for(f=t.target;f&&!f.getAttribute(s);)if(f=f.parentNode,!f)return;d=f.getAttribute(g)===m?A:m,f.setAttribute(g,d)}var u,c,a,f,d,l="click",b="hover",s="data-mfb-toggle",g="data-mfb-state",m="open",A="closed",v="mfb-component__button--main";t.Modernizr&&Modernizr.touch&&(c=o(b),n(c)),u=o(l),r(u,"click")}(window,document);