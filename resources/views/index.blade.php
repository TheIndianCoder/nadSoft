<!doctype html>
<html lang="en">

<head>
    <title>Checkout Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-title">
                <h2 class="text-center">Checkout Form</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form  method="post" id="formData" onsubmit="return validateForm()">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control">
                                    <span id="firstnameError" class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control">
                                    <span id="lastnameError" class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >User Name</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                    <span id="usernameError" class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >Address</label>
                                    <input type="text" name="address1" id="address1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >Address 2</label>
                                    <input type="text" name="address2" id="address2" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label >Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option selected disabled>Select Country</option>
                                        <option value="india">India</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label >State</label>
                                    <select name="state" id="state" class="form-control">
                                        <option selected disabled>Select State</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="up">UP</option>
                                        <option value="bihar">Bihar</option>
                                        <option value="gujrat">Gujrat</option>
                                        <option value="mp">MP</option>
                                        <option value="ap">Andhra Pradesh</option>
                                        <option value="keral">Keral</option>
                                        <option value="maharashtra">Maharashtra</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label >Zip Code</label>
                                    <input type="text" name="zip" id="zip">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="same_billing_Address" id="same_billing_Address">
                            <label class="form-check-label" for="exampleCheck1">Shipping Addressis the same as my billing address</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="next_time_info" id="next_time_info">
                            <label class="form-check-label" for="exampleCheck1">Save this information for next time</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h3>Payment</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="select" id="flexRadioDefault">
                                    <label class="form-check-label" >
                                    Credit card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="select" id="flexRadioDefault" >
                                    <label class="form-check-label" >
                                    Debit card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="select" id="flexRadioDefault" >
                                    <label class="form-check-label" >
                                    Paypal
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >Name on card</label>
                                    <input type="text" name="holder_name" id="holder_name" class="form-control">
                                    <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label >Credit card number</label>
                                    <input type="text" name="card_number" id="card_number" class="form-control">
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label >Valid Till</label>
                                    <input type="date" name="expiry_date" id="expiry_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label >CVV</label>
                                    <input type="text" name="cvv" id="cvv" class="form-control">
                                </div>
                            </div>
                        </div> 
                        <hr>
                        <button type="button" id="submit" data-toggle="modal" 
                        data-target="#exampleModalCenter" class="btn btn-primary mt-3 mb-3 form-control">Continue to Checkout</button>               
                    </form>
                    </div>
                    <!-- <div class="col-lg-4">

                    </div> -->
                </div>
            </div>
        </div>
    </div>
    {{-- form validation using jquery --}}

    <script>
        function validateForm() {
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var username = document.getElementById('username').value;
            
            if (firstname === "") {
                document.getElementById('firstnameError').innerHTML = 'First Name is required';
                return false;
            } else {
                document.getElementById('firstnameError').innerHTML = '';
            } 
            if (lastname === "") {
                document.getElementById('lastnameError').innerHTML = 'Last Name is required';
                return false;
            } else {
                document.getElementById('lastnameError').innerHTML = '';
            }
            if (username === "") {
                document.getElementById('usernameError').innerHTML = 'User Name is required';
                return false;
            } else {
                document.getElementById('usernameError').innerHTML = '';
            }            

            return true;
        }
    </script>
    {{-- Add checkout details in db via ajax --}}
    <script>
        $(document).ready(()=>{
            $('#submit').on('click', function(e){
                e.preventDefault();
                var formData = $('#formData').serialize();
                // var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('add-member/')}}",
                    type:'post',
                    data:formData,
                    dataType: "json",
                    success: function(response){
                        console.log(response);
                    }
                })
            })
        })
    </script>

    <!-- model for one phase -->

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Upsell 1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
          <h6>Product Name : Smartphone</h6>
          <h6>Price : 30000</h6>
        </div>
        <div class="modal-footer">
            <button type="button" id="addproductpage" class="btn btn-danger">Add to my Order</button>
          <button type="button" id="openwelcomepage"  class="btn btn-secondary" data-dismiss="modal">No Thanks</button>
          
        </div>
      </div>
    </div>
  </div>
{{-- Open add Product page --}}
  <script>
    $(document).ready(()=>{
            $('#addproductpage').on('click', function(){                
                $.ajax({
                    url:"{{url('add-product/')}}",
                    type:'get',                    
                    success: function(response){
                        if(response){
                            window.location.replace("http://127.0.0.1:8000/add-product");
                        }
                    }
                })
            })
        })
  </script>
  {{-- open Welcom page --}}
  <script>
        $(document).ready(()=>{
            $('#openwelcomepage').on('click', function(){                
                window.location.replace("http://127.0.0.1:8000/welcome");
            })
        })
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>