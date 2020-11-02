<div class="no_goods"></div>
<div class="text_">
    <div class="row">
        <div class="tb-2 my-2 text-center">
            <div class="news">
                <div class="news-header"><h4>News</h4></div>
                <div class="news-body">
                    <?php if (isset($news)):
                    foreach ($news as $key => $value) {
                        echo "<p>" . $key . ": </p><i>" . $value."</i>";
                    } endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="tb-2 my-2 text-center">
            <div class="card">
                <div class="card-header"><h4>Your Messages</h4></div>
                <div class="card-body">
                    <?php
                    if (isset($messages)):
                        foreach ($messages as $key => $value) {
                            echo "<p> User " . $value['username'] . " post with this " . $value['subject'] . " message " . $value['message'] . " at " . $value['created_at'] . "</p>";
                        }
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
