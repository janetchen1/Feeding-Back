<form action="reply.php" id="reply" method="post">
    <fieldset>
        
        <div id="reply">
        <?php if ($user["useremail"] != NULL): ?>
            <br>
            <div class="form-group">
                To: <input autocomplete="off" name="to" type="text" size="35"
                value="<?= htmlspecialchars($user["useremail"]); ?>"/>
            </div>
            <br>
                    
            <div class="form-group">
                Subject: <input class="form-control" name="subject" value="HUDS Feedback Reply" type="text"/>
            </div>
            <br>
                    
            <div class="form-group">
                <textarea rows="12" cols="70" name="message" form="reply">
                </textarea>
            </div>
            <br>
                    
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                    Send
                </button>
            </div>
        <?php endif ?>
                
        <?php if ($user["phone"] != NULL): ?>
        <p>    
            Phone: <?= htmlspecialchars($user["user"]) . ", " . htmlspecialchars($user["phone"]) ?>
        </p>
        <?php endif ?>
        <br>
        </div>

    </fieldset>
</form>