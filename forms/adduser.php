
<form method="POST" >
    <div class="row row-space">

        <div class="col-2">
            <div class="input-group">
                <label class="label">Nom</label>
                <input class="input--style-4" type="text" name="nom" placeholder="Nom" >
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Prenom</label>
                <input class="input--style-4" type="text" name="prenom" placeholder="Prenom">
            </div>
        </div>
    </div>
    <div class="row row-space">  
        <div class="col-2">
            <div class="input-group">
                <label class="label">Email</label>
                <input class="input--style-4" type="text" name="email" placeholder="Email">
            </div>
        </div>

        <div class="col-2" >
        <div class="input-group">
                <label class="label">Interime</label>
                <input class="input--style-4" type="text" name="interime" placeholder="Interime">
            </div>
        </div>
    </div>

    <div class="row row-space">   

    <div class="col-2">
            
        <div class="input-group">
            <label class="label">Supérieur</label>
            <input class="input--style-4" list="list_resp"   name="superieur" placeholder="Supérieur">
                <datalist id="list_resp">
                    <?php get_list('sup') ?>
                </datalist>

        </div> 
    </div> 
        <div class="col-2">
            <div class="input-group">
                <label class="label">Solde</label>
                <input class="input--style-4" type="text" name="solde" placeholder="solde">
            </div>
        </div>
    </div>
    <div class="row row-space">

        <div class="col-2">

            <div class="input-group">

                <label class="label">Status</label>
                <div class="p-t-10">
                    <label class="radio-container m-r-45">Employé
                        <input type="radio" checked="checked" name="status" value ="usr">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Responsable
                        <input type="radio" name="status" value ="resp">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">RH
                        <input type="radio" name="status" value ="rh">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
       

        <div class="col-2">
            <div class="p-t-15">
                <button class="btn btn--radius-2 btn--blue" onclick=sendMail() type="submit" name="ajouter" >Ajouter</button>
            </div>
        </div>
        
    </div>

    </div>

    

    </div>
</form>
