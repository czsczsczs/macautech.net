!function(o,h,u){var f,v,n,i,e,t,a,r,d="jquery-lazyload-any",l="appear",g=d+"-"+l,p=":"+g,y=d+"-scroller",b=d+"-display",m=d+"-watch",w=o("<div/>"),z=!1,s=o();function I(){var t,n,i,e,a,r=o(this);r.is(":visible")&&(n=(t=r)[0].getBoundingClientRect(),t=-t.data(d).threshold,e=f-(i=t),a=v-t,(n.top>=i&&n.top<=e||n.bottom>=i&&n.bottom<=e)&&(n.left>=t&&n.left<=a||n.right>=t&&n.right<=a))&&r.trigger(l)}function x(){f=h.innerHeight||u.documentElement.clientHeight,v=h.innerWidth||u.documentElement.clientWidth,c()}function c(){s=s.filter(p),(1==this.nodeType?o(this).find(p):s).each(I)}function D(){var t=o(this),n=t.data(d),i=t.data("lazyload"),e=(i||(e=t.children().filter('script[type="text/lazyload"]').get(0),i=o(e).html()),i||(i=(e=t.contents().filter(function(){return 8===this.nodeType}).get(0))&&o.trim(e.data)),w.html(i).contents());t.replaceWith(e),o.isFunction(n.load)&&n.load.call(e,e)}function S(){var t=o(this);(function(t){if(t.data(y))return!1;var n=t.css("overflow");return("scroll"==n||"auto"==n)&&(t.data(y,1),t.bind("scroll",c),!0)})(t)|function(t){if(!t.data(b)&&"none"==t.css("display"))return t.data(b,1),t._bindShow(c),!0}(t)&&(t.data(m)||(t.data(m,1),t.bind(l,_)))}function _(){var t=o(this);0===t.find(p).length&&(t.removeData(y).removeData(b).removeData(m),t.unbind("scroll",c).unbind(l,_)._unbindShow(c))}function W(){var t=o(this),n="none"!=t.css("display");t.data(e)!=n&&(t.data(e,n),n&&t.trigger(i))}function j(){(r=r.filter(t)).each(W),0===r.length&&(n=clearInterval(n))}o.expr[":"][g]=function(t){return void 0!==o(t).data(g)},o.fn.lazyload=function(t){var n={threshold:0,trigger:l},t=(o.extend(n,t),n.trigger.split(" "));return this.data(g,-1!=o.inArray(l,t)).data(d,n),this.bind(n.trigger,D),this.each(I),this.parents().each(S),this.each(function(){s=s.add(this)}),z||(z=!0,x(),o(u).ready(function(){o(h).bind("resize",x).bind("scroll",c)})),this},o.lazyload={check:c,refresh:function(t){(void 0===t?s:o(t)).each(function(){var t=o(this);t.is(p)&&t.parents().each(S)})}},t=":"+(e=d+"-"+(i="show")),a=50,r=o(),o.expr[":"][e]=function(t){return void 0!==o(t).data(e)},o.fn._bindShow=function(t){this.bind(i,t),this.data(e,"none"!=this.css("display")),r=r.add(this),a&&!n&&(n=setInterval(j,a))},o.fn._unbindShow=function(t){this.unbind(i,t),this.removeData(e)},o.lazyload.setInterval=function(t){t==a||!o.isNumeric(t)||t<0||(a=t,n=clearInterval(n),0<a&&(n=setInterval(j,a)))}}(jQuery,window,document);