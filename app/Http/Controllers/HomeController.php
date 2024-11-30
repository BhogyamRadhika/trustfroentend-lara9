<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function boardOfDirectors()
    {
        return view('pages.boardOfDirectors');
    }
    public function boardOfAdvisors()
    {
        return view('pages.boardOfAdvisors');
    }
    public function leadershipteam()
    {
        return view('pages.leadershipteam');
    }

    public function ourDoctors()
    {
        return view('pages.ourDoctors');
    }

    public function diagnosticsolutions()
    {
        return view('pages.diagnosticsolutions');
    }
    public function blogsingle()
    {
        return view('pages.blog-single');
    }
    public function brouchers()
    {
        return view('pages.brouchers');
    }

    public function newsroom()
    {
        return view('pages.newsroom');
    }
    public function scientificPublications()
    {
        return view('pages.scientificPublications');
    }
    public function careers()
    {
        return view('pages.careers');
    }
    public function lifeAtTRUSTlab()
    {
        return view('pages.lifeAtTRUSTlab');
    }
    public function biochemistry()
    {
        return view('pages.biochemistry');
    }
    public function cart(Request $request)
    {
        $list_of_tests = Cart::where('user_id', auth()->id())->get(); // Fetch cart items for the logged-in user
        return view('pages.cart', compact('list_of_tests'));
    }
    public function addToCart(Request $request)
    {
        //    dd($request->all());

        $profilecartItems = $request->input('profile_cart', []);
        $packagecartItems = $request->input('cart', []);

        $testcartItems = $request->input('test_cart', []);

        // dd($cartItems);
        foreach ($packagecartItems as $item) {
            Cart::create([
                'test_name' => $item['test_name'],
                'amount' => $item['amount'],
                'user_id' => auth()->id(),
                'type' => $item['type']
            ]);
        }

        foreach ($profilecartItems as $item) {
            Cart::create([
                'test_name' => $item['test_name'],
                'amount' => $item['amount'],
                'user_id' => auth()->id(),
                'type' => $item['type']
            ]);
        }

        foreach ($testcartItems as $item) {
            Cart::create([
                'test_name' => $item['test_name'],
                'amount' => $item['amount'],
                'user_id' => auth()->id(),
                'type' => $item['type']
            ]);
        }

        return response()->json(['message' => 'Items added to cart successfully!']);
    }

    public function removeToCart(Request $request, $id)
    {
        Cart::find($id)->delete();
        return redirect()->route('cart')->with('success', 'Cart removed successfully');
    }


    // public function initiatePayment(Request $request)
// {
//     // Assuming $subtotal is the total amount from the cart
//     $subtotal = $request->input('subtotal') * 100; // Convert to paise (multiply by 100)
//     $userId = auth()->id();
//     $orderId = uniqid('order_');  // Generate a unique order ID

    //     // Set up PayU parameters
//     $payuData = [
//         'key' => env('PAYU_MERCHANT_KEY'),
//         'txnid' => $orderId,
//         'amount' => $subtotal,
//         'productinfo' => 'Test Order',  // You can include cart items info here
//         'firstname' => auth()->user()->name,
//         'email' => auth()->user()->email,
//         'phone' => auth()->user()->phone_number,
//         'surl' => route('payu.callback'),  // Success URL
//         'furl' => route('payu.callback'),  // Failure URL
//         'hash' => $this->generatePayUHash($orderId, $subtotal, ['name' => auth()->user()->name, 'email' => auth()->user()->email]),
//         'order_id' => $orderId,  // Add order_id here
//         'user_email' => auth()->user()->email,
//         'product_info' => 'Sample Product',
//         'customer_name' => auth()->user()->name,
//         'address' => auth()->user()->address,
//     ];

    //     // Pass data to the payment view
//     return view('pages.payment', compact('payuData'));
// }



    // Handle the callback response from PayU
