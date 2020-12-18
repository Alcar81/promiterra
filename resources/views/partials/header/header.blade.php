        <header id="header" class="header-transparent light menu-split">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    @include('partials.header.logo')
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->


                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                        @include('partials.menus.mainmenu')
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
