<form method="get" action="<?php echo home_url('/') ?>" class="form">
    <div class="form-group group-with-buttton">
        <input name="s" value="<?php echo get_search_query(); ?>" type="text" class="form-control" placeholder="eg. ลาเต้,มอคค่า,คาปู">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>