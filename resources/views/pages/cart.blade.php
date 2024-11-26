@extends('layouts.landingpage')

<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
        padding: 20px;
        margin-right: 3%;
    }

    .right-bottom {
        padding: 10px 20px;
        background: linear-gradient(to right, #1F2B7B, #27AE60);
        /* Gradient background */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        /* transition: background 0.3s ease; */
    }

    .card {
        position: relative;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        min-width: 280px;
        padding: 20px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
    }

    .card h3 {
        margin: 0;
        color: #333;
        font-size: 1em;
        text-align: left;
        margin-left: 6px;
    }

    .card p {
        margin: 10px 0;
        color: #333;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1em;
        font-weight: bold;
        text-align: left;
    }

    .card h5 {
        margin: 10px 0;
        color: #e67e22;
        background-color: #fef6e7;
        padding: 5px;
        border-radius: 5px;
        font-size: 1.15em;
        font-weight: bold;
        text-align: left;
    }

    .badge {
        position: absolute;
        top: -10px;
        right: 5px;
        background-color: #e74c3c;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9em;
        font-weight: bold;
    }

    .card .price-container {
        display: flex;
        justify-content: left;
        align-items: left;
        margin: 10px 0;
    }

    .card .price {
        font-size: 1.2em;
        color: #e74c3c;
        margin-right: 10px;
        text-align: left;
    }

    .card .price del {
        color: #888;
        margin-right: 5px;
    }

    .card .offer-price {
        font-size: 1.4em;
        color: #27ae60;
        margin-right: 70px;
    }

    .card .buttons {
        display: flex;
        flex-direction: row;
        gap: 20px;
        margin-top: 10px;
    }

    .card .add-to-cart {
        background-color: #009247;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        /* margin-left: 10px; */
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .add-to-cart:hover {
        background-color: #009147;
    }

    .card .more-details {
        background-color: #1F2B7B;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .card .more-details:hover {
        background-color: #1F4B5B;
    }

    .image-container img {
        width: 100%;
        /* Default for smaller screens */
        height: auto;
        margin-bottom: 20px;
        background-color: white;
        /* Maintain aspect ratio */
    }

    @media (min-width: 768px) {
        .image-container img {
            width: 50%;
            /* For larger screens (desktops) */
        }
    }



    /* Container Styling */
    /* Container Styling */
    .tab-container {
        width: 100%;
        max-width: 1500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        text-align: center;
        /* Centering the content */
    }

    /* Tabs Styling */
    .indextabs {
        display: flex;
        justify-content: center;
        /* Centering the tab buttons */
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .indextabs li {
        flex: 0;
        /* Remove flex growing to make buttons smaller */
        padding: 10px 20px;
        /* Reduced padding to make buttons smaller */
        background-color: #e9ecef;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px;
        /* Smaller font */
        margin: 0 5px;
        /* Add margin between buttons */
    }

    .indextabs li.active {
        background: linear-gradient(90deg, #009247, #1F2B7B);
        color: #fff;
    }

    .indextabs li:hover {
        background-color: #1F2B7B;
        color: #fff;
    }

    /* Tab Content Styling */
    .tab-content {
        display: none;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    .tab-content.active {
        display: block;
    }

    .package-info,
    .test-info {
        text-align: center;
    }

    /* .package-info h2,
        .test-info h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .package-info p,
        .test-info p {
            font-size: 18px;
            color: #6c757d;
        } */

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .indextabs {
            flex-direction: row;
            /* Keep buttons side-by-side on mobile */
            padding: 2px 2px;
            justify-content: center;
            /* Centering buttons */
        }

        .indextabs li {
            flex: 1;
            /* Make buttons take equal width on mobile */
            margin-bottom: 0;
            /* Remove bottom margin to keep side-by-side */
            font-size: 14px;
            /* Smaller font for mobile */
        }


    }
</style>
@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>

<div class="floating-scanner">
    <div class="scanner-content">
        <img src="img/eDOSwithouttext.png" alt="Download TRUSTlab App" class="qr-code">
        <p>Download TRUSTlab App</p>
    </div>
</div>


<div class="cart-container" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="cart-left">
        <!-- Breadcrumb -->
        <div class="cartbreadcrumb">
            <a href="index.html">Home</a> / <a href="cart.html">Cart</a>
        </div>
        <a href="index.html" class="back-to-tests">← Select Tests</a>

        <!-- Test Items -->
        <div class="cart-items">
            <div class="cart-item">
                <div class="test-name">Serum Creatinine</div>
                <div class="add-member-btn">
                    <select class="test-select" onchange="updateTotalFromSelect(this)">
                        <option value="0">Select Amount</option>
                        <option value="210">Rs. 210/-</option>
                        <option value="250">Rs. 250/-</option>
                        <option value="300">Rs. 300/-</option>
                    </select>
                </div>
                <div class="test-price">Rs. 210/-</div>
            </div>

            <div class="cart-item">
                <div class="test-name">Liver Function Test (LFT)</div>
                <div class="add-member-btn">
                    <select class="test-select" onchange="updateTotalFromSelect(this)">
                        <option value="0">Select Amount</option>
                        <option value="660">Rs. 660/-</option>
                        <option value="700">Rs. 700/-</option>
                        <option value="750">Rs. 750/-</option>
                    </select>
                </div>
                <div class="test-price">Rs. 660/-</div>
            </div>

            <div class="cart-item">
                <div class="test-name">CUE (Complete Urine Examination)</div>
                <div class="add-member-btn">
                    <select class="test-select" onchange="updateTotalFromSelect(this)">
                        <option value="0">Select Amount</option>
                        <option value="250">Rs. 250/-</option>
                        <option value="300">Rs. 300/-</option>
                        <option value="350">Rs. 350/-</option>
                    </select>
                </div>
                <div class="test-price">Rs. 250/-</div>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="cart-right">
        <!-- Sample Collection Details -->
        <div class="collection-details">
            <h4>Sample Collection Details</h4>
            <label>
                <input type="radio" name="collection-location" /> Add Lab Location
            </label>
            <label>
                <input type="radio" name="collection-location" checked /> Add Home Address
            </label>
            <button>Add Address</button>
        </div>

        <!-- Appointment Slot -->
        <div class="appointment-slot">
            <h4>Pick Appointment Slot</h4>
            <input type="date" />
            <input type="time" />
        </div>

        <!-- Total Charges -->
        <div class="total-charges">
            <h4>Total Charges</h4>
            <div class="subtotal">
                <span>Subtotal</span>
                <span id="subtotal">Rs. 0</span>
            </div>
            <div class="offers">
                <span>Offers</span>
                <span>--</span>
            </div>
            <div class="total">
                <span>Total</span>
                <span id="total">Rs. 0</span>
            </div>
            <button class="pay-btn" onclick="payWithRazorpay()">Proceed to Pay</button>
        </div>
    </div>
</div>


<!-- Start Newsletter Area -->
<section class="newsletter section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text ">
                    <h6>Sign up for our newsletter</h6>
                    <p class="">Stay updated with our latest news and offers.<br> Subscribe to our newsletter
                        today!
                    </p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6  col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form ">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required=""
                            type="email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>


        <hr style="margin-top: 40px;">

        <div class="footcontainer">
            <!-- <h2>Blood Tests Near You</h2> -->
            <div class="footcolumns">
                <div>
                    <p>• Blood Test in Hyderabad</p>
                    <p>• Blood Test in Secunderabad</p>
                    <p>• Blood Test in Tarnaka</p>
                    <p>• Blood Test in Banjara Hills</p>
                    <p>• Blood Test in Jubliee Hills</p>
                    <p>• Blood Test in Hi-Tech City</p>
                    <p>• Blood Test in Begumpet</p>
                    <p>• Blood Test in Ameerpet</p>
                    <p>• Blood Test in Punjagutta</p>
                    <p>• Blood Test in Sanathnagar</p>
                    <p>• Blood Test in Erragadda</p>
                    <p>• Blood Test in Borabanda</p>
                    <p>• Blood Test in Moti Nagar</p>
                    <p>• Blood Test in Prakash Nagar</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Gachibowli</p>
                    <p>• Blood Test in Nanakramguda</p>
                    <p>• Blood Test in Madhapur</p>
                    <p>• Blood Test in Kothaguda</p>
                    <p>• Blood Test in Film Nagar</p>
                    <p>• Blood Test in Yousufguda</p>
                    <p>• Blood Test in Srinagar colony</p>
                    <p>• Blood Test in Kukatpally</p>
                    <p>• Blood Test in Allwyn Colony</p>
                    <p>• Blood Test in Bachupally</p>
                    <p>• Blood Test in KPHB Colony</p>
                    <p>• Blood Test in Nizampet</p>
                    <p>• Blood Test in Pragathi Nagar</p>
                    <p>• Blood Test in Moosapet</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Chilkalguda</p>
                    <p>• Blood Test in Kavadiguda</p>
                    <p>• Blood Test in Padmarao Nagar</p>
                    <p>• Blood Test in Pan bazar</p>
                    <p>• Blood Test in Parsigutta</p>
                    <p>• Blood Test in Patny</p>
                    <p>• Blood Test in Rani Gunj</p>
                    <p>• Blood Test in RP Road</p>
                    <p>• Blood Test in Sindhi Colony</p>
                    <p>• Blood Test in Sitaphalmandi</p>
                    <p>• Blood Test in Warsiguda</p>
                    <p>• Blood Test in Addagutta</p>
                    <p>• Blood Test in Tukaramgate</p>
                    <p>• Blood Test in Malkajgiri</p>
                    <!-- Add more items here -->
                </div>

                <div>
                    <p>• Blood Test in Bowenpally</p>
                    <p>• Blood Test in Karkhana</p>
                    <p>• Blood Test in Marredpally</p>
                    <p>• Blood Test in Sikh Village</p>
                    <p>• Blood Test in Trimulgherry</p>
                    <p>• Blood Test in Vikrampuri</p>
                    <p>• Blood Test in Nagaram</p>
                    <p>• Blood Test in Dammaiguda</p>
                    <p>• Blood Test in Rampally</p>
                    <p>• Blood Test in Alwal</p>
                    <!-- Add more items here -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Newsletter Area -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
// Track the total amount dynamically
let totalAmount = 0;

// Function to update total amount based on selected value
function updateTotalFromSelect(selectElement) {
    const selectedAmount = parseInt(selectElement.value);
    
    // Add the selected amount to the total
    if (selectedAmount > 0) {
        totalAmount += selectedAmount;
    }

    // Update the displayed total amount
    document.getElementById('subtotal').innerText = `Rs. ${totalAmount}`;
    document.getElementById('total').innerText = `Rs. ${totalAmount}`;
}

// Razorpay payment function
function payWithRazorpay() {
    const options = {
        "key": "rzp_test_N8DlTyHtNDBKmo", // Replace with your Razorpay key
        "amount": totalAmount * 100, // Amount in paise (multiply by 100)
        "currency": "INR",
        "name": "Test Payment",
        "description": "Payment for selected tests",
        "image": "your_logo_url", // Optional, your company logo
        "handler": function (response) {
            alert("Payment Successful: " + response.razorpay_payment_id);
            // Handle successful payment here (e.g., update order status in the backend)
        },
        "prefill": {
            "name": "Your Name",
            "email": "your_email@example.com",
            "contact": "your_contact_number"
        },
        "theme": {
            "color": "#F37254"
        }
    };

    const rzp = new Razorpay(options);
    rzp.open();
}
</script>
@endsection