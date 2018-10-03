<section class="container">
  <h4>Contactez moi <p class="lead">N'hésitez pas à me laisser un petit message
  pour toutes demandes d'informations :)</p></h4>

  <form action="post_contact.php">
    <div class="row">
      <div class="col-lg-3">
          <div class="form-group">
            <label for="input_subject">Sujet du Message</label>
            <select name="subject" id="input_select" class="form-control
            ">
              <option value="1">Demande de Devis</option>
              <option value="2">Infos Partenaires</option>
              <option value="3"selected>Ce site est cool!</option>

            </select>
          </div>
        </div>
    </div>
    <div class="row">
      <!-- NOM -->
      <div class="col-lg-3">
        <div class="form-group">
          <label for="input_name">Nom</label>
          <input type="text" name="name" class="form-control" id="input_name">
        </div>
      </div>
      <!--mailto  -->
      <div class="col-lg-3">
        <div class="form-group">
          <label for="input_mail">Mail</label>
          <input type="text" name="mail" class="form-control">
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <label for="comment_section">Votre Message</label>
        <textarea name="comments" rows="8" cols="80"></textarea>

      </div>

    </div>
    <div class="row">
      <div class="col-lg-2">
        <button class="btn btn-primary submit_button" type="submit">C'est parti !</button>
      </div>

    </div>
  </form>
</section>
