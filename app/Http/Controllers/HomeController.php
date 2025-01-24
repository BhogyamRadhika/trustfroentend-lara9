<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        $response = Http::get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/diseases');
        if ($response->failed()) {
            abort(500, 'Failed to fetch diseases from the API.');
        }
        $response2 = Http::get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/diseases');
        if ($response2->failed()) {
            abort(500, 'Failed to fetch diseases from the API.');
        }
        $uniqueDiseases = $response->json(); 
        if (!is_array($uniqueDiseases)) {
            $uniqueDiseases = [];
        }
    $uniqueSpecialties=$response2->json();
    if(!is_array($uniqueSpecialties)){
        $uniqueSpecialties=[];
    }
        return view('pages.diagnosticsolutions',compact('uniqueDiseases','uniqueSpecialties'));
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
        $response = Http::get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/diseases');
        if ($response->failed()) {
            abort(500, 'Failed to fetch diseases from the API.');
        }
        $response2 = Http::get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/diseases');
        if ($response2->failed()) {
            abort(500, 'Failed to fetch diseases from the API.');
        }
        $uniqueDiseases = $response->json(); 
        if (!is_array($uniqueDiseases)) {
            $uniqueDiseases = [];
        }
    $uniqueSpecialties=$response2->json();
    if(!is_array($uniqueSpecialties)){
        $uniqueSpecialties=[];
    }



    $packagesResponse = Http::withOptions(['verify' => false])
    ->get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/packages');

if ($packagesResponse->failed()) {
    abort(500, 'Failed to fetch packages');
}

$groupedData = $packagesResponse->json()['data'] ?? [];

foreach ($groupedData as &$package) {
    $package['parameters'] = $package['parameters'] ?? 'No Parameters Available';
    $package['mrp'] = $package['mrp'] ?? 0;
}

$testsResponse = Http::withOptions(['verify' => false])
->get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/testsList');
if ($testsResponse->failed()) {
abort(500, 'Failed to fetch tests');
}
$groupedData3 = $testsResponse->json()['data'] ?? [];
foreach ($groupedData3 as &$package) {
    $package['parameters'] = $package['parameters'] ?? 'No Parameters Available';
    $package['mrp'] = $package['mrp'] ?? 0;
}

$profilesResponse = Http::withOptions(['verify' => false])
    ->get('https://coral-guanaco-119995.hostingersite.com/public/api/get-edos/profiles');

if ($profilesResponse->failed()) {
    abort(500, 'Failed to fetch packages');
}

$groupedData2 = $profilesResponse->json()['data'] ?? [];

foreach ($groupedData2 as &$package) {
    $package['parameters'] = $package['parameters'] ?? 'No Parameters Available';
    $package['mrp'] = $package['mrp'] ?? 0; // Ensure MRP is set
}

        return view('pages.index', compact('groupedData2', 'groupedData', 'groupedData3','uniqueDiseases','uniqueSpecialties'));
    }

    //----------------------------------------------------------------------------------------------
    public function indexTwo()
{
    $testMode = 1;

    if($testMode)
    {
        // test / sandbox
        $endpoint = 'https://test.payu.in/_payment';
    }
    else
    {
        // production / live
        $endpoint = 'https://secure.payu.in/_payment';
    }

    $saltKey = 'DQ9WgZaP8Uak36a1KWRrBrbjf8c5WzLO';
    $merchantKey = 'Bzo7as';
    $txnid = time().rand(1000,9999);
    $amount = 10;
    $firstname = 'John';
    $lastname = 'Doe';
    $userName = str_replace(' ', '', $firstname);
    $userEmail = 'test@example.com';
    $productInfo = 'Life';

   

    $hashData = $merchantKey.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$userName.'|'.$userEmail.'|||||||||||'.$saltKey;

    $hashedKey = strtolower(hash('sha512',$hashData));

    $successUrl = route('payu.success'); 
    $failureUrl = route('payu.failure');

    $formData = [
        'endpoint' => $endpoint,
        'key' => $merchantKey,
        'txnid' => $txnid,
        'amount' => $amount,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $userEmail,
        'productinfo' => $productInfo,
        'surl' => $successUrl,
        'furl' => $failureUrl,
        'hash' => $hashedKey,
    ];

    return view('pages.payment',compact('formData'));
}

