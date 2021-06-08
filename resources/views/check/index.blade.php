@extends('layouts.app')
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content')
<div class="col-md-12">
  <h1>Procéder au paiement</h1>
  <div class="col-md-6 my-3 mx-auto">
      <form action="{{ route('check.charge') }}" method="POST" id="payment-form">
          @csrf
          <div id="card-element">
          <!-- Elements will create input elements here -->
          </div>
          <div id="card-errors" role="alert"></div>
          <button id="submit" class="btn btn-success btn-block mt-3">Soumettre le paiement</button>
      </form>
    </div>
</div>
@endsection

@section('extra-js')
<script>
var stripe = Stripe('pk_test_LI2JPcWlrGhmjPeXnppRdMxu00J9G81wVp');
var elements = stripe.elements();
    // Set up Stripe.js and Elements to use in checkout form
var style = {
  base: {
    color: "#32325d",
  }
};
var card = elements.create("card", { style: style });
    card.mount("#card-element");
    card.addEventListener('change', ({error}) => {
    const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert', 'alert-warning', 'mt-3');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert', 'alert-warning', 'mt-3');
            displayError.textContent = '';
        }
    });
    var submitButton = document.getElementById('submit');
submitButton.addEventListener('click', function(ev) {
    ev.preventDefault();
    stripe.confirmCardPayment("{{ $clientSecret }}", {
        payment_method: {
            card: card
        }
        }).then(function(result) {
            if (result.error) {
            // Show error to your customer (e.g., insufficient funds)
            console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    // Show a success message to your customer
                    // There's a risk of the customer closing the window before callback
                    // execution. Set up a webhook or plugin to listen for the
                    // payment_intent.succeeded event that handles any business critical
                    // post-payment actions.
                    console.log(result.paymentIntent);
                }
            }
        });
      });
</script>
@endsection