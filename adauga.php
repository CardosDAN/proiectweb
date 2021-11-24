<div class="container">
    <h6 class="css-nnbf1n-Text eu5v0x0">Dă cât mai multe detalii!</h6>
    <form action="adaugareanunt.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6 form-group">
            <input type="text" name="titlu" placeholder="Titlu....">
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="telefon" placeholder="07********">
        </div>
        <div class="col-md-6 form-group">
            <input type="number" name="pret" placeholder="Pret">
        </div>
        <div class="col-md-6 form-group">
            <input type="text" name="adresa" placeholder="Adresa...">
        </div>
        <div class="col-md-6 form-group">
            <textarea name="descriere" placeholder="Scrie ceva...." ></textarea>
        </div>
        <input type="file" name="file">
        <button  type="submit"  class="btn btn-primary">Adauga</button>
        <a type="button" class="btn btn-danger" href="home.php">Anulează</a>
    </form>
<!--    <form action="upload.php" method="post" enctype="multipart/form-data">-->
<!--        Select Image File to Upload:-->
<!--        <input type="file" name="file">-->
<!--        <input type="submit" name="submit" value="Upload">-->
<!--    </form>-->
</div>