$(function() {

  $.validator.setDefaults({
    errorClass: 'help-block',
    highlight: function(element) {
      $(element)
        .closest('.form-group')
        .addClass('has-error');
    },
    success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          $(label).html('<p style="color:#229954 ;">Correcto!</p>');

   },
    unhighlight: function(element) {
      $(element)
        .closest('.form-group')
        .removeClass('has-error')
        .addClass('has-success');
    }
    
  });

  

  $("#frmadministrador").validate({
    rules: {
      dni: {
        required: true,
        minlength:8,
        maxlength:8,
        number:true
       },

      nombre: {
        required: true,
        minlength:5
       },
      password: {
        required: true,
        minlength:6
        },
      password2: {
        required: true,
        minlength:6,
        equalTo: "#p1"
        
      },
      
    },
   
  });

  $("#frmcambiar").validate({
    rules: {
      password0: {
        required: true,
       },

      password1: {
        required: true,
       },
      password2: {
        required: true,
        equalTo: "#p3"
        },
    
      
    },
   
  });


  $("#frmdoctor").validate({
    rules: {
      dni: {
        required: true,
        minlength:8,
        maxlength:8,
        number:true
       },
      nombre: {
        required: true,
        minlength:5
       },
      password: {
        required: true,
        minlength:6
        },
      password2: {
        required: true,
        minlength:6,
        equalTo: "#p1"
        
      },
      
    },
   
  });


  $("#frmpaciente").validate({
    rules: {
         nombreusuario: {
        required: true,
        minlength:5
       },
        dni: {
        required: true,
        minlength:8,
        maxlength:8,
        number:true
       },

      nombre: {
        required: true,
        minlength:5
       },
       apellido: {
        required: true,
        minlength:5
       },
       sangre: {
        required: true,
        
       },
       direccion: {
        required: true,
        minlength:10
       },
       correo: {
        required: true,
        minlength:5,
        email:true
       },
       telefono: {
        required: true,
        minlength:9,
        maxlength:9
       },
       fecha: {
        required: true,
        
       },
       sexo: {
        required: true,
        
       },
       
      password: {
        required: true,
        minlength:8
        },
      password2: {
        required: true,
        minlength:8,
        equalTo: "#p1"
        
      },
      
    },
   
  });

});