public function success(Request $request)
{
    dd('success');
    if($request->status == 'success')
    {
        $txnid = $request->txnid;
        $paymentmethod = $request->mode;
    }
    else
    {
    }
}

public function failure(Request $request)
{
    // handle your error message here
    dd($request->all());
}


    public function initiatePayment(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'subtotal' => 'required|numeric|min:1',
        ]);
    
        $MERCHANT_KEY = env('PAYU_MERCHANT_KEY');
        $SALT = env('PAYU_MERCHANT_SALT');
        $amount = $request->input('subtotal');
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        $productinfo = "Cart Payment";
        $firstname = auth()->user()->name ?? "Guest";
        $email = auth()->user()->email ?? "guest@example.com";
    
        // Generate hash
        $hash_string = $MERCHANT_KEY . "|" . $txnid . "|" . $amount . "|" . $productinfo . "|" . $firstname . "|" . $email . "|||||||||||" . $SALT;
        $hash = strtolower(hash('sha512', $hash_string));
    
        // Log payment initiation details
        Log::info('Initiating payment', [
            'txnid' => $txnid,
            'amount' => $amount,
            'productinfo' => $productinfo,
            'firstname' => $firstname,
            'email' => $email,
            'hash' => $hash,
        ]);
    
        // Ensure the routes for success and failure are generated correctly
        $surl = route('payu.success'); // Success URL
        $furl = route('payu.failure'); // Failure URL
    
        Log::info('Payment form details', [
            'action' => env('PAYU_ENV') === 'TEST' 
                ? 'https://test.payu.in/_payment' 
                : 'https://secure.payu.in/_payment',
            'surl' => $surl,
            'furl' => $furl,
        ]);
    
        return view('pages.payment', [
            'action' => env('PAYU_ENV') === 'TEST' 
                ? 'https://test.payu.in/_payment' 
                : 'https://secure.payu.in/_payment',
            'MERCHANT_KEY' => $MERCHANT_KEY,
            'txnid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,
            'firstname' => $firstname,
            'email' => $email,
            'productinfo' => $productinfo,
            'surl' => $surl, // Success URL
            'furl' => $furl, // Failure URL
        ]);
    }
    
    
    // public function paymentSuccess(Request $request)
    // {
    //     Log::info('Payment Success Response:', $request->all());
    //     return $this->handleResponse($request, 'success');
    // }

    // public function paymentFailure(Request $request)
    // {
    //     Log::info('Payment Failure Response:', $request->all());
    //     return $this->handleResponse($request, 'failure');
    // }

    private function handleResponse(Request $request, $status)
{
    $data = $request->all();
    $SALT = env('PAYU_MERCHANT_SALT');

    // Recalculate hash for validation
    $hash_sequence = $SALT . '|' . $data['status'] . '|||||||||||' . $data['email'] . '|' . $data['firstname'] . '|' . $data['productinfo'] . '|' . $data['amount'] . '|' . $data['txnid'] . '|' . $data['key'];
    $calculated_hash = strtolower(hash('sha512', $hash_sequence));

    if ($calculated_hash !== $data['hash']) {
        Log::error('Checksum mismatch', ['response' => $data]);
        return redirect()->route('cart')->with('error_message', 'Payment validation failed.');
    }

    if ($status === 'success') {
        Log::info('Payment successfully validated:', $data);
        // Handle payment success logic (e.g., save transaction details)
        return redirect()->route('cart')->with('success_message', 'Payment Successful!');
    } else {
        Log::info('Payment failed:', $data);
        return redirect()->route('cart')->with('error_message', 'Payment Failed.');
    }
}

    
    //-----------------------------------------------------------------------------------------------

    // public function payUMoneyView(Request $request)
    // {
    //     $MERCHANT_KEY = "Bzo7as"; 
    //     $SALT = "DQ9WgZaP8Uak36a1KWRrBrbjf8c5WzLO"; 
    //     $PAYU_BASE_URL = "https://test.payu.in"; 
    
    //     $user = \Auth::user();
    //     if (!$user) {
    //         return redirect()->back()->withErrors(['error' => 'User not authenticated.']);
    //     }
    
    //     $name = $user->name;
    //     $email = $user->email;
    //     $phone = $user->phone;
    //     $amount = number_format((float) $request->input('subtotal', 1000), 2, '.', ''); // Subtotal or default
    
    //     $successURL = route('pay.u.response');
    //     $failURL = route('pay.u.cancel');
    
    //     $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    //     \Log::info('Initiating PayU Payment', [
    //         'user_id' => $user->id,
    //         'amount' => $amount,
    //         'txnid' => $txnid,
    //     ]);
    
    //     Payment::create([
    //         'txnid' => $txnid,
    //         'user_id' => $user->id,
    //         'amount' => $amount,
    //         'status' => 'pending', 
    //     ]);
    
    //     // Prepare data for payment request
    //     $posted = [
    //         'key' => $MERCHANT_KEY,
    //         'txnid' => $txnid,
    //         'amount' => $amount,
    //         'firstname' => $name,
    //         'email' => $email,
    //         'productinfo' => 'Webappfix',
    //         'surl' => $successURL,
    //         'furl' => $failURL,
    //         'service_provider' => 'payu_paisa',
    //     ];
    
    //     // Generate hash for the payment request
    //     $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    //     $hash_string = implode('|', array_map(fn($key) => $posted[$key] ?? '', explode('|', $hashSequence))) . '|' . $SALT;
    //     $hash = strtolower(hash('sha512', $hash_string));
    //     $action = $PAYU_BASE_URL . '/_payment';

    //     \Log::info('PayU Payment Request Data: ' . json_encode($posted));
    
    //     return view('pages.payment', compact('action', 'hash', 'MERCHANT_KEY', 'txnid', 'successURL', 'failURL', 'name', 'email', 'amount'));
    // }
    
    

    public function clearCart($user)
    {
        Cart::where('user_id', $user->id)->delete();

        Log::info("Cart cleared for user ID: {$user->id}");
    }

    public function sendWhatsAppMessage($user, $message)
    {
        $whatsAppApiUrl = 'https://backend.api-wa.co/campaign/suvega-digital-media-pvt-ltd/api/v2'; // Your API URL for WhatsApp messaging
        $apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY2OGZiZTZhNjA3OWY1NDcwOTkxODNkYiIsIm5hbWUiOiJUUlVTVGxhYiIsImFwcE5hbWUiOiJBaVNlbnN5IiwiY2xpZW50SWQiOiI2NjhmYmU2OTYwNzlmNTQ3MDk5MTgzY2IiLCJhY3RpdmVQbGFuIjoiTk9ORSIsImlhdCI6MTcyMDY5NjQyNn0.JG7zHx6Syfg2RoIPb5iRKOulrNk7l6kL-Wyz503blVw';  // Replace with your actual WhatsApp API key
        $senderPhone = '9281433936';  // Replace with your WhatsApp sender phone number
        // $recipientPhone = '+' . $user->country_code . $user->phone;  // Assuming the user object contains 'country_code' and 'phone'
        $campaignName = 'Elevate'; // Campaign name
        $userName = $user->name; // Sender's name
        $source = 'Test'; // Source of the lead
        $mediaUrl = 'https://your-media-url.com'; // URL to be sent in the WhatsApp message
        $filename = 'link.pdf'; // Optional: Provide a filename for the media
    
       

// Proceed with the message sending
$data = [
    'apiKey' => $apiKey,
    'campaignName' => $campaignName,
    'destination' => '+919281433936', // Use the properly formatted phone number
    'userName' => $userName,
    'source' => $source,
    'media' => [
        'url' => $mediaUrl,  // URL to be sent in the WhatsApp message
        'filename' => 'link.pdf',  // Optional: Provide a filename for the link
    ],
    'templateParams' => json_encode([$message]),  // Optional: Use template parameters if required
    'tags' => ['test-tag'],  // Optional: Tags for your campaign
    'attributes' => [
        'attribute_name' => 'value',  // Optional: Attributes for your campaign
    ],
];

// Send the message
$client = new Client();
try {
    // Send the POST request to the WhatsApp API
    $response = $client->request('POST', $whatsAppApiUrl, [
        'json' => $data,
    ]);
    
    // Log the response for debugging
    $responseBody = $response->getBody();
    Log::info('WhatsApp message sent successfully: ' . $responseBody);
} catch (\Exception $e) {
    // Log the error if the request fails
    Log::error('WhatsApp message sending failed: ' . $e->getMessage());
}

        $client = new Client();
    
        try {
            $client = new Client([
                'verify' => false,  // Disable SSL verification
            ]);
        
            $response = $client->request('POST', $whatsAppApiUrl, [
                'json' => $data,
            ]);
        
            Log::info('WhatsApp API Response Code: ' . $response->getStatusCode());
            Log::info('WhatsApp API Response Body: ' . $response->getBody());
        
        } catch (\Exception $e) {
            Log::error('WhatsApp message sending failed: ' . $e->getMessage());
        }
        
    }
    
  //  Send WhatsApp Message using your API
  public function sendWhatsAppMessagePay2($phone, $firstname, $txnid, $amount)
  {
      $apiUrl = env('WHATSAPP_API_URL');
      $apiKey = env('APP_KEYW');
  
      // Format the phone number
      $phone = $this->formatPhoneNumber($phone);
  
      // Prepare template parameters
      $params = [
          $firstname, // {{1}}: Recipient's first name
          $txnid,     // {{2}}: Transaction ID
          $amount,    // {{3}}: Amount
          date('Y-m-d'), // {{4}}: Current date
          'UserId123', // {{5}}: User ID (replace with actual user ID)
          'Password123' // {{6}}: Password (replace with actual password)
      ];
  
      $data = [
          'apiKey' => $apiKey,
          'destination' => $phone,
          'campaignName' => 'Billing',
          'templateParams' => $params,
          "userName"=>"TRUSTlab",
          'source' => 'new-landing-page form', // Add source if needed
          'media' => [
              'url' => 'https://whatsapp-media-library.s3.ap-south-1.amazonaws.com/FILE/6353da2e153a147b991dd812/4079142_dummy.pdf',
              'filename' => 'sample_media',
          ],
          'buttons' => [],
          'carouselCards' => [],
          'location' => [],
          'paramsFallbackValue' => [
              'FirstName' => 'user',
          ],
      ];
  
      \Log::info('Sending WhatsApp Message:', ['data' => $data]);
  
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $apiUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
          'Content-Type: application/json',
          'Authorization: Bearer ' . $apiKey,
      ]);
  
      $response = curl_exec($ch);
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  
      if (curl_errno($ch)) {
          \Log::error('cURL Error:', ['error' => curl_error($ch)]);
      }
  
      \Log::info('WhatsApp API Response:', ['http_code' => $httpCode, 'response' => $response]);
  
      curl_close($ch);
  
      if ($httpCode !== 200) {
          throw new \Exception("Failed to send WhatsApp message. HTTP Code: $httpCode, Response: $response");
      }
  }
  
  
  private function formatPhoneNumber($phone)
  {
      // Ensure the phone number is in E.164 format
      // This function assumes that the phone number provided is valid and needs the country code
      // Add your country code if missing (for example, if your country code is +91 for India)
      $countryCode = '+91'; // Change this to your required country code
  
      // Check if phone already starts with the country code
      if (strpos($phone, '+') === 0) {
          return preg_replace('/\D/', '', $phone); // Remove non-numeric characters
      } else {
          return preg_replace('/\D/', '', $countryCode . $phone); // Append country code
      }
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
    // public function payuFailure(Request $request)
    // {
    //     Log::error('PayU Failure Response: ' . json_encode($request->all()));

    //     // Handle failure (update order status, notify user, etc.)
    //     dd("failed");
    //     return view('pages.cancel');
    // }


    // public function handlePayUResponse(Request $request)
    // {
    //     // Log the incoming response for debugging purposes
    //     Log::info('PayU Response:', $request->all());

    //     // Extract response data from PayU
    //     $status = $request->get('status');
    //     $mihpayid = $request->get('mihpayid');
    //     $txnid = $request->get('txnid');
    //     $amount = $request->get('amount');
    //     $firstname = $request->get('firstname');
    //     $email = $request->get('email');
    //     $token = $request->get('token');

    //     // Check for the payment status
    //     if ($status == 'success') {
    //         // Payment was successful, generate WhatsApp URL
    //         $message = "Hello, $firstname! Your payment of ₹$amount for transaction ID $txnid was successful.";
    //         $whatsappUrl = "https://wa.me/yourPhoneNumber?text=" . urlencode($message);

    //         // Log the WhatsApp URL for debugging
    //         Log::info('WhatsApp URL:', $whatsappUrl);

    //         // Redirect to WhatsApp link
    //         return redirect()->away($whatsappUrl);
    //     } else {
    //         // Payment failed, redirect to failure page
    //         Log::error('Payment failed: ', ['mihpayid' => $mihpayid, 'status' => $status]);
    //         return redirect()->route('pay.u.cancel');
    //     }
    // }


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
    // public function payUResponse(Request $request)
    // {
    //     \Log::info('PayU Response:', $request->all());
    
    //     $status = $request->get('status');
    //     $txnid = $request->get('mihpayid');
    //     $amount = $request->get('amount');
    //     $firstname = $request->get('firstname');
    //     $email = $request->get('email');
    //     $hash = $request->get('hash');  // Hash from PayU response
    
    //     // Recalculate hash for verification
    //     $SALT = "MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDGcs+1Jg4DE5A0N+lFp08JSVwkXNCfL8wpquq/xDjW9BPNZuWoLBoWhw6lbvwAaxJzYk/MU1KiI/uHWSuQ12wWuXr/QxORCaw8Qr734dw/GJsz+mM+q+uY7npkeAkLfcdIUoehE7a5M91g2H4s8U5Ya7lGwcYsG8qQd14PgKwD7Fe8YDlMm9Pzupk0YYPxYsROZkh2DP1eplQYsEt2hbDQHAigeYFwGYGS23BjjMV6bgnxLGgCjaG6TunCh0bQWpMAJTbzp5Vhw65epPk8gjd8w9N/NLVHefP0O9voPa11bY7XHLwlzcrZ4d4KyC6o28UE9JEnI9+kg0ggA/XF37IhAgMBAAECggEBAId6OAy+NxComWjcxrcTmmSHnY0BhDc4xVOo6GwUhI1SwfYXCi/+M60vdLNCCm4qqsT01+9w7tfcYsoq+Q//0T3OUIbVfxUkGl5lXsQRgG/e143roTdW3Rdhr1LJk7sxmgvos8kmkTbsjnSgN7ts3YSFvk3s2eKg8nAf3aoNuOFPkn/+w6rej4r9zipxtk31Ax+dvh+s/0YnbhQMO2GQcRdyyn1VTqgB60nIlTuMboe6xfaHeaVHZpbAZqGbYOs5+LDEsDAq2fweaRUtPkUV0LQZMSrQE68f/Yr4azqgxTENsstw5wJDuki2z9x5uMilElWxux5Zk2LF3txoNnvR6WUCgYEA88FX66NHNVEByTgpYq5g8Ap1+Qq+TWGOh94/uA5gXsM4a8ZhRWR9iwUHDyIDJxCPdgnTkOLKnqTOzdPwrOL3OICrOn8ol8/mdu3cBqQuwGMSLe7jN3V2YnjQx5qN+dE6snc5YswNJYYy58wkscaySc5DRqI6r4/xbsRz1r1/UMsCgYEA0GrUX8GFZsyHfsM2pMkRTmThR86HXjwBjkOR64152GBfA/yvKjED5H9mYLensTbrrT/oKNVE5HW91AUkxio6lgSQW9U6m6/PVBv38bHfnGsn9gYii/yHaBubSkzOICyFja/xnd5Sqd4Tmv3OmyHzIT1FsvQSCZODOG+CQgQIB0MCgYBqdYP/v1UnXRTpnCS/G6fszrTNqzqIM1Z70r6DlYvTd3HZ6E+tbgFCyVRW8KTt19bAV/RV8CdMeHB2Bt2ztIEC5XdjWgwRmdRvFt2k7OoaTmqvMwl7vEqTIW8V7lOZyx7WuSmQE8yeGel7wXY5Sq2tfG93lv0IllZ86UIqhKLpVwKBgQC/iK3Lokk6g9Qxhq19GtswtDzkhMSasYKsfyRm2QmU9FvdiiZgG9N79ijb0WvmzJYiDY0JmZVKb3oYkvGMu9pDa8ZO3tKRqSxcG6ftEo5xbXi3/ENbaqP15Qj9a0AzCTdjUsI1Vs+ZFGHoGj/5CWYqseiP4QWCj3IUN0X57UKDiQKBgQCN8cZqGnewsrdYoNC7I6ZgTm1PCP32RU1Qi0K0VyAB52xJCIDlgzjZh7dna5og0Y22u10WAsbCspGk+QDsGirjRW4ugSrK6hKLxn1rvGzrQIAUbxf7WV7pGNmfEZsG+Ilyoaq7NmDnH08VnNNSe5nmRXOiAvQV9kOO1ySxL+NsTg=="; 
    //     $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    //     $hash_string = implode('|', array_map(fn($key) => $request->get($key) ?? '', explode('|', $hashSequence))) . '|' . $SALT;
    //     $calculated_hash = strtolower(hash('sha512', $hash_string));
    
    //     // Verify the hash
    //     if ($hash === $calculated_hash) {
    //         // Process the payment based on status
    //         if ($status === 'success') {
    //             $message = "Hello $firstname, your payment of ₹$amount was successful. Transaction ID: $txnid. Thank you for your purchase!";
    //             $this->sendWhatsAppMessage($email, $message);
    
    //             // Update payment status in the database
    //             Payment::where('txnid', $txnid)->update(['status' => 'success']);
    //             return redirect()->route('cart.page')->with('success_message', 'Payment Successful!');
    //         } else {
    //             return redirect()->route('cart.page')->with('error_message', 'Payment Failed. Please try again.');
    //         }
    //     } else {
    //         \Log::error('Hash mismatch or invalid payment response', ['calculated_hash' => $calculated_hash, 'received_hash' => $hash]);
    //         return redirect()->route('cart.page')->with('error_message', 'Payment verification failed.');
    //     }
    // }
    
    // public function payUCancel(Request $request)
    // {
    //     // Log cancellation response for debugging
    //     \Log::info('PayU Cancellation:', $request->all());
    
    //     // Return to cart page with cancellation details
    //     return view('pages.cancel')->with('error_message', 'Payment Cancelled.');
    // }
    public function paymentDetails()
    {
        $payments = Payment::with('user')->where('user_id', \Auth::id())->paginate(5);
        return view('pages.payment_details', compact('payments'));
    }


    public function membership()
    {
        return view('pages.membership');
    }


    public function payMembership(Request $request)
{
    $request->validate([
        'plan' => 'required|string',
        'amount' => 'required|numeric',
        'user_id' => 'required|integer',
        'user_email' => 'required|email',
    ]);

    $redirect_url = env('PAYU_BASE_URL');

    $key = env('PAYU_KEY');
    $salt = env('PAYU_SALT');
    $txnid = uniqid();
    $amount = $request->amount;
    $productInfo = $request->plan;

    $user = Auth::user();
    $firstname = $user->name; 
    $email = $user->email; 
    $phone = $user->phone;
    $hashString = "$key|$txnid|$amount|$productInfo|$firstname|$email|||||||||||$salt";
    $hash = strtolower(hash('sha512', $hashString));
       
    $f_url = route('membershipPay.response');
    $s_url = route('membershipPay.response');

    $payload = [
        'key' => $key,
        'txnid' => $txnid,
        'amount' => $amount,
        'productinfo' => $productInfo,
        'firstname' => $firstname,
        'email' => $email,
        'phone' => $phone,
        'surl' => $s_url,
        'furl' => $f_url,
        'hash' => $hash,
    ];

    return view('pages.membership-pay', compact('payload','redirect_url'));
}


public function membershipPaymentResponse(Request $request)
{
    $request->validate([
        'status' => 'required|string',
        'txnid' => 'required|string',
        'amount' => 'required|numeric',
        'productinfo' => 'required|string',
        'email' => 'required|email',
    ]);

    $requiredParams = ['status', 'txnid', 'amount', 'productinfo', 'firstname', 'email'];
    foreach ($requiredParams as $param) {
        if (!$request->has($param)) {
            return view('pages.failure', ['message' => "Missing parameter: $param"]);
        }
    }
    $email = $request->input('email');
    $status = $request->input('status');

    if ($status === 'success') {
        // Attempt to retrieve the user by email
        $user = User::where('email', $email)->first();

        if ($user) {
            // Log the user back in
            Auth::login($user);
            \Log::info('User logged in after successful payment:', ['email' => $email]);
           
            $userId = auth()->user()->id;

            // Update or create the membership record
            \App\Models\UserMembership::updateOrCreate(
                ['user_id' => $userId],
                [
                    'plan' => $request->input('productinfo'),
                    'amount' => $request->input('amount'),
                    'paid_at' => now(),
                    'user_email' => $request->input('email'),
                ]
            );
            try {
                \Mail::to($user->email)->send(new \App\Mail\PaymentSuccessMail($user, $request->all()));
                \Log::info('Payment success email sent to:', ['email' => $user->email]);
            } catch (\Exception $e) {
                \Log::error('Error sending payment success email:', ['error' => $e->getMessage()]);
            }
            return redirect()->route('membership')->with('success', 'Payment was successful.');
        } else {
            \Log::error('User not found for email:', ['email' => $email]);
            return view('pages.payment-failed', ['message' => 'User not found.']);
        }
    }
else {
    \Log::info('Payment failed.', $request->all());
    return view('pages.payment-failed', ['data' => $request->all()]);
}

}

public function membershipPaymentFailure(Request $request)
{
    return redirect()->route('membership')->with('error', 'Payment failed. Please try again.');
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

    public function edosSearch(Request $request)
{
    // Base URL of the external application
    $baseUrl = 'https://coral-guanaco-119995.hostingersite.com/public/index';

    $queryParams = $request->only(['location','keyword', 'test_name', 'disease', 'speciality']);

    $queryParams['location'] = $request->input('location', 'Hyderabad');
        $redirectUrl = $baseUrl . '?' . http_build_query($queryParams);

    return redirect()->away($redirectUrl);
}

// public function submitContact(Request $request){
//    $useId=auth()->user()->id;
//   // dd($useId);
//     $contact=DB::table('contact_details')->insert([
//         'user_id'=>$useId,
//         'name'=>$request->name,'phone'=>$request->phone,'description'=>$request->message
//     ]);

//     if($contact){
//         return redirect()->back()->with('success','Submitted succeefully!');
//     }else{
//         dd('not saved');
//     }
// }

public function submitContact(Request $request)
{
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'phone' => 'required|string|max:15',
    //     'message' => 'required|string|max:1000',
    // ]);

    $userId = auth()->id(); 

    $contact = \DB::table('contact_details')->updateOrInsert(
        ['user_id' => $userId], 
        [
            'name' => $request->name,
            'phone' => $request->phone,
            'description' => $request->message,
            'updated_at' => now(), 
        ]
    );
// helpdesk@mytrustlab.com
    if ($contact) {

        return redirect()->back()->with('success', 'Submitted successfully!');
    } else {
        return redirect()->back()->with('error', 'Failed to save the contact details.');
    }
}

//dynamicssss
public function redirectToPayU(Request $request)
{
    $request->validate([
        'subtotal' => 'required|numeric|min:1',
    ]);

    $payuBaseUrl = env('PAYU_BASE_URL');
    $key = env('PAYU_KEY');
    $salt = env('PAYU_SALT');
    $txnid = uniqid();
    $amount = $request->input('subtotal');
    $productInfo = "Cart Payment";

    $user = Auth::user();
    $firstname = $user->name; 
    $email = $user->email; 
    $phone = $user->phone;
    session()->put('payment_user', [
        'firstname' => $firstname,
        'email' => $email,
        'phone' => $phone,
    ]);
    
    $hashString = "$key|$txnid|$amount|$productInfo|$firstname|$email|||||||||||$salt";
    $hash = strtolower(hash('sha512', $hashString));

    $secureToken = Str::random(32);
    session(['payu_secure_token' => $secureToken]);

    \Log::info('PayU Secure Token:', ['token' => $secureToken]);
    // $s_url = route('payu.response', ['token' => $secureToken]); 
    $f_url = route('payu.response'); // Define failure route
    $s_url = route('payu.response'); // Define failure route

    $parameters = [
        'key' => $key,
        'txnid' => $txnid,
        'amount' => $amount,
        'productinfo' => $productInfo,
        'firstname' => $firstname,
        'email' => $email,
        'phone' => $phone,
        'surl' => $s_url,
        'furl' => $f_url,
        'hash' => $hash,
    ];

    return response()->json([
        'redirect_url' => $payuBaseUrl,
        'parameters' => $parameters,
    ]);
}

public function payuResponse(Request $request)
{
    \Log::info('PayU response parameters:', $request->all());

    $requiredParams = ['status', 'txnid', 'amount', 'productinfo', 'firstname', 'email', 'phone'];
    foreach ($requiredParams as $param) {
        if (!$request->has($param)) {
            return view('pages.failure', ['message' => "Missing parameter: $param"]);
        }
    }

    $status = $request->input('status');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $firstname = $request->input('firstname');
    $txnid = $request->input('txnid');
    $amount = $request->input('amount');

    if ($status === 'success') {
        $user = User::where('email', $email)->first();

        if ($user) {
            Auth::login($user);
            $this->clearCart($user);
            try {
                $this->sendWhatsAppMessagePay2($phone, $firstname, $txnid, $amount);
            } catch (\Exception $e) {
                \Log::error('Error sending WhatsApp message:', ['error' => $e->getMessage()]);
            }

            return redirect()->route('cart')->with('success', 'Payment was successful! Your cart has been cleared.');
        } else {
            return view('pages.payment-failed', ['message' => 'User not found.']);
        }
    } else {
        return view('pages.payment-failed', ['data' => $request->all()]);
    }
}


public function paymentSuccess(Request $request)
{
    dd('success');
    $data = session('payment_data', []);
    return view('pages.success', ['data' => $data]);
}


public function paymentFailure(Request $request)
{
    
    return view('pages.payment-failed');
}



private function sendWhatsAppMessagePay($phone, $firstname, $txnid, $amount)
{
    $apiUrl = env('WHATSAPP_API_URL');
    $apiKey = env('APP_KEYW');
    $senderNumber = '+919281433900'; 

    // API request payload
    $data = [
        'from' => $senderNumber, // Source/sender number.
        'to' => $phone,          // Recipient's phone number with country code (e.g., +91XXXXXXXXXX).
        'type' => 'text',        // Message type.
        'text' => [
            'body' => "Hello $firstname,\n\nYour payment of ₹$amount was successful.\nTransaction ID: $txnid.\n\nThank you for your purchase!"
        ]
    ];

    // Set request headers
    $headers = [
        'Authorization: Bearer ' . $apiKey, // Bearer token for authentication.
        'Content-Type: application/json',  // Content type for JSON request.
    ];

    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute API call
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Handle response
    if ($httpCode === 200) {
        \Log::info("WhatsApp message sent successfully to $phone.");
    } else {
        \Log::error("Failed to send WhatsApp message to $phone. Response: $response");
        throw new \Exception("Failed to send WhatsApp message. Response: $response");
    }
}

}
