@extends('user.layout')
@section('content')
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
        <div class="col-md-4 rounded border border-warning p-2">
          <img src="{{asset('storage/produk/foto/'.$getPembayaran->foto_produk_cart)}}" height="200px;" class="img-responsive center-block rounded" alt="...">
          
        </div>
        <div class="col-md-8 p-0 bg-white rounded border border-warning">
            <div class="card-header">
             <h3>Segera lakukan pembayaran anda. </h3> </div>
             <div class="card-body">
               <h5>Transaksi akan selesai sebelum tanggal 1 September 2022, pukul 13:40</h5>
               <a href="{{route('cart.payNow',$getPembayaran->id_transaksi)}}">
                <button class="btn btn-warning mt-5" id="pay-button" >Bayar Sekarang</button> 
               </a>

             </div>

        </div>
          <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"> </script>

          {{-- <script type="text/javascript">
              // For example trigger on button clicked, or any time you need
              var payButton = document.getElementById('pay-button');
              payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{$snapToken}}', {
                  onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                  },
                  onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                  },
                  onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                  },
                  onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                  }
                })
              });
            </script> --}}
      </div>
    </div>
  </div>
</section>
  
@endsection