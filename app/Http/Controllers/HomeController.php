<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;


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

public function removeToCart(Request $request ,$id){
    Cart::find($id)->delete();
    return redirect()->route('cart')->with('success','Cart removed successfully');
}


public function initiatePayment(Request $request)
{
    // Assuming $subtotal is the total amount from the cart
    $subtotal = $request->input('subtotal') * 100; // Convert to paise (multiply by 100)
    $userId = auth()->id();
    $orderId = uniqid('order_');  // Generate a unique order ID

    // Set up PayU parameters
    $payuData = [
        'key' => env('PAYU_MERCHANT_KEY'),
        'txnid' => $orderId,
        'amount' => $subtotal,
        'productinfo' => 'Test Order',  // You can include cart items info here
        'firstname' => auth()->user()->name,
        'email' => auth()->user()->email,
        'phone' => auth()->user()->phone_number,
        'surl' => route('payu.callback'),  // Success URL
        'furl' => route('payu.callback'),  // Failure URL
        'hash' => $this->generatePayUHash($orderId, $subtotal, ['name' => auth()->user()->name, 'email' => auth()->user()->email]),
        'order_id' => $orderId,  // Add order_id here
        'user_email' => auth()->user()->email,
        'product_info' => 'Sample Product',
        'customer_name' => auth()->user()->name,
        'address' => auth()->user()->address,
    ];

    // Pass data to the payment view
    return view('pages.payment', compact('payuData'));
}



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
    $hash_string = $key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|'.$udf1.'|'.$udf2.'|'.$udf3.'|'.$udf4.'|'.$udf5.'|||||||'.$salt;

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
