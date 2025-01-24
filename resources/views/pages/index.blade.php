@extends('layouts.landingpage')

@section('content')
<a href="https://wa.me/+919014638633?text=Hello%20I%20want%20to%20book%20a%20home%20collection%20service... 🔬😊"
    class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
</a>

<div class="floating-scanner">
    <div class="scanner-content">
        <img src="{{asset('lab/img/eDOSwithouttext.png')}}" alt="Download TRUSTlab App" class="qr-code">
        <p>Download TRUSTlab App</p>
    </div>
</div>
<style>.hidden-card {
    display: none !important;
}
.see-more-container {
    text-align: center;
    margin-top: 20px;
}
.see-more-button {
    padding: 10px 20px;
    background-color: #1F2B7B;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.see-more-button:hover {
    background-color: orangered;
}
.hidden-card {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}
.hidden-card:not(.hidden-card) {
    opacity: 1;
}
.hidden-test {
    display: none !important;
}
.hidden-profile {
    display: none !important; /* Initially hide the profiles */
}

.hidden-test {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}
.hidden-test:not(.hidden-test) {
    opacity: 1;
}

.hidden-profile {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.hidden-profile:not(.hidden-profile) {
    opacity: 1;
    height: auto; /* Reset height when shown */
}
</style>
<!-- <div class="banner-container">
            
            <div class="carousel-section">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        
                    </div>
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img src="img/bannerimg.svg" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/dengues.svg" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="img/doctorscomm.svg" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            
            <div class="form-section">
                <h3>Book a Home Sample Collection</h3>
                <form>
                    <div class="form-group">
                        <label for="name">What's your name? <span style="color: red;">*</span></label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile number <span style="color: red;">*</span></label>
                        <input type="tel" id="mobile" placeholder="Enter your mobile number" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Select Your City <span style="color: red;">*</span></label>
                        <select id="city" required>
                            <option value="">Select your city</option>
                            <option value="City1">Hyderabad</option>
                            <option value="City2">Visakhapatnam</option>
                            <option value="City3">Noida</option>
                            <option value="City4">Jammu</option>
                        </select>
                    </div>
                    <div class="consent">
                        <input type="checkbox" id="consent" required>
                        <label for="consent">I authorize TRUSTlab and its representatives to contact me via phone calls,
                            email, SMS, or WhatsApp to facilitate my request</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div> -->

<div class="myfixedbanner">
    <img class="banner-image landscape" src="{{asset('lab/img/bodybanner.svg')}}" alt="img" />
    <img src="{{asset('lab/img/bodypotrait.svg')}}" alt="Banner" class="banner-image portrait">
</div>

<!-- Button to trigger modal -->

<!-- Modal Structure -->



<section>
    <div class="tab-container">
        <ul class="indextabs">
            <li class="tab-link active" data-tab="tab-packages">Packages</li>
            <li class="tab-link" data-tab="tab-profiles">Profiles</li>
            <li class="tab-link" data-tab="tab-tests">Tests</li>
        </ul>

        <div id="tab-packages" class="tab-content active">
            <!-- Content for Packages Tab -->
            <div class="package-info">
                <div class="section-title" style="margin-top: 10px;">
                    <h2>Popular Packages</h>
                </div>

                <div id="custom-package-modal" class="mymodal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-content">
                        <span class="close-btn" onclick="closePackageModal()">&times;</span>
                        <div class="modal-header">
                            <h2 class="modal-title"></h2>
                        </div>
                        <div class="modal-body">
                            <div class="modal-description">
                                <h3>Laboratory Tests:</h3>
                                <ul class="test-list"></ul>
                                <p class="test-overview"></p>
                            </div>
                            <div class="modal-image-container">
                                <!-- <img src="" alt="Package Image" class="modal-image"> -->
                                <img src="{{ asset('lab/img/lifestylepackage.png') }}" alt="Package Image" class="modal-image" style="width: 40%; height: auto;">

                            </div>
                        </div>
                        <div class="modal-icons">
                            <div class="icon-item">
                                <span class="fa fa-home"></span>
                                <p>Home Collection<br><span class="available">Available</span></p>
                            </div>
                            <div class="icon-item">
                                <span class="fa fa-motorcycle"></span>
                                <p>Walk-In<br><span class="available">Available</span></p>
                            </div>
                            <div class="icon-item">
                                <span class="fa fa-users"></span>
                                <p>Customer Care<br><span class="available">24/7</span></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p class="modal-price"></p>
                            <p class="price-note">Including taxes & fees</p>
                            <a href="#" id="add-to-cart-btn-package">
                                <button class="btn-book-now-footer">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-container milestone">
    @if(isset($groupedData) && count($groupedData) > 0)
        @foreach ($groupedData as $key => $data)
            <div class="box card-container {{ $key >= 4 ? 'hidden-card' : '' }}">
                <div class="card">
                    <div class="badge">50% Off</div>
                    <h3>{{ $data['test_name'] }}</h3>
                    <p>Includes 
                        <span style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">
                            {{ isset($data['parameters']) ? count(explode(',', $data['parameters'])) : 0 }}
                        </span>
                        Parameters
                    </p>
                    <div class="price-container">
                        <div class="price">
                            <del>₹{{ number_format($data['mrp'] ?? 0, 0) }}</del>
                            <span class="offer-price">₹{{ number_format(($data['mrp'] ?? 0) * 0.5, 0) }}</span>
                        </div>
                    </div>
                    <div class="buttons">
                        <a onclick="openPackageModal({
                                package: {
                                    title: '{{ $data['test_name'] }}',
                                    parameters: '{{ $data['parameters'] ?? 'No Parameters Available' }}',
                                    price: {{ $data['mrp'] ?? 0 }}
                                }
                            })" class="more-details" style="color: white;">More Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No packages available.</p>
    @endif
