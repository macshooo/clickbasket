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
$("#cfname").click(function(){
   $("#delbutt").show();
   $("#donebutt").show();
   $("#fni").show();
   $("#cfname").hide();
   $("#fnp").hide();
});
$("#delbutt").click(function(){
   $("#delbutt").hide();
   $("#donebutt").hide();
   $("#fni").hide();
   $("#cfname").show();
   $("#fnp").show();
});
$("#clname").click(function(){
   $("#delbutt1").show();
   $("#donebutt1").show();
   $("#lni").show();
   $("#clname").hide();
   $("#lnp").hide();
});
$("#delbutt1").click(function(){
   $("#delbutt1").hide();
   $("#donebutt1").hide();
   $("#lni").hide();
   $("#clname").show();
   $("#lnp").show();
});
$("#cgd").click(function(){
   $("#delbutt2").show();
   $("#donebutt2").show();
   $("#gdi").show();
   $("#cgd").hide();
   $("#gdp").hide();
});
$("#delbutt2").click(function(){
   $("#delbutt2").hide();
   $("#donebutt2").hide();
   $("#gdi").hide();
   $("#cgd").show();
   $("#gdp").show();
});
$("#cbd").click(function(){
   $("#delbutt3").show();
   $("#donebutt3").show();
   $("#bdi").show();
   $("#cbd").hide();
   $("#bdp").hide();
});
$("#delbutt3").click(function(){
   $("#delbutt3").hide();
   $("#donebutt3").hide();
   $("#bdi").hide();
   $("#cbd").show();
   $("#bdp").show();
});
$("#cem").click(function(){
   $("#delbutt4").show();
   $("#donebutt4").show();
   $("#emi").show();
   $("#cem").hide();
   $("#emp").hide();
});
$("#delbutt4").click(function(){
   $("#delbutt4").hide();
   $("#donebutt4").hide();
   $("#emi").hide();
   $('#emailerror').html('<br>');
   $("#cem").show();
   $("#emp").show();
});
$("#cad").click(function(){
   $("#delbutt5").show();
   $("#donebutt5").show();
   $("#adi").show();
   $("#cad").hide();
   $("#adp").hide();
});
$("#delbutt5").click(function(){
   $("#delbutt5").hide();
   $("#donebutt5").hide();
   $("#adi").hide();
   $("#cad").show();
   $("#adp").show();
});
$("#ccn").click(function(){
   $("#delbutt6").show();
   $("#donebutt6").show();
   $("#cni").show();
   $("#ccn").hide();
   $("#cnp").hide();
});
$("#delbutt6").click(function(){
   $("#delbutt6").hide();
   $("#donebutt6").hide();
   $("#cni").hide();
   $("#ccn").show();
   $("#cnp").show();
});
$("#cpw").click(function(){
   $("#delbutt8").show();
   $("#donebutt8").show();
   $("#pwni").show();
   $("#cpw").hide();
   $("#pwnp").hide();
});
$("#delbutt8").click(function(){
   $("#delbutt8").hide();
   $("#donebutt8").hide();
   $("#pwni").hide();
   $("#cpw").show();
   $("#pwnp").show();
});

  $('#donebutt').click(function(){
    var firstname = $('#fni').val();

    $.ajax({
           type: "POST",
           data: {firstnamepost:firstname},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt").hide();
              $("#donebutt").hide();
              $("#fni").hide();
              $("#cfname").show();
              $("#fnp").html(firstname);
              $("#fnp").show();
              },
           error: function(){
              }
          });
   });

  $('#donebutt1').click(function(){
    var lastname = $('#lni').val();

    $.ajax({
           type: "POST",
           data: {lastnamepost:lastname},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt1").hide();
              $("#donebutt1").hide();
              $("#lni").hide();
              $("#clname").show();
              $("#lnp").html(lastname);
              $("#lnp").show();
              },
           error: function(){
              }
          });
   });

  $('#donebutt2').click(function(){
    var gender = $('input[name=gender]:checked').val();

    $.ajax({
           type: "POST",
           data: {genderpost:gender},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt2").hide();
              $("#donebutt2").hide();
              $("#gdi").hide();
              $("#cgd").show();
              $("#gdp").html(gender);
              $("#gdp").show();
              },
           error: function(){
              }
          });
   });

  $('#donebutt3').click(function(){
    var birthday = $('#bdi').val();

    $.ajax({
           type: "POST",
           data: {birthdaypost:birthday},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#donebutt3").hide();
              $("#delbutt3").hide();
              $("#bdi").hide();
              $("#cbd").show();
              $("#bdp").html(birthday);
              $("#bdp").show();
              },
           error: function(data){
              console.log(data);
              }
          });
   });

  $('#donebutt4').click(function(){
    var email = $('#emi').val();

    $.ajax({
           type: "POST",
           data: {emailpost:email},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              if(data == 'existfalse'){
                $('#emailerror').html('This email already exist!');
                setTimeout(function() {
                  $('#emailerror').html('  ');
                    },4000);
              }else{
                $("#delbutt4").hide();
                $("#donebutt4").hide();
                $("#emi").hide();
                $("#cem").show();
                $("#emp").html(email);
                $("#emp").show();
              }
              },
           error: function(data){
            }
          });
   });

  $('#donebutt5').click(function(){
    var address = $('#adi').val();

    $.ajax({
           type: "POST",
           data: {addresspost:address},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt5").hide();
              $("#donebutt5").hide();
              $("#adi").hide();
              $("#cad").show();
              $("#adp").html(address);
              $("#adp").show();
              },
           error: function(){

              }
          });
   });

  $('#donebutt6').click(function(){
    var  mobilenumber = $('#cni').val();

    $.ajax({
           type: "POST",
           data: {mobilenumberpost:mobilenumber},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt6").hide();
              $("#donebutt6").hide();
              $("#cni").hide();
              $("#ccn").show();
              $("#cnp").html(mobilenumber);
              $("#cnp").show();
              },
           error: function(){
              }
          });
   });

  $('#donebutt8').click(function(){
    var  password = $('#pwni').val();

    $.ajax({
           type: "POST",
           data: {passwordpost:password},
           url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
           success: function(data){
              $("#delbutt8").hide();
              $("#donebutt8").hide();
              $("#pwni").hide();
              $("#cpw").show();
              $("#pwnp").show();
              },
           error: function(){
              }
          });
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
			var productid = $(".table-shopping-qty").attr("id");

			dataString = {productid: productid};

			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>"+"listproductscontroller/editcart_item",
				data: dataString,
				cache: false,
				success: function(prod){
					alert(prod);
					$(".table-shopping-qty").val(parseInt($(".table-shopping-qty").val()) - 1);
					// $("#total").text()
				}, error: function(){
					swal('Oops!', 'Something went wrong. Please try again later', 'error');
				}
			});

		});

		$('.btn-plus').click(function(){
			$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1);
		})
	});

  function emailverification(){
    document.getElementById("emailverificationpanel").style.display="block";
    document.getElementById("changeemailpanel").style.display="none";
  }

  function changeemail(){
    document.getElementById("emailverificationpanel").style.display="none";
    document.getElementById("changeemailpanel").style.display="block";
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
</script>
