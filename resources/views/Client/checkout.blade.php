@extends('Client.Template')

@section('Content')
<!--==============================
  Checkout Area Start
==============================-->
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<section class="vs-checkout-wrapper space">
  <div class="container">
    @guest
    <div class="woocommerce-form-login-toggle">
      <div class="woocommerce-info">
        Already have an account? <a href="#" class="showlogin">Click here to login</a>
      </div>
      <form action="{{ route('login') }}" method="POST" class="woocommerce-form-login bg-smoke">
        @csrf
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
              <div class="custom-checkbox">
                <input type="checkbox" id="remembermylogin" name="remember">
                <label for="remembermylogin">Remember Me</label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="vs-btn style4">Login</button>
              <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="{{ route('password.request') }}">Lost your password?</a></p>
            </div>
          </div>
        </div>
      </form>
    </div>
    @endguest

    <form action="{{ route('reservation.store') }}" method="POST" class="woocommerce-checkout">
      @csrf
      <div class="row">
        <div class="col-lg-6">
          <h2 class="h4">Billing Details</h2>
          <div class="row">
            <div class="col-md-12 form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" value="{{ Auth::check() ? Auth::user()->name : '' }}" {{ Auth::check() ? 'readonly' : 'required' }}>
            </div>
            <div class="col-12 form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ Auth::check() ? Auth::user()->email : '' }}" {{ Auth::check() ? 'readonly' : 'required' }}>
            </div>

            @guest
            <div class="col-12 form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            @endguest

            <div class="col-6 form-group">
              <label for="checkin">Check in :</label>
              <input type="date" name="checkin" id="checkin" class="form-control" required>
            </div>
            <div class="col-6 form-group">
              <label for="checkout">Check out :</label>
              <input type="date" name="checkout" id="checkout" class="form-control" required>
            </div>

            <div class="col-12 form-group">
              <label for="room">Room :</label>
              <select name="room" class="form-control" required>
                @foreach ($chambres as $chambre)
                <option value="{{ $chambre->id }}">Vue : {{ $chambre->vue }} , N° Bed : {{ $chambre->nbLit }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>

      <h4 class="mt-4 pt-lg-2">Your Order</h4>
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
                <a class="cart-productimage"><img width="91" height="91" src="{{ asset($hotel->image) }}" alt="Image"></a>
              </td>
              <td data-title="Name">
                <a class="cart-productname">{{ $hotel->NomHotel }}</a>
              </td>
              <td data-title="Total">
                <span class="amount"><bdi id="totalPrice">{{ $hotel->prixmoyen }} DT</bdi></span>
              </td>
            </tr>
          </tbody>
          <tfoot class="checkout-ordertable">
            <tr class="cart-subtotal">
              <th>Subtotal</th>
              <td colspan="4"><span class="woocommerce-Price-amount amount"><bdi id="subtotalPrice">{{ $hotel->prixmoyen }} DT</bdi></span></td>
            </tr>
            <tr class="order-total">
              <th>Total</th>
              <td colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi id="finalPrice">{{ $hotel->prixmoyen }} DT</bdi></span></strong></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="mt-lg-3">
        <div class="woocommerce-checkout-payment">
          <ul class="wc_payment_methods payment_methods methods">
            <li class="wc_payment_method payment_method_bacs">
              <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked>
              <label for="payment_method_bacs">Direct bank transfer</label>
              <div class="payment_box payment_method_bacs" style="display: block;">
                <p>Make your payment directly into our bank account. Use Order ID as reference.</p>
              </div>
            </li>
            <li class="wc_payment_method payment_method_cheque">
              <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
              <label for="payment_method_cheque">Cheque Payment</label>
              <div class="payment_box payment_method_cheque">
                <p>Please send a check to our address.</p>
              </div>
            </li>
            <li class="wc_payment_method payment_method_cod">
              <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod">
              <label for="payment_method_cod">Cash</label>
              <div class="payment_box payment_method_cod">
                <p>Pay with cash upon arrival.</p>
              </div>
            </li>
          </ul>
          <div class="form-row place-order pt-lg-2">
            <button type="submit" class="vs-btn style4">
              {{ Auth::check() ? 'Place Order' : 'Place Order & Create Account' }}
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const checkIn = document.getElementById('checkin');
    const checkOut = document.getElementById('checkout');
    const prixBase = {{ $hotel->prixmoyen }};

    const totalPrice = document.getElementById('totalPrice');
    const subtotalPrice = document.getElementById('subtotalPrice');
    const finalPrice = document.getElementById('finalPrice');

    function calculerTotal() {
      const dateIn = new Date(checkIn.value);
      const dateOut = new Date(checkOut.value);

      if (checkIn.value && checkOut.value && dateOut > dateIn) {
        const diffTime = dateOut - dateIn;
        const jours = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        const total = jours * prixBase;

        totalPrice.innerText = total + ' DT';
        subtotalPrice.innerText = total + ' DT';
        finalPrice.innerText = total + ' DT';
      } else {
        totalPrice.innerText = prixBase + ' DT';
        subtotalPrice.innerText = prixBase + ' DT';
        finalPrice.innerText = prixBase + ' DT';
      }
    }

    checkIn.addEventListener('change', calculerTotal);
    checkOut.addEventListener('change', calculerTotal);
  });
</script>
@endsection
