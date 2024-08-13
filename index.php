<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "igreja";

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {

    $news = $conn->query("SELECT titulo_Noticia, data_Noticia, capa_Noticia FROM `tb_noticias`");
    $highlights = $conn->query("SELECT nome_evento, data_evento, capa_evento FROM `tb_eventos`");



    // Garbage collect db
    $db = null;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>




<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- All in One SEO 4.6.2 - aioseo.com -->
    <title>25ªIEQ - Cascavel</title>

    <script type="application/ld+json" class="aioseo-schema">
        {
            "@context": "https:\/\/schema.org",
            "@graph": [{
                "@type": "BreadcrumbList",
                "@id": "https:\/\/ieq.com\/#breadcrumblist",
                "itemListElement": [{
                    "@type": "ListItem",
                    "@id": "https:\/\/ieq.com\/#listItem",
                    "position": 1,
                    "name": "Home"
                }]
            }, {
                "@type": "Organization",
                "@id": "https:\/\/ieq.com\/#organization",
                "name": "Warner Bros. Discovery",
                "url": "https:\/\/ieq.com\/",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https:\/\/ieq.com\/wp-content\/uploads\/2022\/04\/ieq-announcement-4-8-22.jpg",
                    "@id": "https:\/\/ieq.com\/#organizationLogo"
                },
                "image": {
                    "@id": "https:\/\/ieq.com\/#organizationLogo"
                },
                "sameAs": ["https:\/\/www.facebook.com\/ieq", "https:\/\/twitter.com\/ieq\/",
                    "https:\/\/www.instagram.com\/ieq\/", "https:\/\/www.youtube.com\/ieq",
                    "https:\/\/www.linkedin.com\/company\/warner-bros-discovery\/"
                ]
            }, {
                "@type": "WebPage",
                "@id": "https:\/\/ieq.com\/#webpage",
                "url": "https:\/\/ieq.com\/",
                "name": "Warner Bros. Discovery",
                "description": "Warner Bros. Discovery, a premier global media and entertainment company, offers audiences the world's most differentiated and complete portfolio of content, brands and franchises across television, film, streaming and gaming.",
                "inLanguage": "en-US",
                "isPartOf": {
                    "@id": "https:\/\/ieq.com\/#website"
                },
                "breadcrumb": {
                    "@id": "https:\/\/ieq.com\/#breadcrumblist"
                },
                "datePublished": "2022-02-19T00:08:00-05:00",
                "dateModified": "2022-05-26T15:23:11-04:00"
            }, {
                "@type": "WebSite",
                "@id": "https:\/\/ieq.com\/#website",
                "url": "https:\/\/ieq.com\/",
                "name": "Warner Bros. Discovery",
                "inLanguage": "en-US",
                "publisher": {
                    "@id": "https:\/\/ieq.com\/#organization"
                },
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https:\/\/ieq.com\/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }
            }]
        }
    </script>
    <!-- All in One SEO -->

    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/ieq.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel="stylesheet" id="genesis-blocks-style-css-css" href="css/style-blocks.build.css" type="text/css" media="all">
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css" type="text/css" media="all">
    <style id="safe-svg-svg-icon-style-inline-css" type="text/css">
        .safe-svg-cover {
            text-align: center
        }

        .safe-svg-cover .safe-svg-inside {
            display: inline-block;
            max-width: 100%
        }

        .safe-svg-cover svg {
            height: 100%;
            max-height: 100%;
            max-width: 100%;
            width: 100%
        }
    </style>
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="fontawesome-css" href="css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="easy-social-sharing-general-css" href="css/easy-social-sharing.css" type="text/css" media="all">
    <style id="easy-social-sharing-general-inline-css" type="text/css">
        #ess-wrap-sidebar-networks .socicon,
        #ess-wrap-inline-networks .ess-social-sharing,
        #ess-wrap-inline-networks.ess-inline-layout-two .socicon,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-count,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-more-networks {
            background: #3d59fc;
            color: #ffffff !important;
        }

        #ess-wrap-sidebar-networks .socicon:hover,
        #ess-wrap-inline-networks .ess-social-sharing:hover,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .socicon,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .ess-social-count,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .ess-more-networks {
            background: #0829e7;
            color: #ffffff !important;
        }

        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .socicon,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .ess-social-count,
        #ess-wrap-inline-networks.ess-inline-layout-two .ess-social-sharing:hover .ess-more-networks {
            color: #ffffff !important;
        }

        #ess-wrap-inline-networks.ess-inline-layout-one .socicon,
        #ess-wrap-inline-networks.ess-inline-layout-one .ess-social-count,
        #ess-wrap-inline-networks.ess-inline-layout-one .ess-more-networks,
        .ess-popup-wrapper .inline-networks {
            background: #3147ca;
            color: #ffffff !important;
        }

        #ess-wrap-inline-networks.ess-inline-layout-one .ess-social-sharing:hover .socicon,
        #ess-wrap-inline-networks.ess-inline-layout-one .ess-social-sharing:hover .ess-social-count {
            background: #0621b9;
            color: #ffffff !important;
        }

        #ess-wrap-inline-networks.ess-no-network-label .ess-social-sharing .ess-social-count {
            background: #647afd;
        }

        #ess-wrap-inline-networks.ess-no-network-label .ess-social-sharing:hover .ess-social-count {
            background: #3954ec;
        }
    </style>
    <link rel="stylesheet" id="default_theme-css" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="map-css" href="css/earth.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-slider-css" href="css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" id="tiny-slider-css" href="css/tiny-slider.css" type="text/css" media="all">
    <link rel="stylesheet" id="grid-css" href="css/ieq-grid.css" type="text/css" media="all">
    <link rel="stylesheet" id="dei-css" href="css/ieq-dei.css" type="text/css" media="all">
    <link rel="stylesheet" id="tnt_sports-css" href="css/ieq-tnt-sports.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ieq.com/xmlrpc.php?rsd">
    <link rel="shortlink" href="https://ieq.com/">
    <link rel="alternate" type="application/json+oembed" href="https://ieq.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fieq.com%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://ieq.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fieq.com%2F&amp;format=xml">
    <meta property="og:image" content="images/ieq-logo-card.jpg">
    <meta property="twitter:image" content="https://ieq.com/wp-content/uploads/2022/04/ieq-logo-card.jpg">
    <style type="text/css">
        .widget .stock_quote {
            margin: 0;
            padding: 0
        }

        .stock_quote.sqitem.error {
            font-weight: bold
        }

        .stock_quote.sqitem.minus::before,
        .stock_quote.sqitem.plus::before {
            display: inline-block;
            margin-right: 2px;
            content: "";
            width: 10px;
            height: 14px;
            background: url(data:image/gif;base64,R0lGODlhFAAKAKIHAMwzAACZAABmAJkAAMyIcsz/zDOZM////yH5BAEAAAcALAAAAAAUAAoAQAM3eHol+2TIp0oIjhIAxrJXGBjZsXUUOJbK6aUXe3LcW62UWT/qRUI7GGYxowUZMY3RVhE4cyZmAgA7) no-repeat
        }

        .stock_quote.sqitem.minus::before {
            background-position: -10px 4px
        }

        .stock_quote.sqitem.plus::before {
            background-position: 0 4px
        }

        .stock_quote.sqitem.zero,
        .stock_quote.sqitem.zero:hover {
            color: #454545
        }

        .stock_quote.sqitem.minus,
        .stock_quote.sqitem.minus:hover {
            color: #D8442F
        }

        .stock_quote.sqitem.plus,
        .stock_quote.sqitem.plus:hover {
            color: #009D59
        }
    </style>
    <link rel="stylesheet" href="css/ieq-main.css" type="text/css">
    <link rel="stylesheet" href="css/ieq-fonts.css" type="text/css" crossorigin="">

    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome-regular.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome-brands.css" type="text/css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" rel="stylesheet">



    <script src="js/wp-emoji-release.min.js" defer=""></script>
</head>

<body class="home page-template page-template-page-landing page-template-page-landing-php page page-id-22 page-home">


    <header class="header site-header" role="banner">

        <div class="branding">
            <h1> <a href="" title="Go to Warner Bros. Discovery Home" rel="home">
                    <img src="logos/logo Branca.png" alt="ieq">
                </a></h1>
        </div>

        <button class="mobile-menu-button">
            <span class="screen-reader-text"></span>
            <span class="bar bar--1"></span>
            <span class="bar bar--2"></span>
            <span class="bar bar--3"></span>
        </button>

        <nav class="main-navigation" role="navigation">
            <ul id="menu-main-menu" class="main-navigation__container">
                <li id="menu-item-493" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-493 "><a href="./pagina/paginas/Lideranca/index.php">liderança</a></li>

                <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71 "><a href="./pagina/paginas/ministerios/index.php">Ministerios</a></li>
                <li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15 "><a href="./pagina/paginas/noticias/index.php">Noticias</a></li>
                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 "><a href="./pagina/paginas/eventos/index.php">Eventos</a></li>
                <li id="menu-item-380" class="investor-relations menu-item menu-item-type-custom menu-item-object-custom menu-item-380 "><a href="">Contribua</a></li>
                <li id="menu-item-380" class="investor-relations menu-item menu-item-type-custom menu-item-object-custom menu-item-380 "><a href="./pagina/paginas/login e cadastro/login.php">Login</a></li>
                <li id="menu-item-380" class="investor-relations menu-item menu-item-type-custom menu-item-object-custom menu-item-380 "><a href="./pagina/paginas/login e cadastro/cadastro.php">Cadastro</a></li>
            </ul>
        </nav>


    </header>



    <main class="content" id="main-content" role="main">

        <div class="hero">
            <video loop="" autoplay="" muted="" playsinline="">
                <source src="media/institucional.mp4" type="video/mp4">
            </video>
        </div>

        <section class="global-brands section">
            <div class="section__container">
                <header class="section__header">
                    <div>
                        <h2 class="fade-in-slide-up">Sobre Nós</h2>
                        <p class="fade-in-slide-up">
                            A 25ª Igreja do Evangelho Quadrangular está localizada em Cascavel-PR desde 2008, está sob a
                            liderança do Pastor Cleberson Barroso. Direcionados por uma visão profética, saímos de uma
                            sala de 9 m², passamos em 2022 para um templo de 1500 m².

                            Somos uma igreja pentecostal que acredita no batismo com o Espírito Santo, clamamos por Sua
                            presença para que haja milagres, cura e salvação.

                            Venha nos visitar!
                        </p>
                    </div>
                    <p class="fade-in-slide-up button button--on-blue"><a role="button" href="">Conheça Nossos
                            Ministerios<i class="fa-regular fa-arrow-right-long"></i></a></p>
                </header>
                <div class="section__content">
                    <ul class="brand-train brand-train-1 fade-in-slide-up">

                        <?php
                        // SQL query to fetch brand data (assuming 'tb_ministerios' is the table)
                        $sql = "SELECT nome_ministerio, logo_ministerio FROM tb_ministerios";
                        $result = $conn->query($sql);

                        // Check if query was successful
                        if ($result->num_rows > 0) {
                            // Loop through each brand record
                            while ($row = $result->fetch_assoc()) {
                                $caminhoImagem = $row['logo_ministerio'] ?? '';  // Use empty string if null
                                $marcaNome = $row['nome_Ministerio'] ?? '';  // Use empty string if null

                                // Full image URL
                                $imagemUrl = $caminhoImagem;

                                echo '<li class="brand">';
                                echo '  <a class="brand__url" target="_blank" href="#" title="Visit ' . htmlspecialchars($marcaNome, ENT_QUOTES, 'UTF-8') . ' Website">';
                                echo '      <img style="width: 54%" src="' . htmlspecialchars($imagemUrl, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($marcaNome, ENT_QUOTES, 'UTF-8') . '">';
                                echo '  </a>';
                                echo '</li>';
                            }
                        }

                        $conn->close();
                        ?>
                    </ul>

                </div>


            </div>

        </section>


        <section class="news section">
            <div class="section__container">
                <header class="section__header">
                    <h2 class="fade-in-slide-up">Noticias Recentes</h2>
                </header>
                <div class="section__content">
                    <div class="news-items fade-in-slide-up">
                        <?php foreach ($news as $item) { ?>
                            <div class="news-item has-featured-image has-logo">
                                <div class="news-item__container">
                                    <h3 class="news-item__header"><a class="news-item__link" href="#"><?= htmlspecialchars($item['titulo_Noticia'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                                    <p class="news-item__meta">
                       
                                    </p>
                                    <div class="news-item__thumbnail">
                                        <a class="news-item__link" href="#">
                                            <?php
                                            // Retrieve image path and file name for each news item within the loop
                                            $caminhoImagem = $item['capa_noticia'];  // Path to the image folder

                                            // Full image URL
                                            $imagemUrl = $caminhoImagem;

                                            echo '<img loading="lazy" src="'. $caminhoImagem, ENT_QUOTES, 'UTF-8' . '" alt="">';
                                            ?>
                                            <span class="frame frame--top"></span><span class="frame frame--right"></span>
                                            <span class="frame frame--bottom"></span><span class="frame frame--left"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="spotlight section" id="spotlight">
            <div class="section__container">
                <header class="section__header">
                    <h2 class="fade-in-slide-up">Eventos</h2>
                </header>
                <div class="section__content">
                    <div class="spotlight-items">
                        <?php foreach ($highlights as $highlight) { ?>
                            <div class="spotlight-item fade-in-slide-up">
                                <div class="spotlight-item__container">
                                    <h3 class="spotlight-item__title"><a href="#" target="_blank"><?= $highlight['Nome_Evento'] ?></a></h3>
                                    <div class="spotlight-item__description">
                                        <p><?= $highlight['Data_Evento'] ?></p>
                                    </div>
                                    <div class="spotlight-item__thumbnail">
                                        <a href="#" target="_blank">
                                            <?php
                                            // Retrieve image data for each event inside the loop
                                            $imageData = $highlight['Capa_Evento'];
                                            echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="">';
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="section careers" id="careers">
            <div class="section__container">
                <div class="ieq-grid--2">
                    <header class="section__header">
                        <h2 class="fade-in-slide-up">Contribua</h2>
                        <p class="fade-in-slide-up">Sua contribuição é um ato voluntário, uma decisão de amor pela obra
                            de Deus e pelas vidas que podem ser abençoadas por meio de nossas ações e projetos.</p>

                        <div class="careers__buttons fade-in-slide-up">
                            <p class="button button--on-blue"><a role="button" href="">Contribua <i class="fa-regular fa-arrow-right-long"></i></a></p>
                        </div>
                    </header>

                </div>
            </div>
        </section>


        <!-- <section class="section social-feed section--not-full-width">
     <div class="section__container">
        <header class="section__header">
            <h2 class="fade-in-slide-up">Connect With Us</h2>
            <nav role="navigation" class="fade-in-slide-up social__social-navigation"><ul id="menu-social-menu" class="social-navigation__container"><li id="menu-item-17" class="twitter menu-item menu-item-type-custom menu-item-object-custom menu-item-17 "><a title="Follow Us on X" target="_blank" rel="noopener" href="https://twitter.com/ieq/"><span aria-hidden="true" class="screen-reader-only menu-item__label">X</span> <i class="fa-brands fa-x-twitter"></i></a></li>
<li id="menu-item-18" class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-18 "><a title="Follow Us on Instagram" target="_blank" rel="noopener" href="https://www.instagram.com/ieq/"><span aria-hidden="true" class="screen-reader-only menu-item__label">Instagram</span> <i class="fa-brands fa-instagram"></i></a></li>
<li id="menu-item-20" class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-20 "><a title="Follow Us on Facebook" target="_blank" rel="noopener" href="https://www.facebook.com/ieq"><span aria-hidden="true" class="screen-reader-only menu-item__label">Facebook</span> <i class="fa-brands fa-facebook"></i></a></li>
<li id="menu-item-21" class="youtube menu-item menu-item-type-custom menu-item-object-custom menu-item-21 "><a title="Subscribe to our YouTube Channel" target="_blank" rel="noopener" href="https://youtube.com/ieq/"><span aria-hidden="true" class="screen-reader-only menu-item__label">YouTube</span> <i class="fa-brands fa-youtube"></i></a></li>
<li id="menu-item-19" class="linkedin menu-item menu-item-type-custom menu-item-object-custom menu-item-19 "><a title="Connect with Us on LinkedIn" target="_blank" rel="noopener" href="https://www.linkedin.com/company/warner-bros-discovery/"><span aria-hidden="true" class="screen-reader-only menu-item__label">LinkedIn</span> <i class="fa-brands fa-linkedin-in"></i></a></li>
</ul></nav>
        </header>
        <div class="section__content fade-in-slide-up">
    [custom-twitter-feeds=1]    </div>
</div>
</section> -->






    </main>

    <footer class="footer" role="contentinfo">
        <nav role="navigation" class="footer__social-navigation">
            <ul id="menu-social-menu-1" class="social-navigation__container">

                <li class="instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-18 "><a title="Follow Us on Instagram" target="_blank" rel="noopener" href="https://www.instagram.com/25aieqcascavel/"><span aria-hidden="true" class="screen-reader-only menu-item__label">Instagram</span> <i class="fa-brands fa-instagram"></i></a></li>
                <li class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-20 "><a title="Follow Us on Facebook" target="_blank" rel="noopener" href="https://www.facebook.com/25aieqcascavel"><span aria-hidden="true" class="screen-reader-only menu-item__label">Facebook</span> <i class="fa-brands fa-facebook"></i></a></li>
                <li class="youtube menu-item menu-item-type-custom menu-item-object-custom menu-item-21 "><a title="Subscribe to our YouTube Channel" target="_blank" rel="noopener" href="https://www.youtube.com/@25aieqcascavel"><span aria-hidden="true" class="screen-reader-only menu-item__label">YouTube</span> <i class="fa-brands fa-youtube"></i></a></li>

            </ul>
        </nav>
        <div class="footer__container">
            <div class="ieq-grid">
                <div class="footer__logo ieq-grid__col-1-4" tabindex="-1" aria-hidden="true">
                    <img src="logos/logo Branca.png" alt="">
                </div>
                <div class="ieq-grid__col-4-9">
                    <ul class="footer__links">
                        <li><a href="">Liderança</a></li>
                        <li><a href="">Ministerios</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="">Eventos</a></li>
                        <li><a href="">Contribua</a></li>
                        <li><a href="">Palavras</a></li>
                        <li><a href="">Pedidos De Oração</a></li>
                        <li><a href="">Onde Nos Encontrar</a></li>
                        <li><a href="./login admin/index.php">Administrador</a></li>

                        <!-- <li><a href="/esg/">ESG</a></li> -->


                    </ul>
                </div>


            </div>

        </div>

    </footer>

    <span class="main-navigation__background main-navigation__background--1"></span>
    <span class="main-navigation__background main-navigation__background--2"></span>
    <span class="main-navigation__background main-navigation__background--3"></span>



    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/miniature.earth.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/SplitText.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/utilities.js"></script>


    <div id="ess-main-wrapper">
        <div class="ess-pinterest-img-picker-popup">
            <h3 class="ess-pinterest-popup-title">Pin It on Pinterest</h3>
            <div class="ess-pinterest-popup-close"><i class="fa fa-close"></i></div>
            <div class="ess-social-pin-images" data-permalink="https://ieq.com/" data-title="Home" data-post_id="22">
            </div>
            <div class="ess-no-pinterest-img-found"></div>
        </div>
    </div>
    <script type="text/javascript">
        function genesisBlocksShare(url, title, w, h) {
            var left = (window.innerWidth / 2) - (w / 2);
            var top = (window.innerHeight / 2) - (h / 2);
            return window.open(url, title,
                'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=600, height=600, top=' +
                top + ', left=' + left);
        }
    </script>
    <script type="text/javascript" src="js/jquery.tipTip.min.js" id="jquery-tiptip-js"></script>
    <script type="text/javascript" src="js/idle-timer.min.js" id="jquery-idletimer-js"></script>
    <script type="text/javascript" id="easy-social-sharing-js-extra">
        /* <![CDATA[ */
        var easy_social_sharing_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "page_url": "https:\/\/ieq.com\/",
            "update_share_nonce": "fd5116be21",
            "shares_count_nonce": "5c1b06ca93",
            "all_network_shares_count_nonce": "8f84d8eed1",
            "total_counts_nonce": "fd5a2c27e6",
            "i18n_no_img_message": "No images found.",
            "network_data": {
                "facebook": {
                    "network_id": "1",
                    "network_name": "facebook",
                    "network_desc": "Facebook",
                    "network_order": "1",
                    "network_count": "0",
                    "is_api_support": "1"
                },
                "twitter": {
                    "network_id": "2",
                    "network_name": "twitter",
                    "network_desc": "Twitter",
                    "network_order": "2",
                    "network_count": "0",
                    "is_api_support": "0"
                },
                "linkedin": {
                    "network_id": "3",
                    "network_name": "linkedin",
                    "network_desc": "Linkedin",
                    "network_order": "3",
                    "network_count": "0",
                    "is_api_support": "1"
                },
                "pinterest": {
                    "network_id": "6",
                    "network_name": "pinterest",
                    "network_desc": "Pinterest",
                    "network_order": "6",
                    "network_count": "0",
                    "is_api_support": "1"
                },
                "tumblr": {
                    "network_id": "7",
                    "network_name": "tumblr",
                    "network_desc": "",
                    "network_order": "16",
                    "network_count": "0",
                    "is_api_support": "0"
                }
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/easy-social-sharing.min.js" id="easy-social-sharing-js"></script>
    <script type="text/javascript" src="js/dismiss.js" id="genesis-blocks-dismiss-js-js"></script>
    <script type="text/javascript" id="stock-quote-js-extra">
        /* <![CDATA[ */
        var stockQuoteJs = {
            "ajax_url": "https:\/\/ieq.com\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/jquery.stockquote.min.js" id="stock-quote-js"></script>


</body>

</html>