</div>
<div class="see-more-container">
    <button id="toggleCardsBtn" class="see-more-button">See More</button>
</div>



                <div class="packcontainer">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2 style="margin-top: -10px;">Packages curated to assess Health Condition</h2>
                        <!-- <div class="section-title" style="margin-top: 10px;">
                                    <h2>Packages curated to assess Health Condition</h>
                                </div> -->
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_.png" alt="Alcohol">
                                        <p>Alcohol</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                <p>Cancer</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>

                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Organ Function</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg" alt="Heart">
                                        <p>Heart</p>
                                        <button>Know More</button>
                                    </div> -->
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                        <p>Thyroid</p>
                                        <button>Know More</button>
                                    </div> -->
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="{{asset('lab/img/gym.png')}}" alt="Heart">
                                <p>Fitness</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/stress.png')}}" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/sleep.png')}}" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/tension.png')}}" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/sexual-health.png')}}" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/smokers.png')}}" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/alcohol.png')}}" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!-- ---------------------------------------------------- -->


        <div id="tab-profiles" class="tab-content">
            <!-- Content for Packages Tab -->
            <div class="package-info">
                <div class="section-title" style="margin-top: 10px;">
                    <h2>Popular Profiles</h>
                </div>

                <div id="custom-profile-modal" class="mymodal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-content">
                        <span class="close-btn" onclick="closeProfileModal()">&times;</span>
                        <div class="modal-header">
                            <h2 class="modal-title"></h2>
                        </div>
                        <div class="modal-body">
                            <div class="modal-description">
                                <h3>Laboratory Tests:</h3>
                                <ul class="test-list"></ul>
                                <p class="test-overview"></p>
                            </div>
                            <div class="modal-image-container">
                                <!-- <img src="" alt="Package Image" class="modal-image"> -->
                                <img src="{{ asset('lab/img/lifestylepackage.png') }}" alt="Package Image" class="modal-image" style="width: 40%; height: auto;">

                            </div>
                        </div>
                        <div class="modal-icons">
                            <div class="icon-item">
                                <span class="fa fa-home"></span>
                                <p>Home Collection<br><span class="available">Available</span></p>
                            </div>
                            <div class="icon-item">
                                <span class="fa fa-motorcycle"></span>
                                <p>Walk-In<br><span class="available">Available</span></p>
                            </div>
                            <div class="icon-item">
                                <span class="fa fa-users"></span>
                                <p>Customer Care<br><span class="available">24/7</span></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p class="modal-price"></p>
                            <p class="price-note">Including taxes & fees</p>
                            <a href="#" id="add-to-cart-btn-profile">
                                <button class="btn-book-now-footer">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-container milestone">
    @if(isset($groupedData2) && count($groupedData2) > 0)
        @foreach ($groupedData2 as $key => $data)
            <div class="box card-container {{ $key >= 4 ? 'hidden-card' : '' }}">
                <div class="card">
                    <div class="badge">50% Off</div>
                    <h3>{{ $data['test_name'] }}</h3>
                    <p>Includes 
                        <span style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">
                            {{ isset($data['parameters']) ? count(explode(',', $data['parameters'])) : 0 }}
                        </span>
                        Parameters
                    </p>
                    <div class="price-container">
                        <div class="price">
                            <del>₹{{ number_format($data['mrp'] ?? 0, 0) }}</del>
                            <span class="offer-price">₹{{ number_format(($data['mrp'] ?? 0) * 0.5, 0) }}</span>
                        </div>
                    </div>
                    <div class="buttons">
                        <a onclick="openProfileModal({
                                package: {
                                    title: '{{ $data['test_name'] }}',
                                    parameters: '{{ $data['parameters'] ?? 'No Parameters Available' }}',
                                    price: {{ $data['mrp'] ?? 0 }}
                                }
                            })" class="more-details" style="color: white;">More Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Profiles available.</p>
    @endif
