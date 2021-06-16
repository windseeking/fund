<aside class="col-2">

    <?php dynamic_sidebar('innovations_sidebar'); ?>

    <form method="get" action="innovations.php"
          class="form-inline md-form form-sm active-yellow mt-2 justify-content-center">
        <span style="color: #5a6268"><i class="fas fa-search mr-3" aria-hidden="true"></i></span>
        <input class="form-control form-control-sm mr-3 w-75" name="search" type="search"
               placeholder="<?= $search_placeholder; ?>"
               aria-label="Search">
    </form>
</aside>