<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<!-- action désigne la page qui recoit pour traiter les informations-->

<section class="container">
    <div class="titre text-center mt-5 ">
        <h1>Contactez nous</h1>
    </div>

   
    <div class = "container">
        <form id="contact-form" role="form" method="POST" action="">
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nom</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Entrez le nom" required="required" data-error="Firstname is required.">
                    
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_surname">Prénom</label>
                            <input id="form_surname" type="text" name="surname" class="form-control" placeholder="Entrez le prénom" required="required" data-error="Lastname is required.">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrez le mail" required="required" data-error="Valid email is required.">
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Objet du message</label>
                            <select id="form_need" name="object" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>Selectionnez le sujet</option>
                                <option >Réserver une table</option>
                                <option >Annuler une réservation</option>
                                <option >autres</option>
                            </select>
                    
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Ecrivez votre message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        </div>
                    </div>


                    <div class="mt-3 col-md-12">
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message">
                    </div>
        
                </div>
            </div>
        </form>
    </div>


</section>


<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>