</div>
<div class="see-more-container">
    <button id="toggleProfilesBtn" class="see-more-button">See More</button>
</div>





                <div class="packcontainer">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2 style="margin-top: -10px;">Packages curated to assess Health Condition</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_.png" alt="Alcohol">
                                        <p>Alcohol</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                <p>Cancer</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>

                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Organ Function</h2>
                        <div class="items">
                            <!-- <div class="item">
                                        <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg" alt="Heart">
                                        <p>Heart</p>
                                        <button>Know More</button>
                                    </div> -->
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                        <p>Thyroid</p>
                                        <button>Know More</button>
                                    </div> -->
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Packages curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="{{asset('lab/img/gym.png')}}" alt="Heart">
                                <p>Fitness</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/stress.png')}}" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/sleep.png')}}" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/tension.png')}}" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/sexual-health.png')}}" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/smokers.png')}}" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{asset('lab/img/alcohol.png')}}" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <div id="tab-tests" class="tab-content">
            <div class="section-title" style="margin-top: 10px;">
                <h2>Popular Tests</h>
            </div>
            <div id="custom-test-modal" class="mymodal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="modal-content">
        <span class="close-btn" onclick="closeTestModal()">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title"></h2>
        </div>
        <div class="modal-body">
            <div class="modal-description">
                <h3>Laboratory Tests:</h3>
                <ul class="test-list"></ul>
            </div>
            <div class="modal-image-container">
                <img src="" alt="Package Image" class="modal-image">
            </div>
        </div>
        <div class="modal-icons">
            <div class="icon-item">
                <span class="fa fa-home"></span>
                <p>Home Collection<br><span class="available">Available</span></p>
            </div>
            <div class="icon-item">
                <span class="fa fa-motorcycle"></span>
                <p>Walk-In<br><span class="available">Available</span></p>
            </div>
            <div class="icon-item">
                <span class="fa fa-users"></span>
                <p>Customer Care<br><span class="available">24/7</span></p>
            </div>
        </div>
        <div class="modal-footer">
            <p class="modal-price"></p>
            <p class="price-note">Including taxes & fees</p>
            <a href="#" id="add-to-cart-btn-test">
                <button class="btn-book-now-footer">Add to Cart</button>
            </a>
        </div>
    </div>
