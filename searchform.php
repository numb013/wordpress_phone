<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="キーワード検索" />
        <input type="submit" id="searchsubmit" value="" />
    </div>
</form>