<?php $pageTitle = "Home" ?>

<!DOCTYPE html>
<html>
    <?php include 'partials/head.php' ?>
    <body>
        <?php include 'partials/nav.php' ?>

        <div id="top" class="hero">
            <div class="container t-center">
                <div class="container container-sm">
                    <div class="title">
                        <h1 class="animation slideUp">Claim.Club</h1>
                        <p class="animation slideUp" data-delay="50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus necessitatibus harum nobis quam omnis tempora cupiditate nihil, vero dolorum porro atque. Suscipit assumenda, minus tempora aliquid, ratione minima optio nihil.</p>
                        <a href="#" class="btn anchor-link" data-delay="100" data-to="marketplaces">Visit our domains</a>
                    </div>
                </div>
                <a href="#" class="video-link" data-toggle="modal" data-target="#video">
                    <div class="btn play"></div>
                    <div class="text">
                        <span class="watch">Watch</span>
                        <span class="bold">Interview with Max Guérin</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="video">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="//fast.wistia.net/embed/iframe/03v1c8fdji?videoFoam=true" title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
                        <script src="//fast.wistia.net/assets/external/E-v1.js" async></script>
                    </div>
                </div>
            </div>
        </div>

        <div id="marketplaces" class="section white pb-no">
            <div class="container container-sm t-center">
                <h2>Auction Marketplaces</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit incidunt eos totam neque! Ducimus recusandae molestias, suscipit neque, sit inventore. Totam, adipisci eos numquam libero. Quasi dolore pariatur alias eligendi!</p>
            </div>
            
            <div class="marketplaces">
                <div class="marketplace sedo">
                    <a href="#" target="_blank">
                        <div class="text">
                            <img src="/img/sedo.png" alt="Sedo logo">
                            <h3>Auction in Sedo</h3>
                            <span>Beginning on march 30th</span>
                        </div>
                        <div class="slideshow">
                            <div class="mover-1">
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                            </div>
                        </div>
                    </a>
                </div><!--
                --><div class="marketplace flippa">
                    <a href="#" target="_blank">
                        <div class="text">
                            <img src="/img/flippa.png" alt="Flippa logo">
                            <h3>Auction in Flippa</h3>
                            <span>Beginning on march 30th</span>
                        </div>
                        <div class="slideshow">
                            <div class="mover-1">
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                                <span>domaine</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <script>
            function changeClass(ctx, state, height, parentHeight, length) {
                if (state == 'scroll') {
                    let time = length * 1.5;
                    ctx.css('transition', 'transform ' + time + 's linear');
                    ctx.css('transform', 'translateY(-' + height + 'px)');
                    setTimeout(function() {
                        changeClass(ctx, 'end', height, parentHeight, length);
                    }, time*1000);
                }
                else if (state == 'end') {
                    ctx.hide();
                    ctx.css('transition', 'transform 0s');
                    changeClass(ctx, 'ready', height, parentHeight, length);
                } 
                else if (state == 'ready')  {
                    ctx.css('transition', 'transform 0s');
                    ctx.css('transform', 'translateY(' + parentHeight + 'px)');
                    ctx.show();
                    changeClass(ctx, 'scroll', height, parentHeight, length);
                }
            }

            $('.mover-1').each(function() {
                var height = $(this).height();
                let parentHeight = $(this).parent('.slideshow').height();
                changeClass($(this), 'ready', height, parentHeight, $(this).children().length);
            });
        </script>

        <div class="section white">
            <div class="container t-left">
                <div class="container-sm">
                    <div class="title">
                        <h2 class="big">Other domains for sale</h2>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                    </div>
                </div>
                <div class="slider">
                    <div class="slide"><div class="domain">ara.bs</div></div>
                    <div class="slide"><div class="domain">budg.et</div></div>
                    <div class="slide"><div class="domain">capit.al</div></div>
                    <div class="slide"><div class="domain">commerci.al</div></div>
                    <div class="slide"><div class="domain">deal.ly</div></div>
                    <div class="slide"><div class="domain">financi.al</div></div>
                    <div class="slide"><div class="domain">healthca.re</div></div>
                    <div class="slide"><div class="domain">i.je</div></div>
                    <div class="slide"><div class="domain">insu.re</div></div>
                    <div class="slide"><div class="domain">m.tl</div></div>
                    <div class="slide"><div class="domain">ma.ga</div></div>
                    <div class="slide"><div class="domain">magn.et</div></div>
                    <div class="slide"><div class="domain">me.et</div></div>
                    <div class="slide"><div class="domain">meeti.ng</div></div>
                    <div class="slide"><div class="domain">o.fr</div></div>
                    <div class="slide"><div class="domain">oba.ma</div></div>
                    <div class="slide"><div class="domain">ome.ga</div></div>
                    <div class="slide"><div class="domain">profession.al</div></div>
                    <div class="slide"><div class="domain">que.st</div></div>
                    <div class="slide"><div class="domain">rig.ht</div></div>
                    <div class="slide"><div class="domain">secr.et</div></div>
                    <div class="slide"><div class="domain">sign.al</div></div>
                    <div class="slide"><div class="domain">softwa.re</div></div>
                    <div class="slide"><div class="domain">startu.ps</div></div>
                    <div class="slide"><div class="domain">stre.et</div></div>
                    <div class="slide"><div class="domain">swe.et</div></div>
                    <div class="slide"><div class="domain">t.gt</div></div>
                    <div class="slide"><div class="domain">ta.gs</div></div>
                    <div class="slide"><div class="domain">targ.et</div></div>
                    <div class="slide"><div class="domain">tick.et</div></div>
                    <div class="slide"><div class="domain">twe.et</div></div>
                    <div class="slide"><div class="domain">trium.ph</div></div>
                    <div class="slide"><div class="domain">trump.et</div></div>
                    <div class="slide"><div class="domain">univers.al</div></div>
                    <div class="slide"><div class="domain">ventu.re</div></div>
                    <div class="slide"><div class="domain">wall.et</div></div>
                    <div class="slide"><div class="domain">y.et</div></div>
                    <div class="slide"><div class="domain">aftermark.et</div></div>
                    <div class="slide"><div class="domain">ally.io</div></div>
                    <div class="slide"><div class="domain">antisoci.al</div></div>
                    <div class="slide"><div class="domain">arriv.al</div></div>
                    <div class="slide"><div class="domain">artifici.al</div></div>
                    <div class="slide"><div class="domain">america1.st</div></div>
                    <div class="slide"><div class="domain">americafir.st</div></div>
                    <div class="slide"><div class="domain">bitcoinwall.et</div></div>
                    <div class="slide"><div class="domain">bitn.et</div></div>
                    <div class="slide"><div class="domain">bits.me</div></div>
                    <div class="slide"><div class="domain">bore.al</div></div>
                    <div class="slide"><div class="domain">buck.et</div></div>
                    <div class="slide"><div class="domain">carous.al</div></div>
                    <div class="slide"><div class="domain">cere.al</div></div>
                    <div class="slide"><div class="domain">cheesebur.gr</div></div>
                    <div class="slide"><div class="domain">deal.ly</div></div>
                    <div class="slide"><div class="domain">dil.ly</div></div>
                    <div class="slide"><div class="domain">discre.et</div></div>
                    <div class="slide"><div class="domain">dri.vin</div></div>
                    <div class="slide"><div class="domain">education.al</div></div>
                    <div class="slide"><div class="domain">egoi.st</div></div>
                    <div class="slide"><div class="domain">ethic.al</div></div>
                    <div class="slide"><div class="domain">exception.al</div></div>
                    <div class="slide"><div class="domain">experiment.al</div></div>
                    <div class="slide"><div class="domain">fat.al</div></div>
                    <div class="slide"><div class="domain">fleck.io</div></div>
                    <div class="slide"><div class="domain">gen.re</div></div>
                    <div class="slide"><div class="domain">gpl.us</div></div>
                    <div class="slide"><div class="domain">homosexu.al</div></div>
                    <div class="slide"><div class="domain">horn.et</div></div>
                    <div class="slide"><div class="domain">illeg.al</div></div>
                    <div class="slide"><div class="domain">individu.al</div></div>
                    <div class="slide"><div class="domain">industri.al</div></div>
                    <div class="slide"><div class="domain">information.al</div></div>
                    <div class="slide"><div class="domain">intellectu.al</div></div>
                    <div class="slide"><div class="domain">itsvir.al</div></div>
                    <div class="slide"><div class="domain">leth.al</div></div>
                    <div class="slide"><div class="domain">liber.al</div></div>
                    <div class="slide"><div class="domain">lyric.al</div></div>
                    <div class="slide"><div class="domain">manu.al</div></div>
                    <div class="slide"><div class="domain">magn.et</div></div>
                    <div class="slide"><div class="domain">materi.al</div></div>
                    <div class="slide"><div class="domain">medicin.al</div></div>
                    <div class="slide"><div class="domain">o.foundation</div></div>
                    <div class="slide"><div class="domain">offici.al</div></div>
                    <div class="slide"><div class="domain">orient.al</div></div>
                    <div class="slide"><div class="domain">os.capital</div></div>
                    <div class="slide"><div class="domain">owl.et</div></div>
                    <div class="slide"><div class="domain">parent.al</div></div>
                    <div class="slide"><div class="domain">perpetu.al</div></div>
                    <div class="slide"><div class="domain">physic.al</div></div>
                    <div class="slide"><div class="domain">rainfore.st</div></div>
                    <div class="slide"><div class="domain">sarca.sm</div></div>
                    <div class="slide"><div class="domain">secr.et</div></div>
                    <div class="slide"><div class="domain">shorti.es</div></div>
                    <div class="slide"><div class="domain">six.am</div></div>
                    <div class="slide"><div class="domain">spati.al</div></div>
                    <div class="slide"><div class="domain">storehou.se</div></div>
                    <div class="slide"><div class="domain">strange.ly</div></div>
                    <div class="slide"><div class="domain">stre.et</div></div>
                    <div class="slide"><div class="domain">strict.ly</div></div>
                    <div class="slide"><div class="domain">suici.de</div></div>
                    <div class="slide"><div class="domain">sunri.se</div></div>
                    <div class="slide"><div class="domain">technic.al</div></div>
                    <div class="slide"><div class="domain">tex.to</div></div>
                    <div class="slide"><div class="domain">toast.to</div></div>
                    <div class="slide"><div class="domain">unre.al</div></div>
                    <div class="slide"><div class="domain">wallstre.et</div></div>
                    <div class="slide"><div class="domain">widg.et</div></div>
                </div>
            </div>
        </div>

        <script>
            $('.slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            });
        </script>

        <div id="news" class="section grey">
            <div class="container t-center">
                <div class="title">
                    <h2>News</h2>
                </div>
                <div class="news">
                    <div id="news-1" class="row">
                        <div class="col-md-4">
                            <a href="https://www.cnet.com/news/emoji-godaddy-domain-names/">
                                <div class="new">
                                    <div class="source">CNET</div>
                                    <div class="title">Emoji could soon take over domain names</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.101domain.com/blog/domaining/domain-hack-way-perfect-name">
                                <div class="new">
                                    <div class="source">101domain</div>
                                    <div class="title">Domain Hack Your Way to the Perfect Name</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://iwantmyname.com/blog/everything-you-need-to-know-about-domain-hacks">
                                <div class="new">
                                    <div class="source">IWantMyName</div>
                                    <div class="title">Everything you need to know about domain hacks</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="news-2" class="row">
                        <div class="col-md-4">
                            <a href="https://bitly.com/pages/resources/casestudies/increasing-engagement-the-power-of-a-branded-short-domain">
                                <div class="new">
                                    <div class="source">IWantMyName</div>
                                    <div class="title">Increasing Engagement: The Power of a Branded Short Domain</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.cnet.com/news/emoji-godaddy-domain-names/">
                                <div class="new">
                                    <div class="source">entrepreneur.com</div>
                                    <div class="title">Taco Bell Takes a Startup Approach in Launching 'Ta.co,' Its New Website</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="http://fortune.com/2015/09/29/taco-bell-new-website/">
                                <div class="new">
                                    <div class="source">Fortune</div>
                                    <div class="title">Taco Bell’s new URL is absolutely perfect</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="news-3" class="row">
                        <div class="col-md-4">
                            <a href="http://domainnamewire.com/2013/06/13/kim-dotcom-buys-k-im-domain-name-for-20000/">
                                <div class="new">
                                    <div class="source">DomainNameWire</div>
                                    <div class="title">Kim Dotcom buys K.im domain name for $20,000</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://qz.com/581248/chinas-latest-investment-craze-is-short-domain-names/">
                                <div class="new">
                                    <div class="source">entrepreneur.com</div>
                                    <div class="title">China’s newest investment craze is short domain names</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
                <a href="#" id="more-news" class="btn btn-opaque">Load more news</a>

                <script>
                    var news = 1;
                    $('#more-news').click(function(e) {
                        e.preventDefault();
                        news++;
                        $('#news-' + news).show();
                        if (news == 3) {
                            $(this).hide();
                        }
                    })
                </script>
            </div>
        </div>

        <div class="section white">
            <div class="container">
                <div class="container-sm">
                    <div class="title">
                        <h2>They <span class="heart"></span><span class="heart"></span><span class="heart"></span> short domains</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="domains">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="http://goo.gl">
                                <div class="domain">
                                    <div class="text">goo.gl</div>
                                    <img src="/img/logos/google.png" alt="Google Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://ta.co">
                                <div class="domain">
                                    <div class="text">ta.co</div>
                                    <img src="/img/logos/taco.png" alt="Taco Bell Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://cocacola.com">
                                <div class="domain">
                                    <div class="text"><div class="smile"></div>.ws</div>
                                    <img src="/img/logos/coca.png" alt="Coca cola Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://o.co">
                                <div class="domain">
                                    <div class="text">o.co</div>
                                    <img src="/img/logos/overstock.png" alt="Overstock Logo" class="logo">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="http://instagr.am">
                                <div class="domain">
                                    <div class="text">instagr.am</div>
                                    <img src="/img/logos/instagram.png" alt="Instagram Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://hy.pe">
                                <div class="domain">
                                    <div class="text">hy.pe</div>
                                    <img src="/img/logos/hype.png" alt="Hype Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://li.st">
                                <div class="domain">
                                    <div class="text">li.st</div>
                                    <img src="/img/logos/list.png" alt="Li.st Logo" class="logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://futu.re">
                                <div class="domain future">
                                    <div class="text">futu.re</div>
                                    <img src="/img/logos/future.png" alt="Futu.re Logo" class="logo">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section grey quotes">
            <div class="container">
                <div id="quotes" class="slider">
                    <div class="slide">
                        <div class="quote">
                            <div class="text">"Ease is the new loyalty"</div>
                            <div class="caption">
                                <div class="description">About ta.co</div>
                                <div class="person">Tressie Lieberman, Taco Bell Vice President of Digital</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="quote">
                            <div class="text">"My own URL shortener: K.im Coming soon :-)"</div>
                            <div class="caption">
                                <div class="description">About K.im</div>
                                <div class="person">Kim Dotcom, Megaupload/Mega Founder</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="quote">
                            <div class="text">"Not everyone would consider moving domains a “life change,” but it is to me."</div>
                            <div class="caption">
                                <div class="description">About Ma.tt</div>
                                <div class="person">Matt Mullenweg, Wordpress Founder</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="quote">
                            <div class="text">"emoji domains are great (...) I like them because they are short and visual."</div>
                            <div class="caption">
                                <div class="description">About emoji domains</div>
                                <div class="person">Blake Irving, GoDaddy CEO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#quotes').slick({
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000
            });
        </script>

        <div id="contact" class="section blue">
            <div class="container">
                <div class="contact">
                    <div class="title">
                        <h2 class="big">Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="label-control">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="label-control">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="budget" class="label-control">Budget</label>
                                            <select name="budget" class="form-control">
                                                <option value="3 000 - 5 000">3 000 - 5 000$</option>
                                                <option value="5 000 - 10 000">5 000 - 10 000$</option>
                                                <option value="10 000 - 20 000">10 000 - 20 000$</option>
                                                <option value="20 000 +">20 000$ +</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message" class="label-control">Message</label>
                                            <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn">Send email</button>
                            </form>

                            <script>
                            var $contactForm = $('#contact-form');
                            $contactForm.submit(function(e) {
                                e.preventDefault();
                                $.ajax({
                                    url: '//formspree.io/info@claim.club',
                                    method: 'POST',
                                    data: $(this).serialize(),
                                    dataType: 'json',
                                    beforeSend: function() {
                                        $contactForm.append('<div class="alert alert--loading">Sending message…</div>');
                                    },
                                    success: function(data) {
                                        $contactForm.find('.alert--loading').hide();
                                        $contactForm.append('<div class="alert alert--success">Message sent!</div>');
                                    },
                                    error: function(err) {
                                        $contactForm.find('.alert--loading').hide();
                                        $contactForm.append('<div class="alert alert--error">Oops, there was an error.</div>');
                                    }
                                });
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "partials/footer.php" ?>

    </body>
</html>