</div>

<div class="main-container milestone">
    @if(isset($groupedData3) && count($groupedData3) > 0)
        @foreach ($groupedData3 as $key => $data)
            <div class="box card-container {{ $key >= 4 ? 'hidden-card' : '' }}">
                <div class="card">
                    <div class="badge">50% Off</div>
                    <h3>{{ $data['test_name'] }}</h3>
                    <p>Includes 
                        <span style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">
                            {{ isset($data['parameters']) ? count(explode(',', $data['parameters'])) : 0 }}
                        </span>
                        Parameters
                    </p>
                    <div class="price-container">
                        <div class="price">
                            <del>₹{{ number_format($data['mrp'] ?? 0, 0) }}</del>
                            <span class="offer-price">₹{{ number_format(($data['mrp'] ?? 0) * 0.5, 0) }}</span>
                        </div>
                    </div>
                    <div class="buttons">
                        <a onclick="openTestModal({
                                package: {
                                    title: '{{ $data['test_name'] }}',
                                    parameters: '{{ $data['parameters'] ?? 'No Parameters Available' }}',
                                    price: {{ $data['mrp'] ?? 0 }}
                                }
                            })" class="more-details" style="color: white;">More Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Tests available.</p>
    @endif
</div>
<div class="see-more-container">
    <button id="toggleTestsBtn" class="see-more-button">Show More</button>
</div>


            <!-- Content for Tests Tab -->
            <div class="test-info" style="margin-top: 30px;">
                <div class="">
                    <!-- Section 1: Test by Health Risks -->
                    <div class="packsection">
                        <h2>Tests curated to assess Organ Function</h2>
                        <div class="items">
                            <div class="item">
                                <img src="https://t3.ftcdn.net/jpg/05/38/28/28/360_F_538282814_HfFmgpxoExeoxueD8UdygjrwgwB90OEi.jpg"
                                    alt="Heart">
                                <p>Heart</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://media.istockphoto.com/id/1165026110/vector/liver-icon-in-trendy-flat-style-people-body-part.jpg?s=612x612&w=0&k=20&c=vfxV0nyhy4VMdCJhf8M4xpPDOQiLK8owPQLCWdlbpi0="
                                    alt="Liver">
                                <p>Liver</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/5570/5570758.png" alt="Kidney">
                                <p>Kidney</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.flaticon.com/512/966/966044.png" alt="Bone">
                                <p>Bone</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://cdn-icons-png.freepik.com/512/7592/7592343.png" alt="Thyroid">
                                <p>Thyroid</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <!-- Section 2: Test by Health Conditions -->
                    <div class="packsection">
                        <h2 style="margin-top: 30px;">Tests curated to assess Health Condition</h2>
                        <div class="items">
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_1.png" alt="Allergy">
                                <p>Allergy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_3.png" alt="Arthritis">
                                <p>Arthritis</p>
                                <button>Know More</button>
                            </div>
                            <!-- <div class="item">
                                        <img src="https://www.pathkindlabs.com/assets/img/icon_4.png" alt="Cancer">
                                        <p>Cancer</p>
                                    </div> -->
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_5.png" alt="Diabetes">
                                <p>Diabetes</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_8.png" alt="Fever">
                                <p>Fever</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_6.png" alt="Pregnancy">
                                <p>Pregnancy</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="https://www.pathkindlabs.com/assets/img/icon_7.png" alt="Hepatitis">
                                <p>Hepatitis</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="img/gut.png" alt="Hepatitis">
                                <p>Gut Micro</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>

                    <hr style="opacity: 20%;">

                    <div class="packsection">
                        <h2>Tests curated to assess Lifestyle Choices</h2>
                        <div class="items">
                            <div class="item">
                                <img src="{{ asset('lab/img/gym.png')}}" alt="Heart">
                                <p>Fitness Freaks</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/stress.png')}}" alt="Heart">
                                <p>Stress</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/sleep.png')}}" alt="Heart">
                                <p>Poor Sleep</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/tension.png')}}" alt="Heart">
                                <p>Hypertension</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/sexual-health.png')}}" alt="Heart">
                                <p>Sexual health</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/smokers.png')}}" alt="Heart">
                                <p>Smokers</p>
                                <button>Know More</button>
                            </div>
                            <div class="item">
                                <img src="{{ asset('lab/img/alcohol.png')}}" alt="Liver">
                                <p>Alcoholics</p>
                                <button>Know More</button>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- Add your dynamic tests content here -->
            </div>
        </div>
    </div>

