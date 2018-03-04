jQuery(document).ready(function($) {
  var $easyzoom = $('.easyzoom').easyZoom();
  var api = $easyzoom.data('easyZoom');
});

function mensaje (msj) {
	$.blockUI({
		message: msj,
		css: {
			border: 'none',
			padding: '12px',
			backgroundColor: '#000',
			'-webkit-border-radius': '10px',
			'-moz-border-radius': '10px',
			opacity: .9,
			color: '#fff'
		}
	});
}

function clearForm(form) {
    // iterate over all of the inputs for the form
    // element that was passed in
    $(':input', form).each(function() {
      var type = this.type;
      var tag = this.tagName.toLowerCase(); // normalize case
      // it's ok to reset the value attr of text inputs,
      // password inputs, and textareas
      if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email' || type == 'file' )
        this.value = "";
      // checkboxes and radios need to have their checked state cleared
      // but should *not* have their 'value' changed
      else if (type == 'checkbox' || type == 'radio')
        this.checked = true;
      // select elements need to have their 'selectedIndex' property set to -1
      // (this works for both single and multiple select elements)
      else if (tag == 'select')
        this.selectedIndex = -1;
    });
};

jQuery(document).ready(function($) {

  $('#list-dep')
      .on("down.zf.accordion", function(e,$panel) {
        var id = $panel.attr('id'),
            type = $panel.find('.main-info').attr('data-type'),
            num = $panel.find('.main-info').attr('data-num'),
            enabled = $panel.find('.main-info').attr('data-enabled');

        if(enabled=="true") {
            /*setTimeout(`alert("opened ${id}")`, 300);*/
            $('#'+id).find('.adicionales').append("<form id='form_contacto' class='form_contacto' method='post'><div class='columnas masinfo'>Para saber más, contáctanos:</div><div class='columnas'><input type='text' class='campos' name='names' placeholder='Nombres y Apellidos'></div><div class='columnas'><input type='text' class='campos' name='email' placeholder='E-mail'></div><div class='columnas'><input type='text' class='campos' name='phone' placeholder='Teléfono'></div></div><div class='columnas'><input type='hidden' name='type' value='"+ type +"'><input type='hidden' name='number' value='"+ num +"'><button type='submit' class='button enviar'>Enviar</button></div><p id='msg'></p></form>");

      			var validacion = $('#form_contacto').validate({
      	          rules :{
      			        names : {
      			            required : true
      			        },
      			        phone : {
      			            required : true
      			        },
      	            email : {
      	                required : true,
      	                email    : true
      	            },
      	          },
      	          invalidHandler: function(form, validator) {
      	            var errors = validator.numberOfInvalids();
      	            if (errors) {
      	              var message ='Debe ingresar correctamente los datos';
      	              $("#msg").html(message).css('color', 'red');
      	            }
      	          },
      						submitHandler: function(form) {
      							mensaje("Enviando");
                    $(".btn_registro").attr('disabled', 'disabled');
                    var $form = $(this);
                    var $inputs = $form.find("input, button, select");
                    var serializedData = $('#form_contacto').serialize();
                    $inputs.prop("disabled", true);
                    var url_ = $('.form-ajax').attr('data-url');
                    request = $.ajax({
                           url: get_url,
                           data: serializedData,
                           type: "POST",
                           dataType: 'json',
                           headers: {
                       	  	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       	  },
                          success: function (response) {
                            if(response.msg=='true') {
                              $(".btn_registro").attr('disabled',false);
                              jQuery("#msg").html('');
                              mensaje('Gracias. Te has registrado exitosamente.');
                        			setTimeout($.unblockUI, 4000);
                        			clearForm(form);
                            } else {
                              mensaje('Hubo algun error, intente registrarse de nuevo.');
                              setTimeout($.unblockUI, 4000);
                            }
                      		}
                    });
      						}
      	      });
          }

      })
      .on("up.zf.accordion", function(e,$panel) {
        var id = $panel.attr('id');
  			var x = document.getElementsByClassName("form_contacto");
  			x[0].parentNode.removeChild(x[0]);
  			//$('#'+id).find('#form_contacto').remove();
        /*setTimeout(`alert("closed ${id}")`, 300);*/
      });

      /*$('[type="reset"]').on('click', function(){
          validacion.resetForm();
      });*/

});
