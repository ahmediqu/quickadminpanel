@extends('frontend.layouts.master')
@section('title',' | Register ')
@section('frontend-content')
<style>
.invalid-feedback{
display: block;
}
</style>
<section class="login-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login">
                    <h3 class="text-center">Sign Up</h3>
                    <br>
                    <hr>
                    <div class="connect-with-social-icon text-center">
                        
                        
                        <a href="{{url('register/facebook')}}" class="btn btn-success custom-btn facebook-btn text-center"><i class="fab fa-facebook-f"></i> Sign up with facebook</a> <br> <br>
                        <button type="button" class="btn btn-success custom-btn google-btn text-center"><i class="fab fa-google"></i> Sign up with Google</button>
                        
                        <br>
                        <hr>
                        <h4>Or</h4>
                        <br>
                    </div>
                    <form action="{{url('register')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_type" value="{{Session::get('user_type')}}">
                        <div class="form-group">
                            <label for="f_name" class="">First Name  <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('f_name') ? ' is-invalid' : '' }}" id="f_name" name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>
                            @if($errors->has('f_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('f_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="l_name" class="">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('l_name') ? ' is-invalid' : '' }}" id="l_name" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>
                            @if ($errors->has('l_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('l_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" class="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control custom-form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="number" class="">Mobile Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control custom-form-control {{ $errors->has('number') ? ' is-invalid' : '' }}" id="number" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                            @if ($errors->has('number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <?php if(Session::get('user_type') == 1){?>
                        <div class="form-group">
                            <label for="parent_number" class="">Parents Mobile Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control custom-form-control {{ $errors->has('parent_number') ? ' is-invalid' : '' }}" id="parent_number" name="parent_number" value="{{ old('parent_number') }}" required autocomplete="parent_number" autofocus >
                            @if ($errors->has('parent_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('parent_number') }}</strong>
                            </span>
                            @endif
                        </div>
                        <?php }else{} ?>
                        
                        <div class="form-group">
                            <label for="dob" class=""> Date Of Birth  <span class="text-danger">*</span></label>
                            <input type="date" class="form-control custom-form-control {{ $errors->has('dob') ? ' is-invalid' : '' }}" id="dob" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus >
                            @if ($errors->has('dob'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="gender" class=""> Gender <span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control custom-form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}" autofocus>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Other</option>
                            </select>
                            @if ($errors->has('gender'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                            @endif
                        </div>
                    <?php if(Session::get('user_type') ==2){?>
                        <div class="form-group">
                            <label for="nid_number" class=""> Nid Or Passport Or Birthday Certificate Number <span class="text-danger">*</span></label> <br>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('nid_number') ? ' is-invalid' : '' }}" id="nid_number" name="nid_number" value="{{ old('nid_number') }}" autofocus>
                            @if($errors->has('nid_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nid') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="hidden" id="txt_usrid" name="autoTnr">
                    <?php } ?>

                        <div class="form-group">
                            <label for="nid" class=""> Upload Your ID or NID or Passport or Birth Certificate Copy <span class="text-danger">*</span></label> <br>
                            <input type="file" class="{{ $errors->has('nid') ? ' is-invalid' : '' }}" id="nid" name="nid" autofocus>
                            @if($errors->has('nid'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nid') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="n_lan" class="">Native Language <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('n_lan') ? ' is-invalid' : '' }}" value="{{ old('n_lan') }}" id="n_lan" name="n_lan" autofocus>
                            @if ($errors->has('n_lan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('n_lan') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="s_lan" class="">2nd Language <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('s_lan') ? ' is-invalid' : '' }}" value="{{ old('s_lan') }}" id="s_lan" name="s_lan" autofocus>
                            @if ($errors->has('s_lan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('s_lan') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tnr" class="">Referral TNR </label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('tnr') ? ' is-invalid' : '' }}" value="{{ old('tnr') }}" id="tnr" name="tnr" autofocus>
                            @if ($errors->has('tnr'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tnr') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="country">Country <span class="text-danger">*</span></label>
                            <select name="country" id="country" class="form-control custom-form-control {{ $errors->has('country') ? ' is-invalid' : '' }}">
        <option value="">Select Country</option>
        <option data-countryCode="DZ" value="Afghanistan">Afghanistan(+93)</option>
        <option data-countryCode="DZ" value="Algeria">Algeria (+213)</option>
        <option data-countryCode="AD" value="Andorra">Andorra (+376)</option>
        <option data-countryCode="AO" value="Angola">Angola (+244)</option>
        <option data-countryCode="AI" value="Anguilla">Anguilla (+1264)</option>
        <option data-countryCode="AG" value="Antigua Barbuda">Antigua &amp; Barbuda (+1268)</option>
        <option data-countryCode="AR" value="Argentina">Argentina (+54)</option>
        <option data-countryCode="AM" value="Armenia">Armenia (+374)</option>
        <option data-countryCode="AW" value="Aruba">Aruba (+297)</option>
        <option data-countryCode="AU" value="Australia">Australia (+61)</option>
        <option data-countryCode="AT" value="Austria">Austria (+43)</option>
        <option data-countryCode="AZ" value="Azerbaijan">Azerbaijan (+994)</option>
        <option data-countryCode="BS" value="Bahamas">Bahamas (+1242)</option>
        <option data-countryCode="BH" value="Bahrain">Bahrain (+973)</option>
        <option data-countryCode="BD" value="Bangladesh">Bangladesh (+880)</option>
        <option data-countryCode="BB" value="Barbados">Barbados (+1246)</option>
        <option data-countryCode="BY" value="Belarus">Belarus (+375)</option>
        <option data-countryCode="BE" value="Belgium">Belgium (+32)</option>
        <option data-countryCode="BZ" value="Belize">Belize (+501)</option>
        <option data-countryCode="BJ" value="Benin">Benin (+229)</option>
        <option data-countryCode="BM" value="Bermuda">Bermuda (+1441)</option>
        <option data-countryCode="BT" value="Bhutan">Bhutan (+975)</option>
        <option data-countryCode="BO" value="Bolivia">Bolivia (+591)</option>
        <option data-countryCode="BA" value="Bosnia Herzegovina">Bosnia Herzegovina (+387)</option>
        <option data-countryCode="BW" value="Botswana">Botswana (+267)</option>
        <option data-countryCode="BR" value="Brazil">Brazil (+55)</option>
        <option data-countryCode="BN" value="Brunei">Brunei (+673)</option>
        <option data-countryCode="BG" value="Bulgaria">Bulgaria (+359)</option>
        <option data-countryCode="BF" value="Burkina">Burkina Faso (+226)</option>
        <option data-countryCode="BI" value="Burundi">Burundi (+257)</option>
        <option data-countryCode="KH" value="Cambodia">Cambodia (+855)</option>
        <option data-countryCode="CM" value="Cameroon">Cameroon (+237)</option>
        <option data-countryCode="CA" value="Canada">Canada (+1)</option>
        <option data-countryCode="CV" value="Cape Verde Islands ">Cape Verde Islands (+238)</option>
        <option data-countryCode="KY" value="Cayman Islands">Cayman Islands (+1345)</option>
        <option data-countryCode="CF" value="Central African Republic">Central African Republic (+236)</option>
        <option data-countryCode="CL" value="Chile">Chile (+56)</option>
        <option data-countryCode="CN" value="China">China (+86)</option>
        <option data-countryCode="CO" value="Colombia">Colombia (+57)</option>
        <option data-countryCode="KM" value="Comoros">Comoros (+269)</option>
        <option data-countryCode="CG" value="Congo">Congo (+242)</option>
        <option data-countryCode="CK" value="Cook Islands">Cook Islands (+682)</option>
        <option data-countryCode="CR" value="Costa Rica">Costa Rica (+506)</option>
        <option data-countryCode="HR" value="Croatia">Croatia (+385)</option>
        <option data-countryCode="CU" value="Cuba">Cuba (+53)</option>
        <option data-countryCode="CY" value=">Cyprus North ">Cyprus North (+90392)</option>
        <option data-countryCode="CY" value="Cyprus South ">Cyprus South (+357)</option>
        <option data-countryCode="CZ" value="Czech Republic">Czech Republic (+42)</option>
        <option data-countryCode="DK" value="Denmark">Denmark (+45)</option>
        <option data-countryCode="DJ" value="Djibouti">Djibouti (+253)</option>
        <option data-countryCode="DM" value="Dominica">Dominica (+1809)</option>
        <option data-countryCode="DO" value="Dominican Republic">Dominican Republic (+1809)</option>
        <option data-countryCode="EC" value="Ecuador">Ecuador (+593)</option>
        <option data-countryCode="EG" value="Egypt">Egypt (+20)</option>
        <option data-countryCode="SV" value="El Salvador">El Salvador (+503)</option>
        <option data-countryCode="GQ" value="Equatorial Guinea">Equatorial Guinea (+240)</option>
        <option data-countryCode="ER" value="Eritrea">Eritrea (+291)</option>
        <option data-countryCode="EE" value="Estonia">Estonia (+372)</option>
        <option data-countryCode="ET" value="Ethiopia">Ethiopia (+251)</option>
        <option data-countryCode="FK" value="Falkland Islands">Falkland Islands (+500)</option>
        <option data-countryCode="FO" value="Faroe Islands">Faroe Islands (+298)</option>
        <option data-countryCode="FJ" value="Fiji">Fiji (+679)</option>
        <option data-countryCode="FI" value="Finland">Finland (+358)</option>
        <option data-countryCode="FR" value="France">France (+33)</option>
        <option data-countryCode="GF" value=">French Guiana">French Guiana (+594)</option>
        <option data-countryCode="PF" value="French Polynesia">French Polynesia (+689)</option>
        <option data-countryCode="GA" value="Gabon">Gabon (+241)</option>
        <option data-countryCode="GM" value="Gambia">Gambia (+220)</option>
        <option data-countryCode="GE" value="Georgia">Georgia (+7880)</option>
        <option data-countryCode="DE" value="Germany">Germany (+49)</option>
        <option data-countryCode="GH" value="Ghana">Ghana (+233)</option>
        <option data-countryCode="GI" value="Gibraltar">Gibraltar (+350)</option>
        <option data-countryCode="GR" value="Greece">Greece (+30)</option>
        <option data-countryCode="GL" value="Greenland">Greenland (+299)</option>
        <option data-countryCode="GD" value="Grenada">Grenada (+1473)</option>
        <option data-countryCode="GP" value="Guadeloupe">Guadeloupe (+590)</option>
        <option data-countryCode="GU" value="Guam">Guam (+671)</option>
        <option data-countryCode="GT" value="Guatemala">Guatemala (+502)</option>
        <option data-countryCode="GN" value="Guinea">Guinea (+224)</option>
        <option data-countryCode="GW" value="Guinea">Guinea - Bissau (+245)</option>
        <option data-countryCode="GY" value="Guyana">Guyana (+592)</option>
        <option data-countryCode="HT" value="509">Haiti (+509)</option>
        <option data-countryCode="HN" value="Honduras">Honduras (+504)</option>
        <option data-countryCode="HK" value="Hong">Hong Kong (+852)</option>
        <option data-countryCode="HU" value="Hungary">Hungary (+36)</option>
        <option data-countryCode="IS" value="Iceland">Iceland (+354)</option>
        <option data-countryCode="IN" value="India">India (+91)</option>
        <option data-countryCode="ID" value="Indonesia">Indonesia (+62)</option>
        <option data-countryCode="IR" value="Iran">Iran (+98)</option>
        <option data-countryCode="IQ" value="Iraq">Iraq (+964)</option>
        <option data-countryCode="IE" value="Ireland">Ireland (+353)</option>
        <option data-countryCode="IL" value="Israel">Israel (+972)</option>
        <option data-countryCode="IT" value="Italy">Italy (+39)</option>
        <option data-countryCode="JM" value="Jamaica">Jamaica (+1876)</option>
        <option data-countryCode="JP" value="Japan">Japan (+81)</option>
        <option data-countryCode="JO" value="Jordan">Jordan (+962)</option>
        <option data-countryCode="KZ" value="Kazakhstan">Kazakhstan (+7)</option>
        <option data-countryCode="KE" value="Kenya">Kenya (+254)</option>
        <option data-countryCode="KI" value="Kiribati">Kiribati (+686)</option>
        
        <option data-countryCode="KW" value="Kuwait">Kuwait (+965)</option>
        <option data-countryCode="KG" value="Kyrgyzstan">Kyrgyzstan (+996)</option>
        <option data-countryCode="LA" value="Laos">Laos (+856)</option>
        <option data-countryCode="LV" value="Latvia">Latvia (+371)</option>
        <option data-countryCode="LB" value="Lebanon">Lebanon (+961)</option>
        <option data-countryCode="LS" value="Lesotho">Lesotho (+266)</option>
        <option data-countryCode="LR" value="Liberia">Liberia (+231)</option>
        <option data-countryCode="LY" value="Libya">Libya (+218)</option>
        <option data-countryCode="LI" value="Liechtenstein">Liechtenstein (+417)</option>
        <option data-countryCode="LT" value="Lithuania">Lithuania (+370)</option>
        <option data-countryCode="LU" value="Luxembourg">Luxembourg (+352)</option>
        <option data-countryCode="MO" value="Macao">Macao (+853)</option>
        <option data-countryCode="MK" value="Macedonia">Macedonia (+389)</option>
        <option data-countryCode="MG" value="Madagascar">Madagascar (+261)</option>
        <option data-countryCode="MW" value="Malawi">Malawi (+265)</option>
        <option data-countryCode="MY" value="Malaysia">Malaysia (+60)</option>
        <option data-countryCode="MV" value="Maldives">Maldives (+960)</option>
        <option data-countryCode="ML" value="Mali">Mali (+223)</option>
        <option data-countryCode="MT" value="Malta">Malta (+356)</option>
        <option data-countryCode="MH" value="Marshall">Marshall Islands (+692)</option>
        <option data-countryCode="MQ" value="Martinique">Martinique (+596)</option>
        <option data-countryCode="MR" value="Mauritania">Mauritania (+222)</option>
        <option data-countryCode="YT" value="Mayotte">Mayotte (+269)</option>
        <option data-countryCode="MX" value="Mexico">Mexico (+52)</option>
        <option data-countryCode="FM" value="Micronesia">Micronesia (+691)</option>
        <option data-countryCode="MD" value="Moldova">Moldova (+373)</option>
        <option data-countryCode="MC" value="Monaco">Monaco (+377)</option>
        <option data-countryCode="MN" value="Mongolia">Mongolia (+976)</option>
        <option data-countryCode="MS" value="Montserrat">Montserrat (+1664)</option>
        <option data-countryCode="MA" value="Morocco">Morocco (+212)</option>
        <option data-countryCode="MZ" value="Mozambique">Mozambique (+258)</option>
        <option data-countryCode="MN" value="Myanmar">Myanmar (+95)</option>
        <option data-countryCode="NA" value="Namibia">Namibia (+264)</option>
        <option data-countryCode="NR" value="Nauru">Nauru (+674)</option>
        <option data-countryCode="NP" value="Nepal">Nepal (+977)</option>
        <option data-countryCode="NL" value="Netherlands">Netherlands (+31)</option>
        <option data-countryCode="NC" value="New Caledonia">New Caledonia (+687)</option>
        <option data-countryCode="NZ" value="New Zealand ">New Zealand (+64)</option>
        <option data-countryCode="NI" value="Nicaragua">Nicaragua (+505)</option>
        <option data-countryCode="NE" value="Niger">Niger (+227)</option>
        <option data-countryCode="NG" value="Nigeria">Nigeria (+234)</option>
        <option data-countryCode="NU" value="Niue">Niue (+683)</option>

        <option data-countryCode="KP" value="Korea North">North Korea  (+850)</option>
        <option data-countryCode="NF" value="Norfolk Islands">Norfolk Islands (+672)</option>
        <option data-countryCode="NP" value="Northern Marianas">Northern Marianas (+670)</option>
        <option data-countryCode="NO" value="Norway">Norway (+47)</option>
        <option data-countryCode="OM" value="Oman">Oman (+968)</option>
        <option value="Pakistan">Pakistan(+92)</option>
        <option data-countryCode="PW" value="Palau">Palau (+680)</option>
        <option data-countryCode="PA" value="Panama">Panama (+507)</option>
        <option data-countryCode="PG" value="Papua New Guinea ">Papua New Guinea (+675)</option>
        <option data-countryCode="PY" value="Paraguay">Paraguay (+595)</option>
        <option data-countryCode="PE" value="Peru">Peru (+51)</option>
        <option data-countryCode="PH" value="Philippines">Philippines (+63)</option>
        <option data-countryCode="PL" value="Poland">Poland (+48)</option>
        <option data-countryCode="PT" value="Portugal">Portugal (+351)</option>
        <option data-countryCode="PR" value="Puerto Rico">Puerto Rico (+1787)</option>
        <option data-countryCode="QA" value="Qatar">Qatar (+974)</option>
        <option data-countryCode="RE" value="Reunion">Reunion (+262)</option>
        <option data-countryCode="RO" value="Romania">Romania (+40)</option>
        <option data-countryCode="RU" value="Russia">Russia (+7)</option>
        <option data-countryCode="RW" value="Rwanda">Rwanda (+250)</option>
        <option data-countryCode="SM" value="San Marino ">San Marino (+378)</option>
        <option data-countryCode="ST" value="Sao Tome  Principe">Sao Tome &amp; Principe (+239)</option>
        <option data-countryCode="SA" value="Saudi Arabia">Saudi Arabia (+966)</option>
        <option data-countryCode="SN" value="Senegal">Senegal (+221)</option>
        <option data-countryCode="CS" value="Serbia">Serbia (+381)</option>
        <option data-countryCode="SC" value="Seychelles">Seychelles (+248)</option>
        <option data-countryCode="SL" value="Sierra Leone">Sierra Leone (+232)</option>
        <option data-countryCode="SG" value="Singapore">Singapore (+65)</option>
        <option data-countryCode="SK" value="Slovak Republic">Slovak Republic (+421)</option>
        <option data-countryCode="SI" value="Slovenia">Slovenia (+386)</option>
        <option data-countryCode="SB" value="Solomon Islands">Solomon Islands (+677)</option>
        <option data-countryCode="SO" value="Somalia">Somalia (+252)</option>
        <option data-countryCode="ZA" value="South Africa">South Africa (+27)</option>
        <option data-countryCode="KR" value="Korea South"> South Korea  (+82)</option>
        <option data-countryCode="ES" value="Spain">Spain (+34)</option>
        <option data-countryCode="LK" value="Sri Lanka">Sri Lanka (+94)</option>
        <option data-countryCode="SH" value="St. Helena">St. Helena (+290)</option>
        <option data-countryCode="KN" value="St. Kitts">St. Kitts (+1869)</option>
        <option data-countryCode="SC" value="St. Lucia">St. Lucia (+1758)</option>
        <option data-countryCode="SD" value="Sudan">Sudan (+249)</option>
        <option data-countryCode="SR" value="Suriname">Suriname (+597)</option>
        <option data-countryCode="SZ" value="Swaziland">Swaziland (+268)</option>
        <option data-countryCode="SE" value="Sweden">Sweden (+46)</option>
        <option data-countryCode="CH" value="Switzerland">Switzerland (+41)</option>
        <option data-countryCode="SI" value="Syria">Syria (+963)</option>
        <option data-countryCode="TW" value="Taiwan">Taiwan (+886)</option>
        <option data-countryCode="TJ" value="Tajikstan">Tajikstan (+7)</option>
        <option data-countryCode="TH" value="Thailand">Thailand (+66)</option>
        <option data-countryCode="TG" value="Togo">Togo (+228)</option>
        <option data-countryCode="TO" value="Tonga">Tonga (+676)</option>
        <option data-countryCode="TT" value="Trinidad Tobago">Trinidad &amp; Tobago (+1868)</option>
        <option data-countryCode="TN" value="Tunisia">Tunisia (+216)</option>
        <option data-countryCode="TR" value="Turkey">Turkey (+90)</option>
        <option data-countryCode="TM" value="Turkmenistan">Turkmenistan (+7)</option>
        <option data-countryCode="TM" value="Turkmenistan">Turkmenistan (+993)</option>
        <option data-countryCode="TC" value="Turks  Caicos Islands">Turks &amp; Caicos Islands (+1649)</option>
        <option data-countryCode="TV" value="Tuvalu">Tuvalu (+688)</option>
        <option data-countryCode="UG" value="Uganda">Uganda (+256)</option>
        <option data-countryCode="GB" value="UK">UK (+44)</option>
        <option data-countryCode="UA" value="Ukraine">Ukraine (+380)</option>
        <option data-countryCode="AE" value="United Arab Emirates">United Arab Emirates (+971)</option>
        <option data-countryCode="UY" value="Uruguay">Uruguay (+598)</option>
        <option data-countryCode="US" value="USA">USA (+1)</option>
        <option data-countryCode="UZ" value="Uzbekistan">Uzbekistan (+7)</option>
        <option data-countryCode="VU" value="Vanuatu">Vanuatu (+678)</option>
        <option data-countryCode="VA" value="Vatican City">Vatican City (+379)</option>
        <option data-countryCode="VE" value="Venezuela">Venezuela (+58)</option>
        <option data-countryCode="VN" value="Vietnam">Vietnam (+84)</option>
        <option data-countryCode="VG" value="Virgin Islands - British">Virgin Islands - British (+1284)</option>
        <option data-countryCode="VI" value="Virgin Islands - US">Virgin Islands - US (+1340)</option>
        <option data-countryCode="WF" value="Wallis Futuna ">Wallis &amp; Futuna (+681)</option>
        <option data-countryCode="YE" value="Yemen (North)">Yemen (North)(+969)</option>
        <option data-countryCode="YE" value="Yemen (South)">Yemen (South)(+967)</option>
        <option data-countryCode="ZM" value="Zambia">Zambia (+260)</option>
        <option data-countryCode="ZW" value="Zimbabwe">Zimbabwe (+263)</option>
                                <!-- <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option> -->
                            </select>
                            @if($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="district" class="">District or State <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('district') ? ' is-invalid' : '' }}" value="{{ old('district') }}" name="district" id="district" autofocus >
                            @if($errors->has('district'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('district') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="upozila" class="">Upozila or Zone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control custom-form-control {{ $errors->has('upozila') ? ' is-invalid' : '' }}" value="{{ old('upozila') }}" name="upozila" id="upozila"autofocus >
                            @if($errors->has('upozila'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('upozila') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="2_lan" class="">Address ( Village or Street no  ) & Union or Zone <span class="text-danger">*</span></label>
                            <textarea name="address" id="" cols="10" rows="3" class="form-control custom-form-control {{ $errors->has('address') ? ' is-invalid' : '' }} " autofocus> {{ old('address') }}</textarea>
                            @if($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control custom-form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" autofocus>
                            @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control custom-form-control" id="password" name="password_confirmation">

                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success custom-btn">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@section('frontend-scripts')
<script>
  $(document).ready(function() {
    const genderOldValue = '{{ old('gender') }}';
    
    if(genderOldValue !== '') {
      $('#gender').val(genderOldValue);
    }
  });
</script>

    <script type="text/javascript">
        randomNum = Math.floor(100000 + Math.random() * 900000)
        window.onload = function () {
            document.getElementById("txt_usrid").value = randomNum;
        }
    </script>
@endsection
@endsection