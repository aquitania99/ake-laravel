@extends('layouts.app-dashboard')

@section('content')

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/wizards/steps.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jasny_bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/extensions/cookie.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/pages/wizard_steps.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/picker_date.js')}}"></script>
    <!-- /theme JS files -->

    <!-- Content area -->
    <div class="content">

        <!-- Wizard with validation -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">User Profile data</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <form class="steps-validation" action="{{'/student'}}" method="post" id="addUser">
                {!! csrf_field() !!}
                <h6>Personal data</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Your name:</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input placeholder="First name" name="firstname" class="form-control" type="text">
                                            </div>

                                            <div class="col-md-6">
                                                <input placeholder="Last name" name="lastname"  class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username:</label>
                                    <div class="col-lg-9">
                                        <input placeholder="username"  name="username" class="form-control" type="text">
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-9">
                                        <input placeholder="your@email.here" name="email"  class="form-control" type="text">
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Mobile #:</label>
                                    <div class="col-lg-9">
                                        <input placeholder="+99-99-9999-9999" name="mobile"  class="form-control" type="text">
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Gender:</label>
                                    <div class="col-lg-9">
                                        <label class="radio-inline">
                                            <div class="choice"><input type="radio" value="M" checked="checked" class="styled" name="gender"></div>
                                            Male
                                        </label>

                                        <label class="radio-inline">
                                            <div class="choice"><input type="radio" value="F"  class="styled" name="gender"></div>
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="form-group">
                                    <label>Date of birth:</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-month" data-placeholder="Month" name="dob-month"  class="select">
                                                    <option></option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-day" data-placeholder="Day" name="dob-day"  class="select">
                                                    <option></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="...">...</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="birth-year" data-placeholder="Year" name="dob-year"  class="select">
                                                    <option></option>
                                                    <option value="1">1980</option>
                                                    <option value="2">1981</option>
                                                    <option value="3">1982</option>
                                                    <option value="4">1983</option>
                                                    <option value="5">1984</option>
                                                    <option value="6">1985</option>
                                                    <option value="7">1986</option>
                                                    <option value="8">1987</option>
                                                    <option value="9">1988</option>
                                                    <option value="10">1989</option>
                                                    <option value="11">1990</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding:1em"></div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <select data-placeholder="Select your country" name="birth-country"  class="select">
                                                <option></option>
                                                <option value="1">Argentina</option>
                                                <option value="2">Bolivia</option>
                                                <option value="3">Colombia</option>
                                                <option value="4">Ecuador</option>
                                                <option value="5">Etc...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State/Province:</label>
                                            <input type="text" placeholder="NSW" name="birth-state"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input type="text" placeholder="Sydney" name="birth-city"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Passport No:</label>
                                <input placeholder="ABC123456" name="passport-number"  class="form-control" type="text">
                            </div>

                            <div class="content-group-lg">
                                <label>Passport issue date:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                    <input type="text" class="form-control pickadate-selectors"  name="passport-issue-date"  placeholder="Choose date">
                                </div>
                            </div>

                            <div class="content-group-lg">
                                <label>Passport expiry date:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                    <input type="text" class="form-control pickadate-selectors" name="passport-exp-date"  placeholder="Choose date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Additional notes:</label>
                                <textarea rows="5" cols="5" class="form-control" name="comments-notes"  placeholder="Enter your notes here"></textarea>
                            </div>
                            <div style="padding:1em"></div>
                        </div>
                    </div>
                </fieldset>

                <h6>Your address info</h6>
                <fieldset>
                    <legend class="text-semibold">Current residency</legend>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Street line 1:</label>
                                <input type="text" placeholder="Level 1 123 Street" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Street line 2 (optional):</label>
                                <input type="text" placeholder=" " class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State/Province:</label>
                                    <input type="text" placeholder="NSW" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>ZIP code:</label>
                                    <input type="text" placeholder="2000" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select data-placeholder="Select your country" class="select">
                                        <option></option>
                                        <option value="Arg">Australia</option>
                                        <option value="Arg">Argentina</option>
                                        <option value="Bol">Bolivia</option>
                                        <option value="Col">Colombia</option>
                                        <option value="Ecu">Ecuador</option>
                                        <option value="Etc">Etc...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <legend class="text-semibold">Home country residential address</legend>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Street line 1:</label>
                                <input type="text" placeholder="Level 1 123 Street" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Street line 2 (optional):</label>
                                <input type="text" placeholder=" " class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State/Province:</label>
                                    <input type="text" placeholder="NSW" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>ZIP code:</label>
                                    <input type="text" placeholder="2000" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select data-placeholder="Select your country" class="select">
                                        <option></option>
                                        <option value="Arg">Australia</option>
                                        <option value="Arg">Argentina</option>
                                        <option value="Bol">Bolivia</option>
                                        <option value="Col">Colombia</option>
                                        <option value="Ecu">Ecuador</option>
                                        <option value="Etc">Etc...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>


                <h6>Your education</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Educational Institute: <span class="text-danger">*</span></label>
                                <input type="text" name="educational_institute" placeholder="School / College / Institute / University name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="select">
                                    <option></option>
                                    <option value="1">Australia</option>
                                    <option value="2">United States</option>
                                    <option value="3">France</option>
                                    <option value="4">Germany</option>
                                    <option value="5">Spain</option>
                                    <option value="6">Argentina</option>
                                    <option value="7">Bolivia</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Ecuador</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree level: <span class="text-danger">*</span></label>
                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="select">
                                                    <option></option>
                                                    <option value="January">January</option>
                                                    <option value="...">...</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="select">
                                                    <option></option>
                                                    <option value="1995">1995</option>
                                                    <option value="...">...</option>
                                                    <option value="1980">1980</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="select">
                                                    <option></option>
                                                    <option value="January">January</option>
                                                    <option value="...">...</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="select">
                                                    <option></option>
                                                    <option value="1995">1995</option>
                                                    <option value="...">...</option>
                                                    <option value="1980">1980</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Language of education:</label>
                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                            </div>

                        </div>
                    </div>
                </fieldset>

                <h6>Your experience</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company / Employer: <span class="text-danger">*</span></label>
                                <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Position: <span class="text-danger">*</span></label>
                                <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>From:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-month" data-placeholder="Month" class="select">
                                                    <option></option>
                                                    <option value="January">January</option>
                                                    <option value="...">...</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-from-year" data-placeholder="Year" class="select">
                                                    <option></option>
                                                    <option value="1995">1995</option>
                                                    <option value="...">...</option>
                                                    <option value="1980">1980</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>To:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-month" data-placeholder="Month" class="select">
                                                    <option></option>
                                                    <option value="January">January</option>
                                                    <option value="...">...</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="education-to-year" data-placeholder="Year" class="select">
                                                    <option></option>
                                                    <option value="1995">1995</option>
                                                    <option value="...">...</option>
                                                    <option value="1980">1980</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country:</label>
                                <select name="university-country" data-placeholder="Choose a Country..." class="select">
                                    <option></option>
                                    <option value="1">Australia</option>
                                    <option value="2">United States</option>
                                    <option value="3">France</option>
                                    <option value="4">Germany</option>
                                    <option value="5">Spain</option>
                                    <option value="6">Argentina</option>
                                    <option value="7">Bolivia</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Ecuador</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Phone number: <span class="text-danger">*</span></label>
                                <input type="text" name="experience-position" placeholder="+99 1234 4567" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Brief description:</label>
                                <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>



                <h6>Visa &amp Ielts info</h6>
                <fieldset>
                    <div class="row">
                        <legend class="text-semibold">Australian Visa Details</legend>
                        <div class="form-group">
                            <p class="col-lg-5 control-label">Have you ever applied or held a visa to enter or remain in Australia?</p>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" checked="checked" class="styled" name="visa"></div>
                                    yes
                                </label>

                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" class="styled" name="visa"></div>
                                    no
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Application date</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="select">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Visa type <span class="text-danger">*</span></label>
                                    <select name="source" data-placeholder="Choose a visa type..." class="select-simple">
                                        <option></option>
                                        <option value="1">Turism</option>
                                        <option value="2">Elicos</option>
                                        <option value="3">Graduate</option>
                                        <option value="4">Skills</option>
                                        <option value="5">Sponsorship</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Office where you applied? <span class="text-danger">*</span></label>
                                        <input type="text" name="experience-position" placeholder="Sydney Embassy" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div>
                            <div class="form-group">
                                <p class="col-lg-4 control-label">Have you applied for another Australian visa?</p>
                                <div class="col-lg-5">
                                    <label class="radio-inline">
                                        <div class="choice"><input type="radio" checked="checked" class="styled" name="visa"></div>
                                        yes
                                    </label>

                                    <label class="radio-inline">
                                        <div class="choice"><input type="radio" class="styled" name="visa"></div>
                                        no
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <legend class="text-semibold">English Test Details</legend>
                        <div class="form-group">
                            <p class="col-lg-5 control-label">Have you completed an IELTS test?</p>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" checked="checked" class="styled" name="visa"></div>
                                    yes
                                </label>

                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" class="styled" name="visa"></div>
                                    no
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Test date</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-day" data-placeholder="Day" class="select">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="...">...</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="birth-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1">1980</option>
                                            <option value="2">1981</option>
                                            <option value="3">1982</option>
                                            <option value="4">1983</option>
                                            <option value="5">1984</option>
                                            <option value="6">1985</option>
                                            <option value="7">1986</option>
                                            <option value="8">1987</option>
                                            <option value="9">1988</option>
                                            <option value="10">1989</option>
                                            <option value="11">1990</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">

                                <div class="col-md-4">
                                    <label>IELTS Overall score? <span class="text-danger">*</span></label>
                                    <input type="number" name="experience-position" placeholder="9.0" class="form-control ">
                                </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Listeninig <span class="text-danger">*</span></label>
                                    <input type="number" name="experience-position" placeholder="9.0" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Reading <span class="text-danger">*</span></label>
                                    <input type="number" name="experience-position" placeholder="9.0" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Writing <span class="text-danger">*</span></label>
                                    <input type="number" name="experience-position" placeholder="9.0" class="form-control required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Speaking <span class="text-danger">*</span></label>
                                    <input type="number" name="experience-position" placeholder="9.0" class="form-control required">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h6>Additional info</h6>
                <fieldset>
                    <div class="row">
                        <legend class="text-semibold">Dependants &amp; Family Members Details</legend>
                        <div class="form-group">
                            <p class="col-lg-5 control-label">Would you like to include some family in your application?</p>
                            <div class="col-lg-4">
                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" checked="checked" class="styled" name="dependants"></div>
                                    yes
                                </label>

                                <label class="radio-inline">
                                    <div class="choice"><input type="radio" class="styled" name="dependants"></div>
                                    no
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <h6>Spouse / Partner</h6>
                        <fieldset>
                            <div class="row">
                                {{--<div class="col-md-6">--}}
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Name:</label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input placeholder="First name" class="form-control" type="text">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input placeholder="Last name" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding:1em"></div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Gender:</label>
                                            <div class="col-lg-9">
                                                <label class="radio-inline">
                                                    <div class="choice"><input type="radio" checked="checked" class="styled" name="gender"></div>
                                                    Male
                                                </label>

                                                <label class="radio-inline">
                                                    <div class="choice"><input type="radio" class="styled" name="gender"></div>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                        <div style="padding:1em"></div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Date of birth:</label>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <select name="birth-month" data-placeholder="Month" class="select">
                                                            <option></option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <select name="birth-day" data-placeholder="Day" class="select">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="...">...</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <select name="birth-year" data-placeholder="Year" class="select">
                                                            <option></option>
                                                            <option value="1">1980</option>
                                                            <option value="2">1981</option>
                                                            <option value="3">1982</option>
                                                            <option value="4">1983</option>
                                                            <option value="5">1984</option>
                                                            <option value="6">1985</option>
                                                            <option value="7">1986</option>
                                                            <option value="8">1987</option>
                                                            <option value="9">1988</option>
                                                            <option value="10">1989</option>
                                                            <option value="11">1990</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding:1em"></div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Country of Birth:</label>
                                                    <select data-placeholder="Select country of birth" class="select">
                                                        <option></option>
                                                        <option value="Arg">Argentina</option>
                                                        <option value="Bol">Bolivia</option>
                                                        <option value="Col">Colombia</option>
                                                        <option value="Ecu">Ecuador</option>
                                                        <option value="Etc">Etc...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>State/Province:</label>
                                                    <input type="text" placeholder="NSW" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City:</label>
                                                    <input type="text" placeholder="Sydney" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                            </div>
                        </fieldset>
                    </div>

                    <div class="row">
                        <div>
                            <div class="form-group">
                                <p class="col-lg-4 control-label">Do you want to include children?</p>
                                <div class="col-lg-5">
                                    <label class="radio-inline">
                                        <div class="choice"><input type="radio" checked="checked" class="styled" name="children"></div>
                                        yes
                                    </label>

                                    <label class="radio-inline">
                                        <div class="choice"><input type="radio" class="styled" name="children"></div>
                                        no
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <h6>Children</h6>
                        <fieldset>
                            <div class="row">
                                {{--<div class="col-md-6">--}}
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name:</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input placeholder="First name" class="form-control" type="text">
                                                </div>

                                                <div class="col-md-6">
                                                    <input placeholder="Last name" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:1em"></div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Gender:</label>
                                        <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <div class="choice"><input type="radio" checked="checked" class="styled" name="gender"></div>
                                                Male
                                            </label>

                                            <label class="radio-inline">
                                                <div class="choice"><input type="radio" class="styled" name="gender"></div>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div style="padding:1em"></div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Date of birth:</label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select name="birth-month" data-placeholder="Month" class="select">
                                                        <option></option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select name="birth-day" data-placeholder="Day" class="select">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="...">...</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select name="birth-year" data-placeholder="Year" class="select">
                                                        <option></option>
                                                        <option value="1">1980</option>
                                                        <option value="2">1981</option>
                                                        <option value="3">1982</option>
                                                        <option value="4">1983</option>
                                                        <option value="5">1984</option>
                                                        <option value="6">1985</option>
                                                        <option value="7">1986</option>
                                                        <option value="8">1987</option>
                                                        <option value="9">1988</option>
                                                        <option value="10">1989</option>
                                                        <option value="11">1990</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:1em"></div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Country of Birth:</label>
                                                <select data-placeholder="Select country of birth" class="select">
                                                    <option></option>
                                                    <option value="Arg">Argentina</option>
                                                    <option value="Bol">Bolivia</option>
                                                    <option value="Col">Colombia</option>
                                                    <option value="Ecu">Ecuador</option>
                                                    <option value="Etc">Etc...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>State/Province:</label>
                                                <input type="text" placeholder="NSW" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>City:</label>
                                                <input type="text" placeholder="Sydney" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- /wizard with validation -->

    </div>
    <!-- /content area -->

@endsection
