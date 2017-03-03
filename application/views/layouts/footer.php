 <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
 <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
 <script src="<?php echo base_url('assets/js/icheck.js');?>"></script>
 <script src="<?php echo base_url('assets/js/ionrangeslider.js');?>"></script>
 <script src="<?php echo base_url('assets/js/jqzoom.js');?>"></script>
 <script src="<?php echo base_url('assets/js/card-payment.js');?>"></script>
 <script src="<?php echo base_url('assets/js/owl-carousel.js');?>"></script>
 <script src="<?php echo base_url('assets/js/magnific.js');?>"></script>
 <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
 <script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
 <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
</body>

</html>

<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker({
      minDate:new Date()
    });
  });

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

  function newAddressForm(){
    $("#showform").show();
  }

  function cancelnewAddressForm(){
    $("#showform").hide();
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
          swal("Update successfully");
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
       swal("Update successfully");
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
        swal("Update successfully");
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
    var buildingname = $('#buildingname').val();
    var street = $('#street').val();
    var floorunitroom = $('#floorunitroom').val();
    var city = $('#city').val();
    var postcode = $('#postcode').val();

    $.ajax({
      type: "POST",
      data: {buildingname:buildingname,street:street,city:city,postcode:postcode, floorunitroom: floorunitroom},
      url: '<?php echo base_url("secondarycontroller/update_user_address"); ?>',
      success: function(data){
        swal("Update successfully");
        $("#cancelbutt_4").hide();
        $("#donebutt_4").hide();
        $("#input_4").hide();
        $("#edit_4").show();
        $("#buildingname_text").html(buildingname);
        $("#street_text").html(street);
        $("#city_text").html(city);
        $("#postcode_text").html(postcode);
        $('#floorunitroom').html(floorunitroom);
        $("#text_4").show();
      },
      error: function(data){
        console.log(data)
      }
    });
  });
  //ADDRESS END

  //NEW ADDRESS START
  $('#newAddress').click(function(){
    var buildingname = $('#newbuildingname').val();
    var street = $('#newstreet').val();
    var city = $('#newcity').val();
    var postcode = $('#newpostcode').val();

    if(!buildingname || !street || !city || !postcode){
      swal("Error","Some fields are empty!","error");
    }else{
      $.ajax({
        type: "POST",
        data: {buildingname:buildingname,street:street,city:city,postcode:postcode},
        url: '<?php echo base_url("secondarycontroller/register_address"); ?>',
        success: function(data){
          swal("New Address","Is Added successfully","success");
        },
        error: function(data){
          console.log(data)
          alert('otin');
        }
      });
    }
  });
  //NEW ADDRESS END

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
    }else{
      $.ajax({
        type: "POST",
        data: {mobilenumberpost:mobilenumber},
        url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
        success: function(data){
          swal("Update successfully");
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
    }else{
      $.ajax({
        type: "POST",
        data: {passwordpost:password},
        url: '<?php echo base_url("secondarycontroller/update_user"); ?>',
        success: function(data){
          swal("Update successfully");
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
      var finalPrice = $("#price_" + productid).html();
      var price = finalPrice.substring(1,finalPrice.length);
			var pName = $("#addtocart").attr('name');
      var badgeCount = parseInt($('#cartBadge').html());

      var currBal = parseInt($('#max_'+productid).val());

			if(qty == 0){
        swal({
          title: "No quantity for "+pName+" selected!",
          timer: 1000,
          showConfirmButton: false
        });
			}else{
        if(qty > currBal){
          swal({
            title: "Quantity entered exceeds current stock!",
            timer: 1000,
            showConfirmButton: false
          });
        }else{
          var dataString = {productid: productid, qty: qty, finalprice: price};

  				$.ajax({
  					type: "POST",
  					url: "<?php echo base_url('listproductscontroller/input_cart');?>",
  					data: dataString,
  					cache: false,
  					success: function(){
              swal('Success!', pName +' has been added to you cart!', 'success');
              swal({
                title: "Success!",
                text: pName +' has been added to you cart!',
                type: "success",
                closeOnConfirm: true,
                animation: "slide-from-top",
                inputPlaceholder: "Place Order"
              },
              function(){
                location.reload();
              });

  					}, error: function(){
  						swal('Oops!', 'Something went wrong. Please try again later', 'error');
  					}
  				});
        }
			}
		});

		$('.btn-minus').click(function(){
			$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1);
		});

		$('.btn-plus').click(function(){
			$(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1);
		})

    $('#placeorder').click(function(){
      var couponid = $("#couponid").val();
      var etaDelivery = $("#datetimepicker1").find("input").val();
      var subtotal = $("#subtotal").html().substring(1,$("#subtotal").html().length);
      var vat = $("#vatamount").html().substring(1,$("#vatamount").html().length);
      var gtotal = $("#gTotal").html().substring(1,$("#gTotal").html().length);

      if(couponid == null || couponid == undefined){
        var dataString = {etaDelivery: etaDelivery, subtotal: subtotal, vat: vat, gtotal: gtotal};
      }else{
        var dataString = {couponid: couponid, etaDelivery: etaDelivery, subtotal: subtotal, vat: vat, gtotal: gtotal};
      }

      swal({
        title: "Confirm!",
        text: "Are you sure of your order?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Place Order",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('listproductscontroller/placeOrder');?>",
          data: dataString,
          cache: false,
          success: function(){
            swal('Success!', 'The order has successfully been processed!', 'success');
          }, function(){
            window.location.href = "<?php echo base_url('secondarycontroller/orderhistory');?>";
          },error: function(){
            swal('Oops!', 'Something went wrong. Please try again later', 'error');
          }
        })
      });
    });

    $("#p1").mouseover(function(){
      $("#p2").fadeIn();
      $("#p1").fadeOut();
    });

    $("#p2").mouseout(function(){
      $("#p2").fadeOut();
      $("#p1").fadeIn();
    });

    $("#prev_address").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");
        if(optionValue == 'newAddress'){
          $("#text_address").css('text-decoration','line-through');
          $("#new_address").show();
          $("#done_button").show();
          $("#cancel_button").show();

          window.addEventListener("beforeunload", function (e) {
            var confirmationMessage = 'It looks like you have been editing something. '
                                    + 'If you leave before saving, your changes will be lost.';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
          });
        }
      });
    });
	});

  $(document).click(function(){
    var rating5 = $("#star5").val();
    var rating4 = $("#star4").val();
    var rating3 = $("#star3").val();
    var rating2 = $("#star2").val();
    var rating1 = $("#star1").val();
  });

  function emailverification(){
    document.getElementById("emailverificationpanel").style.display="block";
    document.getElementById("changeemailpanel").style.display="none";
  }

  function changeemail(){
    document.getElementById("emailverificationpanel").style.display="none";
    document.getElementById("changeemailpanel").style.display="block";
  }

  function ajaxSearch(){
    var inputData = $('#searchData').val();

    if(inputData.length == 0){
      $('#suggestions').hide();
    }else{
      var postData = {
        'searchData': inputData,
      };

      $.ajax({
        type: "POST",
        url: "<?php echo base_url('listproductscontroller/getStoreProducts');?>",
        data: postData,
        success: function (data) {
          // return success
          if (data.length > 0) {
            $('#suggestions').show();
            $('#autoSuggestionsList').addClass('auto_list');
            $('#autoSuggestionsList').html(data);
          }
        }
      });
    }
  }

  function updateShoppingCart(btndata,id){
    var dataString = {productid: id, data:btndata};

    $.ajax({
      type: "POST",
      url: "<?php echo base_url('listproductscontroller/editcart_item');?>",
      data: dataString,
      cache: false,
      success: function(newtotal){
        $('#productTotal_'+id).html(newtotal);
      }, error: function(){
        swal('Oops!', 'Something went wrong. Please try again later', 'error');
      }
    });
  }

	function removeItem(id){
		var productid = $("#removeitem_" + id).attr("value");

		var dataString = {productid: productid};

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
				url: "<?php echo base_url('listproductscontroller/deleteItemfromCart'); ?>",
				data: dataString,
				cache:false,
				success: function(){
					swal("Deleted!", "The product has been deleted.", "success");
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
          $('#orderProductsBody').append('<tr> <td>'+data[i].store_name+'</td> <td>'+data[i].prod_name+'</td> <td>'+data[i].order_qty+'</td> <td>'+data[i].product_price+'</td> <td>'+data[i].product_total+'</td> </tr>');
        }
      }
    });
  }

  function couponCode(couponuse){
    var grandTotal = $('#gTotal').html();
    swal({
      title: "",
      text: "Enter your coupon code here:",
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      animation: "slide-from-top",
      inputPlaceholder: "Coupon Code"
    },
    function(inputValue){
      if (inputValue === false) return false;

      if (inputValue === "") {
      swal.showInputError("You need to write something!");
      return false
      }

      if (couponuse == true){
        swal.showInputError("You already have a coupon in use!");
        return false;
      }else{
        $.ajax({
          type: "post",
          url: '<?php echo base_url("listproductscontroller/checkCoupon");?>',
          data: {coupon: inputValue, grandTotal: grandTotal},
          success: function(data){
            if(data == 'false'){
              swal.showInputError("That seems to be an invalid coupon");
              return false;
            }else if(data == 'exist'){
              swal.showInputError("Coupon has already been activated");
              return false;
            }else{
              swal({
                title: "Activated!",
                text: 'Coupon code activated',
                type: "success",
                closeOnConfirm: true,
                animation: "slide-from-top",
                inputPlaceholder: "Coupon Code"
              },
              function(){
                location.reload();
              });
            }
          },
          error: function(){
            swal("Oops","Something went wrong! Please try again later.","error");
          }
        });
      }
    });
  }

  function cancelOrder(id){
    swal({
      title: "Cancel Order!",
      text: "Why do you want to cancel your order?",
      type: "input",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Cancel Order",
      closeOnConfirm: false,
      inputPlaceholder: "Cancelling Reason..."
    },
    function(inputValue){
      if(inputValue != false){
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('listproductscontroller/cancelOrder');?>",
          data: {id:id,inputValue:inputValue},
          cache: false,
          success: function(){
            swal({
              title: "Cancelled!",
              text: 'The order has been cancelled!',
              type: "success",
              closeOnConfirm: false,
              animation: "slide-from-top"
            },
            function(){
              location.reload();
            });
          }, error: function(){
            swal('Oops!', 'Something went wrong. Please try again later', 'error');
          }
        });
      }
    });
  }

  function orderStatus(decline){
    swal("Reason for cancellation:", decline);
  }

  function rateThis(rateid,storeprodsubid){
    $.ajax({
      type: "post",
      url: '<?php echo base_url("listproductscontroller/productRating");?>',
      data: {ratepost:rateid,storeprodsubidpost:storeprodsubid},
      success: function(data){
        swal("You Rate "+rateid+" Star!", "Thank you for rating! :)");
      },
      error: function(data){
        swal("error","Please Log-in your Account","error");
      }
    });
  }

  function cancelCheckout(){
    $("#text_address").css('text-decoration','none');
    $("#edit_button").show();
    $("#new_address").hide();
    $("#done_button").hide();
    $("#cancel_button").hide();
  }
</script>
