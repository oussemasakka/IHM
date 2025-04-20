@extends('Client.Template')
@section('Content')
  <!--==============================
	  Checkout Area Start
	==============================-->
    <section class="vs-checkout-wrapper space">
        <div class="container">
          <div class="woocommerce-form-login-toggle">
            <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
            </div>
            <form action="#" class="woocommerce-form-login bg-smoke">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-checkbox">
                        <br><br><br>
                      <input type="checkbox" id="remembermylogin">
                      <label for="remembermylogin">Remember Me</label>
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <button type="submit" class="vs-btn style4">Login</button>
                    <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="woocommerce-form-coupon-toggle">

          </div>
          <form action="#" class="woocommerce-checkout">
            <div class="row ">
              <div class="col-lg-6">
                <h2 class="h4">Billing Details</h2>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>  
                  <div class="col-12 form-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                  </div>

                </div>
              </div>
      
            </div>
          </form>
          <h4 class="mt-4 pt-lg-2">Your Order</h4>
          <form action="#" class="woocommerce-cart-form">
            <div class="table-responsive">
              <table class="cart_table">
                <thead>
                  <tr>
                    <th class="cart-col-image">Image</th>
                    <th class="cart-col-productname">Hotel Name</th>
                    <th class="cart-col-total">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="cart_item">
                    <td data-title="Product">
                      <a class="cart-productimage" href="shop-details.html"><img width="91" height="91"
                          src="{{ asset($hotel->image) }}" alt="Image"></a>
                    </td>
                    <td data-title="Name">
                      <a class="cart-productname" href="shop-details.html">{{$hotel->NomHotel}}</a>
                    </td>
                    <td data-title="Total">
                      <span class="amount"><bdi>{{$hotel->prixmoyen}} DT</bdi></span>
                    </td>
                  </tr>
                </tbody>
                <tfoot class="checkout-ordertable">
                  <tr class="cart-subtotal">
                    <th>Subtotal</th>
                    <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol"></span>{{$hotel->prixmoyen}} DT</bdi></span></td>
                  </tr>
                  <tr class="order-total">
                    <th>Total</th>
                    <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span
                              class="woocommerce-Price-currencySymbol"></span>{{$hotel->prixmoyen}} DT</bdi></span></strong>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <div class="mt-lg-3">
            <div class="woocommerce-checkout-payment">
              <ul class="wc_payment_methods payment_methods methods">
                <li class="wc_payment_method payment_method_bacs">
                  <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"
                    checked="checked">
                  <label for="payment_method_bacs">Direct bank transfer</label>
                  <div class="payment_box payment_method_bacs" style="display: block;">
                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                      Your order will not be shipped until the funds have cleared in our account.</p>
                  </div>
                </li>
                <li class="wc_payment_method payment_method_cheque">
                  <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                  <label for="payment_method_cheque">Cheque Payment</label>
                  <div class="payment_box payment_method_cheque">
                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                    </p>
                  </div>
                </li>
                <li class="wc_payment_method payment_method_cod">
                  <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method">
                  <label for="payment_method_cod">Cash</label>
                  <div class="payment_box payment_method_cod">
                    <p>Pay with cash .</p>
                  </div>
                </li>
              </ul>
              <div class="form-row place-order pt-lg-2">
                <button type="submit" class="vs-btn style4">Place order & Create Account</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--==============================
          Checkout Area End
        ==============================-->
@endsection