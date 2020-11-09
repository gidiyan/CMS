<div class="tb-2 my-2 text-center">
    <div class="card">
        <div class="card-header"><h4>Your Messages</h4></div>
        <div class="card-body">
            <?php
            if (isset($messages)):
                foreach ($messages as $message) {
                    echo "<p> User " . $message->username . " post with this " . $message->subject . " message " . $message->message . " at " . $message->created_at . "</p>";
                }
            endif;
            ?>
        </div>
    </div>
</div>