</section>


<section>

    <div class="form-container" style="margin-top: 1%;">
        <h2 style="text-align: center; color: white;">Directory of Services</h2>
        <div>
            <div class="theimagecen">
                <img src="{{asset('lab/img/divider.png')}}">
            </div>
            <form class="search-form" action="{{ route('edosSearch') }}" method="GET">
    <div class="form-group">
        <label for="keyword">Keyword</label>
        <input type="text" id="keyword" name="keyword" placeholder="Enter keyword">
    </div>

    <div class="form-group">
        <label for="test-name">Test Name</label>
        <input type="text" id="test-name" name="test_name" placeholder="Enter test name">
    </div>

    <div class="form-group">
        <label for="disease">Disease</label>
        <select id="disease" name="disease">
            <option value="">- Any -</option>
			@foreach($uniqueDiseases as $disease)
                                        <option value="{{ $disease }}" {{ request('disease') == $disease ? 'selected' : '' }} style="white-space: normal; word-wrap: break-word; overflow-wrap: break-word; width: 100px;">
                                            {{ $disease }}
                                        </option>
                                        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="speciality">Speciality</label>
        <select id="speciality" name="speciality">
            <option value="">- Any -</option>
			@foreach($uniqueSpecialties as $specialty)
                                        <option value="{{ $specialty }}" {{ request('speciality') == $specialty ? 'selected' : '' }}>
                                            {{ $specialty }}
                                        </option>
                                        @endforeach
        </select>
    </div>

    <div class="button-group">
        <button type="submit" class="thebtn search-btn">Search</button>
        <button type="reset" class="thebtn reset-btn">Reset</button>
    </div>
</form>

            <!-- <script>
                // If you want to dynamically append the values into the URL before submitting, use the following script
                document.querySelector('.search-form').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting immediately

                    const form = event.target;
                    const keyword = document.getElementById('keyword').value;
                    const testName = document.getElementById('test-name').value;
                    const disease = document.getElementById('disease').value;
                    const speciality = document.getElementById('speciality').value;

                    // Construct the URL with query parameters
                    let url = new URL(form.action);
                    if (keyword) url.searchParams.append('key', keyword); // Append keyword if exists
                    if (testName) url.searchParams.append('name', testName); // Append test_name if exists
                    if (disease) url.searchParams.append('disease', disease); // Append disease if exists
                    if (speciality) url.searchParams.append('speciality', speciality); // Append speciality if exists

                    // Redirect to the constructed URL
                    window.location.href = url.toString();
                });
            </script> -->

        </div>

</section>

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 thehomecontent">
                <div class="content div1 milestone">
                    <p style="font-size: 1.2rem; font-weight: bold;">Your health is too important for a waiting room.
                    </p>
                    <h2>Think Home Collection <br>Think <span
                            style="font-size: 50px; margin-top: -50px;">TRUSTlab!</span><br>Call
                        @ 74400 75400</h2>
                    <p>Experience the convenience and reliability of our home collection services.<br /> TRUSTlab
                        brings precise diagnostics right to your doorstep.</p>


                    <!-- <div style="text-align: center;" class="image-container">
								<img src="img/BloodKit.png"  />
								
							</div> -->
                    <div class="button milestone">
                        <a href="contact.html" class="btn">Contact Now</a>
                        <a href="membership.html" class="btn second">Learn More<i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

                <div class="div2 milestone">
                    <div>
                        <img src="{{asset('lab/img/2dbloodkit.png')}}" width="80%" class="image-content" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->