// Handle the callback response from PayU
    public function handleCallback(Request $request)
    {
        // Handle response from PayU after payment (success or failure)
        $status = $request->input('status');
        $txnid = $request->input('txnid');
        $hash = $request->input('hash');

        // Verify payment status here and update your order in DB
        // Compare received hash with the hash you calculate server-side

        if ($status === 'success') {
            // Payment successful, update order status and other actions
            // Example: Order::where('txnid', $txnid)->update(['status' => 'paid']);
        }

        return redirect()->route('cart')->with('status', 'Payment ' . $status);
    }

    public function generatePayUHash($orderId, $amount, $userDetails)
    {
        // Step 1: Prepare the required parameters
        $key = env('PAYU_MERCHANT_KEY');  // Merchant Key
        $salt = env('PAYU_SALT_KEY');     // Salt key from PayU account

        $txnid = $orderId;                 // Unique transaction ID
        $amount = $amount;                 // Amount to be paid (in paise)
        $productinfo = 'Sample Product';   // Product information (you can replace it with actual product details)
        $firstname = $userDetails['name']; // User first name
        $email = $userDetails['email'];    // User email

        // User Defined Fields (leave empty if not used)
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';

        // Step 2: Create the string to hash
        // Ensure that the string is correctly formatted with all parameters
        $hash_string = $key . '|' . $txnid . '|' . $amount . '|' . $productinfo . '|' . $firstname . '|' . $email . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '|||||||' . $salt;

        // Debug: Log the hash string before hashing
        \Log::info('PayU Hash String: ' . $hash_string);

        // Step 3: Generate the SHA512 hash
        $generated_hash = strtolower(hash('sha512', $hash_string));

        // Debug: Log the generated hash
        \Log::info('Generated PayU Hash: ' . $generated_hash);

        return $generated_hash;
    }

    // public function addToCart(Request $request)
    // {

    //     // $tests = $request->input('tests');
    //     // dd($request->all(),$tests);
    //     // // Validate the incoming data
    //     // $validatedData = $request->validate([
    //     //     'tests' => 'required|array',
    //     //     'tests.*.test_name' => 'required|string',
    //     //     'tests.*.amount' => 'required|numeric',
    //     // ]);

    //     // // Process the tests and amounts (example logic)
    //     // foreach ($validatedData['tests'] as $test) {
    //     //     // You can save the test data to the cart or perform any other logic
    //     //     // For instance, storing the test in a session or database
    //     //     // Example: Cart::add($test['test_name'], $test['amount']);
    //     // }

    //     // Redirect or return response after processing
    //     // return redirect()->route('cart.add')->with('success', 'Tests added to cart successfully!');
    //     return response()->json(['message' => 'Successfully added to cart'], 200);
    // }
    public function index()
    {
        // Fetch packages
        $packagesResponse = Http::withOptions(['verify' => false])
            ->get('https://edos.mytrustlab.com/api/tests/bydepartment/package');

        if ($packagesResponse->failed()) {
            abort(500, 'Failed to fetch packages');
        }

        $packages = $packagesResponse->json();

        // Fetch tests
        $testsResponse = Http::withOptions(['verify' => false])
            ->get('https://edos.mytrustlab.com/api/tests/');

        if ($testsResponse->failed()) {
            abort(500, 'Failed to fetch tests');
        }

        $tests = $testsResponse->json();

        // Map packages with corresponding tests
        $groupedData = [];
        foreach ($packages as $package) {
            $groupedData[] = [
                'package' => $package,
                'tests' => array_filter($tests, function ($test) use ($package) {
                    return $test['test_name'] === $package['title'];
                }),
            ];
        }

        $profiles = array_filter($tests, function ($test) {
            return stripos($test['test_name'], 'Profile') !== false;
        });
        return view('pages.index', compact('profiles', 'groupedData', 'tests'));
    }


    public function payUMoneyView(Request $request)
    {
        $MERCHANT_KEY = "v2BbqJ"; // Test Merchant Key
        $SALT = "SXlkFThrICzCBrK7hBH5UBTR3BWpAWTH"; // Test Salt
        $PAYU_BASE_URL = "https://test.payu.in"; // Test Environment

        // User details
        $name = 'Haresh Chauhan';
        $email = 'example@gmail.com';
        $amount = number_format((float) $request->input('subtotal', 1000), 2, '.', ''); // Subtotal from form or default

        // Callback URLs
        $successURL = route('pay.u.response'); // Route for success
        $failURL = route('pay.u.cancel'); // Route for failure

        // Generate Unique Transaction ID
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

        // Payment Parameters
        $posted = [
            'key' => $MERCHANT_KEY,
            'txnid' => $txnid,
            'amount' => $amount,
            'firstname' => $name,
            'email' => $email,
            'productinfo' => 'Webappfix',
            'surl' => $successURL,
            'furl' => $failURL,
            'service_provider' => 'payu_paisa',
            'udf1' => '',
            'udf2' => '',
            'udf3' => '',
            'udf4' => '',
            'udf5' => '',
            'udf6' => '',
            'udf7' => '',
            'udf8' => '',
            'udf9' => '',
            'udf10' => '',
        ];

        // Generate Hash String
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hash_string = implode('|', array_map(fn($key) => $posted[$key] ?? '', explode('|', $hashSequence))) . '|' . $SALT;
        $hash = strtolower(hash('sha512', $hash_string));

        // Log data for debugging
        Log::info('PayU Payment Request Data: ' . json_encode($posted));

        // Action URL
        $action = $PAYU_BASE_URL . '/_payment';

        // Send WhatsApp Message (you can use your own WhatsApp API)
        $message = "Hello $name, your payment of ₹$amount was successful. Transaction ID: $txnid. Thank you for your purchase!";
        $this->sendWhatsAppMessage('7702165397', $message);

        // Return View with Data
        return view('pages.payment', compact('action', 'hash', 'MERCHANT_KEY', 'txnid', 'successURL', 'failURL', 'name', 'email', 'amount'));
    }

    // Send WhatsApp Message using your API
    public function sendWhatsAppMessage($phone, $message)
    {
        $apiUrl = 'https://api.subkuch.in/sendMessage';
        $apiKey = 'YOUR_API_KEY'; // Replace with your API key

        // Prepare the POST data
        $data = [
            'phone' => $phone,
            'message' => $message,
            'apikey' => $apiKey,
        ];

        // Initialize cURL
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        // Execute the request and capture the response
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            // Log or handle the cURL error
            Log::error('cURL Error: ' . curl_error($ch));
        } else {
            // Optionally, log the response
            Log::info('WhatsApp API Response: ' . $response);
        }

        // Close the cURL session
        curl_close($ch);
    }

    // Handle PayU success response
    public function payuSuccess(Request $request)
    {
        Log::info('PayU Success Response: ' . json_encode($request->all()));

        if ($request->has('mihpayid')) {
            // Transaction success
            $transactionId = $request->input('mihpayid');
            $status = $request->input('status');
            $amount = $request->input('amount');

            // Process the payment success
            // Update database, send confirmation emails, etc.

            // Log success
            Log::info('Payment Success: Transaction ID ' . $transactionId . ' Status ' . $status);

            return view('pages.success', compact('transactionId', 'amount'));
        }

        return view('pages.cancel');
    }

    // Handle PayU failure response
    public function payuFailure(Request $request)
    {
        Log::error('PayU Failure Response: ' . json_encode($request->all()));

        // Handle failure (update order status, notify user, etc.)
        return view('payment.cancel');
    }


    public function handlePayUResponse(Request $request)
    {
        // Log the incoming response for debugging purposes
        Log::info('PayU Response:', $request->all());
    
        // Extract response data from PayU
        $status = $request->get('status');
        $mihpayid = $request->get('mihpayid');
        $txnid = $request->get('txnid');
        $amount = $request->get('amount');
        $firstname = $request->get('firstname');
        $email = $request->get('email');
        $token = $request->get('token');
    
        // Check for the payment status
        if ($status == 'success') {
            // Payment was successful, generate WhatsApp URL
            $message = "Hello, $firstname! Your payment of ₹$amount for transaction ID $txnid was successful.";
            $whatsappUrl = "https://wa.me/yourPhoneNumber?text=" . urlencode($message);
            
            // Log the WhatsApp URL for debugging
            Log::info('WhatsApp URL:', $whatsappUrl);
            
            // Redirect to WhatsApp link
            return redirect()->away($whatsappUrl);
        } else {
            // Payment failed, redirect to failure page
            Log::error('Payment failed: ', ['mihpayid' => $mihpayid, 'status' => $status]);
            return redirect()->route('pay.u.cancel');
        }
    }
  

    // Function to send WhatsApp message
    // private function sendWhatsAppMessage($phone, $message)
    // {
    //     $apiUrl = 'https://api.subkuch.in/sendMessage'; // Replace with the actual API URL you're using
    //     $apiKey = env('WHATSAPP_API_KEY'); // Fetch your WhatsApp API Key from .env file

    //     // Clean the phone number (remove any non-numeric characters and add the country code)
    //     $phone = preg_replace('/\D/', '', $phone); // Clean phone number
    //     $phone = '+91' . $phone; // Example for India, replace with your country code as needed

    //     // Send the WhatsApp message using the API
    //     $response = Http::withHeaders([
    //         'Authorization' => 'Bearer ' . $apiKey,
    //     ])->post($apiUrl, [
    //         'to' => $phone,
    //         'message' => $message,
    //     ]);

    //     // Check the response status and log accordingly
    //     if ($response->successful()) {
    //         Log::info('WhatsApp message sent successfully.');
    //     } else {
    //         Log::error('Failed to send WhatsApp message', ['response' => $response->body()]);
    //     }
    // }
    public function payUResponse(Request $request)
    {
        // Log the response for debugging
        \Log::info('PayU Response:', $request->all());

        $status = $request->get('status');
        $txnid = $request->get('mihpayid');
        $amount = $request->get('amount');
        $firstname = $request->get('firstname');
        $phone = $request->get('phone');
        $hash = $request->get('hash');  // Hash from PayU response

        // Recalculate hash
        $SALT = "SXlkFThrICzCBrK7hBH5UBTR3BWpAWTH"; // Your SALT
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hash_string = implode('|', array_map(fn($key) => $request->get($key) ?? '', explode('|', $hashSequence))) . '|' . $SALT;
        $calculated_hash = strtolower(hash('sha512', $hash_string));

        // Verify hash
        if ($hash == $calculated_hash) {
            // Valid hash, process the payment
            if ($status == 'success') {
                $message = "Hello $firstname, your payment of ₹$amount was successful. Transaction ID: $txnid. Thank you for your purchase!";
                $this->sendWhatsAppMessage($phone, $message);

                return redirect()->route('cart.page')->with('success_message', 'Payment Successful!');
            } else {
                return redirect()->route('cart.page')->with('error_message', 'Payment Failed. Please try again.');
            }
        } else {
            // Log the mismatch for debugging
            \Log::error('Hash mismatch or invalid payment response', ['calculated_hash' => $calculated_hash, 'received_hash' => $hash]);
            return redirect()->route('cart.page')->with('error_message', 'Payment verification failed.');
        }
    }


    public function payUCancel(Request $request)
    {
        // Log cancellation response for debugging
        \Log::info('PayU Cancellation:', $request->all());

        // Return to cart page with failure details
        return view('pages.cancel')->with('error_message', 'Payment Cancelled.');
    }


    public function membership()
    {
        return view('pages.membership');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function diagnosticexpertise()
    {
        return view('pages.diagnosticexpertise');
    }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }

    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }
    // public function partnerships(){
    //     return view('pages.partnerships');
    // }

    public function contact()
    {
        return view('pages.contact');
    }
    public function currentOpportunities()
    {
        return view('pages.currentOpportunities');
    }
}
