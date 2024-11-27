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
                        <span class="close-btn" onclick="closeModal()">&times;</span>
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
                            <a href="#" id="add-to-cart-btn">
                                <button class="btn-book-now-footer">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-container milestone">
                    @foreach ($groupedData as $data)
                        <div class="box">
                            <div class="card">
                                <div class="badge">50% Off</div>
                                <h3>{{ $data['package']['title'] }}</h3>
                                @foreach ($data['tests'] as $test)
                                    <p>Includes <span
                                            style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">{{ count($test['parameters']) }}</span>
                                        Parameters</p>
                                    <div class="price-container">
                                        <div class="price">
                                            <del>₹{{ number_format($test['test_actual_price'], 0) }}</del>
                                            <span
                                                class="offer-price">₹{{ number_format($test['test_actual_price'] * 0.5, 0) }}</span>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a onclick="openModal({{ json_encode(['package' => $data['package'], 'tests' => $data['tests']]) }})"
                                            class="more-details" style="color: white;">More Details</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
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
                <div class="main-container">
                    @forelse ($profiles as $item)
                    <div class="box">
                        <div class="card">
                            <div class="badge">50% Off</div>
                            <h3>{{$item['test_name']}}</h3>
                            <p>Includes <span
                                    style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">{{ count($item['parameters']) }}</span>
                                Parameters</p>
                            <div class="price-container">
                                <div class="price">
                                    <del>₹{{ number_format($item['test_actual_price'], 0) }}</del>
                                    <span
                                        class="offer-price">₹{{ number_format($item['test_actual_price'] * 0.5, 0) }}</span>

                                </div>
                            </div>
                            <div class="buttons">
                                <a href="#" class="more-details">More Details</a>
                                <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                            </div>
                        </div>
                    </div>
                    @endforeach

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
            <div class="main-container">

                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>1, 25-Dihydroxy Vitamin D3</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹4300</del>
                                <span class="offer-price">₹3400</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>1, 25-Dihydroxy Vitamin D3</h3>
                        <!-- <p>Includes <span
                                        style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                                    Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹4300</del>
                                <span class="offer-price">₹3400</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Albumin</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">08</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹480</del>
                                <span class="offer-price">₹150</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Bilirubin Total</h3>
                        <!-- <p>Includes <span
                                      style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">21</span>
                                  Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹500</del>
                                <span class="offer-price">₹230</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Calcium-Urine</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">52</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹480</del>
                                <span class="offer-price">₹250</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Cholesterol-Total</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">08</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹360</del>
                                <span class="offer-price">₹170</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <!-- <div class="badge">50% Off</div> -->
                        <h3>Glucose Fasting-Urine</h3>
                        <!-- <p>Includes <span
                                  style="color: orangered; font-size: 1.15em; background-color: white; padding: 2%; border-radius: 100%; border: 0.5px solid #1F2B7B;">21</span>
                              Parameters</p> -->
                        <div class="price-container">
                            <div class="price">
                                <del>₹150</del>
                                <span class="offer-price">₹75</span>

                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="more-details">More Details</a>
                            <!-- <a href="#" class="add-to-cart"><i class="icofont-cart"></i> Add to Cart</a> -->
                        </div>
                    </div>
                </div>
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
            <form class="search-form" method="GET" action="https://edos.mytrustlab.com/">
                <div class="form-group">
                    <label for="keyword" style="color: white;">Keyword</label>
                    <input type="text" id="keyword" name="keyword" placeholder="Enter keyword">
                </div>

                <div class="form-group">
                    <label for="test-name" style="color: white;">Test Name</label>
                    <input type="text" id="test-name" name="test_name" placeholder="Enter test name">
                </div>

                <div class="form-group">
                    <label for="disease" style="color: white;">Disease</label>
                    <input type="text" id="disease" name="disease" placeholder="Enter test disease">
                </div>

                <div class="form-group">
                    <label for="speciality" style="color: white;">Speciality</label>
                    <input type="text" id="speciality" name="speciality" placeholder="Enter test speciality">
                </div>

                <div class="button-group">
                    <!-- Use the default submit button to trigger form submission -->
                    <button type="submit" class="thebtn search-btn">Search</button>
                    <button type="reset" class="thebtn reset-btn">Reset</button>
                </div>
            </form>

            <script>
                // If you want to dynamically append the values into the URL before submitting, use the following script
                document.querySelector('.search-form').addEventListener('submit', function (event) {
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
            </script>

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
                <form class="form" action="#">
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

    function closeModal1() {
      document.getElementById('custom-package-success-modal').style.display = 'none';
    }

    function openModal(data) {
    // Ensure tests is converted to an array if it's an object
    const tests = Array.isArray(data.tests) ? data.tests : [];

    // Update the modal title
    const modalTitle = document.querySelector('.modal-title');
    modalTitle.innerText = data.package.title || 'No Title';

    // Update the test list
    const testList = document.querySelector('.test-list');
    testList.innerHTML = ''; // Clear previous items

    // Update the modal price
    const amountElement = document.querySelector('.modal-price');
    amountElement.innerHTML = ''; // Clear previous amount

    let totalDiscountedAmount = 0; // Variable to store total discounted amount

    tests.forEach(test => {
        // Create a list item for each test name
        const li = document.createElement('li');
        li.innerText = test.test_name || 'Unnamed Test';
        testList.appendChild(li);

        // Calculate the discounted price for this test
        const discountedPrice = Math.round(test.test_actual_price * 0.5); // Apply 50% discount and round to the nearest whole number
        totalDiscountedAmount += discountedPrice; // Accumulate the discounted amount
    });

    // Display the total discounted price in the modal
    amountElement.innerText = `₹ ${totalDiscountedAmount.toLocaleString()}`;

    // Ensure the button exists and assign the event handler
    const addToCartBtn = document.getElementById('add-to-cart-btn');
    if (addToCartBtn) {
        addToCartBtn.onclick = function () {
            const form = new FormData();
            form.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            // Append the tests data to the form
            tests.forEach((test, index) => {
                form.append(`tests[${index}][test_name]`, test.test_name || '');
                form.append(`tests[${index}][amount]`, test.test_actual_price || '');
            });

            // Perform AJAX request
            fetch('/set_cart', {
                method: 'POST',
                body: form
            })
            .then(response => response.json())
            .then(data => {
                // Check if the response is successful
                if (data.message) {
                    // Show success message in the modal
                    const modalTitle = document.querySelector('.modal-title');
                    modalTitle.innerText = 'Success'; // You can customize this title

                    const amountElement = document.querySelector('.modal-price');
                    amountElement.innerText = data.message;  // Display the success message
                } else {
                    // Handle error or no success message case
                    const modalTitle = document.querySelector('.modal-title');
                    modalTitle.innerText = 'Error';

                    const amountElement = document.querySelector('.modal-price');
                    amountElement.innerText = 'An error occurred, please try again.';
                }

                // Open the modal
                document.getElementById('custom-package-success-modal').style.display = 'flex';
            })
            .catch(error => {
                console.error('Error adding to cart:', error);
                // Handle fetch error
                const modalTitle = document.querySelector('.modal-title');
                modalTitle.innerText = 'Error';

                const amountElement = document.querySelector('.modal-price');
                amountElement.innerText = 'An error occurred, please try again later.';
                document.getElementById('custom-package-modal').style.display = 'flex';
            });
        };
    }

    // Open the modal
    document.getElementById('custom-package-modal').style.display = 'flex';
}

    function closeModal() {
        document.getElementById('custom-package-modal').style.display = 'none';
    }


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