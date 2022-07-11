<?php

namespace App\Http\Controllers;


use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;

class MidTransController extends Controller
{
    

    public function NotificationHandler(Request $request)
    {
        // Set konfigurasi midtrans
        Config::$serverKey = 'SB-Mid-server-x22KwzovWFpHlkw-LTxSeuTw';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Buat instance midtrans notification
        $notification = new Notification;

        // Assign ke variable untuk  memindahkan config
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status; 
        $order_id =  'MIDTRANS-'.$notification->order_id.'-'.Auth::user()->name;

        //cari transaksi berdasarkan ID
        $transaction = Transaksi::findOrFail($order_id);

        if($status == 'capture'){
            if($$type == 'credit_cart'){
                if($fraud == 'challenge'){
                    $transaction->payment_status = 'CHALLENGE';
                } else {
                    $transaction->payment_status = 'SUCCESS';
                }
            }
        }
        else if($status == 'settlement'){
            $transaction->payment_status = 'SUCCESS';
        }
        else if($status == 'pending'){
            $transaction->payment_status = 'PENDING';
        }
        else if($status == 'deny'){
            $transaction->payment_status = 'FAILED';
        }
        else if($status == 'expire'){
            $transaction->payment_status = 'EXPIRED';
        }
        else if($status == 'cancel'){
            $transaction->payment_status = 'FAILED';
        }
        
        //menyimpan
        $transaction->save();


        if($transaction == 'capture' && $fraud == 'accept')
        {

        }

    }

    public function finishRedirect(Request $request)
    {
        return view('user.notification.finish');
    }

    public function unfinishedRedirect(Request $request)
    {
        return view('user.notification.pending');
    }

    public function failedRedirect(Request $request)
    {
        return view('user.notification.failed');
    }
    public function denyRedirect()
    {

    }
}
