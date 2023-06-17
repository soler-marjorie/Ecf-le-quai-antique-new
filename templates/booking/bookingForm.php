<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<div class="booking">
    <form action="POST" class="booking_form">
        <div class="booking_container">

            <div class="form_group">
                <label for="form_name">Nom</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Entrez le nom" required="required" data-error="Firstname is required.">
            </div>

            <div class="form_group">
                <label for="form_surname">Prénom</label>
                <input id="form_surname" type="text" name="surname" class="form-control" placeholder="Entrez le prénom" required="required" data-error="Lastname is required.">
            </div>
            
           
            <div class="form_group">
                <label for="form_email">Email</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrez le mail" required="required" data-error="Valid email is required.">   
            </div>
           
            <div class="form_group">
                <label for="form_person">Nombre de personnes</label>
                <input id="form_person" type="number" name="person" class="form-control" placeholder="Entrez le nombre de personnes" required="required" data-error="number person email is required.">   
            </div>

            <div class="form_group">
                <label for="form_allergy">Selectionnez des allergies:</label>
                <select name="allergy" id="form_allergy">
                    <input type="checkbox" name="Allergy" value="Aucune">Aucune</input>
                    <input type="checkbox" name="Allergy" value="Gluten">Gluten</input>
                    <input type="checkbox" name="Allergy" value="Moutarde">Moutarde</input>
                    <input type="checkbox" name="Allergy" value="Crustacés">Crustacés</input>
                    <input type="checkbox" name="Allergy" value="oeufs">oeufs</input>
                    <input type="checkbox" name="Allergy" value="poissons">poissons</input>
                    <input type="checkbox" name="Allergy" value="arachides">arachides</input>
                    <input type="checkbox" name="Allergy" value="lactose">lactose</input>
                    <input type="checkbox" name="Allergy" value="fruitsCoques">fruits à coques</input>
</select>
            </div>

            <div class="form_group">
                <label for="form_date">Sélectionnez une date</label>
                <input type="date" name="date" id="form_date">
            </div>

            <div class="form_group">
                <label for="form_day">Veuillez choisir une horaire</label>
                <select name="day" id="form_day">
                    <optgroup label="Matin" name="matin">
                        <option value="schedules1">12:00</option>
                        <option value="schedules2">12:15</option>
                        <option value="schedules3">12:30</option>
                        <option value="schedules4">12:45</option>
                        <option value="schedules5">13:00</option>
                    </optgroup>

                    <optgroup label="Soir" name="soir">
                        <option value="schedules6">19:00</option>
                        <option value="schedules7">19:15</option>
                        <option value="schedules8">19:30</option>
                        <option value="schedules9">19:45</option>
                        <option value="schedules10">20:00</option>
                        <option value="schedules11">20:15</option>
                        <option value="schedules12">20:30</option>
                        <option value="schedules13">20:45</option>
                        <option value="schedules14">21:00</option>
                    </optgroup>
                </select>
            </div>

        </div> 
    </form>
</div>


<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>