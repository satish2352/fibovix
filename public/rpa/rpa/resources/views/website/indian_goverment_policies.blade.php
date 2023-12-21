@extends('website.layouts.app')
@section('title')
    Goverment Policies
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    <div class="container my-5">
        <div class="row">
            <!--<div class="col-md-2">-->
            <!--    <img src="{{asset('website/images/long_advertise_image.png')}}" class="img-fluid">-->
            <!--</div>-->
            <div class="col-md-12">

                <!--<div class="accordion" id="accordionExampleParent1">-->
                <!--    <div class="row justify-content-between">-->
                <!--        <div class="col-md-12">-->
                <!--            <div class="card">-->
                <!--                <div class="card-header" id="headingOne">-->
                <!--                    <h2 class="mb-0">-->
                <!--                        <button class="font-weight-bold btn btn-link" type="button"-->
                <!--                                data-toggle="collapse"-->
                <!--                                data-target="#CollapseCars"-->
                <!--                                aria-expanded="true" aria-controls="CollapseFaq">-->
                <!--                            CARS-->
                <!--                        </button>-->
                <!--                    </h2>-->
                <!--                </div>-->

                <!--                <div id="CollapseCars" class="collapse " aria-labelledby="headingOne"-->
                <!--                     data-parent="#accordionExampleParent1">-->
                <!--                    <div class="card-body">-->
                <!--                        <div class="list-group">-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                            <a href="#" class="list-group-item list-group-item-action">CARS 1 DOWNLOAD-->
                <!--                                PDF</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->


                <!--    </div>-->
                <!--</div>-->

                <div class="accordion my-2" id="accordionExampleParent">

                    <div class="card my-2">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="font-weight-bold btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#CollapseFaq"
                                        aria-expanded="true" aria-controls="CollapseFaq">
                                    FREQUENTLY ASKED QUESTIONS REGARDING OPERATION OF RPAS
                                </button>
                            </h2>
                        </div>

                        <div id="CollapseFaq" class="collapse " aria-labelledby="headingOne"
                             data-parent="#accordionExampleParent">
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseGLossary" aria-expanded="true"
                                                        aria-controls="collapseGLossary">
                                                    GLossary
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseGLossary" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">AAI Airports Authority of India</li>

                                                    <li class="list-group-item">ADS-B Automatic Dependent Surveillance –
                                                        Broadcast
                                                    </li>

                                                    <li class="list-group-item">AGL Above Ground Level</li>

                                                    <li class="list-group-item">ATC Air Traffic Control</li>

                                                    <li class="list-group-item">BCAS Bureau of Civil Aviation Security
                                                    </li>

                                                    <li class="list-group-item">CAR Civil Aviation Requirements</li>

                                                    <li class="list-group-item">DGCA Directorate General of Civil
                                                        Aviation
                                                    </li>

                                                    <li class="list-group-item">DGFT Directorate General of Foreign
                                                        Trade
                                                    </li>

                                                    <li class="list-group-item">FTO Flying Training Organisation</li>

                                                    <li class="list-group-item"> GPS Global Positioning System</li>

                                                    <li class="list-group-item">IAF Indian Air Force</li>

                                                    <li class="list-group-item"> ICAO International Civil Aviation
                                                        Organization
                                                    </li>

                                                    <li class="list-group-item"> IPC Indian Penal Code</li>

                                                    <li class="list-group-item">MHA Ministry of Home Affairs</li>

                                                    <li class="list-group-item">MoCA Ministry of Civil Aviation</li>

                                                    <li class="list-group-item">MoD Ministry of Defence</li>

                                                    <li class="list-group-item">MTOW Maximum Take-off Weight</li>

                                                    <li class="list-group-item">NPNT No Permission-No Take off</li>

                                                    <li class="list-group-item">PPL Private Pilot License</li>

                                                    <li class="list-group-item">RF-ID Radio Frequency Identification
                                                    </li>

                                                    <li class="list-group-item">RPA Remotely Piloted Aircraft</li>

                                                    <li class="list-group-item">RPAS Remotely Piloted Aircraft
                                                        System(s)
                                                    </li>

                                                    <li class="list-group-item">RPS Remote Pilot Station(s)</li>

                                                    <li class="list-group-item">SIM Subscriber Identity Module</li>

                                                    <li class="list-group-item">UA Unmanned Aircraft</li>

                                                    <li class="list-group-item">UAOP Unmanned Aircraft Operator Permit
                                                    </li>

                                                    <li class="list-group-item">UAS Unmanned Aircraft System(s)</li>

                                                    <li class="list-group-item">UIN Unique Identification Number</li>

                                                    <li class="list-group-item">VFR Visual Flight Rules</li>

                                                    <li class="list-group-item">VLOS Visual Line-Of-Sight</li>

                                                    <li class="list-group-item">VMC Visual Meteorological Conditions
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse15" aria-expanded="true"
                                                        aria-controls="collapse15">
                                                    1. What is a drone and UAS?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse15" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Drone is a layman terminology for Unmanned Aircraft (UA). There are
                                                three
                                                subsets of
                                                Unmanned Aircraft, a) Remotely Piloted Aircraft, b) Autonomous Aircraft
                                                and c)
                                                Model
                                                Aircraft.
                                                An aircraft and its associated elements, which are operated with no
                                                pilot on
                                                board
                                                is called as Unmanned Aircraft System (UAS).
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse2" aria-expanded="true"
                                                        aria-controls="collapse2">
                                                    2. What is Remotely Piloted Aircraft System (RPAS) and its
                                                    categories?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse2" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    RPAS is one subset of UAS. A remotely piloted aircraft (RPA), its
                                                    associated
                                                    remote pilot station(s), the required command and control links and
                                                    any
                                                    other
                                                    components, as specified in the type design.
                                                </p>

                                                <p> Civil RPA is categorized in accordance with MTOW (including payload)
                                                    as
                                                    indicated below:</p>

                                                <ol>
                                                    <li>Nano: Less than or equal to 250 grams.</li>
                                                    <li>Micro: Greater than 250 grams and less than or equal to 2 kg.
                                                    </li>
                                                    <li>Small: Greater than 2 kg and less than or equal to 25 kg.</li>
                                                    <li>Medium : Greater than 25 kg and less than or equal to 150 kg.
                                                    </li>
                                                    <li>Large: Greater than 150 kg.</li>
                                                </ol>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse3" aria-expanded="true"
                                                        aria-controls="collapse3">
                                                    3. What does Civil Aviation Requirements (CAR) mean, and when the
                                                    same on
                                                    Remotely Piloted Aircraft System (RPAS) will be effective?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse3" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Civil Aviation Requirements (CAR) is a set of regulations issued by the
                                                Directorate
                                                General of Civil Aviation (DGCA). The CAR on RPAS shall be effective
                                                from 1st
                                                December, 2018.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse4" aria-expanded="true"
                                                        aria-controls="collapse4">
                                                    4. What is Digital Sky Platform, and when it will be operational?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse4" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                It is an online IT platform developed for handling UIN, UAOP
                                                applications,
                                                permission to fly drones in India. The link shall be available in
                                                Homepage of
                                                DGCA
                                                website www.dgca.nic.in, and it will be operational from 1st December,
                                                2018.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse5" aria-expanded="true"
                                                        aria-controls="collapse5">
                                                    5. What permissions are required to operate drones and from where?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse5" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Roles & responsibilities of govt. stakeholders on various aspects of
                                                operation
                                                of
                                                civil remotely piloted aircraft system No.Stakeholder Responsibility

                                                <ol>
                                                    <li>Directorate General of Civil Aviation
                                                        <ul>
                                                            <li> Import clearance</li>
                                                            <li> Issuance of UIN</li>
                                                            <li> Issuance & renewal of UAOP</li>
                                                            <li> Suspension / Cancellation of UIN & UAOP in case of
                                                                violations
                                                                of
                                                                regulations.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>Directorate General of Foreign Trade
                                                        <ul>
                                                            <li> Import license</li>
                                                        </ul>
                                                    </li>
                                                    <li>Ministry of Home Affairs
                                                        <ul>
                                                            <li>Security clearance</li>
                                                        </ul>
                                                    </li>
                                                    <li>Ministry of Defense
                                                        <ul>
                                                            <li>Permission for aerial survey/imageries/ videography/
                                                                still
                                                                photography over the restricted/prohibited areas on
                                                                case-to-case
                                                                basis
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        5. Indian Air Force
                                                        <ul>
                                                            <li> Air Defense Clearance
                                                            </li>
                                                            <li> Monitoring of RPA movements in the country
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li> 6. Wireless Planning and Coordination Wing, DoT  Equipment
                                                        Type
                                                        Approval
                                                        (ETA) or License for drone
                                                    </li>
                                                    <li> 7. Bureau of Civil Aviation Security  Approval of Security
                                                        Programme
                                                    </li>
                                                    <li> 8. Airport Authority of India
                                                        <ul>
                                                            <li> Flight Plan Approval
                                                            </li>
                                                            <li>
                                                                Monitoring of RPA movements in the country
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>9. Local Police Office</li>
                                                    <li>
                                                        <ul>Enforcement of violators as per applicable IPCs</ul>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse6" aria-expanded="true"
                                                        aria-controls="collapse6">
                                                    6. What are the requirements for import of Drones (with or without
                                                    camera)
                                                    in
                                                    India?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse6" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Any entity intending to import RPAS in India shall obtain Equipment
                                                    Type
                                                    Approval
                                                    (ETA) from WPC Wing, Department of Telecommunication for operating
                                                    in
                                                    de-licensed frequency band(s). Such approval shall be valid for a
                                                    particular
                                                    make and model.</p>
                                                <p>
                                                    The applicant, other than Nano category, shall apply to DGCA along
                                                    with ETA
                                                    for
                                                    import clearance. Based upon the import clearance issued by DGCA,
                                                    DGFT shall
                                                    issue license for import of RPAS.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse7" aria-expanded="true"
                                                        aria-controls="collapse7">
                                                    7. What is NPNT and how do I comply with that?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse7" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                NPNT or ‘No Permission – No Take-off” is a software programme that
                                                enables every
                                                RPA
                                                (except Nano) to obtain a valid permissions through digital sky platform
                                                before
                                                operating in India. Please contact your OEM/ Manufacturer for complying
                                                with
                                                this
                                                requirement. .
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse8" aria-expanded="true"
                                                        aria-controls="collapse8">
                                                    8. What is controlled and uncontrolled airspace?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse8" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Controlled airspace is airspace of defined dimensions within which ATC
                                                services
                                                are
                                                provided.
                                                Uncontrolled airspace is airspace where an Air Traffic Control (ATC)
                                                service is
                                                not
                                                necessary or cannot be provided for practical reasons.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse9" aria-expanded="true"
                                                        aria-controls="collapse9">
                                                    9. I am intending to locally purchase one drone operating in
                                                    de-licensed
                                                    frequency band, should I still require ETA from WPC Wing, DoT?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse9" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    ETA from WPC Wing is required for all wireless equipment working in
                                                    de-licensed
                                                    frequency band(s) in India. Ensure to get ETA from the seller or
                                                    manufacturer of
                                                    RPA which is required to be uploaded while applying for UIN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse10" aria-expanded="true"
                                                        aria-controls="collapse10">
                                                    10. Whether drones fall under the category of restricted items for
                                                    carrying
                                                    in
                                                    hand baggage in aircrafts?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse10" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Drones are restricted items and can’t be carried in hand baggage.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse11" aria-expanded="true"
                                                        aria-controls="collapse11">
                                                    11. Where can I find the filing instructions for UIN/ UAOP etc.?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse11" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Instructions for filing all applications online shall be available
                                                    in
                                                    Digital
                                                    Sky Manual. The Manual will be available in DGCA website homepage
                                                    www.dgca.nic.in, and also in the Digital Sky portal homepage. The
                                                    Digital
                                                    sky
                                                    manual shall be available in the above mentioned website from 1st
                                                    December,
                                                    2018.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse12" aria-expanded="true"
                                                        aria-controls="collapse12">
                                                    12. I am a foreigner and want to fly drones in India. What are the
                                                    permission do
                                                    I require?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse12" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Foreigners are currently not allowed to fly drones in India. For
                                                    commercial
                                                    purpose, they need to lease RPAS to an Indian entity who in-turn
                                                    will obtain
                                                    Unique Identification Number (UIN) and UAOP from DGCA.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse13" aria-expanded="true"
                                                        aria-controls="collapse13">
                                                    13. What is UIN?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse13" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    UIN is unique identification number issued by DGCA for a particular
                                                    RPA
                                                    (except
                                                    Nano).
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse14" aria-expanded="true"
                                                        aria-controls="collapse14">
                                                    14. How much is the fees for UIN & UAOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse14" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ol>
                                                    <li>For UIN: – One thousand Indian Rupees (Rs.1000/-).</li>
                                                    <li>For fresh UAOP :-Twenty Five Thousand Rupees (Rs.25,000/-)</li>
                                                    <li>For Renewal of UAOP:- Ten Thousand Rupees (Rs.10,000/-)<</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse15" aria-expanded="true"
                                                        aria-controls="collapse15">
                                                    15. Where do I pay fees for UIN and UAOP for drone?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse15" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    You will be prompted for payment through payment Gateway in the
                                                    Digital Sky
                                                    Platform.
                                                    Or
                                                    The link for paying the fees is https://bharatkosh.gov.in/.You need
                                                    to
                                                    mention
                                                    the transaction receipt number and upload copy of the payment
                                                    receipt in
                                                    Digital
                                                    Sky Platform at the time of your application.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse17" aria-expanded="true"
                                                        aria-controls="collapse17">
                                                    16. How do I mark my unmanned aircraft with my UIN?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse17" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>After you have been issued with UIN for a particular drone; engrave
                                                    it on a
                                                    fire
                                                    resistant plate and firmly affix on your drone. Ensure the number
                                                    remains
                                                    affixed to the aircraft during routine handling and all operating
                                                    conditions
                                                    and
                                                    is readily accessible and legible upon close visual inspection.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse18" aria-expanded="true"
                                                        aria-controls="collapse18">
                                                    17. If I’m just flying my UAS inside a building, do I have to
                                                    register it?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse18" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>For Nano, no UIN is required. However, for micro category and above,
                                                    UIN is
                                                    required.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse19" aria-expanded="true"
                                                        aria-controls="collapse19">
                                                    18. What is UAOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse19" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>UAOP is Unmanned Aircraft Operator Permit
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse20" aria-expanded="true"
                                                        aria-controls="collapse20">
                                                    19. Who all are required to obtain UAOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse20" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>All operators other than exempted categories mentioned below are
                                                    required to
                                                    obtain UAOP from DGCA:-
                                                <ol>
                                                    <li>Operators of Nano &Micro category in uncontrolled airspace/
                                                        enclosed
                                                        premises upto 50ft and 200ft respectively
                                                    </li>
                                                    <li>RPA operated by NTRO, ARC, and Central Intelligence Agencies.
                                                    </li>
                                                </ol>


                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse21" aria-expanded="true"
                                                        aria-controls="collapse21">
                                                    20. What is the validity of UAOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse21" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    It is Valid For Five years
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse22" aria-expanded="true"
                                                        aria-controls="collapse22">
                                                    21. What format do I use for renewal of UAOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse22" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Same format is used for issue /renewal of UAOP through Digital Sky
                                                    app.
                                                    However,
                                                    please note you will need fresh security clearance from MHA.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse23" aria-expanded="true"
                                                        aria-controls="collapse23">
                                                    22. How do I report an incident or accident?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse23" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>The operator of all RPA except Nano RPA will notify any
                                                    incident/accident
                                                    involving RPA to the Director of Air Safety, DGCA through Digital
                                                    Sky
                                                    Platform.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse24" aria-expanded="true"
                                                        aria-controls="collapse24">
                                                    23. I was travelling and lost my bag along with my drone. Whom
                                                    should I
                                                    contact
                                                    now?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse24" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Please lodge FIR immediately in local police and report occurrence in
                                                    Digital
                                                    Sky
                                                    along with a copy of FIR.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse25" aria-expanded="true"
                                                        aria-controls="collapse25">
                                                    24. My drone is completely broken. Can I use its UIN for another
                                                    drone of
                                                    same
                                                    make and model?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse25" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>No. The operator has to apply for fresh UIN.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse26" aria-expanded="true"
                                                        aria-controls="collapse26">
                                                    25. I want to sell my used drone to someone. What is the procedure?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse26" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>RPAS if issued with UIN, cannot be transferred or disposed-off
                                                    without
                                                    permission
                                                    from DGCA. You are required for cancellation of UIN and the buyer
                                                    has to
                                                    apply
                                                    for fresh UIN through Digital Sky Platform.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse27" aria-expanded="true"
                                                        aria-controls="collapse27">
                                                    26. We are a company registered elsewhere than in India and we have
                                                    a remote
                                                    pilot who is licensed by our civil aviation authority. We want to
                                                    lend our
                                                    services to an Indian Organisation. What permissions do we require?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse27" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Foreign Entity has to lease their RPAS to the Indian Entity. The
                                                    Indian
                                                    entity
                                                    shall apply for UIN and UAOP. Remote Pilot (if a foreign national)
                                                    should be
                                                    security cleared. Foreigners are currently not allowed to fly drones
                                                    in
                                                    India.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse28" aria-expanded="true"
                                                        aria-controls="collapse28">
                                                    27. Where should I apply for security clearance?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse28" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>For Security clearance, apply as per the form available in the CAR on
                                                    RPAS or
                                                    Use
                                                    “ESahaj – Online portal for processing security clearance
                                                    applications”
                                                    available in DGCA homepage www.dgca.nic.in
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse29" aria-expanded="true"
                                                        aria-controls="collapse29">
                                                    28. I have a Nano drone. What permissions to I require?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse29" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Nano RPA (less than 250 gm) is exempted from obtaining UIN and UAOP.
                                                    Please
                                                    ensure not to fly it beyond 50 ft (15m) AGL. Also, ensure you are
                                                    not flying
                                                    in
                                                    controlled airspace and no other manned or unmanned aircraft is
                                                    flying
                                                    nearby.
                                                    If operations to be done in controlled airspace you need to apply
                                                    for UIN,
                                                    UAOP
                                                    and your RPA shall be NPNT complaint. It is recommended to fly in
                                                    uncontrolled
                                                    airspace/ enclosed premises and go through Do’s and Don’ts every
                                                    time before
                                                    you
                                                    fly.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse30" aria-expanded="true"
                                                        aria-controls="collapse30">
                                                    29. I have a micro drone engaged in wedding photography, what
                                                    permission do
                                                    I
                                                    need to keep doing it legally.
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse30" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                <ul>
                                                    <li> You need to obtain UIN.</li>
                                                    <li>You will not require an UAOP if you are flying your drone below
                                                        200 ft
                                                        (60m)
                                                        AGL in uncontrolled airspace/ enclosed premises. However, you
                                                        shall
                                                        intimate
                                                        the local police office at least 24 hours prior to conduct of
                                                        actual
                                                        operations.
                                                    </li>
                                                    <li>Your drone needs to NPNT compliant and you have to obtain
                                                        permission
                                                        through
                                                        digital sky before flying.
                                                    </li>
                                                </ul>

                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse31" aria-expanded="true"
                                                        aria-controls="collapse31">
                                                    30. I am an individual want to film my friend’s marriage using
                                                    drones. What
                                                    permission do I need?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse31" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>

                                                    If you have a micro drone, flying within enclosed premises and below
                                                    200ft
                                                    then;
                                                    you need to apply for UIN and to intimate local police before
                                                    operating your
                                                    drone.You will require UAOP and NPNT if you are flying in controlled
                                                    airspace.
                                                    Also ensure, no other manned or unmanned aircraft is flying nearby.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse32" aria-expanded="true"
                                                        aria-controls="collapse32">
                                                    31. Is delivery of items allowed under the DGCA CAR on UAS?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse32" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Not allowed as of now.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse33" aria-expanded="true"
                                                        aria-controls="collapse33">
                                                    32. I want to deliver foods using drones and it will be fully
                                                    autonomous and
                                                    fly
                                                    below 50 ft. whom should I contact for necessary permission.
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse33" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Not allowed as of now.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse34" aria-expanded="true"
                                                        aria-controls="collapse34">
                                                    33. Do I require remote pilot license to fly drone?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse34" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    No, as of now but you need to undergo minimum training requirements
                                                    specified in
                                                    the Civil Aviation Requirements on “Requirements for Operation of
                                                    Civil
                                                    RPAS”.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse35" aria-expanded="true"
                                                        aria-controls="collapse35">
                                                    34. What are the minimum requirements and eligibility for becoming a
                                                    remote
                                                    pilot for flying drones?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse35" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    You should have attained 18 years of age, having passed 10th exam in
                                                    English,
                                                    and undergone training at DGCA approved flying training organisation
                                                    (FTO).
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse36" aria-expanded="true"
                                                        aria-controls="collapse36">
                                                    35. Should I maintain flying log when and where I am flying?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse36" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    All individuals / operators (except Nano), shall maintain records of
                                                    each
                                                    RPA
                                                    flight records and should be produced on demand by DGCA.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse37" aria-expanded="true"
                                                        aria-controls="collapse37">
                                                    36. Should I maintain maintenance log for the repair/maintenance
                                                    carried out
                                                    on
                                                    RPAS?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse37" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    All RPA holders shall maintain maintenance records and, should be
                                                    able to
                                                    produce on demand by DGCA.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse38" aria-expanded="true"
                                                        aria-controls="collapse38">
                                                    37. What are the mandatory equipment required to fly upto 400 ft.
                                                    AGL?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse38" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Flying drone upto 400 ft. AGL and visual line of sight are allowed.
                                                    However,
                                                    you
                                                    need to have the following equipment installed on your drones:
                                                <ol>
                                                    <li>GNSS (GPS) for horizontal and vertical position fixing</li>
                                                    <li>Autonomous Flight Termination System or Return Home (RH)
                                                        option
                                                    </li>
                                                    <li>Flashing anti-collision strobe lights</li>
                                                    <li>RFID and GSM SIM Card/ NPNT compliant for APP based real time
                                                        tracking
                                                    </li>
                                                    <li>Fire resistant identification plate inscribed with UIN</li>
                                                    <li>Flight Controller with flight data logging capacity.</li>
                                                    <li>SSR transponder (Mode ‘C’ or ‘S’) or ADS-B OUT equipment</li>
                                                    <li>arometric equipment with capability for remote sub-scale
                                                        setting
                                                    </li>
                                                    <li>Geo-fencing capability</li>
                                                    <li>Detect and Avoid capability</li>
                                                </ol>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse39" aria-expanded="true"
                                                        aria-controls="collapse39">
                                                    38. What is an SOP?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse39" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    SOP or standard operating procedure is a catalogue of procedures
                                                    that is
                                                    agreed
                                                    between prospective UAOP holder and DGCA for safe operation of
                                                    drones in
                                                    India.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse40" aria-expanded="true"
                                                        aria-controls="collapse40">
                                                    39. What is the visual line of sight for flying a drone?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse40" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Generally 450m (unaided) in Visual Meteorological Conditions (VMC)
                                                    with a
                                                    minimum ground visibility of 5 km.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse41" aria-expanded="true"
                                                        aria-controls="collapse41">
                                                    40. I am a wedding photographer and I have a micro drone. Most of
                                                    the
                                                    marriages
                                                    in Northern India happen after sunset. Can I use my drone for
                                                    covering
                                                    marriages
                                                    at night?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse41" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    All drone operations are restricted to day light and within visual
                                                    line of
                                                    sight. However, if you are shooting in well-lit enclosed premises
                                                    using
                                                    micro
                                                    drone upto 200 ft. AGL is allowable. Ensure your drone is NPNT
                                                    compliant and
                                                    issued with UIN. Also, you need to inform local police before
                                                    flying.
                                                    Ensure that you follow Do’s and Don’ts and respect individuals’
                                                    privacy.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse42" aria-expanded="true"
                                                        aria-controls="collapse42">
                                                    41. I have a Nano drone, should I also intimate local police each
                                                    time
                                                    before I
                                                    fly?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse42" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    No. But there is no harm in keeping your local police office
                                                    informed. In
                                                    addition, please go through Do’s and Don’ts before flying your Nano
                                                    drone
                                                    each
                                                    time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse43" aria-expanded="true"
                                                        aria-controls="collapse43">
                                                    42. Can I use my small drone for agricultural purpose?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse43" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    RPAS can be used for agricultural purpose except for the purpose of
                                                    spraying
                                                    pesticides until specifically cleared.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse44" aria-expanded="true"
                                                        aria-controls="collapse44">
                                                    43. I have developed a drone that can carry passenger, where can I
                                                    test it?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse44" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p> Carriage of explosives, animal or human payload are not allowed at
                                                    this
                                                    instance. Nevertheless, you can test your drones with dummy on any
                                                    of the
                                                    test
                                                    sites specified in the CAR.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse45" aria-expanded="true"
                                                        aria-controls="collapse45">
                                                    44. What are no-drone zones?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse45" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Areas over which flying a drone is prohibited/ restricted. Please go
                                                    through
                                                    the
                                                    list of nodrone zones in Civil Aviation Requirements.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse46" aria-expanded="true"
                                                        aria-controls="collapse46">
                                                    45. What is the minimum distance to fly drones from the border
                                                    areas?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse46" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    You need to keep at least 25 km distance from international border
                                                    which
                                                    includes Line of Control (LoC), Line of Actual Control (LAC) and
                                                    Actual
                                                    Ground
                                                    Position Line (AGPL).

                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse47" aria-expanded="true"
                                                        aria-controls="collapse47">
                                                    46. What if I require to fly over a no-drone zone for a genuine
                                                    purpose? How
                                                    do
                                                    I obtain special authorisation for the same?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse47" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Flying drone over no-drone zone is prohibited. However, DGCA may
                                                    authorize
                                                    such
                                                    operations on case-to-case basis subject to approval of MoD.

                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse48" aria-expanded="true"
                                                        aria-controls="collapse48">
                                                    47. What if I want to test my drone that built for night operation
                                                    and
                                                    beyond
                                                    meteorological conditions, will I be permitted by DGCA?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse48" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    DGCA may authorise such operation on case-to-case basis subject to
                                                    adequate
                                                    justification is provided by you for safe conduct of RPAS operation.
                                                    Please
                                                    note, DGCA may impose additional conditions for permitting such
                                                    operations.
                                                    In addition, you may test your drone in the test sites specified in
                                                    the
                                                    Civil
                                                    Aviation Requirements.

                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse49" aria-expanded="true"
                                                        aria-controls="collapse49">
                                                    48. What is the minimum amount of insurance should I require for my
                                                    drone?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse49" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>

                                                    DGCA has not stipulated any requirement on minimum amount of
                                                    insurance for
                                                    any
                                                    category of drone. It should be of an adequate amount to cover the
                                                    risks,
                                                    damages or other factors that is posed by operation of drone.
                                                    Further, it is
                                                    an
                                                    agreement between the insurance company and you (the policy holder).
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse50" aria-expanded="true"
                                                        aria-controls="collapse50">
                                                    49. What will be the enforcement action on violation of the rules
                                                    and
                                                    regulations for drones?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse50" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    In case of violation of the rules and regulations for drones, the
                                                    UIN/UAOP
                                                    issued by DGCA shall be suspended/cancelled.
                                                    Violation of compliance to any of the requirements and falsification
                                                    of
                                                    records/documents shall attract penal action including imposition of
                                                    penalties
                                                    as per applicable IPCs (such as 287, 336, 337, 338 or any relevant
                                                    section
                                                    of
                                                    IPC) or Aircraft Act 1934 or Aircraft Rules 1937 or any statutory
                                                    provisions.


                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse51" aria-expanded="true"
                                                        aria-controls="collapse51">
                                                    50. Where can I lodge my grievance regarding Drones?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse51" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    You can lodge your grievance in <a href="www.pgportal.gov.in">www.pgportal.gov.in</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapse14" aria-expanded="true"
                                                        aria-controls="collapse14">
                                                    51. Where do I file flight plan? What is the procedure for filing
                                                    flight
                                                    plan?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse14" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                You can file flight plan online through Digital Sky Platform. Procedure
                                                for
                                                filing
                                                flight plan is available in Digital Sky Manual. The link for the Digital
                                                Sky
                                                Platform/ Manual shall be available in Homepage of DGCA website
                                                www.dgca.nic.in,
                                                and
                                                it will be operational from 1st December, 2018.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--<div class="col-md-2">-->
            <!--    <img src="{{asset('website/images/long_advertise_image.png')}}" class="img-fluid">-->
            <!--</div>-->
        </div>
    </div>
@endsection
@section('website.script')
    <script>
        $('.panel-group').on('show.bs.collapse shown.bs.collapse hide.bs.collapse hidden.bs.collapse', function (e) {
            e.stopPropagation();
        });
    </script>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection




