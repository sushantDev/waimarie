<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplyNotifiable;
use App\Mail\HireNotifiable;
use App\Mail\InquiryNotifiable;
use App\Mail\InquiryNotifiableDonation;
use App\Mail\PartnerNotifiable;
//use Session;


class PayPalController extends Controller
{

    protected $site_settings;

    public function handlePayment(Request $request)
    {

        $paypalModule = new ExpressCheckout;

        $product = $this->cartData($request);


        $res = $paypalModule->setExpressCheckout($product);
//        dd($res);

//        $res = $paypalModule->setExpressCheckout($product, true);


        return redirect($res['paypal_link']);



    }

//    $test = [];

    public function cartData(Request $request){

        $product = [];
        if( ($request->donateamount) == null){
            $donationvalue = $request->donateamountother;
        }
        else{
            $donationvalue = $request->donateamount;
        }
        $product['items'] = [
            [
                'name' => 'Waimarie Donation',
                'price' => $donationvalue,
                'qty' => '$USD'
            ]
        ];

        $product['invoice_id'] = uniqid();
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');

        foreach($product['items'] as $item){
            $product['total'] = $item['price'];
        }
//        dd($product);

        return $product;
    }

    public function paymentCancel()
    {

        dd('Your payment has been declend. The payment cancelation page goes here!');
    }

    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;

        $token = $request->token;

        $payerID = $request->PayerID;

        $response = $paypalModule->getExpressCheckoutDetails($token);

        $product = $this->cartData($request);


        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            $payment_status = $paypalModule->doExpressCheckoutPayment($product, $token, $payerID);
//dd($payment_status);
//            return back()->route('donation')->withSuccess('Transaction completed');



            session()->flash('msg', "Your Donation was Successful");
            return redirect()->route('donation');
        }

        dd('Error occured!');
    }
}