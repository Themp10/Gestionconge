<link href="css/main.css" rel="stylesheet" media="all">
<div class="parent">
    <div class="div1"> 
        <div class="input-group">
            <label class="label">Email</label>
            <input class="input" type="email" name="email" >
        </div>
    </div>

    <div class="div2"> 
        <div class="input-group">
            <label class="label">Email</label>
            <input class="input" type="email" name="email" >
        </div>
    </div>

    <div class="div3"> 
        <div class="input-group">
            <label class="label">Email</label>
            <input class="input" type="email" name="email" >
        </div>
    </div>

    <div class="div4"> 
        <img src="img.png" alt="Girl in a jacket" width="500" height="600"> 
    </div>

</div> 



<style>
.parent {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-template-rows: repeat(3, 1fr);
grid-column-gap: 7px;
grid-row-gap: 0px;

}
.div1 { grid-area: 1 / 1 / 2 / 2; background-color:red;}
.div2 { grid-area: 2 / 1 / 3 / 2; }
.div3 { grid-area: 3 / 1 / 4 / 2; }
.div4 { grid-area: 1 / 2 / 4 / 3; }


</style>