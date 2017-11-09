<!-- start of the navbar 
 -->    <nav class="uk-navbar-container uk-offcanvas-content uk-padding-small uk-padding-remove-top uk-padding-remove-bottom" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active uk-active-text"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">
         <div class="uk-navbar-item">
                    <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a>

        </div>
        <ul class="uk-navbar-nav">
            <li>
                <a href="login.php"><button class="uk-button uk-button-default">SIGN IN</button></a>

            </li>
        </ul>
    </div>
    <div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-top" uk-height-viewport>
        <button class="uk-modal-close-full" type="button" uk-close></button>
        <form class="uk-search uk-search-large">
            <input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus>
        </form>
    </div>
</div>
</nav>
