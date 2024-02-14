
<form method="POST" >
    <div class="row row-space">

        <div class="col-2">
            <div class="input-group">
                <label class="label">Ancien mot de passe</label>
                <input class="input--style-4" type="password" name="oldpass" placeholder="Ancien mot de passe" id ="oldpass" >
            </div>
        </div>
        
        <div class="col-2">
            <div class="input-group">
                <label class="label">Nouveau mot de passe</label>
                <div class="input-group" id="show_hide_password">
                    <input class="input--style-4" type="password" name="newpass" placeholder="Nouveau mot de passe" id="newpass">
                    <div class="input-group-addon"><a><i class="fa fa-eye" id="showpwdicon" onclick="show_pwd();"></i></a></div>
                </div> 
            </div>
        </div>   





    </div>
    <?php if($_SESSION['status']!='usr') : ?>
        
    <div class="row row-space">  
        <div class="col-2">
            <div class="input-group">
                <label class="label">Interime</label>
                <input class="input--style-4" type="text" name="interime">
            </div>
        </div>
        
            <div class="col-2">
            <div class="input-group">
                <label class="label">Autoriser interime</label>
                <input class="input--style-4" type="checkbox" name="autoriser_interime" placeholder="Interime" style="margin-top: 20px;" <?php interime_autoriser() ?>>
            </div>
        </div>
        


    </div>
    <?php endif; ?>

    <div class="row row-space">   

    </div>

    <div class="row row-space">
        <div class="col-2">
            <div class="p-t-15">
                <button class="btn btn--radius-2 btn--blue" onclick=sendMail() type="submit" name="ajouter" >Enregister</button>
            </div>
        </div>
    </div>

 </div>

    

    </div>
</form>


<script>   

function show_pwd(){

    const ico_pwd = document.getElementById('showpwdicon')
    var mdp_type_old=document.getElementById('oldpass')
    var mdp_type_new=document.getElementById('newpass')

if (ico_pwd.classList.contains('fa-eye')) {
    ico_pwd.classList.remove('fa-eye');
    ico_pwd.classList.add('fa-eye-slash');
    mdp_type_old.type="text"
    mdp_type_new.type="text"

} else{
    ico_pwd.classList.remove('fa-eye-slash');
    ico_pwd.classList.add('fa-eye');
    mdp_type_old.type="password"
    mdp_type_new.type="password"
}
}

</script>
