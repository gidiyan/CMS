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