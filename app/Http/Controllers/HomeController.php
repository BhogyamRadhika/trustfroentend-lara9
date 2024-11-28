<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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
        // Retrieve the list of tests from the POST request
        $list_of_tests = $request->input('tests', []); // Default to an empty array if no tests are provided
    dd($list_of_tests)
;        // You could add validation or other logic here if needed.
    
        // Return the 'cart' view with the list_of_tests data
        return view('pages.cart', compact('list_of_tests'));
    }
    
    public function addToCart(Request $request)
    {
        // $tests = $request->input('tests');
        // dd($request->all(),$tests);
        // // Validate the incoming data
        // $validatedData = $request->validate([
        //     'tests' => 'required|array',
        //     'tests.*.test_name' => 'required|string',
        //     'tests.*.amount' => 'required|numeric',
        // ]);

        // // Process the tests and amounts (example logic)
        // foreach ($validatedData['tests'] as $test) {
        //     // You can save the test data to the cart or perform any other logic
        //     // For instance, storing the test in a session or database
        //     // Example: Cart::add($test['test_name'], $test['amount']);
        // }

        // Redirect or return response after processing
        // return redirect()->route('cart.add')->with('success', 'Tests added to cart successfully!');
        return response()->json(['message' => 'Successfully added to cart'], 200);
    }
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
        return view('pages.index', compact('profiles', 'groupedData' ,'tests'));
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
