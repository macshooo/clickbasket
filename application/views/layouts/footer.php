 <script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/icheck.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/ionrangeslider.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/jqzoom.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/card-payment.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/owl-carousel.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/magnific.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/custom.js';?>"></script>
 <script src="<?php echo base_url().'assets/js/sweetalert.min.js';?>"></script>

</body>

</html>

<script type="text/javascript">
  function editThis(id){
    $("#cancelbutt_"+id).show();
    $("#donebutt_"+id).show();
    $("#input_"+id).show();
    $("#edit_"+id).hide();
    $("#text_"+id).hide();
  }

  function cancelEdit(id){
    $("#cancelbutt_"+id).hide();
    $("#donebutt_"+id).hide();
    $("#input_"+id).hide();
    $("#edit_"+id).show();
    $("#text_"+id).show();
  }

  //FIRSTNAME START
  $('#donebutt_1').click(function(){
    var firstname = $('#input_1').val();
    if(!firstname){
      $("#error_1").html('Please input your firstname');
      setTimeout(function() {
        $('#error_1').html('  ');
      },4000);
    }else{
      $.ajax({
         type: "POST",
         data: {firstnamepost:firstname},
         url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
         success: function(data){
          $("#cancelbutt_1").hide();
          $("#donebutt_1").hide();
          $("#input_1").hide();
          $("#edit_1").show();
          $("#text_1").html(firstname);
          $("#text_1").show();
        },
        error: function(){
        }
    });
    }
  });
  //FIRSTNAME END

  //LASTNAME START
  $('#donebutt_2').click(function(){
  var lastname = $('#input_2').val();
  if(!lastname){
  $("#error_2").html('Please input your lastname');
  setTimeout(function() {
            $('#error_2').html('  ');
              },4000);
  }
  else{
  $.ajax({
     type: "POST",
     data: {lastnamepost:lastname},
     url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
     success: function(data){
        $("#cancelbutt_2").hide();
        $("#donebutt_2").hide();
        $("#input_2").hide();
        $("#edit_2").show();
        $("#text_2").html(lastname);
        $("#text_2").show();
        },
     error: function(){
        }
    });
  }
  });
  //LASTNAME END

  //EMAIL START
  $('#donebutt_3').click(function(){
  var email = $('#input_3').val();
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

  if(!email){
    $("#error_3").html('Please input your email');
    setTimeout(function() {
              $('#error_3').html(' ');
                },4000);
  }else if(!testEmail.test(email)){
    $("#error_3").html('Email is invalid');
    setTimeout(function() {
              $('#error_3').html(' ');
                },4000);
  }else{
  $.ajax({
     type: "POST",
     data: {emailpost:email},
     url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
     success: function(data){
      if(data == 'existfalse'){
          $('#error_3').html('This email already exist!');
          setTimeout(function() {
            $('#error_3').html('  ');
              },4000);
        }
          else{
        $("#cancelbutt_3").hide();
        $("#donebutt_3").hide();
        $("#input_3").hide();
        $("#edit_3").show();
        $("#text_3").html(email);
        $("#text_3").show();
      }
        },
     error: function(){
        }
    });
  }
  });
  //EMAIL END

  //ADDRESS START
  $('#donebutt_4').click(function(){
  var address = $('#input_4').val();

  if(!address){
  $("#error_4").html('Please input your address');
  setTimeout(function() {
            $('#error_4').html('  ');
              },4000);
  }
  else{
  $.ajax({
     type: "POST",
     data: {addresspost:address},
     url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
     success: function(data){
        $("#cancelbutt_4").hide();
        $("#donebutt_4").hide();
        $("#input_4").hide();
        $("#edit_4").show();
        $("#text_4").html(address);
        $("#text_4").show();
        },
     error: function(){
        }
    });
  }
  });
  //ADDRESS END

  //MOBILE NUMBER START
  $("#cancelbutt_5").click(function(){
  $("#cancelbutt_5").hide();
  $("#donebutt_5").hide();
  $("#input_5").hide();
  $("#edit_5").show();
  $("#text_5").show();
  });

  $('#donebutt_5').click(function(){
  var mobilenumber = $('#input_5').val();

  if(!mobilenumber){
  $("#error_5").html('Please input your mobilenumber');
  setTimeout(function() {
            $('#error_5').html('  ');
              },4000);
  }
  else{
  $.ajax({
     type: "POST",
     data: {mobilenumberpost:mobilenumber},
     url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
     success: function(data){
        $("#cancelbutt_5").hide();
        $("#donebutt_5").hide();
        $("#input_5").hide();
        $("#edit_5").show();
        $("#text_5").html(mobilenumber);
        $("#text_5").show();
        },
     error: function(){
        }
    });
  }
  });
  //MOBILE NUMBER END

  //PASSWORD START
  $('#donebutt_6').click(function(){
  var password = $('#input_6').val();

  if(!password){
  $("#error_6").html('Please input your password');
  setTimeout(function() {
            $('#error_6').html('  ');
              },4000);
  }
  else{
  $.ajax({
     type: "POST",
     data: {passwordpost:password},
     url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
     success: function(data){
        $("#cancelbutt_6").hide();
        $("#donebutt_6").hide();
        $("#input_6").hide();
        $("#edit_6").show();
        $("#text_6").html();
        $("#text_6").show();
        },
     error: function(){
        }
    });
  }
  });

	$(document).ready(function(){
		$("#addtocart").click(function(){
			var productid = $("#addtocart").val();
			var qty = $("#qty_" + productid).val();
			var pName = $("#addtocart").attr('name');

			if(qty == 0){
				swal('No item selected to add to cart!', 'error');
				return false;
			}else{
				var dataString = {productid: productid, qty: qty};

				$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>"+"listproductscontroller/input_cart",
					data: dataString,
					cache: false,
					success: function(){
						swal('Success!', pName +' has been added to you cart!', 'success');
					}, error: function(){
						swal('Oops!', 'Something went wrong. Please try again later', 'error');
					}
				});
			}
		});

		$('.btn-minus').click(function(){
			$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1);
		});

		$('.btn-plus').click(function(){
			$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1);
		})

    $('#placeorder').click(function(){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>"+"listproductscontroller/placeOrder",
        success: function(){
          swal('Success!', 'The order has successfully been processed!', 'success');
        }, error: function(){
          swal('Oops!', 'Something went wrong. Please try again later', 'error');
        }
      })
    });
	});

  function emailverification(){
    document.getElementById("emailverificationpanel").style.display="block";
    document.getElementById("changeemailpanel").style.display="none";
  }

  function changeemail(){
    document.getElementById("emailverificationpanel").style.display="none";
    document.getElementById("changeemailpanel").style.display="block";
  }

  function updateShoppingCart(btndata){
    var productid = $(".table-shopping-qty").attr("id");
    dataString = {productid: productid, data:btndata};

    $.ajax({
      type: "POST",
      url: "<?php echo base_url('listproductscontroller/editcart_item');?>",
      data: dataString,
      cache: false,
      success: function(newtotal){
        $('#productTotal').html(newtotal);
      }, error: function(){
        swal('Oops!', 'Something went wrong. Please try again later', 'error');
      }
    });
  }

	function removeItem(id){
		var productid = $("#removeitem_" + id).attr("value");
		var qty = $("#qty").val();

		var dataString = {productid: productid, qty: qty};

		swal({
  			title: "Are you sure?",
  			text: "This item will be removed from the cart.",
  			type: "warning",
  			showCancelButton: true,
  			confirmButtonColor: "#DD6B55",
  			confirmButtonText: "Yes, delete it!",
  			closeOnConfirm: false
		},

		function(){
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>"+"listproductscontroller/delete_cart",
				data: dataString,
				cache:false,
				success: function(){
					swal("Deleted!", "Your imaginary file has been deleted.", "success");
					$('#cartrow_' + id).remove();
				}, error: function(){
					swal("Oops!", "Something went wrong. Please try again.", "error");
				}
			});
		});
	}

  function viewProducts(id){
    $('#orderProductsModal').modal('show');
    $('#orderProductsBody').empty();
    $('#orderProductsBody').html('Loading...');
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("secondarycontroller/getProductsByID") ?>',
      data: {id:id},
      dataType: 'JSON',
      success: function(data) {
        $('#orderProductsBody').empty();
        for(var i=0; i < data.length; i++){
          $('#orderProductsBody').append('<tr> <td></td> <td>'+data[i].prod_name+'</td> <td>'+data[i].order_qty+'</td> <td>'+data[i].storeprod_price+'</td> <td></td> </tr>');
        }
      }
    });
  }
</script>
