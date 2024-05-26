@extends('layout.app')
@section('content')
<main class="mt-0 transition-all duration-200 ease-soft-in-out ps">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
            style="background-image: url('../assets/img/curved-images/curved14.jpg')">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                        <p class="text-white">Use these awesome forms to login or create new account in your project for
                            free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">

                        <div class="flex-auto p-6">
                            <form action={{route("bonlivraisons.store")}} method="post">
                                @csrf

                                <div class="mb-4">
                                    <label for="cateeg">Date</label>
                                    <input name="date" type="text"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="categorie" aria-label="Password" aria-describedby="password-addon">
                                </div>
                                <div class="mb-4">
                                    <label for="cateeg">Regle</label>
                                    <input name="regle" type="text"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="categorie" aria-label="Password" aria-describedby="password-addon">
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">ajouter</button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a
                                        href="../pages/sign-in.html" class="font-bold text-slate-700">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Company
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Team </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Products
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Blog </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Pricing
                    </a>
                </div>
                <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-github" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>2024
                        Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer> --}}

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</main>
<script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon="{&quot;rayId&quot;:&quot;869755088c476623&quot;,&quot;version&quot;:&quot;2024.3.0&quot;,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;}"
    crossorigin="anonymous"></script>


<script src="../assets/js/plugins/perfect-scrollbar.min.js" async=""></script>

<script src="../assets/js/soft-ui-dashboard-tailwind.min.js?v=1.0.5" async=""></script>


<style>
    #ofBar {
        background: #fff;
        z-index: 999999999;
        font-size: 16px;
        color: #333;
        padding: 16px 40px;
        font-weight: 400;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 40px;
        width: 80%;
        border-radius: 8px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
    }

    #ofBar-logo img {
        height: 50px;
    }

    #ofBar-content {
        display: inline;
        padding: 0 15px;
    }

    #ofBar-right {
        display: flex;
        align-items: center;
    }

    #ofBar b {
        font-size: 15px !important;
    }

    #count-down {
        display: initial;
        padding-left: 10px;
        font-weight: bold;
        font-size: 20px;
    }

    #close-bar {
        font-size: 17px;
        opacity: 0.5;
        cursor: pointer;
        color: #808080;
        font-weight: bold;
    }

    #close-bar:hover {
        opacity: 1;
    }

    #btn-bar {
        background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
        color: #fff;
        border-radius: 4px;
        padding: 10px 20px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        font-size: 12px;
        opacity: .95;
        margin-right: 20px;
        box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
    }

    #btn-bar,
    #btn-bar:hover,
    #btn-bar:focus,
    #btn-bar:active {
        text-decoration: none !important;
        color: #fff !important;
    }

    #btn-bar:hover {
        opacity: 1;
    }

    #btn-bar span,
    #ofBar-content span {
        color: red;
        font-weight: 700;
    }

    #oldPriceBar {
        text-decoration: line-through;
        font-size: 16px;
        color: #fff;
        font-weight: 400;
        top: 2px;
        position: relative;
    }

    #newPrice {
        color: #fff;
        font-size: 19px;
        font-weight: 700;
        top: 2px;
        position: relative;
        margin-left: 7px;
    }

    #fromText {
        font-size: 15px;
        color: #fff;
        font-weight: 400;
        margin-right: 3px;
        top: 0px;
        position: relative;
    }

    #pls-contact-me-on-email {
        position: absolute;
        color: white;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 999;
        cursor: pointer;
        padding-top: 100px;
        padding-left: 50px;
    }

    @media(max-width: 991px) {}

    @media (max-width: 768px) {
        #count-down {
            display: block;
            margin-top: 15px;
        }

        #ofBar {
            flex-direction: column;
            align-items: normal;
        }

        #ofBar-content {
            margin: 15px 0;
            text-align: center;
            font-size: 18px;
        }

        #ofBar-right {
            justify-content: flex-end;
        }
    }
</style>

<script type="text/javascript" id="">
    function setCookie(a,d,c){var b=new Date;b.setTime(b.getTime()+864E5*c);c="expires\x3d"+b.toUTCString();document.cookie=a+"\x3d"+d+";"+c+";path\x3d/"}
    function readDomain(){domain=window.location.hostname;if("hrm.newflex.co.kr"==domain){console.log("Remove the script");var a=document.createElement("div");a.setAttribute("id","pls-contact-me-on-email");a.innerHTML="\x3ch1\x3ePlease Remove the Stolen Google Analytics from \x3ca href\x3d'https://www.creative-tim.com/?ref\x3dstolen-website' target\x3d'_blank' '\x3ecreative-tim.com\x3c/a\x3e Please send an email to beni@creative-tim.com to help you remove our scripts.\x3c/h1\x3e";document.body.insertBefore(a,
    document.body.firstChild)}}function readCookie(a){a+="\x3d";for(var d=document.cookie.split(";"),c=0;c<d.length;c++){for(var b=d[c];" "==b.charAt(0);)b=b.substring(1,b.length);if(0==b.indexOf(a))return b.substring(a.length,b.length)}return null}
    function createOfferBar(){readDomain();var a=document.createElement("div");a.setAttribute("id","ofBar");a.innerHTML="\x3cdiv id\x3d'ofBar-logo'\x3e \x3cimg alt\x3d'creative-tim-logo' src\x3d'https://s3.amazonaws.com/creativetim_bucket/static-assets/logo-ct-black.png'\x3e\x3c/div\x3e\x3cdiv id\x3d'ofBar-content'\x3e\x3cb\x3e50% off Creative Tim Club!\x3c/b\x3e \ud83c\udf89 Lifetime access to all current \x26 future products. Limited time offer! \u2728\x3c/div\x3e\x3cdiv id\x3d'ofBar-right'\x3e\x3ca href\x3d'https://www.creative-tim.com/club?ref\x3dct-demos' target\x3d'_blank' id\x3d'btn-bar'\x3eView Offer\x3c/a\x3e\x3ca id\x3d'close-bar'\x3e\u00d7\x3c/a\x3e\x3c/div\x3e";document.body.insertBefore(a,
    document.body.firstChild)}function closeOfferBar(){document.getElementById("ofBar").setAttribute("style","display:none");setCookie("view_offer_bar","true",1)}var value=readCookie("view_offer_bar");null==value&&(createOfferBar(),document.getElementById("close-bar").addEventListener("click",closeOfferBar));
</script>
<script type="text/javascript" id="">
    !function(d,g,e){d.TiktokAnalyticsObject=e;var a=d[e]=d[e]||[];a.methods="page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");a.setAndDefer=function(b,c){b[c]=function(){b.push([c].concat(Array.prototype.slice.call(arguments,0)))}};for(d=0;d<a.methods.length;d++)a.setAndDefer(a,a.methods[d]);a.instance=function(b){b=a._i[b]||[];for(var c=0;c<a.methods.length;c++)a.setAndDefer(b,a.methods[c]);return b};a.load=function(b,c){var f="https://analytics.tiktok.com/i18n/pixel/events.js";
    a._i=a._i||{};a._i[b]=[];a._i[b]._u=f;a._t=a._t||{};a._t[b]=+new Date;a._o=a._o||{};a._o[b]=c||{};c=document.createElement("script");c.type="text/javascript";c.async=!0;c.src=f+"?sdkid\x3d"+b+"\x26lib\x3d"+e;b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(c,b)};a.load("CC6UAQBC77U7GVKHLC4G");a.page()}(window,document,"ttq");
</script>
<iframe id="_hjSafeContext_4041043" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank"
    style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
@endsection
