<!--FILTERS HOLDER-->
<section class="page thinrgray-bck padtb15" id="filters-holder">
    <div class="container-fluid">
        <a href="#" class="btn blue-facebook-bck radius2 padtb5 padlr25 f20 HelveticaCondensed" id="filter-search-btn">FILTER SEARCH <i class="ti ti-angle-down f14 marlr10 marr0"></i></a>
    </div>
    <!--filters-drop-->
    <div id="filters-drop" class="position-absolute thinrgray-bck">

        <div id="filters-drop-close-btn"></div>
        <div class="container-fluid">
            <ul id="filters-blocks">

                <!--FIRST FILTER BLOCK-->
                <li>
                    <!--CATEGORIES-->
                    <div class="f15" id="categories">
                        <label class="OpenSansCondensed f20 black">Catégories</label>
                        <div class="col-md-11 col-sm-11 col-xs-11 mart5 text-left">
                            <a href="">Derniers ajouts</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Les plus populaires</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Dernière chance</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Les mieux côtés</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Les mieux côtés</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Bientôt disponible</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Nouveautés</a>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 text-left mart10">
                            <a href="">Haute Définition</a>
                        </div>
                    </div>
                    <!--/CATEGORIES-->
                </li>
                <!--/FIRST FILTER BLOCK-->

                <!--SECOND FILTER BLOCK-->
                <li>
                    <!--GENRES DROPDOWN-->
                    <div id="genres">
                        <label class="OpenSansCondensed f20 black">Genres</label>
                        <select class="dropdown-select" id="genres-dropdown" name="genres">
                            <option selected="selected">Select..</option>
                            <option value="Action">Action</option>
                            <option value="Animation">Animation</option>
                            <option value="Cineclub">Cineclub</option>
                            <option value="Court-métrage">Court-métrage</option>
                            <option value="Crime">Crime</option>
                            <option value="Documentaires">Documentaires</option>
                            <option value="Erotiques">Erotiques</option>
                            <option value="Histoire & Culture">Histoire & Culture</option>
                            <option value="Humour">Humour</option>
                            <option value="Science-fiction">Science-fiction</option>
                            <option value="Voyage & Découverte">Voyage & Découverte</option>
                        </select>
                        <div class="tags-autocomplete-holder block100"></div>
                    </div>
                    <!--/GENRES DROPDOWN-->

                    <!--AUDIO-->
                    <div id="audio" class="mart15">
                        <label class="OpenSansCondensed f20 black">Audio</label>
                        <select data-placeholder="Search audio" class="chosen-select" multiple tabindex="4">
                            <option value=""></option>
                            <option value="1">Français</option>
                            <option value="2">Néerlandais</option>
                            <option value="3">Anglais</option>
                            <option value="4">Flamand</option>
                            <option value="5">Espagnol</option>
                            <option value="6">Portugais</option>
                            <option value="7">Italien</option>
                            <option value="8">Hongrois</option>
                            <option value="9">Japonais</option>
                            <option value="10">Mongol</option>
                            <option value="11">Bambara</option>
                            <option value="12">Ladakhi</option>
                            <option value="13">Slovaque</option>
                            <option value="14">Tagalog</option>
                            <option value="15">Géorgien</option>
                        </select>
                    </div>
                    <!--/AUDIO-->

                    <!--SUBTITLES-->
                    <div id="subtitles-tags" class="mart15">
                        <label class="OpenSansCondensed f20 black">Subtitles</label>
                        <select data-placeholder="Choose subtitle" class="chosen-select" multiple tabindex="4">
                            <option value=""></option>
                            <option value="1">Français</option>
                            <option value="2">Néerlandais</option>
                            <option value="3">Allemand pour malentendants</option>
                            <option value="4">Arabe</option>
                            <option value="5">Espagnol</option>
                            <option value="6 Samoa">Corse</option>
                            <option value="7">Italien</option>
                            <option value="8">Roumain</option>
                            <option value="9">Suédois</option>
                            <option value="10">Turc</option>
                            <option value="11">Russe</option>
                            <option value="12">Néerlandais pour Malentendants</option>
                        </select>
                    </div>
                    <!--/SUBTITLES-->

                </li>
                <!--/SECOND FILTER BLOCK-->

                <!--THIRD FILTER BLOCK-->
                <li>
                    <!--FROM-TO DROPDOWNS-->
                    <div id="from-to">
                        <label class="OpenSansCondensed f20 block100">Years</label>
                        <div class="col-md-5 col-sm-5 col-xs-5 position-relative">
                            <select class="dropdown-select" id="from-dropdown" name="from">
                                <option selected="selected">From</option>
                                <option value="1920">1920</option>
                                <option value="1925">1925</option>
                                <option value="1930">1930</option>
                                <option value="1945">1945</option>
                                <option value="1955">1955</option>
                                <option value="1980">1980</option>
                                <option value="1990">1990</option>
                                <option value="2000">2000</option>
                                <option value="2010">2010</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 text-center padt10">-</div>
                        <div class="col-md-5 col-sm-5 col-xs-5 position-relative">
                            <select class="dropdown-select" id="to-dropdown" name="to">
                                <option selected="selected">To</option>
                                <option value="1920">1920</option>
                                <option value="1925">1925</option>
                                <option value="1930">1930</option>
                                <option value="1945">1945</option>
                                <option value="1955">1955</option>
                                <option value="1980">1980</option>
                                <option value="1990">1990</option>
                                <option value="2000">2000</option>
                                <option value="2010">2010</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>
                    <!--/FROM-TO DROPDOWNS-->

                    <!--PUBLIC SLIDER-->
                    <div class="mart15 block100" id="public-range-slider">
                        <label class="OpenSansCondensed f20 black">Public</label>
                        <div id="range-slider">
                            <div id="custom-range-handle" class="ui-slider-handle"></div>
                        </div>
                    </div>
                    <!--/PUBLIC SLIDER-->

                    <!--PAYS OPTIONS-->
                    <div class="mart15 block100" id="pays-tags">
                        <label class="OpenSansCondensed f20 black">Pays</label>
                        <select data-placeholder="Payment options" class="chosen-select" multiple tabindex="4">
                            <option value=""></option>
                            <option value="1">Algérie</option>
                            <option value="2">Argentine</option>
                            <option value="3">Australie</option>
                            <option value="4">Burkina Faso</option>
                            <option value="5">Canada</option>
                            <option value="6 Samoa">Corse</option>
                            <option value="7">Tchad</option>
                            <option value="8">Suédois</option>
                            <option value="9">République tchèque</option>
                        </select>

                    </div>
                    <!--/PAYS OPTIONS-->

                </li>
                <!--/THIRD FILTER BLOCK-->

                <!--FOURTH FILTER BLOCK-->
                <li>
                    <!--LISTING SLIDER-->
                    <div id="listing-range-slider">
                        <label class="OpenSansCondensed f20 black">Cotations</label>
                        <div id="listing-slider">
                            <div id="custom-listing-handle" class="ui-slider-handle"></div>
                        </div>
                    </div>
                    <!--/LISTING SLIDER-->

                    <!--SWITCH VIEW PANEL-->
                    <div id="listing-range-slider" class="mart15 switch-view-panel">
                        <label class="OpenSansCondensed f20 black">Views</label>
                        <div class="block100">
                            <select class="dropdown-select" id="sort-dropdown">
                                <option selected disabled="disabled">Trier par ...</option>
                                <option value="Sans-tri">Sans tri</option>
                                <option value="a-z">A->Z</option>
                                <option value="z-a">Z->A</option>
                                <option value="cotations">Cotations</option>
                                <option value="les-plus-visionnes">Les plus visionnés</option>
                                <option value="les-plus-visionnes-one">Les plus visionnés (1 an)</option>
                                <option value="nouveautes">Nouveautés</option>
                            </select>
                        </div>
                        <div class="block100 mart15">
                            <a href="#" id="grid-view-switch" class="dark-blue radius2" title="Grid View"><i class="fa fa-th-large f15"></i></a>
                            <a href="#" id="list-view-switch" class="dark-blue radius2 marl10" title="List View"><i class="fa fa-list f15"></i></a>
                            <a href="#" id="activate" class="btn f11 dark-blue-bck white">Auto pagination</a>
                        </div>
                    </div>
                    <!--SWITCH VIEW PANEL-->
                </li>
                <!--/FOURTH FILTER BLOCK-->
            </ul>
        </div>
    </div>
    <!--/filters-drop-->
