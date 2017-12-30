<form class="navbar-form navbar-right" id="searchform" role="search" method="get" action="<?php echo home_url( '/' ) ?>">
    <div class="input-group">
        <input class="form-control" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск...">

        <div class="input-group-btn">
            <button type="submit" id="searchsubmit" class="btn btn-default"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
        </div>
    </div>
</form>