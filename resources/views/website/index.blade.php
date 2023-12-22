
@include('website.layouts.header')
{{-- start hero section --}}
    <section>
        <div class="container-fluid">
            <!-- Content Section -->
            <div class="row">
                <img class="img1" src="{{asset('website/images/backimg1.jpg')}}" alt="">
                <div class="container content">
                    <div class="col-8 container">
                        <div class="row">
                            <div class="col-3" style="height: 250px; margin-left:150px">
                           <img src="{{asset('website/images/Logo1.png')}}"  alt="">
                        </div>
                        </div>
                        <div class="row ">
                            <div class="whyus">
                            <h1 id="whyus1">WHY US</h1>
                            <p id="content">You probably expect your advisor to provide guidance developing your financial plan and investment approach. But with FIBOVIX , your advisor is so much more – listening to your needs and understanding what matters most to you and your family. You and your advisor will work together one on one to help create a strategy that’s uniquely yours.</p>
                            <!-- Add your additional content here -->
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
{{-- end hero section --}}

{{-- start whyfibovix section --}}
<section>
    <div class="">
        <!-- Content Section -->
        <div class="row">
            <img class="img2" src="{{asset('website/images/WHYFIBOVIX.png')}}"  alt="">
            <div class=" content2">
                <center><h2 id="fibovix" >Why FIBO<span style="color: #1F2D87 ">VIX</span></h2></center>
                <div class="row justify-content-center">
                    <div class="col-6">
                    <center><p id="">Everything we do starts with our purpose. Re-imagining the power of investing. Connecting people for a better world. This is our purpose. This is Fibovix</p></center>
                    <!-- Add your additional content here -->
                </div>
                <div class=" container">
                    
                    <div class="row ">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <p id="rcorners2">
                                        <div class="data">
                                            <img src="{{asset('website/images/Group.png')}}" width="50px" alt="">
                                            <h5>Your needs</h5>
                                            <p> Your goals, concerns and attitude about investing are the foundation of your plan.
                                            </p>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <p id="rcorners2">
                                        <div class="data">
                                            <img src="{{asset('website/images/Group1.png')}}" width="50px" alt="">
                                            <h5>Your advisor</h5>
                                            <p> 
                                                From the first conversation on, your advisor will provide personalized advice, committed to helping you reach your goals.</p>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <p id="rcorners2">
                                        <div class="data">
                                            <img src="{{asset('website/images/Group2.png')}}" width="50px" alt="">
                                            <h5>Your personalized strategy</h5>
                                            <p>As part of your overall investing plan, your advisor can offer tax minimization strategies.</p>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
{{-- end whyfibovix section --}}