</section><!--/FILTERS HOLDER-->

<!--HOME DVD SLIDERS HOLDER-->
<section class="page home-carousel-holder">

    <!--NOT TO BE MISSED - SLIDER-->
    <div class="container-fluid">
        <h2>Not to be missed</h2>
    </div>
    <div class="container-fluid padt20">
        <div class="home-carousel slider marb20">
            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover8.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Oblivion(2013)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover7.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Come Together(2008)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover6.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Ghost in the Shell(2017)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover5.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Popeye(2016)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->
            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover4.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Aftermath(2014)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->
        </div>
    </div>
    <!--/NOT TO BE MISSED - SLIDER-->


    <!--CATEGORY 2 - SLIDER-->
    <div class="container-fluid">
        <h2>Category 2</h2>
    </div>
    <div class="container-fluid padt20">
        <div class="home-carousel slider marb20">
            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover8.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Oblivion(2013)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover7.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Come Together(2008)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover6.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Ghost in the Shell(2017)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover5.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Popeye(2016)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->
            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover4.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Aftermath(2014)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->
        </div>
    </div>
    <!--/CATEGORY 2 - SLIDER-->


    <!--CATEGORY 3 - SLIDER-->
    <div class="container-fluid">
        <h2>Category 3</h2>
    </div>
    <div class="container-fluid padt20">
        <div class="home-carousel slider marb20">
            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover8.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Oblivion(2013)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover7.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Come Together(2008)</h4>
                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover6.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Ghost in the Shell(2017)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="ti ti-pin-alt f20"></i></span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover5.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Popeye(2016)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="fa fa-play-circle"></i>
                        </span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->
            </div>
            <!--/SLIDER SLIDE-->

            <!--SLIDER SLIDE-->
            <div>
                <a href="#" class="popper"><img src="images/template/_dvd_cover4.jpg" class="img-responsive"></a>

                <!--COVER OVERLAY-->
                <div class="cover-overlay">

                    <!--COVER OVERLAY INNER-->
                    <div class="cover-overlay-inner mar0 pad0 position-relative">
                        <h4 class="dark-gray mart20 marb0 bold text-center uppercase f25 HelveticaCondensed">Aftermath(2014)</h4>

                        <div class="block100 cover-icons-holder">
                            <!--trailer movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle play icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse"><i class="fa fa-play-circle"></i></span>
                                </a>
                                <!--/circle play icon-->
                                <div class="position-relative stack-title">
                                    <span>trailer</span>
                                </div>
                            </div>
                            <!--/trailer movie-->

                            <!--pin movie button-->
                            <div class="cover-overlay-icon">
                                <!--circle pin icon-->
                                <a href="#" class="fa-stack">
                                    <i class="fa fa-circle circle-bg"></i>
                                    <span class="fa fa-stack-1x fa-inverse">
                            <i class="ti ti-pin-alt f20"></i>
                        </span>
                                </a>
                                <!--/circle pin icon-->
                                <div class="position-relative stack-title">
                                    <span>add to wishlist</span>
                                </div>
                            </div>
                            <!--/pin movie-->
                        </div>
                        <!--/cover icons-->

                        <!--raty stars-->
                        <div class="block100 slide-score green text-center" data-score="3"></div>
                        <!--/raty stars-->

                        <!--raty users-->
                        <div class="block100 white text-center">
                            <i class="fa fa-user"></i> 34
                        </div>
                        <!--/raty users-->

                        <!--overlay bottom-->
                        <div class="cover-overlay-bottom">
                            <div class="white green-bck padtb15 padlr10 center-block overflow-hidden radius2 overlay-watch-btn">
                                <a href="" class="pull-left uppercase f12 bold">watch now</a>
                                <span class="display-inline pull-right white uppercase f12 bold">2.99€</span>
                            </div>

                            <div class="mart10 padtb15 padlr10 center-block overflow-hidden radius2 overlay-redeem-btn">
                                <a href="" class="block100  uppercase f12 bold text-center">redeem voucher</a>
                            </div>
                        </div>
                        <!--overlay bottom-->

                    </div>
                    <!--/COVER OVERLAY INNER-->
                </div>
                <!--/COVER OVERLAY-->

                <!--SHOW/HIDE ADAPTIVE DETAILS-->
                <p class="show-hide-details position-absolute white">
                    <i class="fa fa-window-close"></i>
                </p>
                <!--/SHOW/HIDE ADAPTIVE DETAILS-->

            </div>
            <!--/SLIDER SLIDE-->
        </div>
    </div>
    <!--/CATEGORY 3 - SLIDER-->


