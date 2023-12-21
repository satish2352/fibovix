@extends('website.layouts.app')
@section('title')
   Instructor List
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
<div class="container text-center">
    <h3 class="text-primary">RPA Training at DGCA (HQ)</h3>

    <h6 class="lead font-weight-bold my-3">List of Trainers</h6>
    <div class="row justify-content-center">
    <div class="col-8">
    <table class="table text-leftab">
        <thead class="bg-primary color-white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Trainer Name</th>
            <th scope="col">FTO Represented</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Sh. Sunil Rathee, DD(Ops) </td>
            <td>Air Safety Directorate ,DGCA </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>K. Thulasiraman, DD(AED) </td>
            <td>Aircraft Engineering Directorate, DGCA </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Ms. Ekta Agrawal, AD(AED) </td>
            <td>Aircraft Engineering Directorate, DGCA </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Capt. J.P Sharma  </td>
            <td>The Bombay Flying Club, Mumbai </td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Mr. Raejus Joseph </td>
            <td>Government Flying training School,
                Jakkur, Bangalore
            </td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Capt Shrikant Verma </td>
            <td></td>
        </tr>
{{--        <tr>--}}
{{--            <th scope="row">7</th>--}}
{{--            <td>Mr. John Livingstone and his--}}
{{--                team</td>--}}
{{--            <td>Indian Institute of Drones </td>--}}
{{--        </tr>--}}
        <tr>
            <th scope="row">7</th>
            <td>Shri D K Singh </td>
            <td></td>
        </tr>

        </tbody>
    </table>
        </div>
    </div>

    <h6 class="lead font-weight-bold my-3">List of Trainees</h6>
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table text-left">
                <thead class="bg-primary color-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">FTO Represented</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>KarunaVimal, AD (Ops) <br>Shri. Ashish Dubey, AD(Ops)</td>
                    <td>Air Space & Air Navigation
                        Services Standards Directorate,
                        DGCA </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Sunil Rathee, Dy. Director <br> Shashi Paul , Asstt Director
                        <br>Shashi Paul , Asstt Director<br>
                        N. Kannamani Muthu, Air
                        Safety   </td>
                    <td>Air Safety Directorate, DGCA </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Shri P.K.Singh, AeO </td>
                    <td>Aircraft Engineering Directorate,
                        DGCA </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Wg Cdr Amarjeet Singh Dange
                        Abhay Ashwin,</td>
                    <td>Government Flying training School,
                        Jakkur, Bangalore </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mrinal Kanti Paul<br>
                        Rabi Bhushan Pathak<br>
                        Capt. Anshuman Kumar Singh<br>
                        Capt. Sailesh Prajapati </td>
                    <td>Alchemist Aviation Private Limited
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Capt. Madhusmitha Murmu,<br>
                        Mr. Pugazharasan E<br>
                        Mr. Sitaram Sharma</td>
                    <td>Banasthali Vidyapith<br>
                        Gliding and Flying Club </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Capt SS Sran<br>
                        Capt Madhav Raj Singh </td>
                    <td>Amber Aviation I Pvt Ltd </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Sq. Ldr. Varsha Kukreti </td>
                    <td>Falcon Aviation Academy </td>
                </tr>

                <tr>
                    <th scope="row">9</th>
                    <td>Capt.Nidees GS (AFI) </td>
                    <td>IGRUA </td>
                </tr>


                <tr>
                    <th scope="row">10</th>
                    <td>Capt Arun S Nair</td>
                    <td>GATI </td>
                </tr>



                <tr>
                    <th scope="row">11</th>
                    <td>Mr. Arvind Kumar Yadav </td>
                    <td>Saraswati Aviation Academy </td>
                </tr>

                <tr>
                    <th scope="row">12</th>
                    <td>Captain Shahinsha SK <br>
                        Air Cmde RV Kumar </td>
                    <td>Asia Pacific Flight Training
                        Academy Ltd</td>
                </tr>

                <tr>
                    <th scope="row">13</th>
                    <td>Shri Sudershan Vashist
                        Capt. Sreenath
                    </td>
                    <td>Rajiv Gandhi Academy For Aviation
                        Technology - Thiruvananthapuram</td>
                </tr>

                <tr>
                    <th scope="row">14</th>
                    <td>Capt.M. Narendrakumar
                        Capt. S. Hari Krishnan</td>
                    <td>Madras Flying Club </td>
                </tr>

                <tr>
                    <th scope="row">15</th>
                    <td>Capt. Kinnari Pavagadi.
                        Capt. Vidushi Jain </td>
                    <td>The Madhya Pradesh Flying Club
                        Ltd, Indore</td>
                </tr>

                <tr>
                    <th scope="row">16</th>
                    <td>Capt. Y.H.N.B.V.S. Ajay
                        Capt. G.B. Reddy
                        Capt. S.N. Readdy</td>
                    <td>Telangana State Aviation Academy</td>
                </tr>

                <tr>
                    <th scope="row">17</th>
                    <td>Mr. Debashish Mohanty( AME)
                        Mr. Nasir Rizwan (AME) </td>
                    <td>Shashib Flying Academy, Guna
                    </td>
                </tr>

                <tr>
                    <th scope="row">18</th>
                    <td>Capt. Arvind Thapliyal </td>
                    <td>Capt. Arvind Thapliyal </td>
                </tr>

                <tr>
                    <th scope="row">19</th>
                    <td>Bhavesh Sangani <br>
                        Gp.Capt.D.K.Singh (Retd)<br>
                        Capt. M.Surem (API)</td>
                    <td>Pioneer Flying Academy </td>
                </tr>

                <tr>
                    <th scope="row">20</th>
                    <td>Capt S K Yadav <br>
                        Capt Sachin Bhatia </td>
                    <td>Gujarat Flying Club,Vadodara </td>
                </tr>

                <tr>
                    <th scope="row">21</th>
                    <td>Capt.Shrikant Verma</td>
                    <td>Haryana Institute of Civil Aviation </td>
                </tr>

                <tr>
                    <th scope="row">22</th>
                    <td>Capt abel Mathew <br>
                        Capt basuraj
                    </td>
                    <td>Orient Flight Aviation </td>
                </tr>

                <tr>
                    <th scope="row">23</th>
                    <td> Lakhbir Singh<br>
                        Kushal Budhiraja<br>
                        Ajaypal Singh<br>
                        Rajiv Bagga </td>
                    <td>Patiala Aviation Club </td>
                </tr>

                <tr>
                    <th scope="row">24</th>
                    <td>Captain Ezil <br>
                        Captain Raunak Cyril </td>
                    <td>Wings Aviation Pct. Ltd </td>
                </tr>

                <tr>
                    <th scope="row">25</th>
                    <td>Gaurang Shah <br>
                        Hardik Pancholi <br>
                        Monil Vyas </td>
                    <td>Blue Ray Aviation</td>
                </tr>

                <tr>
                    <th scope="row">26</th>
                    <td>Mr. Yash Patel</td>
                    <td>Bombay Flying Club</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
