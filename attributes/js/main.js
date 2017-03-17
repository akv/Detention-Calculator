/*custom js will be here*/

 /* attach a submit handler to the form */
    $("#userDetentionForm").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();
      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      $.ajax({
            type: "POST",
            url: url,
            dataType: 'text',
            data: $("#userDetentionForm").serialize(),
            success: function(msg) {
             //alert(msg);
              // $('#userDetentionForm').find("input[type=text], textarea, select").val("");
              $(".result_display").show();
              $("#calcultor_result").html(msg);
              
             }
  
        });
        
    });