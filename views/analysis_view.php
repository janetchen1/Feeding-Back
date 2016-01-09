<?php foreach ($locations as $location): ?>
            <div class="comment">
                <p>
                    <!-- display location and comment quantity -->
                    <?php if ($location["location"] == ""): ?>
                        <h2><b>Location Unspecified</b></h2>
                    <?php endif ?>
                    
                    <?php if ($location["location"] != ""): ?>
                        <h2><b>Location: <?= $location["location"] ?></b></h2>
                    <?php endif ?>
                   
                    <br>
                
                    <b>Comments Received: <?= $location["num_comments"] ?></b>
                    <br>
                    <br>
                    
                
                <?php if ($location["num_comments"] != 0): ?>
                    <!-- section and divs for scores -->
                    <section>
                        <div id="overall">
                            <h4>Overall Score</h4>
                            <br>
                            <h2><?= $location["overall"] ?></h2>
                        </div>
                        
                        <div id="service">
                            <h4>Service Score</h4>
                            <br>
                            <h2><?= $location["service"] ?></h2>
                        </div>
                        
                        <div id="food">
                            <h4>Food Score</h4>
                            <br>
                            <h2><?= $location["food"] ?></h2>
                        </div>
                        
                    </section>
                    
                <?php endif ?>
                
                </p>
            </div>
            <br>
        <?php endforeach ?> 