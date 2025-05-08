<form
    role="search"
    method="get"
    action="<?php echo esc_url(home_url('/')); ?>"
    class="search-form">
    <button>
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
    <label>
        <input type="search" class="search-field"
            placeholder="Rechercher"
            value="<?php echo get_search_query(); ?>"
            name="s">
    </label>
</form>