<!-- Start Appointment -->
<section class="appointment" id="bookappointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We're always here to talk to you. Call us Now - <span class="typewriter" id="typewriter-text"
                            style="color:#009247;"></span></h2>
                    <img src="{{asset('lab/img/section-img.png')}}" alt="#">
                    <p>Our dedicated team is available around the clock to provide you with all the information and
                        support you need.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="{{route('contact.update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Email">
                                    </div>
                                </div> -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-2 col-8">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <p>( Our team will be contacting you shortly! )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image milestone">
                    <img src="{{asset('lab/img/custom.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
@if(session('success'))
<script>
    alert('{{ session('success') }}');
</script>
@endif
@if(session('error'))
<script>
    alert('{{ session('error') }}');
</script>
@endif

<section class="download-app-section"
    style="background-color: #ffffff; padding: 40px 0; text-align: center; margin-bottom: 20px;">
    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
        <!-- Mobile App Image -->
        <div class="app-image" style="flex: 1; min-width: 300px; padding: 20px;">
            <img src="{{asset('lab/img/mobilemockup.png')}}" alt="Download the TRUSTlab Mobile App"
                style="max-width: 100%; height: auto;">
        </div>

        <!-- Download Text & Buttons -->
        <div class="app-details" style="flex: 1; min-width: 300px; padding: 20px;">
            <h2 style="font-size: 28px; margin-bottom: 20px;">Access health anytime with the TRUSTlab Mobile App
            </h2>
            <p style="font-size: 16px; margin-bottom: 20px;">Book home collections, find test packages, access
                your health records, and more—right at your fingertips.</p>
            <!-- App Store Buttons -->
            <div class="download-buttons">
                <a href="your-app-store-link" target="_blank">
                    <img src="{{asset('lab/img/appstore.png')}}" alt="Download on the App Store"
                        style="width: 150px; margin-right: 10px;">
                </a>
                <a href="your-google-play-link" target="_blank">
                    <img src="{{asset('lab/img/playstore.png')}}" alt="Get it on Google Play" style="width: 150px;">
                </a>
            </div>
        </div>
    </div>
</section>



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

<div id="custom-package-success-modal" class="modal">
    <div class="modal-content">
        <h2 class="modal-title">Success</h2>
        <p class="modal-price">Item added to cart successfully!</p>
        <button onclick="closeModal1()">Close</button>
    </div>
</div>

<script>
    //     function openModal() {
    //   document.getElementById('custom-modal').style.display = 'flex';
    // }
    const APP_URL = "{{ url('/') }}";
    function closeModal1() {
        document.getElementById('custom-package-success-modal').style.display = 'none';
    }

    let cart1 = [];

function openPackageModal(data) {
    console.log("Modal Data:", data);

    // Get the specific modal container
    const modal = document.getElementById('custom-package-modal');

    // Update modal title
    const modalTitle = modal.querySelector('.modal-title');
    modalTitle.innerText = data.package?.title || 'No Title';

    // Update parameters
    const testList = modal.querySelector('.test-list');
    testList.innerHTML = ''; // Clear previous items

    if (data.package.parameters) {
        const parametersArray = data.package.parameters.split(','); // Split parameters
        parametersArray.forEach(parameter => {
            const li = document.createElement('li');
            li.innerText = parameter.trim();
            testList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.innerText = 'No Parameters Available';
        testList.appendChild(li);
    }

    // Update price
    const modalPrice = modal.querySelector('.modal-price');
    const discountedPrice = Math.round(data.package.price * 0.5);
    modalPrice.innerText = `₹ ${discountedPrice.toLocaleString()}`;

    // Add event listener for "Add to Cart" button
    const addToCartBtn = modal.querySelector('#add-to-cart-btn-package');
    if (addToCartBtn) {
        addToCartBtn.onclick = function() {
            // Add current tests to the cart array
            cart1.push(data.package);

            // Log the updated cart
            console.log("Updated Cart:", cart1);

            // Submit cart data to the controller
            const form = new FormData();
            form.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            const cartData = {
                _token: document.querySelector('meta[name="csrf-token"]').content,
                cart: cart1.map(item => ({
                    test_name: item.title || '',
                    amount: Math.round(item.price * 0.5) || 0,
                    type: 'Profile'
                }))
            };

            fetch(`${APP_URL}/set_cart`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(cartData),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        alert('Items added to cart successfully!');
                        // Redirect to the cart page
                        window.location.href = `${APP_URL}/cart`;
                    } else {
                        alert('Failed to add items to cart.');
                    }
                })
                .catch(error => {
                    console.error('Error adding to cart:', error);
                    alert('An error occurred. Please try again.');
                });
        };
    }

    // Open the modal
    modal.style.display = 'flex';
}