{{--start cards --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row ">
                   <center><h2 id="fibovix">Our <span style="color:#6246E5"> Solutions</span> </h2></center> 
                   <center> <p>Uncovering opportunities. Meeting challenges. Taking that next step forward. Whatever your goals, Merrill and Bank of America offer a wide range of solutions to help you get there. </p></center> 
                </div>
            </div>
        </div>
        <div class="row">
            <p id="rcorners3"></p>
        </div>
                
       
        <div class="contaback">
                <div class="container">
                
                    <div class="slider owl-carousel">
                        <div class="card">
                            <div class="img">
                                <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Sigiriya
                                </div>
                                <div class="sub-title">
                                    Fortress built by King Kashyapa
                                </div>
                                <p>
                                    Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Sigiriya" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="img">
                                <img src="https://classiclanka.com/wp-content/uploads/2022/06/Galle.webp" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Galle
                                </div>
                                <div class="sub-title">
                                    Known for it's historic fort
                                </div>
                                <p>
                                    Galle is a city on the southwest coast of Sri Lanka. It’s known for Galle Fort, the fortified old city founded by Portuguese colonists in the 16th century. Stone sea walls, expanded by the Dutch, encircle car-free
                                    streets with architecture reflecting Portuguese, Dutch and British rule.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Galle" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="img">
                                <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Kandy
                                </div>
                                <div class="sub-title">
                                    The Last Kingdom
                                </div>
                                <p>
                                    Kandy is a large city in central Sri Lanka. It's set on a plateau surrounded by mountains, which are home to tea plantations and biodiverse rainforest. The city's heart is scenic Kandy Lake (Bogambara Lake), which is
                                    popular for strolling.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Kandy" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                    
                    </div>
                </div>    

                <div class="container">
                    
                    <div class="slider owl-carousel">
                        <div class="card">
                            <div class="img">
                                <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Sigiriya
                                </div>
                                <div class="sub-title">
                                    Fortress built by King Kashyapa
                                </div>
                                <p>
                                    Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Sigiriya" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="img">
                                <img src="https://classiclanka.com/wp-content/uploads/2022/06/Galle.webp" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Galle
                                </div>
                                <div class="sub-title">
                                    Known for it's historic fort
                                </div>
                                <p>
                                    Galle is a city on the southwest coast of Sri Lanka. It’s known for Galle Fort, the fortified old city founded by Portuguese colonists in the 16th century. Stone sea walls, expanded by the Dutch, encircle car-free
                                    streets with architecture reflecting Portuguese, Dutch and British rule.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Galle" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="img">
                                <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" />
                            </div>
                            <div class="contents">
                                <div class="title">
                                    Kandy
                                </div>
                                <div class="sub-title">
                                    The Last Kingdom
                                </div>
                                <p>
                                    Kandy is a large city in central Sri Lanka. It's set on a plateau surrounded by mountains, which are home to tea plantations and biodiverse rainforest. The city's heart is scenic Kandy Lake (Bogambara Lake), which is
                                    popular for strolling.
                                </p>
                                {{-- <a href="https://en.wikipedia.org/wiki/Kandy" target="_blank">
                                    <button>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                    
                    </div>
                </div>    
        </div>
        </div>
        </div>
    </div>
</section>
{{-- end cards --}}

{{-- start take action --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-10 mt-4">
                <div class="row mt-4" style="padding:10px; line-height: 100px;">
                    <center><h2>Take <span style="color:#6246E5; padding:10px">Actions</span></h2></center>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p id="rcorners1">
                            <div class="data1">
                                <p id="rcorners11">
                                    <div class="num">1</div>
                                </p>
                                <p> Uncover what matters to you</p>
                            </div>
                        </p>
                    </div>
                    <div class="col-3">
                        <p id="rcorners1">
                            <div class="data1">
                                <p id="rcorners11">
                                    <div class="num">2</div>
                                </p>
                                <p>Develop your path and your plan</p>
                            </div>
                        </p>
                    </div>
                    <div class="col-3">
                        <p id="rcorners1">
                            <div class="data1">
                                <p id="rcorners11">
                                    <div class="num">3</div>
                                </p>
                                <p> Understand your choices and make it happen</p>
                            </div>
                        </p>
                    </div>
                    <div class="col-3">
                        <p id="rcorners1">
                            <div class="data1">
                                <p id="rcorners11">
                                    <div class="num">4</div>
                                </p>
                                <p> Work with your advisor to understand what is important to you now and what you want in the future. If you don’t have an advisor, we can help you find one.</p>
                            </div>
                        </p>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-3">
                        <p id="rcorners4">
                            <div class="data2">
                                <p> We’ll create a personalized plan that is all about you, with guidance that truly supports you.</p>
                            </div>
                        </p>

                    </div>
                    <div class="col-3">
                        <p id="rcorners4">
                            <div class="data2">
                                <p> Helping you review, track your progress </p>
                            </div>
                        </p>

                    </div>
                    <div class="col-3">
                        <p id="rcorners4">
                            <div class="data2">
                                <p> Learn about your investment relationship and program options, then work with your advisor to set your plan in motion, drawing from a range of potential Merrill investment and Bank of America banking solutions.</p>
                            </div>
                        </p>

                    </div>
                    <div class="col-3">
                        <p id="rcorners4">
                            <div class="data2">
                                <p>You can track your milestones and modify your plan based on the expected and unexpected things life brings. </p>
                            </div>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- end take action --}}


{{-- additional solution  --}}

<section>
    <div class="container">
        <div class="row mt-4 justify">
     <h2>Addition Solutions</h2>
    </div>
        <div class="slider owl-carousel">
            <div class="card">
                <div class="img">
                    <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTNQx6dAy_XJh-wLZwOd5qGL63kg_JOHHqe8QJOsg5-C9HYswaFOAvHAkOx-KLHxsSU" />
                </div>
                <div class="contents">
                    <div class="title">
                        Diversification of investment 
                    </div>
                    {{-- <div class="sub-title">
                        Fortress built by King Kashyapa
                    </div> --}}
                    <p>
                        Diversify your portfolio with a wider
                        variety of solutions.
                         </p>
                    {{-- <a href="https://en.wikipedia.org/wiki/Sigiriya" target="_blank">
                        <button>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a> --}}
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://classiclanka.com/wp-content/uploads/2022/06/Galle.webp" />
                </div>
                <div class="contents">
                    <div class="title">
                        Investment
                        consolidation
                        
                    </div>
                    {{-- <div class="sub-title">
                        Known for it's historic fort
                    </div> --}}
                    <p>
                        See your big picture by consolidating
                        investment accounts</p>
                    {{-- <a href="https://en.wikipedia.org/wiki/Galle" target="_blank">
                        <button>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a> --}}
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://haleyblackall.com/wp-content/uploads/2020/12/things-to-do-in-Kandy-20.jpg" />
                </div>
                <div class="contents">
                    <div class="title">
                        Online account view
                    </div>
                    {{-- <div class="sub-title">
                        The Last Kingdom
                    </div> --}}
                    <p>
                        Bring your investing and banking
                        together online.                        
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Kandy" target="_blank">
                        <button class="btn btn-primary" >
                           Learn More
                        </button>
                    </a>
                </div>
            </div>
          
        </div>
    </div>    
</section>

{{-- end additional solution --}}

    @include('website.layouts.footer')


