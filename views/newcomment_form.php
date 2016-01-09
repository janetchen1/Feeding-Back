<form action="getcomments.php" id="newcomment" method="post">
    <fieldset>
        <div class="form-group">
            <label for="cafe_name">Cafe </label>
            <select id="cafe_name" name="cafename">
                <option value="" selected="selected">- None -</option>
                <option value="bauer_cafe">Bauer Cafe</option>
                <option value="cgis">CGIS</option>
                <option value="lise">LISE</option>
                <option value="chauhaus">Chauhaus</option>
                <option value="cronkhite">Cronkhite</option>
                <option value="barker">Barker</option>
                <option value="observatory">Observatory</option>
                <option value="dudley">Dudley</option>
                <option value="greenhouse">Greenhouse</option>
                <option value="hks">HKS</option>
                <option value="lamont">Lamont</option>
                <option value="northwest">Northwest</option>
                <option value="sebastians">Sebastians</option>
            </select>
        </div>
            
        <div class="form-group">
            <label for="edit-submitted-graduate-dining-hall">Graduate Dining Hall </label>
            <select class="grad-hall form-select" id="edit-submitted-graduate-dining-hall" 
            name="graduate_dining_hall">
                <option value="" selected="selected">- None -</option>
                <option value="dudley">Dudley</option>
                <option value="cronkhite">Cronkhite</option>
            </select>
        </div>
            
        <div class="form-group">
            <label for="edit-submitted-undergraduate-dining-hall">Undergraduate Dining Hall </label>
            <select class="undergrad-hall form-select" id="edit-submitted-undergraduate-dining-hall" 
            name="undergraduate_dining_hall">
                <option value="" selected="selected">- None -</option>
                <option value="adams">Adams</option>
                <option value="annenberg">Annenberg</option>
                <option value="cabot">Cabot</option>
                <option value="pforzheimer">Pforzheimer</option>
                <option value="currier">Currier</option>
                <option value="dunster">Dunster</option>
                <option value="mather">Mather</option>
                <option value="eliot">Eliot</option>
                <option value="kirkland">Kirkland</option>
                <option value="leverett">Leverett</option>
                <option value="lowell">Lowell</option>
                <option value="winthrop">Winthrop</option>
                <option value="quincy">Quincy</option>
            </select>
        </div>
            
        <div class="form-group">
            <input class="form-clear form-checkbox" type="checkbox" 
            id="edit-submitted-cc-flp-1" name="submitted[cc_flp][crimson_catering ]" 
            value="crimson_catering ">  
            <label class="option" for="edit-submitted-cc-flp-1"> Crimson Catering </label>
        </div>
        
        <div class="form-group">
            <input class="form-clear form-checkbox" type="checkbox" 
            id="edit-submitted-cc-flp-2" name="submitted[cc_flp][flp ]" 
            value="flp ">
                <label class="option" for="edit-submitted-cc-flp-2"> Food Literacy Project </label>
        </div>
            
            
        <div class="form-group">
            <label for="edit-submitted-name">Name </label>
            <input type="text" id="edit-submitted-name" name="name" 
            value="" size="20" maxlength="128" class="form-text">
        </div>
        
        <div class="form-group">
            <label for="edit-submitted-phone">Phone </label>
            <input type="text" id="edit-submitted-phone" name="phone" value="" size="20" maxlength="128" class="form-text">
        </div>
        
        <div class="form-group">
            <label for="edit-submitted-email">Email </label>
            <input class="email form-text form-email" type="email" id="edit-submitted-email" name="email" size="20">
        </div>
        <br>
                    
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Send
            </button>
        </div>

    </fieldset>
    
</form>

<div id="commentbox">
    <label for="entercomment">Comment </label>
    <textarea rows="5" cols="60" name="comment" form="newcomment" id="entercomment">
    </textarea>
</div>