function closePackageModal() {
    const modal = document.getElementById('custom-package-modal');
    modal.style.display = 'none';
}

let cart2 = [];

function openProfileModal(data) {
    console.log("Modal Data:", data);

    // Get the specific modal container
    const modal = document.getElementById('custom-profile-modal');

    // Update modal title
    const modalTitle = modal.querySelector('.modal-title');
    modalTitle.innerText = data.package?.title || 'No Title';

    // Update parameters
    const testList = modal.querySelector('.test-list');
    testList.innerHTML = ''; // Clear previous items

    if (data.package.parameters) {
        const parametersArray = data.package.parameters.split(','); // Split parameters
        parametersArray.forEach(parameter => {
            const li = document.createElement('li');
            li.innerText = parameter.trim();
            testList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.innerText = 'No Parameters Available';
        testList.appendChild(li);
    }

    // Update price
    const modalPrice = modal.querySelector('.modal-price');
    const discountedPrice = Math.round(data.package.price * 0.5);
    modalPrice.innerText = `₹ ${discountedPrice.toLocaleString()}`;

    // Add event listener for "Add to Cart" button
    const addToCartBtn = modal.querySelector('#add-to-cart-btn-profile');
    if (addToCartBtn) {
        addToCartBtn.onclick = function() {
            // Add current tests to the cart array
            cart2.push(data.package);

            // Log the updated cart
            console.log("Updated Cart:", cart2);

            // Submit cart data to the controller
            const form = new FormData();
            form.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            const cartData = {
                _token: document.querySelector('meta[name="csrf-token"]').content,
                cart: cart2.map(item => ({
                    test_name: item.title || '',
                    amount: Math.round(item.price * 0.5) || 0,
                    type: 'Profile'
                }))
            };

            fetch(`${APP_URL}/set_cart`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(cartData),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        alert('Items added to cart successfully!');
                        // Redirect to the cart page
                        window.location.href = `${APP_URL}/cart`;
                    } else {
                        alert('Failed to add items to cart.');
                    }
                })
                .catch(error => {
                    console.error('Error adding to cart:', error);
                    alert('An error occurred. Please try again.');
                });
        };
    }

    // Open the modal
    modal.style.display = 'flex';
}

function closeProfileModal() {
    const modal = document.getElementById('custom-profile-modal');
    modal.style.display = 'none';
}

let cart3 = [];

