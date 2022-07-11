@extends('user.layout')
@section('content')
<style>
      body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:rgb(114, 1, 1);
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a
    {
        width:220px;
        height:45px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:rgb(114, 1, 1);
        transition:all ease-in-out 0.3s;
    }

    .content a:hover
    {
        text-decoration:none;
        background:#000;
    }
   
</style>
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 mx-auto mt-5">
                          <div class="payment">
                             <div class="payment_header">
                                <div class="check"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                             </div>
                             <div class="content">
                                <h1>Your payment still in proccess </h1>
                                <p>Please complete your payment</p>
                                <a href="{{route('index')}}"> Go to Home</a>
                             </div>
                             
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>


@endsection