
<?php
check_connected();
?>

<form method="POST" >
    <div class="row row-space">

        <div class="col-2">
            <div class="input-group">
                <label class="label">Nom</label>
                <input class="input--style-4" type="text" name="Nom" value="<?php echo $_SESSION['Nom'];?>" disabled>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Prenom</label>
                <input class="input--style-4" type="text" name="Prenom" value="<?php echo $_SESSION['prenom'];?>" disabled>
            </div>
        </div>
        </div>
        <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Supérieur</label>
                <input class="input--style-4" type="text" name="superieur" value="<?php echo $_SESSION['superieur'];?>" disabled>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Solde</label>
                <input class="input--style-4" type="text" name="solde" value="<?php echo $_SESSION['solde'];?>" disabled>
            </div>
        </div>
    </div>
    <div class="row row-space">
        <div class="col-1">
            <div class="input-group">
                <label class="label">Interime</label>
                <input class="input--style-4" type="text" name="interime" value="<?php echo $_SESSION['interime'];?>" disabled >
            </div>
        </div>
    </div>
    <hr>
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Date Départ</label>
                <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="date" name="depart" required>
                    <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Date Reprise</label>
                <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="date" name="reprise" required>
                    <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                </div>
            </div>
        </div>

    </div>
    <div class="row row-space">
        <div class="col-1">
                <div class="input-group">
                    <label class="label">Nombre de jours</label>
                    <input class="input--style-4" type="text" name="nbj" id="nombreJour"required>
                </div>
        </div>
    </div>

    <div class="row row-space">
        <div class="col-1">
            <center>
                <button class="btn btn--radius-2 btn--blue" type="submit" style="width:150px">Enregister</button>
            </center>
        </div>
    </div>


</form>
