
    
    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">¿En qu&eacute; tema est&aacute; interesado?</h3>
            
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nombre <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Ingresar Nombre" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Ingresar Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Asunto <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Ingrese Asunto">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Teléfono</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Ingrese telefono">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mensaje</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Ingrese su mensaje"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Por favor espere...">Enviar Mensaje</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
            <div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.643558282144!2d-99.24726065016866!3d19.55691068674905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21ce556116d79%3A0x3bae563e9ceb4f2a!2sUNIMAC!5e0!3m2!1ses-419!2smx!4v1501551018299" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Google Map Javascript Codes -->
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
            <script src="js/google-map-init-multilocation.js"></script>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

 