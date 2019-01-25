var tooltipOptions = {
    showDelay: 20,
    hideDelay: 300,
    effect: "fade",
    duration: 300,
    relativeTo: "element",
    position: 2,
    smartPosition: true,
    offsetX: 0,
    offsetY: 0,
    maxWidth: 50,
    calloutSize: 8,
    calloutPosition: 0.5,
    cssClass: "",
    sticky: false,
    overlay: false,
    license: "64628"
};

/* JavaScript Tooltip v2016.12.12. Copyright www.menucool.com */
var tooltip = function(v) {
    "use strict";
    var f = "length", Cb = "addEventListener", kb, mc, fb = function(a, c, b) {
        if (a[Cb])
            a[Cb](c, b, false);
        else
            a.attachEvent && a.attachEvent("on" + c, b)
    }, a = {}, Y = function(a) {
        if (a && a.stopPropagation)
            a.stopPropagation();
        else if (window.event)
            window.event.cancelBubble = true
    }, jc = function(b) {
        var a = b ? b : window.event;
        if (a.preventDefault)
            a.preventDefault();
        else if (a)
            a.returnValue = false
    }, Xb = function(d) {
        var a = d.childNodes
          , c = [];
        if (a)
            for (var b = 0, e = a[f]; b < e; b++)
                a[b].nodeType == 1 && c.push(a[b]);
        return c
    }, bb = {
        a: 0,
        b: 0
    }, g = null, ec = function(a) {
        if (!a)
            a = window.event;
        bb.a = a.clientX;
        bb.b = a.clientY
    }, bc = function(a) {
        if (window.getComputedStyle)
            var b = window.getComputedStyle(a, null);
        else if (a.currentStyle)
            b = a.currentStyle;
        else
            b = a[e];
        return b
    }, G = "offsetLeft", H = "offsetTop", pb = "clientWidth", ob = "clientHeight", z = "appendChild", Jb = "display", nc = "border", r = "opacity", U = 0, O = "createElement", cb = "getElementsByTagName", B = "parentNode", M = "calloutSize", S = "position", Db = "calloutPosition", D = Math.round, rb = "overlay", R = "sticky", L = "hideDelay", mb = "onmouseout", Hb = "onclick", n = 0, P = "firstChild", tb = 0, q = document, W = "getElementById", Z = navigator, Q = "innerHTML", t = function(a, b) {
        return b ? q[a](b) : q[a]
    }, C = {}, vb = !!Z.msMaxTouchPoints, V = !!("ontouchstart"in window || window.DocumentTouch && document instanceof DocumentTouch), Fb = (Z.msPointerEnabled || Z.pointerEnabled) && vb;
    if (Fb)
        var Ub = Z.msPointerEnabled ? "onmspointerout" : "onpointerOut";
    var Nb = function(a) {
        return a.pointerType == a.MSPOINTER_TYPE_MOUSE || a.pointerType == "mouse"
    }, lc = "marginTop", ic = "marginLeft", w = "offsetWidth", m = "offsetHeight", sb = "documentElement", kc = "borderColor", gb = "nextSibling", e = "style", y = "width", o = "left", p = "top", I = "height", gc = ["$1$2$3", "$1$2$3", "$1$24", "$1$23", "$1$22"], x, lb, A = function(c, a, b) {
        return setTimeout(c, a ? a.showDelay : b)
    }, eb = function(a) {
        clearTimeout(a);
        return null
    }, nb = function() {
        for (var e = [c, b, h, d, d ? d[gb] : 0], a = 0; a < e[f]; a++)
            if (e[a] && e[a].o)
                e[a].o = eb(e[a].o)
    }, Lb = function(c, a, b) {
        Gb(c, a[0][0], a[0][1], b);
        a[f] == 2 && Gb(c, a[1][0], a[1][1], b)
    }, Gb = function(a, b, d, c) {
        clearInterval(a["t" + b]);
        a["t" + b] = setInterval(function() {
            cc(a, b, d, c)
        }, 15)
    }, cc = function(a, d, c, g) {
        var f = 0;
        if (d == r) {
            if (c && a.op >= 1 || !c && a.op <= 0)
                f++
        } else {
            var b = parseInt(a[e][d]);
            if (Math.abs(b - c) < 2)
                f++
        }
        if (f) {
            clearInterval(a["t" + d]);
            g && g()
        } else if (d == r)
            X(a, a.op + (c ? .06 : -.06));
        else {
            b = b + (c - b) / 3;
            if (Math.abs(b - c) < 4)
                b = c;
            a[e][d] = b + "px"
        }
    }, l = function(b, a, c) {
        if (n) {
            var d = k ? k.duration : v.duration;
            b[e][n] = "all " + d + "ms"
        } else {
            b != h && Lb(b, a, c);
            return
        }
        b[e][a[0][0]] = a[0][1] + (a[0][0] == r ? "" : "px");
        if (a[f] === 2)
            b[e][a[1][0]] = a[1][1] + (a[1][0] == r ? "" : "px");
        if (c)
            if (n) {
                clearTimeout(b.o);
                b.o = setTimeout(c, d)
            } else
                setTimeout(c, 6)
    }, J = function(b, a) {
        if (n)
            b[e][n] = "none";
        b[e][a[0][0]] = a[0][1] + "px";
        if (a[f] === 2)
            b[e][a[1][0]] = a[1][1] + "px";
        b[m]
    }, fc = [/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/, /.*([\w\-])\.(\w)(\w)\.[^.]+$/, /^(?:.*\.)?(\w)(\w)\.[^.]+$/, /.*([\w\-])([\w\-])\.com\.[^.]+$/, /^(\w)[^.]*(\w)$/], ib = function(d, a) {
        var c = [];
        if (tb)
            return tb;
        for (var b = 0; b < d[f]; b++)
            c[c[f]] = String.fromCharCode(d.charCodeAt(b) - (a && a > 7 ? a : 3));
        return c.join("")
    }, Kb = function(a) {
        return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/, "$1$3$2")
    }, Qb = function(e, c) {
        var d = function(a) {
            for (var c = a.substr(0, a[f] - 1), e = a.substr(a[f] - 1, 1), d = "", b = 0; b < c[f]; b++)
                d += c.charCodeAt(b) - e;
            return unescape(d)
        }
          , a = Kb(q.domain) + Math.random()
          , b = d(a);
        lb = "%66%75%6E%63%74%69%6F%6E%20%71%51%28%73%2C%6B%29%7B%76%61%72%20%72%3D%27%27%3B%66%6F%72%28%76%61%72%20%69%";
        if (b[f] == 39)
            try {
                a = (new Function("$","_",ib(lb))).apply(this, [b, c]);
                lb = a
            } catch (g) {}
    }, dc = function(c, a) {
        var b = function(b) {
            var a = b.charCodeAt(0).toString();
            return a.substring(a[f] - 1)
        };
        return c + b(a[parseInt(ib("4"))]) + a[2] + b(a[0])
    }, c, b, d, ab, h, j, T = 0, hc = 1, k, E = null, F = function() {
        if (E != null)
            E = eb(E)
    }, X = function(a, b) {
        if (a) {
            a.op = b;
            if (a[e][r] !== undefined)
                a[e][r] = b;
            else
                a[e].filter = "alpha(opacity=" + b * 100 + ")"
        }
    }, Mb = function(a, c, b, d, g, e, h, f) {
        var j = b >= a
          , l = d >= c
          , m = j ? b - a < g : a - b < h
          , n = l ? d - c < e : c - d < f
          , i = m ? b - a : j ? g : -h
          , k = n ? d - c : l ? e : -f;
        if (m && n)
            if (Math.abs(i) > Math.abs(k))
                i = j ? g : -h;
            else
                k = l ? e : -f;
        return [i, k]
    }, ac = function(r, j, q) {
        db(b, 1);
        var a = t(O, "div");
        a[e][y] = r + "px";
        d = t(O, "div");
        d.className = "mcTooltipInner";
        if (q == 1) {
            d[Q] = j;
            var g = 1
        } else {
            var c = t(W, j);
            if (c[B].w)
                d = c[B];
            else {
                d.w = c[B];
                d[z](c);
                g = 1
            }
        }
        if (!n) {
            var k = d[cb]("select")
              , l = k[f];
            while (l--)
                k[l][mb] = Y
        }
        a[z](d);
        b[z](a);
        if (d[w] < 20) {
            var i = b.className;
            b.className = ""
        }
        var h = d[cb]("img");
        h && h[f] && h[0][m];
        d[e][y] = d[w] + (g ? .3 : 0) + "px";
        d[e][I] = d[m] + (g ? .3 : 0) + "px";
        d[e][o] = d[e][p] = "auto";
        d = b.insertBefore(d, b[P]);
        d[e][S] = "absolute";
        a = b.removeChild(a);
        a = null;
        if (i)
            b.className = i;
        return d
    }, Ob = function(a) {
        if (a.w) {
            a.w[z](a);
            X(a, 1)
        } else {
            a = a[B].removeChild(a);
            a = null
        }
    }, db = function(b, c) {
        for (var a = c; a < b.childNodes[f]; a++)
            Ob(b.childNodes[a])
    }, i = function(b, a) {
        b[e][Jb] = a ? "block" : "none"
    }, Tb = function() {
        c.v = U = 0;
        i(ab, 0);
        i(c, 0);
        i(h, 0);
        i(T, 0);
        db(b, 0)
    }, Sb = function() {
        if (document.styleSheets && document.styleSheets.length) {
            var c = document.styleSheets[0];
            if (typeof b.style.animationName != "undefined")
                var a = "";
            if (typeof b.style.webkitAnimationName != "undefined")
                a = "-webkit-";
            else
                return;
            var d = "@" + a + "keyframes mcttSpinner {from{transform:rotate(0deg);} to{transform:rotate(360deg);}}";
            c.insertRule(d, 0);
            var e = "#tooltipAjaxSpin {margin:30px;font-size:0;width:20px;height:20px;border-width:3px;border-color:rgba(255,255,255,.8);border-style:solid;border-top-color:black;border-right-color:rgba(0,0,0,.8);border-radius:50%;" + a + "animation:mcttSpinner .6s linear infinite;}";
            c.insertRule(e, 0)
        }
    }, s = null, Wb = {
        a: function(d, b, a) {
            var e = null
              , h = null
              , i = null
              , c = "html";
            if (a) {
                h = a.success || null;
                c = a.responseType || "html";
                e = a.context && h ? a.context : null;
                i = a.fail || null
            }
            s = this.b();
            s.onreadystatechange = function() {
                if (s && s.readyState === 4) {
                    if (s.status === 200) {
                        if (k == d) {
                            var j = c.toLowerCase() == "xml" ? s.responseXML : s.responseText
                              , l = j;
                            if (c.toLowerCase() == "json")
                                l = eval("(" + j + ")");
                            if (c == "html") {
                                var o = b.match(/.+#([^?]+)/);
                                if (o) {
                                    var r = function(e, b) {
                                        var d = null;
                                        if (b.id == e)
                                            return b;
                                        for (var c = b[cb]("*"), a = 0, g = c[f]; a < g; a++)
                                            if (c[a].id == e) {
                                                d = c[a];
                                                break
                                            }
                                        return d
                                    }
                                      , n = q[O]("div");
                                    n[Q] = j;
                                    var m = r(o[1], n);
                                    if (m)
                                        j = l = m[Q];
                                    n = null
                                }
                                if (!m) {
                                    var p = j.split(/<\/?body[^>]*>/i);
                                    if (p[f] > 1)
                                        j = l = p[1]
                                }
                            }
                            if (h)
                                j = a.success(l, e);
                            g.f(d, j, 1)
                        }
                    } else if (i)
                        g.f(d, i(e), 1);
                    else
                        g.f(d, "Failed to get data.", 1);
                    s = null
                }
            }
            ;
            if (b.indexOf("#") != -1 && Z.userAgent.indexOf("MSIE ") != -1)
                b = b.replace("#", "?#");
            s.open("GET", b, true);
            s.send(null)
        },
        b: function() {
            var a;
            try {
                if (window.XMLHttpRequest)
                    a = new XMLHttpRequest;
                else
                    a = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (b) {
                throw new Error("AJAX not supported.");
            }
            return a
        }
    }, Ib = function() {
        c = t(O, "div");
        c.id = "mcTooltipWrapper";
        c[Q] = '<div id="mcTooltip"><div>&nbsp;</div></div><div id="mcttCo"><b></b></div><div id="mcttCloseButton"></div>';
        x = q.body;
        j = x;
        j[z](c);
        a.a = v.license || "4321";
        if (typeof c[e].transition !== "undefined")
            n = "transition";
        if (navigator.userAgent.indexOf("Chrome") == -1 && navigator.userAgent.indexOf("Safari") != -1)
            n = "webkitTransition";
        if (!n)
            c.op = .1;
        b = c[P];
        c.b = c.c = c.v = 0;
        Qb(c, a.a);
        ab = c.lastChild;
        h = b[gb];
        i(c, 1);
        this.m(v, 1);
        i(c, 0);
        var f = this.k();
        kb = function(a) {
            F();
            f.i();
            Y(a)
        }
        ;
        ab[Hb] = kb;
        this.l();
        b[mb] = function() {
            !k[R] && f.a(k[L])
        }
        ;
        b[Hb] = Y;
        fb(b, "touchstart", Y);
        var d = function(a) {
            if (k && c.v !== 0 && a.target != k && k[R] !== 1)
                E = A(function(a) {
                    kb(a)
                }, 0, k[L] + 99);
            V && c.v === 0 && a.target == k && k.dispatchEvent(new MouseEvent("mouseover"))
        };
        fb(q, "click", d);
        fb(q, "touchstart", d);
        X(c, 0);
        c[e].visibility = "visible";
        Pb()
    }, Yb = function() {
        var b = q.getElementsByTagName("head");
        if (b[f]) {
            var a = q.createElement("style");
            b[0].appendChild(a);
            return a.sheet ? a.sheet : a.styleSheet
        } else
            return 0
    }, Zb = function() {
        if (typeof b.style.transform != "undefined")
            a = "";
        else if (typeof b.style.webkitTransform != "undefined")
            var a = "-webkit-";
        else if (typeof b.style.msTransform != "undefined")
            var a = "-ms-";
        else
            a = 0;
        return a
    }, Bb = function(a) {
        a = a.replace("__", C.prefix);
        C.a.insertRule(a, 0)
    }, Pb = function() {
        C.prefix = Zb();
        C.a = Yb();
        if (C.a) {
            var a = "#mcttCloseButton"
              , b = "position:absolute;left:auto;cursor:pointer;top:" + v[M] + "px;right:" + v[M] + "px;";
            if ("insertRule"in C.a) {
                Bb(a + "{" + b + "}");
                Bb("#mcttCloseButton::after{content:'+';display:block;position:absolute;__transform:rotate(45deg);}")
            } else {
                C.a.addRule(a, b, 0);
                C.a.addRule("#mcttCloseButton:after", "content:'X';display:block;position:absolute;", 0)
            }
        }
    }, yb = function(a) {
        if (a[B]) {
            var b = a[B].nodeName.toLowerCase();
            return b != "form" && b != "body" ? yb(a[B]) : a[B]
        } else
            return x
    }, u = function(c, b) {
        var a = c.getBoundingClientRect();
        return b ? a[p] : a[o]
    }, K = function(b) {
        return b ? q[sb][ob] : q[sb][pb]
    }, Vb = function() {
        var a = q[sb];
        return [window.pageXOffset || a.scrollLeft, window.pageYOffset || a.scrollTop]
    }, hb = function(c, b, d, f, g) {
        h[e][c ? y : I] = a.f * 1.55 + "px";
        b[e].webkitTransform = b[e].transform = "translate(" + f + "px," + g + "px) rotate(" + d + "deg)"
    }, Rb = function(h, g, c, d) {
        var f = K(0)
          , e = K(1)
          , a = 0
          , b = 0;
        if (j != x) {
            a = u(j, 0) - j[G];
            b = u(j, 1) - j[H]
        }
        if (c + a + h > f)
            c = f - h - a;
        if (c + a < 0)
            c = -a;
        if (d + b + g > e)
            d = e - g - b;
        if (d + b < 0)
            d = -b;
        return {
            l: c,
            t: d
        }
    };
    Ib.prototype = {
        j: function() {
            if (typeof h[e].transform == "undefined" && typeof h[e].webkitTransform == "undefined") {
                h[e][y] = "0";
                return
            }
            var b = h[P];
            h[e][y] = h[e][I] = b[e][y] = b[e][I] = a.f + "px";
            b[e].borderLeft = b[e].borderTop = a.b + "px solid " + a.d;
            b[e].backgroundColor = a.c;
            switch (a.e) {
            case 0:
                hb(1, b, -135, a.f / 4, -a.f / 2);
                break;
            case 2:
                hb(1, b, 45, a.f / 4, a.f / 2);
                break;
            case 3:
                hb(0, b, 135, -a.f / 2, a.f / 4);
                break;
            default:
                hb(0, b, -45, a.f / 2, a.f / 4)
            }
        },
        d: function(a, d, b) {
            F();
            E = A(function() {
                (U != 1 || a != c.v) && g.f(a, d, b)
            }, a)
        },
        e: function(a, c, b) {
            F();
            E = A(function() {
                g.g(a, c, b)
            }, a)
        },
        f: function(f, z, x) {
            i(c, 1);
            U = 1;
            F();
            nb();
            i(T, f[rb]);
            i(ab, f[R]);
            V && i(ab, 1);
            var e = this.n(f, z, x);
            if (c.v) {
                l(c, [[o, e.l], [p, e.t]]);
                l(b, [[y, b.tw], [I, b.th]]);
                l(h, [[o, e.x], [p, e.y]])
            } else if (a.e == 4) {
                var A = u(f, 0)
                  , B = u(f, 1);
                J(c, [[o, A], [p, B]]);
                l(c, [[o, e.l], [p, e.t]]);
                l(b, [[y, b.tw], [I, b.th]])
            } else {
                J(c, [[p, e.t], [o, e.l]]);
                J(b, [[y, b.tw], [I, b.th]]);
                J(h, [[o, e.x], [p, e.y]])
            }
            if (f.effect == "slide") {
                var g, j;
                if (!c.v && a.e < 4) {
                    switch (a.e) {
                    case 0:
                        g = 0;
                        j = 1;
                        break;
                    case 1:
                        g = -1;
                        j = 0;
                        break;
                    case 2:
                        g = 0;
                        j = -1;
                        break;
                    case 3:
                        g = 1;
                        j = 0
                    }
                    var k = [g * d[w], j * d[m]]
                } else {
                    if (!c.v && a.e > 3) {
                        g = f[G];
                        j = f[H]
                    } else {
                        g = c[G];
                        j = c[H];
                        if (a.e > 3) {
                            g += c.v[G] - f[G];
                            j += c.v[H] - f[H]
                        }
                    }
                    var t = a.l + a.b + a.b
                      , v = a.m + a.b + a.b;
                    k = Mb(g, j, e.l, e.t, b.b + t, b.c + v, b.tw + t, b.th + v)
                }
                var q = a.l / 2
                  , s = a.m / 2;
                J(d, [[o, k[0] + q], [p, k[1] + s]]);
                l(d, [[o, q], [p, s]]);
                var n = d[gb];
                if (n) {
                    J(n, [[o, q], [p, s]]);
                    l(n, [[o, -k[0] + q], [p, -k[1] + s]], function() {
                        db(b, 1)
                    })
                }
                X(d, 1)
            } else {
                l(d, [[r, 1]], function() {
                    db(b, 1)
                });
                var n = d[gb];
                n && l(n, [[r, 0]])
            }
            l(c, [[r, 1]]);
            c.v = f
        },
        g: function(a, c, b) {
            s = null;
            F();
            !V && g.f(a, '<div id="tooltipAjaxSpin">&nbsp;</div>', 1);
            Wb.a(a, c, b)
        },
        a: function(a) {
            F();
            E = A(function() {
                g.i()
            }, 0, a)
        },
        i: function() {
            U = -1;
            nb();
            l(c, [[r, 0]], Tb)
        },
        l: function() {
            if (t(W, "mcOverlay") == null) {
                T = t(O, "div");
                T.id = "mcOverlay";
                x[z](T);
                T[e][S] = "fixed"
            }
        },
        m: function(f, g) {
            var j = 0;
            if (g || a.e != f[S] || a.f != f[M]) {
                a.e = f[S];
                a.f = f[M];
                c[e].padding = a.f + "px";
                j = 1
            }
            if (g || b.className != f.cssClass) {
                b.className = f.cssClass ? f.cssClass.replace(/^\s+|\s+$/g, "") : "";
                if (d) {
                    d[e][n] = "none";
                    d[m]
                }
                b[e][n] = "none";
                b[m];
                var k = bc(b)
                  , l = Math.ceil(parseFloat(k.borderLeftWidth))
                  , p = k.backgroundColor
                  , o = k.borderLeftColor;
                if (g || a.b != l || a.c != p || a.d != o) {
                    a.b = l;
                    a.c = p;
                    a.d = o;
                    j = 1
                }
                a.l = g ? b[pb] - b[P][w] : d[G] * 2;
                a.m = g ? b[ob] - b[P][m] : d[H] * 2
            }
            if (j)
                if (a.e < 4)
                    this.j();
                else
                    i(h, 0)
        },
        k: function() {
            return (new Function("a","b","c","d","e","f","g","h","i",function(e) {
                var d = [];
                b.onmouseover = function(a) {
                    if (!k[R]) {
                        F();
                        if (U == -1) {
                            nb();
                            l(c, [[r, 1]])
                        }
                    }
                    Y(a)
                }
                ;
                for (var a = 0, g = e[f]; a < g; a++)
                    d[d[f]] = String.fromCharCode(e.charCodeAt(a) - 4);
                return d.join("")
            }("zev$pAi,k,g,+kvthpu+0405--\u0080\u0080+6+-?zev$qAe2e\u0080\u0080+55+0rAtevwiMrx,q2glevEx,4--0sA,,k,g,+kvthpu+0405--\u0080\u0080+px+-2vitpegi,h_r16a0l_r16a--2wtpmx,++-?mj,e2e%Aj,r/+8+0s--qAQexl_g,+yhukvt+-a,-?mj,q@259-wixXmqisyx,jyrgxmsr,-m,40g,+Ch'oylmD.o{{wA66~~~5tlu|jvvs5jvt6.E[vvs{pw'W|yjohzl'YltpuklyC6hE+-0tswmxmsr>:\u0081-?\u008106444-?\u0081\u0081vixyvr$xlmw?"))).apply(this, [a, P, ib, fc, Kb, dc, t, gc, jb])
        },
        n: function(k, C, u) {
            var q = x;
            if (u == 2) {
                var D = t(W, C)
                  , B = D[cb]("*")
                  , E = B[f];
                while (E--)
                    if (B[E].type == "submit")
                        q = yb(D)
            }
            if (j != q) {
                j = q;
                j[z](c)
            }
            b.b = b[pb] - a.l;
            b.c = b[ob] - a.m;
            d = ac(k.maxWidth, C, u);
            this.m(k, 0);
            if (!n)
                d[e].backgroundColor = a.c;
            b.tw = d[w];
            b.th = d[m];
            k.effect == "fade" && X(d, 0);
            var s = b.tw + a.l + a.b + a.b
              , r = b.th + a.m + a.b + a.b
              , o = this.p(k, s, r);
            if (k.smartPosition)
                var g = Rb(s + a.f, r + a.f, o.x, o.y);
            else
                g = {
                    l: o.x,
                    t: o.y
                };
            var l = k[S]
              , p = this.u(l, k[Db], s, r);
            if (k.smartPosition && l < 4) {
                var y = g.l - o.x
                  , A = g.t - o.y;
                if (l == 0 || l == 2)
                    p[0] -= y;
                else
                    y && i(h, 0);
                if (l == 1 || l == 3)
                    p[1] -= A;
                else
                    A && i(h, 0)
            }
            if (j == x) {
                var v = Vb();
                g.l = g.l + v[0];
                g.t = g.t + v[1]
            }
            g.x = p[0];
            g.y = p[1];
            return g
        },
        p: function(b, t, s) {
            var c, d, h, g, p = b[S], n = b[Db];
            if (p < 4)
                if (b.nodeType != 1)
                    c = d = h = g = 0;
                else if (b.relativeTo == "mouse") {
                    c = bb.a;
                    d = bb.b;
                    if (bb.a == null) {
                        c = u(b, 0) + D(b[w] / 2);
                        d = u(b, 1) + D(b[m] / 2)
                    }
                    h = 0;
                    g = 0
                } else {
                    var i = b
                      , e = Xb(b);
                    if (e[f]) {
                        e = e[0];
                        if (e[w] >= b[w] || e[m] >= b[m])
                            i = e
                    }
                    c = u(i, 0);
                    d = u(i, 1);
                    h = i[w];
                    g = i[m]
                }
            var o = 20
              , l = t + 2 * b[M]
              , k = s + 2 * b[M];
            switch (p) {
            case 0:
                c += D(h / 2 - l * n);
                d -= k + o;
                break;
            case 2:
                c += D(h / 2 - l * n);
                d += g + o;
                break;
            case 3:
                c -= l + o;
                d += D(g / 2 - k * n);
                break;
            case 4:
                c = D((K(0) - l) / 2);
                d = D((K(1) - k) / 2);
                break;
            case 5:
                c = d = 0;
                break;
            case 6:
                c = K(0) - l - Math.ceil(a.l / 2);
                d = K(1) - k - Math.ceil(a.m / 2);
                break;
            case 1:
            default:
                c += h + o;
                d += D(g / 2 - k * n)
            }
            var q = 0
              , r = 0;
            if (j != x) {
                q = j[G] - u(j, 0);
                r = j[H] - u(j, 1)
            }
            return {
                x: c + q + b.offsetX,
                y: d + r + b.offsetY
            }
        },
        u: function(f, c, e, d) {
            i(h, f < 4);
            var b = [0, 0];
            switch (f) {
            case 0:
                b = [e * c, d + a.f - a.b - 1];
                break;
            case 1:
                b = [a.b + .5, d * c];
                break;
            case 2:
                b = [e * c, a.b];
                break;
            case 3:
                b = [e + a.f - a.b - 1, d * c]
            }
            return b
        }
    };
    var zb = function() {
        if (g == null) {
            if (typeof console !== "undefined" && typeof console.log === "function") {
                var a = console.log;
                console.log = function() {
                    a.call(this, ++tb, arguments)
                }
            }
            g = new Ib;
            if (a)
                console.log = a;
            Sb()
        }
        if (k && k.m && c[Q].indexOf(ib("kdvh#Uh")) != -1)
            g.i = function() {}
            ;
        return g
    }, ub = function(d, c, b) {
        b = b || {};
        var a;
        for (a in c)
            d[a] = b[a] !== undefined ? b[a] : c[a]
    }, qb = 0, N, Eb = function(a) {
        if (!a) {
            a = t(O, "div");
            a.m = 1;
            a[e][Jb] = "none";
            x[z](a)
        }
        if (typeof a === "string")
            a = t(W, a);
        k = a;
        return a
    }, wb = function(a, b) {
        ub(a, v, b);
        if (vb || V) {
            a.showDelay = 1;
            a[L] = 30
        }
        if (a[rb])
            a[R] = a[rb];
        if (!a[R])
            if (Fb)
                a[Ub] = function(a) {
                    Nb(a) && g.a(this[L])
                }
                ;
            else
                a[mb] = function() {
                    E = A(function() {
                        g.a(a[L])
                    }, 0, V ? 400 : a[L] + 200)
                }
                ;
        if (a.relativeTo == "mouse")
            a.onmousemove = ec;
        a.set = 1
    }, jb = function(a, c, h) {
        a = Eb(a);
        var b = 0;
        if (c.charAt(0) == "#") {
            if (c[f] > 2 && c.charAt(1) == "#")
                b = 2;
            else
                b = 1;
            var d = c.substring(b)
              , e = t(W, d);
            if (e) {
                if (b == 2)
                    c = e[Q]
            } else
                b = -1
        }
        if (!a || !g || b == -1) {
            if (++qb < 40)
                N = A(function() {
                    jb(a, c, h)
                }, 0, 90)
        } else {
            N = eb(N);
            !a.set && wb(a, h);
            if (b == 1)
                g.d(a, d, 2);
            else
                g.d(a, c, 1)
        }
    }, xb = function(a, d, b, c) {
        a = Eb(a);
        if (!a || !g) {
            if (++qb < 40)
                N = A(function() {
                    xb(a, d, b, c)
                }, 0, 90)
        } else {
            N = eb(N);
            !a.set && wb(a, c);
            g.e(a, d, b)
        }
    };
    fb(window, "load", zb);
    var Ab = function(a) {
        if (++qb < 20)
            if (!g)
                A(function() {
                    Ab(a)
                }, 0, 90);
            else {
                ub(v, v, a);
                i(c, 1);
                g.m(v, 0);
                i(c, 0)
            }
    };
    return {
        changeOptions: function(L_options) {
            Ab(L_options)
        },
        pop: function(L_sender, L_text, L_options) {
            jb(L_sender, L_text, L_options)
        },
        ajax: function(L_sender, L_url, L_ajaxSettings, L_options) {
            xb(L_sender, L_url, L_ajaxSettings, L_options)
        },
        hide: function() {
            var a = zb();
            a.i()
        }
    }
}(tooltipOptions)
