window.Modernizr=function(r,d,i){function n(e){h.cssText=e}function e(e,t){return n(y.join(e+";")+(t||""))}function a(e,t){return typeof e===t}function t(e,t){return!!~(""+e).indexOf(t)}function o(e,t,n){for(var r in e){var o=t[e[r]];if(o!==i)return!1===n?e[r]:a(o,"function")?o.bind(n||t):o}return!1}var c="2.6.2",l={},s=!0,f=d.documentElement,p="modernizr",u=d.createElement(p),h=u.style,m,v={}.toString,y=" -webkit- -moz- -o- -ms- ".split(" "),g="http://www.w3.org/2000/svg",E={},b={},S={},C=[],w=C.slice,j,N=function(e,t,n,r){var o,i,a,c,l=d.createElement("div"),s=d.body,u=s||d.createElement("body");if(parseInt(n,10))for(;n--;)(a=d.createElement("div")).id=r?r[n]:p+(n+1),l.appendChild(a);return o=["&#173;",'<style id="s',p,'">',e,"</style>"].join(""),l.id=p,(s?l:u).innerHTML+=o,u.appendChild(l),s||(u.style.background="",u.style.overflow="hidden",c=f.style.overflow,f.style.overflow="hidden",f.appendChild(u)),i=t(l,e),s?l.parentNode.removeChild(l):(u.parentNode.removeChild(u),f.style.overflow=c),!!i},M=function(e){var t=r.matchMedia||r.msMatchMedia,n;return t?t(e).matches:(N("@media "+e+" { #"+p+" { position: absolute; } }",function(e){n="absolute"==(r.getComputedStyle?getComputedStyle(e,null):e.currentStyle).position}),n)},T={}.hasOwnProperty,x;for(var F in x=a(T,"undefined")||a(T.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(e,t){return T.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(r){var o=this;if("function"!=typeof o)throw new TypeError;var i=w.call(arguments,1),a=function(){if(this instanceof a){var e=function(){};e.prototype=o.prototype;var t=new e,n=o.apply(t,i.concat(w.call(arguments)));return Object(n)===n?n:t}return o.apply(r,i.concat(w.call(arguments)))};return a}),E.touch=function(){var t;return"ontouchstart"in r||r.DocumentTouch&&d instanceof DocumentTouch?t=!0:N(["@media (",y.join("touch-enabled),("),p,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){t=9===e.offsetTop}),t},E.svg=function(){return!!d.createElementNS&&!!d.createElementNS(g,"svg").createSVGRect},E.inlinesvg=function(){var e=d.createElement("div");return e.innerHTML="<svg/>",(e.firstChild&&e.firstChild.namespaceURI)==g},E.svgclippaths=function(){return!!d.createElementNS&&/SVGClipPath/.test(v.call(d.createElementNS(g,"clipPath")))},E)x(E,F)&&(j=F.toLowerCase(),l[j]=E[F](),C.push((l[j]?"":"no-")+j));return l.addTest=function(e,t){if("object"==typeof e)for(var n in e)x(e,n)&&l.addTest(n,e[n]);else{if(e=e.toLowerCase(),l[e]!==i)return l;t="function"==typeof t?t():t,f.className+=" "+(t?"":"no-")+e,l[e]=t}return l},n(""),u=m=null,function(e,a){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function c(){var e=y.elements;return"string"==typeof e?e.split(" "):e}function l(e){var t=m[e[p]];return t||(t={},h++,e[p]=h,m[h]=t),t}function r(e,t,n){return t||(t=a),v?t.createElement(e):(n||(n=l(t)),(r=n.cache[e]?n.cache[e].cloneNode():d.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e)).canHaveChildren&&!u.test(e)?n.frag.appendChild(r):r);var r}function t(e,t){if(e||(e=a),v)return e.createDocumentFragment();for(var n=(t=t||l(e)).frag.cloneNode(),r=0,o=c(),i=o.length;r<i;r++)n.createElement(o[r]);return n}function o(t,n){n.cache||(n.cache={},n.createElem=t.createElement,n.createFrag=t.createDocumentFragment,n.frag=n.createFrag()),t.createElement=function(e){return y.shivMethods?r(e,t,n):n.createElem(e)},t.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+c().join().replace(/\w+/g,function(e){return n.createElem(e),n.frag.createElement(e),'c("'+e+'")'})+");return n}")(y,n.frag)}function i(e){e||(e=a);var t=l(e);return y.shivCSS&&!f&&!t.hasCSS&&(t.hasCSS=!!n(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),v||o(e,t),e}var s=e.html5||{},u=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,d=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,p="_html5shiv",h=0,m={},v;!function(){try{var e=a.createElement("a");e.innerHTML="<xyz></xyz>",f="hidden"in e,v=1==e.childNodes.length||function(){a.createElement("a");var e=a.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){v=f=!0}}();var y={elements:s.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==s.shivCSS,supportsUnknownElements:v,shivMethods:!1!==s.shivMethods,type:"default",shivDocument:i,createElement:r,createDocumentFragment:t};e.html5=y,i(a)}(this,d),l._version=c,l._prefixes=y,l.mq=M,l.testStyles=N,f.className=f.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+" js "+C.join(" "),l}(this,this.document),function(e,f,l){function d(e){return"[object Function]"==r.call(e)}function p(e){return"string"==typeof e}function h(){}function m(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function v(){var e=E.shift();b=1,e?e.t?y(function(){("c"==e.t?T.injectCss:T.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),v()):b=0}function i(n,r,e,t,o,i,a){function c(e){if(!s&&m(l.readyState)&&(d.r=s=1,!b&&v(),l.onload=l.onreadystatechange=null,e))for(var t in"img"!=n&&y(function(){C.removeChild(l)},50),N[r])N[r].hasOwnProperty(t)&&N[r][t].onload()}var a=a||T.errorTimeout,l=f.createElement(n),s=0,u=0,d={t:e,s:r,e:o,a:i,x:a};1===N[r]&&(u=1,N[r]=[]),"object"==n?l.data=r:(l.src=r,l.type=n),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){c.call(this,u)},E.splice(t,0,d),"img"!=n&&(u||2===N[r]?(C.insertBefore(l,S?null:g),y(c,a)):N[r].push(l))}function t(e,t,n,r,o){return b=0,t=t||"j",p(e)?i("c"==t?c:a,e,t,this.i++,n,r,o):(E.splice(this.i++,0,e),1==E.length&&v()),this}function s(){var e=T;return e.loader={load:t,i:0},e}var n=f.documentElement,y=e.setTimeout,g=f.getElementsByTagName("script")[0],r={}.toString,E=[],b=0,o="MozAppearance"in n.style,S=o&&!!f.createRange().compareNode,C=S?n:g.parentNode,n=e.opera&&"[object Opera]"==r.call(e.opera),n=!!f.attachEvent&&!n,a=o?"object":n?"script":"img",c=n?"script":a,w=Array.isArray||function(e){return"[object Array]"==r.call(e)},j=[],N={},M={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},u,T;(T=function(e){function c(e){var e=e.split("!"),t=j.length,n=e.pop(),r=e.length,n={url:n,origUrl:n,prefixes:e},o,i,a;for(i=0;i<r;i++)a=e[i].split("="),(o=M[a.shift()])&&(n=o(n,a));for(i=0;i<t;i++)n=j[i](n);return n}function u(e,t,n,r,o){var i=c(e),a=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(t&&(t=d(t)?t:t[e]||t[r]||t[e.split("/").pop().split("?")[0]]),i.instead?i.instead(e,t,n,r,o):(N[i.url]?i.noexec=!0:N[i.url]=1,n.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":l,i.noexec,i.attrs,i.timeout),(d(t)||d(a))&&n.load(function(){s(),t&&t(i.origUrl,o,r),a&&a(i.origUrl,o,r),N[i.url]=2})))}function t(e,t){function n(n,e){if(n){if(p(n))e||(i=function(){var e=[].slice.call(arguments);a.apply(this,e),c()}),u(n,i,t,0,r);else if(Object(n)===n)for(s in l=function(){var e=0,t;for(t in n)n.hasOwnProperty(t)&&e++;return e}(),n)n.hasOwnProperty(s)&&(!e&&!--l&&(d(i)?i=function(){var e=[].slice.call(arguments);a.apply(this,e),c()}:i[s]=function(t){return function(){var e=[].slice.call(arguments);t&&t.apply(this,e),c()}}(a[s])),u(n[s],i,t,s,r))}else!e&&c()}var r=!!e.test,o=e.load||e.both,i=e.callback||h,a=i,c=e.complete||h,l,s;n(r?e.yep:e.nope,!!o),o&&n(o)}var n,r,o=this.yepnope.loader;if(p(e))u(e,0,o,0);else if(w(e))for(n=0;n<e.length;n++)p(r=e[n])?u(r,0,o,0):w(r)?T(r):Object(r)===r&&t(r,o);else Object(e)===e&&t(e,o)}).addPrefix=function(e,t){M[e]=t},T.addFilter=function(e){j.push(e)},T.errorTimeout=1e4,null==f.readyState&&f.addEventListener&&(f.readyState="loading",f.addEventListener("DOMContentLoaded",u=function(){f.removeEventListener("DOMContentLoaded",u,0),f.readyState="complete"},0)),e.yepnope=s(),e.yepnope.executeStack=v,e.yepnope.injectJs=function(e,t,n,r,o,i){var a=f.createElement("script"),c,l,r=r||T.errorTimeout;for(l in a.src=e,n)a.setAttribute(l,n[l]);t=i?v:t||h,a.onreadystatechange=a.onload=function(){!c&&m(a.readyState)&&(c=1,t(),a.onload=a.onreadystatechange=null)},y(function(){c||t(c=1)},r),o?a.onload():g.parentNode.insertBefore(a,g)},e.yepnope.injectCss=function(e,t,n,r,o,i){var r=f.createElement("link"),a,t=i?v:t||h;for(a in r.href=e,r.rel="stylesheet",r.type="text/css",n)r.setAttribute(a,n[a]);o||(g.parentNode.insertBefore(r,g),y(t,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},Modernizr.addTest("ie8compat",function(){return!window.addEventListener&&document.documentMode&&7===document.documentMode});