<div class="grid">
    <?php
    if (isset($_GET['album']))
    {
        $container->Functions()->GetAlbumContent($_GET['album']);
    }
    else if (!isset($_GET['album']))
    {
        $container->Functions()->GetAlbums();
    }
    ?>
</div>
<script src="static/js/loading-cell.js"></script>