</section><!--/HOME DVD SLIDERS HOLDER-->

<!--SCRIPTS-->
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.waitforimages.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/skrollr.js" type="text/javascript"></script>
<script src="js/jquery.raty-fa.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        // modernizr
        function checkModernizr() {
            if (Modernizr.mq('(min-width: 480px)')) {
                popoverTrig();
            }
            if (Modernizr.mq('(max-width: 479px)')) {
                $('.popper').popover('destroy');
            }
        }

        // the call to checkMq here will execute after the document has loaded
        checkModernizr();

        //window resize/scroll callback functions
        $(window).resize(function () {
            checkModernizr();
        });
        $(window).scroll(function () {
            stickyFiltersHolder();
        })

        //filters holder sticky function
        function stickyFiltersHolder() {
            setTimeout(function () {
                var stickyHolder = $('section#filters-holder');
                var stickyHolderFixPoint = $('#hero').outerHeight() + $('.header').outerHeight();
                if ($(window).scrollTop() >= stickyHolderFixPoint) {
                    stickyHolder.addClass('stickyFilter');
                }
                if ($(window).scrollTop() < stickyHolderFixPoint) {
                    stickyHolder.removeClass('stickyFilter');
                }
            }, 200);
        }

        stickyFiltersHolder();

        //filters blue button states
        $('#filter-search-btn').on('click', function () {
            $(this).toggleText('FILTER SEARCH <i class="ti ti-angle-up f14 marlr10 marr0"></i>', 'FILTER SEARCH <i class="ti ti-angle-down f14 marlr10 marr0"></i>')
            return false;
        });
        $('#filter-search-btn, #filters-drop-close-btn').on('click', function () {
            $('#filters-drop').toggleClass('open');
            return false;
        })
        //selectmenu dropdown
        $(".dropdown-select").selectmenu();

        //chosen(tags)
        $('.chosen-select').chosen({allow_single_deselect: false});

        // cotations range slider
        var listing_handle = $("#custom-listing-handle");
        var listing_sizes = [1, 2, 3, 4, 5];
        var initialValueListing = 2;
        listing_handle.text(listing_sizes[initialValueListing]);

        $("#listing-slider").slider({
            value: initialValueListing,
            min: 0,
            max: listing_sizes.length - 1,
            create: function (event, ui) {
                listing_handle.text(listing_sizes[ui.value]);
            },
            slide: function (event, ui) {
                listing_handle.text(listing_sizes[ui.value]);
            }
        });


        // public range slider
        var range_handle = $("#custom-range-handle");
        var range_sizes = ["ALL", "-10", "-12", "-16", "-18"];
        var initialValue = 2;
        range_handle.text(range_sizes[initialValue]);

        $("#range-slider").slider({
            value: initialValue,
            min: 0,
            max: range_sizes.length - 1,
            create: function (event, ui) {
                range_handle.text(range_sizes[ui.value]);
            },
            slide: function (event, ui) {
                range_handle.text(range_sizes[ui.value]);
            }
        });

        // switch movies view
        $(document).on('click', '#grid-view-switch', function (e) {
            $('input[name=view_movies]').val('grid');
            $('.content-right').attr('id', 'grid');
            ajaxFilters();
            return false;
        })
        $(document).on('click', '#list-view-switch', function (e) {
            $('input[name=view_movies]').val('list');
            $('.content-right').attr('id', 'list');
            ajaxFilters();
            return false;
        })

        //hero images slider
        $('.hero-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            slidesToShow: 1,
            cssEase: 'linear',
            autoplay: true,
        });

        //dvd covers slider
        $('.home-carousel').slick({
            dots: false,
            infinite: false,
            speed: 200,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        })

        //raty stars
        $('.slide-score').raty({
            readOnly: false,
            score: function () {
                return $(this).attr('data-score');
            }
        });
        $("i.fa-fw").on('click', function () {
            var score = $(this).attr("data-score");
            alert(score);
            //save to database
        });

        //dvd slider popover
        function popoverTrig() {
            var originalLeave = $.fn.popover.Constructor.prototype.leave;
            $.fn.popover.Constructor.prototype.leave = function (obj) {
                var self = obj instanceof this.constructor ? obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
                originalLeave.call(this, obj);

                if (obj.currentTarget) {
                    self.$tip.one('mouseenter', function () {
                        clearTimeout(self.timeout);
                        self.$tip.one('mouseleave', function () {
                            $.fn.popover.Constructor.prototype.leave.call(self, self);
                        });
                    })
                }
            };
            $('.popper').popover({
                placement: 'auto left',
                trigger: 'hover',
                container: 'body',
                html: true,
                delay: {
                    show: 300,
                    hide: 100
                },
                content: function () {
                    return $(this).next('.cover-overlay').html();
                }
            })

        }
    })

    $(function () {
        //adaptive dvd cover overlay show/hide
        $('.show-hide-details').on('click', function () {
            $(this).toggleText('<i class="fa fa-list-alt"></i>', '<i class="fa fa-window-close"></i>')
            $(this).prev('.cover-overlay').toggleClass('overlay-off');
        });

        //dvd cover overlay click
        $(".cover-overlay-icon .fa-stack").click(function () {
            //alert('clicked');
            return false;
        })
    })

</script><!--/SCRIPTS-->