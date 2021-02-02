<?php include 'template/header.php'?>


      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left tm-welcome-box tm-bg-gradient">
            <p class="tm-welcome-text text-justify">
              <em>Queremos saber suas preferências, peça informações sobre festas e eventos. Aguardamos voçe.</em>
            </p>
          </div>
          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/image-10.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-mb-3">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left">
            <div class="tm-contact-container tm-mb-6">
                           
            </div>
          </div>
          <div class="tm-page-col-right tm-form-container">
            <h2 class="tm-text-secondary mb-4">Contate-Nos</h2>
            <form
              action="contact.html"
              method="POST"
              id="tm_contact_form"
              enctype="multipart/form-data">
              <div class="form-group">
                <input
                  type="text"
                  id="contact_name"
                  name="contact_name"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Seu Nome"
                  required="" />
              </div>
              <div class="form-group-2">
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Seu Email"
                  required="" />
              </div>
              <div class="form-group-2 input-field">
                <select class="tm-select" name="occupation" id="occupation">
                  <option value="select">Suas Preferencias</option>
                  <option value="CE">Lives</option>
                  <option value="SA">Haves</option>
                  <option value="PM">Disco</option>
                  <option value="WD">Festas</option>
                </select>
              </div>
              <div class="form-group tm-choices-container tm-text-secondary">
               
              </div>

              <div class="tm-mb-5">
                <textarea
                  rows="10"
                  id="contact_message"
                  name="contact_message"
                  class="form-control rounded-0"
                  placeholder="Sua Menssagem"
                  required=""></textarea>
              </div>

              <div class="tm-mb-4 tm-choices-container tm-text-secondary">
                
              </div>
              <div class="tm-mb-6 file-upload-container">
                <input
                  id="file_name_label"
                  type="text"
                  class="border-top-0 border-right-0 border-left-0"
                  placeholder="Enviar foto"
                  disabled />
                <label class="btn btn-outline btn-file">
                  Browse...
                  <input
                    type="file"
                    name="file_to_upload"
                    style="display: none;" />
                </label>
              </div>

              <div class="">
                <button
                  type="submit"
                  class="btn btn-secondary tm-btn-submit rounded-0">
                  Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>

      
<?php include 'template/footer.php' ?>      