function openTestModal(data) {
    console.log("Modal Data:", data);

    // Get the specific modal container
    const modal = document.getElementById('custom-test-modal');

    // Update modal title
    const modalTitle = modal.querySelector('.modal-title');
    modalTitle.innerText = data.package?.title || 'No Title';

    // Update parameters
    const testList = modal.querySelector('.test-list');
    testList.innerHTML = ''; // Clear previous items

    if (data.package.parameters) {
        const parametersArray = data.package.parameters.split(','); // Split parameters
        parametersArray.forEach(parameter => {
            const li = document.createElement('li');
            li.innerText = parameter.trim();
            testList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.innerText = 'No Parameters Available';
        testList.appendChild(li);
    }

    // Update price
    const modalPrice = modal.querySelector('.modal-price');
    const discountedPrice = Math.round(data.package.price * 0.5);
    modalPrice.innerText = `₹ ${discountedPrice.toLocaleString()}`;

    // Add event listener for "Add to Cart" button
    const addToCartBtn = modal.querySelector('#add-to-cart-btn-test');
    addToCartBtn.onclick = function () {
        cart3.push(data.package);

        console.log("Updated Cart:", cart3);

        // Submit cart data to the controller
        const cartData = {
            _token: document.querySelector('meta[name="csrf-token"]').content,
            cart: cart3.map(item => ({
                test_name: item.title || '',
                amount: Math.round(item.price * 0.5) || 0,
                type: 'Test'
            }))
        };

        fetch(`${APP_URL}/set_cart`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(cartData),
        })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert('Items added to cart successfully!');
                    window.location.href = `${APP_URL}/cart`;
                } else {
                    alert('Failed to add items to cart.');
                }
            })
            .catch(error => {
                console.error('Error adding to cart:', error);
                alert('An error occurred. Please try again.');
            });
    };

    // Open the modal
    modal.style.display = 'flex';
}

function closeTestModal() {
    const modal = document.getElementById('custom-test-modal');
    modal.style.display = 'none';
}

</script>
<script>
 document.addEventListener('DOMContentLoaded', function () {
    const toggleCardsBtn = document.getElementById('toggleCardsBtn');
    const hiddenCards = document.querySelectorAll('.hidden-card');

    toggleCardsBtn.addEventListener('click', function () {
        if (toggleCardsBtn.textContent === 'See More') {
            hiddenCards.forEach(card => {
                card.classList.remove('hidden-card'); // Show hidden cards
            });
            toggleCardsBtn.textContent = 'Show Less'; // Change button text
        } else {
            hiddenCards.forEach(card => {
                card.classList.add('hidden-card'); // Hide extra cards
            });
            toggleCardsBtn.textContent = 'See More'; // Change button text back
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleTestsBtn = document.getElementById('toggleTestsBtn');
    const hiddenCards = document.querySelectorAll('.hidden-card');

    toggleTestsBtn.addEventListener('click', function () {
        if (toggleTestsBtn.textContent === 'Show More') {
            hiddenCards.forEach(card => {
                card.classList.remove('hidden-card'); // Show hidden cards
            });
            toggleTestsBtn.textContent = 'Show Less'; // Change button text
        } else {
            hiddenCards.forEach(card => {
                card.classList.add('hidden-card'); // Hide extra cards
            });
            toggleTestsBtn.textContent = 'Show More'; // Change button text back
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const toggleProfilesBtn = document.getElementById('toggleProfilesBtn');
    const hiddenProfiles = document.querySelectorAll('.hidden-profile');

    toggleProfilesBtn.addEventListener('click', function () {
        if (toggleProfilesBtn.textContent === 'Show More') {
            hiddenProfiles.forEach(profile => {
                profile.classList.remove('hidden-profile'); // Show hidden profiles
                profile.style.display = 'block'; // Ensure it is displayed
            });
            toggleProfilesBtn.textContent = 'Show Less'; // Update button text
        } else {
            hiddenProfiles.forEach(profile => {
                profile.classList.add('hidden-profile'); // Hide extra profiles
                profile.style.display = 'none'; // Hide the elements
            });
            toggleProfilesBtn.textContent = 'Show More'; // Revert button text
        }
    });
});



</script>

<script>
    function toggleDrawer() {
        const drawer = document.getElementById("drawer");
        drawer.classList.toggle("open");
    }

    function toggleDropdown(element) {
        const dropdown = element.nextElementSibling;
        const arrow = element.querySelector('.arrow');

        if (dropdown.style.maxHeight) {
            dropdown.style.maxHeight = null;
            arrow.style.transform = "rotate(0deg)";
        } else {
            dropdown.style.maxHeight = dropdown.scrollHeight + "px";
            arrow.style.transform = "rotate(180deg)";
        }
    }

    function navigateTo(url) {
        window.location.href = url;
    }
</script>
@endsection