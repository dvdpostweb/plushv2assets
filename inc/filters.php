<section class="page thinrgray-bck padtb15" id="filters-holder">
    <div class="container-fluid">
        <a href="#" class="btn blue-facebook-bck radius2 padtb5 padlr25 f20 HelveticaCondensed" id="filter-search-btn">FILTER SEARCH <i class="ti ti-angle-down f14 marlr10 marr0"></i></a>
    </div>
    <!--filters-drop-->
    <div id="filters-drop" class="position-absolute thinrgray-bck overflow-hidden">

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
</section>
<script>
    $(document).ready(function () {

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

        //sticky filters on load
        stickyFiltersHolder();

        //sticky filters on page scroll
        $(window).scroll(function () {
            stickyFiltersHolder();
        })

        //filters blue button states
        $('#filter-search-btn').on('click', function () {
            $(this).toggleText('FILTER SEARCH <i class="ti ti-angle-up f14 marlr10 marr0"></i>', 'FILTER SEARCH <i class="ti ti-angle-down f14 marlr10 marr0"></i>')
            return false;
        });
        $('#filter-search-btn, #filters-drop-close-btn').on('click', function () {
            $('#filters-drop').toggleClass('open');
            if ($("#filters-drop").hasClass('overflow-hidden')) {
                setTimeout(function () {
                    $('#filters-drop').removeClass('overflow-hidden');
                }, 400);
            } else {
                $('#filters-drop').addClass('overflow-hidden');
            }
            return false;
        })


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
    })
</script>
