<?php
$title = 'contact';
require 'partials/header.php';?>


    <div>
        <form method="post">

            <div>
                <label for="civilite">Civilité</label>

                <input type="radio" id="mrs" name="civilite" value="Mrs">
                <label for="mrs">Monsieur</label>

                <input type="radio" id="mme" name="civilite" value="Mme">
                <label for="mme">Madame</label>
            </div><br>

            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div><br>

            <div>
                <label for="sujet">Sujet</label>
                <select name="sujet" id="sujet">
                    <option value="Proposition de Stage">Proposition de Stage</option>
                    <option value="Proposition d'emploi">Proposition d'emploi</option>
                    <option value="Demande de projet">Demande de projet</option>
                </select>
            </div><br><br>

            <label for="message">Message</label>

            <div>
               
                <textarea name="message" id="message" rows="10" cols="50">Vous pouvez écrire votre message ici.</textarea>
            </div><br>

            <button type="submit">Envoyer</button>

        </form>

    </div>


    <?php require 'partials/footer.php'; ?>
