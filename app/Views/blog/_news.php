<div class="tb-2 my-2 text-center">
    <div class="news">
        <div class="news-header"><h4>News</h4></div>
        <div class="news-body">
            <?php if (isset($news)):
                foreach ($news as $key => $value) {
                    echo "<p>" . $key . ": </p><i>" . $value . "</i>";
                } endif;
            ?>
        </div>
    </div>
</div>