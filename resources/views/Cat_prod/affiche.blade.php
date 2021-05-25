

 <form action="traite" method = "post" id="emplorm">
    @csrf

        <div class="row dtailvhicule">
            <div class="col-md-3">
                <label>sous catégorie </label>
                <input class="form-control" name="sous_cat" type="text" placeholder="sous catégorie">
            </div>
        </div>

        <div class="row dtailvhicule">
            <div class="col-md-3">
                <label> espace sous catégorie </label>
                <input class="form-control" name="espace_sous" type="text" placeholder="Espace">
            </div>
        </div>
        <div class="row dtailvhicule">
            <div class="col-md-3">
                <label> Categorie </label>
                <input class="form-control" name="Categorie" type="text" placeholder="Categorie">
            </div>
        </div>
        <div class="row dtailvhicule">
            <div class="col-md-3">
                <label>espace Categorie </label>
                <input class="form-control" name="espace_Categorie" type="text" placeholder="espace Categorie">
            </div>
        </div>
        <div class="col-md-9">
            <button class="btn btn-primary btn-block btn-lg" type="submit">Enregistrer</button>
        </div> 

</form>

<div class="row dtailvhicule">
    <div class="col-md-3">
        <label> </label>
        
    </div>
</div>

