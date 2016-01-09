<form id="home" action="replyprepare.php" method="post">
    <fieldset>
        <div>
        <?php foreach ($positions as $position): ?>
            <div class="comment">
                <p>
                <?php if ($position["location"] != NULL): ?>
                    <b>Location: <?= $position["location"] ?></b>
                    <br>
                <?php endif ?>
                
                <?php if ($position["user"] != NULL): ?>
                    <b>From: <?= $position["user"] ?></b>
                    <br>
                <?php endif ?>
                
                <?php if ($position["time"] != NULL): ?>
                    <b>Received: <?= $position["time"] ?></b>
                    <br>
                <?php endif ?>
                
                <?php if ($position["comment"] != NULL): ?>
                    <?= $position["comment"] ?>
                    <br>
                <?php endif ?>
                
                <?php if ($position["email"] != NULL || $position["phone"] != NULL): ?>
                    <button class="btn btn-default" name="userid" type="submit" value="<?php echo htmlspecialchars($position["id"]); ?>"
                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                    Reply
                    </button>
                <?php endif ?>
                </p>
            </div>
            <br>
        <?php endforeach ?> 
        </div>
        
    </fieldset>
</form>

