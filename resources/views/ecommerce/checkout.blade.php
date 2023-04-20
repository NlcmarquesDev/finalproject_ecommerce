@include('partials._header')

<h1>you can pay here ......</h1>

<div class="container">
    <div class="post-content no-vc">
        <div class="woocommerce">
            <div class="woocommerce-notices-wrapper"></div>
            <div class="form-distr-free-bg">
                <div class="col-lg-7">
                    <div
                </div>
            </div>
            <div class="col right-bg">
                <div></div>
            </div>
        </div>


        <div class="checkout-options">
            <div class="row">
                <div class="col-lg-7">
                    <div class="before-checkout ready">

                        <div id="et-checkout-login-form" class="et-checkout-login">
                            <div class="et-checkout-login-title">
                                Returning customer? <a href="#" class="showlogin">Click here to login</a>
                            </div>
                            <div class="et-login-wrapper">
                                <form class="woocommerce-form woocommerce-form-login login" method="post"
                                      style="display:none;">


                                    <p>If you have shopped with us before, please enter your details below. If you are a
                                        new customer, please proceed to the Billing section.</p>

                                    <p class="form-row float-label">
                                        <label for="username" class="fl-label">Username or email&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="input-text" name="username" id="username"
                                               autocomplete="username">
                                    </p>
                                    <p class="form-row float-label">
                                        <label for="password" class="fl-label">Password&nbsp;<span
                                                class="required">*</span></label>
                                        <span class="password-input"><input class="input-text woocommerce-Input"
                                                                            type="password" name="password"
                                                                            id="password"
                                                                            autocomplete="current-password"><span
                                                class="show-password-input"></span></span>
                                    </p>
                                    <div class="clear"></div>


                                    <p class="form-row">
                                        <label
                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme inline">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                   name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                               value="c3a5014d9e"><input type="hidden" name="_wp_http_referer"
                                                                         value="/demo-fashion/checkout/"> <input
                                            type="hidden" name="redirect"
                                            value="https://goya.everthemes.com/demo-fashion/checkout/">
                                        <span class="lost_password">
				<a href="https://goya.everthemes.com/demo-fashion/my-account/lost-password/">Lost your password?</a>
			</span>
                                    </p>

                                    <p class="form-actions">
                                        <button type="submit"
                                                class="woocommerce-button button woocommerce-form-login__submit wp-element-button"
                                                name="login" value="Login">Login
                                        </button>
                                    </p>


                                </form>
                            </div>
                        </div>

                        <div class="et-checkout-coupon">
                            <div class="et-checkout-coupon-title">

                                <div class="woocommerce-info">
                                    Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                </div>
                            </div>
                            <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="inner_coupon form-row float-label">
                                    <label for="coupon_code" class="screen-reader-text fl-label">Coupon code</label>
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                                           id="coupon_code" value="">
                                    <button type="submit" class="button wp-element-button" name="apply_coupon"
                                            value="Apply coupon">Apply coupon
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>


        <form name="checkout" method="post" class="checkout woocommerce-checkout"
              action="https://goya.everthemes.com/demo-fashion/checkout/" enctype="multipart/form-data"
              novalidate="novalidate">

            <div class="row">

                <div class="col-lg-7 woocommerce-checkout-customer-fields">

                    <div id="checkout-spacer" class="no-empty" style="min-height: 115.969px;"></div>
                    <div class="et-woocommerce-NoticeGroup"></div>


                    <div class="col2-set et-inline-validation-notices" id="customer_details">
                        <div class="col-1">
                            <div class="back-to-cart"><a class="button outlined"
                                                         href="https://goya.everthemes.com/demo-fashion/cart/"
                                                         title="Back to Cart">Back to Cart </a></div>
                            <div class="woocommerce-billing-fields">

                                <h3>Billing details</h3>


                                <div class="woocommerce-billing-fields__field-wrapper">
                                    <p class="form-row form-row-first validate-required float-label"
                                       id="billing_first_name_field" data-priority="10"><label for="billing_first_name"
                                                                                               class="fl-label">First
                                            name&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_first_name"
                                                                                     id="billing_first_name"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="given-name"></span>
                                    </p>
                                    <p class="form-row form-row-last validate-required float-label"
                                       id="billing_last_name_field" data-priority="20"><label for="billing_last_name"
                                                                                              class="fl-label">Last name&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_last_name"
                                                                                     id="billing_last_name"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="family-name"></span>
                                    </p>
                                    <p class="form-row form-row-wide float-label" id="billing_company_field"
                                       data-priority="30"><label for="billing_company" class="fl-label">Company name&nbsp;<span
                                                class="optional">(optional)</span></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_company"
                                                                                     id="billing_company"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="organization"></span>
                                    </p>
                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required float-label has-val"
                                       id="billing_country_field" data-priority="40"><label for="billing_country"
                                                                                            class="fl-label">Country /
                                            Region&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><select name="billing_country"
                                                                                      id="billing_country"
                                                                                      class="country_to_state country_select select2-hidden-accessible"
                                                                                      autocomplete="country"
                                                                                      data-placeholder="Select a country / region…"
                                                                                      data-label="Country / Region"
                                                                                      tabindex="-1"
                                                                                      aria-hidden="true"><option
                                                    value="">Select a country / region…</option><option value="AF">Afghanistan</option><option
                                                    value="AX">Åland Islands</option><option
                                                    value="AL">Albania</option><option value="DZ">Algeria</option><option
                                                    value="AS">American Samoa</option><option
                                                    value="AD">Andorra</option><option value="AO">Angola</option><option
                                                    value="AI">Anguilla</option><option
                                                    value="AQ">Antarctica</option><option
                                                    value="AG">Antigua and Barbuda</option><option
                                                    value="AR">Argentina</option><option value="AM">Armenia</option><option
                                                    value="AW">Aruba</option><option value="AU">Australia</option><option
                                                    value="AT">Austria</option><option
                                                    value="AZ">Azerbaijan</option><option
                                                    value="BS">Bahamas</option><option value="BH">Bahrain</option><option
                                                    value="BD">Bangladesh</option><option
                                                    value="BB">Barbados</option><option value="BY">Belarus</option><option
                                                    value="PW">Belau</option><option value="BE">Belgium</option><option
                                                    value="BZ">Belize</option><option value="BJ">Benin</option><option
                                                    value="BM">Bermuda</option><option value="BT">Bhutan</option><option
                                                    value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option
                                                    value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option
                                                    value="BV">Bouvet Island</option><option
                                                    value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option
                                                    value="BN">Brunei</option><option value="BG">Bulgaria</option><option
                                                    value="BF">Burkina Faso</option><option
                                                    value="BI">Burundi</option><option value="KH">Cambodia</option><option
                                                    value="CM">Cameroon</option><option value="CA">Canada</option><option
                                                    value="CV">Cape Verde</option><option
                                                    value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option
                                                    value="TD">Chad</option><option value="CL">Chile</option><option
                                                    value="CN">China</option><option
                                                    value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option
                                                    value="CO">Colombia</option><option value="KM">Comoros</option><option
                                                    value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option
                                                    value="CK">Cook Islands</option><option
                                                    value="CR">Costa Rica</option><option
                                                    value="HR">Croatia</option><option value="CU">Cuba</option><option
                                                    value="CW">Curaçao</option><option value="CY">Cyprus</option><option
                                                    value="CZ">Czech Republic</option><option
                                                    value="DK">Denmark</option><option value="DJ">Djibouti</option><option
                                                    value="DM">Dominica</option><option
                                                    value="DO">Dominican Republic</option><option
                                                    value="EC">Ecuador</option><option value="EG">Egypt</option><option
                                                    value="SV">El Salvador</option><option
                                                    value="GQ">Equatorial Guinea</option><option
                                                    value="ER">Eritrea</option><option value="EE">Estonia</option><option
                                                    value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option
                                                    value="FK">Falkland Islands</option><option
                                                    value="FO">Faroe Islands</option><option
                                                    value="FJ">Fiji</option><option value="FI">Finland</option><option
                                                    value="FR">France</option><option
                                                    value="GF">French Guiana</option><option
                                                    value="PF">French Polynesia</option><option
                                                    value="TF">French Southern Territories</option><option
                                                    value="GA">Gabon</option><option value="GM">Gambia</option><option
                                                    value="GE">Georgia</option><option value="DE">Germany</option><option
                                                    value="GH">Ghana</option><option value="GI">Gibraltar</option><option
                                                    value="GR">Greece</option><option value="GL">Greenland</option><option
                                                    value="GD">Grenada</option><option
                                                    value="GP">Guadeloupe</option><option value="GU">Guam</option><option
                                                    value="GT">Guatemala</option><option
                                                    value="GG">Guernsey</option><option value="GN">Guinea</option><option
                                                    value="GW">Guinea-Bissau</option><option
                                                    value="GY">Guyana</option><option value="HT">Haiti</option><option
                                                    value="HM">Heard Island and McDonald Islands</option><option
                                                    value="HN">Honduras</option><option
                                                    value="HK">Hong Kong</option><option value="HU">Hungary</option><option
                                                    value="IS">Iceland</option><option value="IN">India</option><option
                                                    value="ID">Indonesia</option><option value="IR">Iran</option><option
                                                    value="IQ">Iraq</option><option value="IE">Ireland</option><option
                                                    value="IM">Isle of Man</option><option
                                                    value="IL">Israel</option><option value="IT">Italy</option><option
                                                    value="CI">Ivory Coast</option><option
                                                    value="JM">Jamaica</option><option value="JP">Japan</option><option
                                                    value="JE">Jersey</option><option value="JO">Jordan</option><option
                                                    value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option
                                                    value="KI">Kiribati</option><option value="KW">Kuwait</option><option
                                                    value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option
                                                    value="LV">Latvia</option><option value="LB">Lebanon</option><option
                                                    value="LS">Lesotho</option><option value="LR">Liberia</option><option
                                                    value="LY">Libya</option><option
                                                    value="LI">Liechtenstein</option><option
                                                    value="LT">Lithuania</option><option
                                                    value="LU">Luxembourg</option><option value="MO">Macao</option><option
                                                    value="MG">Madagascar</option><option value="MW">Malawi</option><option
                                                    value="MY">Malaysia</option><option value="MV">Maldives</option><option
                                                    value="ML">Mali</option><option value="MT">Malta</option><option
                                                    value="MH">Marshall Islands</option><option
                                                    value="MQ">Martinique</option><option
                                                    value="MR">Mauritania</option><option
                                                    value="MU">Mauritius</option><option value="YT">Mayotte</option><option
                                                    value="MX">Mexico</option><option value="FM">Micronesia</option><option
                                                    value="MD">Moldova</option><option value="MC">Monaco</option><option
                                                    value="MN">Mongolia</option><option
                                                    value="ME">Montenegro</option><option
                                                    value="MS">Montserrat</option><option
                                                    value="MA">Morocco</option><option
                                                    value="MZ">Mozambique</option><option
                                                    value="MM">Myanmar</option><option value="NA">Namibia</option><option
                                                    value="NR">Nauru</option><option value="NP">Nepal</option><option
                                                    value="NL">Netherlands</option><option
                                                    value="NC">New Caledonia</option><option
                                                    value="NZ">New Zealand</option><option
                                                    value="NI">Nicaragua</option><option value="NE">Niger</option><option
                                                    value="NG">Nigeria</option><option value="NU">Niue</option><option
                                                    value="NF">Norfolk Island</option><option
                                                    value="KP">North Korea</option><option
                                                    value="MK">North Macedonia</option><option
                                                    value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option
                                                    value="OM">Oman</option><option value="PK">Pakistan</option><option
                                                    value="PS">Palestinian Territory</option><option
                                                    value="PA">Panama</option><option
                                                    value="PG">Papua New Guinea</option><option
                                                    value="PY">Paraguay</option><option value="PE">Peru</option><option
                                                    value="PH">Philippines</option><option
                                                    value="PN">Pitcairn</option><option value="PL">Poland</option><option
                                                    value="PT">Portugal</option><option
                                                    value="PR">Puerto Rico</option><option value="QA">Qatar</option><option
                                                    value="RE">Reunion</option><option value="RO">Romania</option><option
                                                    value="RU">Russia</option><option value="RW">Rwanda</option><option
                                                    value="BL">Saint Barthélemy</option><option
                                                    value="SH">Saint Helena</option><option
                                                    value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option
                                                    value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option
                                                    value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option
                                                    value="WS">Samoa</option><option value="SM">San Marino</option><option
                                                    value="ST">São Tomé and Príncipe</option><option value="SA">Saudi Arabia</option><option
                                                    value="SN">Senegal</option><option value="RS">Serbia</option><option
                                                    value="SC">Seychelles</option><option
                                                    value="SL">Sierra Leone</option><option
                                                    value="SG">Singapore</option><option
                                                    value="SK">Slovakia</option><option value="SI">Slovenia</option><option
                                                    value="SB">Solomon Islands</option><option
                                                    value="SO">Somalia</option><option
                                                    value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option
                                                    value="KR">South Korea</option><option
                                                    value="SS">South Sudan</option><option value="ES">Spain</option><option
                                                    value="LK">Sri Lanka</option><option value="SD">Sudan</option><option
                                                    value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option
                                                    value="SE">Sweden</option><option
                                                    value="CH">Switzerland</option><option value="SY">Syria</option><option
                                                    value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option
                                                    value="TZ">Tanzania</option><option value="TH">Thailand</option><option
                                                    value="TL">Timor-Leste</option><option value="TG">Togo</option><option
                                                    value="TK">Tokelau</option><option value="TO">Tonga</option><option
                                                    value="TT">Trinidad and Tobago</option><option
                                                    value="TN">Tunisia</option><option
                                                    value="TR">Turkey</option><option
                                                    value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option
                                                    value="TV">Tuvalu</option><option value="UG">Uganda</option><option
                                                    value="UA">Ukraine</option><option
                                                    value="AE">United Arab Emirates</option><option
                                                    value="GB">United Kingdom (UK)</option><option value="US"
                                                                                                   selected="selected">United States (US)</option><option
                                                    value="UM">United States (US) Minor Outlying Islands</option><option
                                                    value="UY">Uruguay</option><option
                                                    value="UZ">Uzbekistan</option><option
                                                    value="VU">Vanuatu</option><option value="VA">Vatican</option><option
                                                    value="VE">Venezuela</option><option value="VN">Vietnam</option><option
                                                    value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option
                                                    value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option
                                                    value="YE">Yemen</option><option value="ZM">Zambia</option><option
                                                    value="ZW">Zimbabwe</option></select><span
                                                class="select2 select2-container select2-container--default"
                                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                        aria-label="Country / Region" role="combobox"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-billing_country-container" role="textbox"
                                                            aria-readonly="true" title="United States (US)">United States (US)</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span><noscript><button
                                                    type="submit" name="woocommerce_checkout_update_totals"
                                                    value="Update country / region">Update country / region</button></noscript></span>
                                    </p>
                                    <p class="form-row address-field validate-required form-row-wide float-label"
                                       id="billing_address_1_field" data-priority="50"><label for="billing_address_1"
                                                                                              class="fl-label">Street
                                            address&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_address_1"
                                                                                     id="billing_address_1"
                                                                                     placeholder="House number and street name"
                                                                                     value=""
                                                                                     autocomplete="address-line1"
                                                                                     data-placeholder="House number and street name"></span>
                                    </p>
                                    <p class="form-row address-field form-row-wide float-label"
                                       id="billing_address_2_field" data-priority="60"><label for="billing_address_2"
                                                                                              class="screen-reader-text fl-label">Apartment,
                                            suite, unit, etc.&nbsp;<span class="optional">(optional)</span></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_address_2"
                                                                                     id="billing_address_2"
                                                                                     placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                     value=""
                                                                                     autocomplete="address-line2"
                                                                                     data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                    </p>
                                    <p class="form-row address-field validate-required form-row-wide float-label"
                                       id="billing_city_field" data-priority="70"
                                       data-o_class="form-row form-row-wide address-field validate-required"><label
                                            for="billing_city" class="fl-label">Town / City&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_city"
                                                                                     id="billing_city"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="address-level2"></span>
                                    </p>
                                    <p class="form-row address-field validate-required validate-state form-row-wide float-label has-val"
                                       id="billing_state_field" data-priority="80"
                                       data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                        <label for="billing_state" class="fl-label">State&nbsp;<abbr class="required"
                                                                                                     title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><select name="billing_state"
                                                                                      id="billing_state"
                                                                                      class="state_select select2-hidden-accessible"
                                                                                      autocomplete="address-level1"
                                                                                      data-placeholder="Select an option…"
                                                                                      data-input-classes=""
                                                                                      data-label="State"
                                                                                      tabindex="-1"
                                                                                      aria-hidden="true"><option
                                                    value="">Select an option…</option><option
                                                    value="AL">Alabama</option><option value="AK">Alaska</option><option
                                                    value="AZ">Arizona</option><option value="AR">Arkansas</option><option
                                                    value="CA">California</option><option
                                                    value="CO">Colorado</option><option
                                                    value="CT">Connecticut</option><option
                                                    value="DE">Delaware</option><option
                                                    value="DC">District Of Columbia</option><option
                                                    value="FL">Florida</option><option value="GA">Georgia</option><option
                                                    value="HI">Hawaii</option><option value="ID">Idaho</option><option
                                                    value="IL">Illinois</option><option value="IN">Indiana</option><option
                                                    value="IA">Iowa</option><option value="KS">Kansas</option><option
                                                    value="KY">Kentucky</option><option
                                                    value="LA">Louisiana</option><option value="ME">Maine</option><option
                                                    value="MD">Maryland</option><option
                                                    value="MA">Massachusetts</option><option
                                                    value="MI">Michigan</option><option
                                                    value="MN">Minnesota</option><option
                                                    value="MS">Mississippi</option><option
                                                    value="MO">Missouri</option><option value="MT">Montana</option><option
                                                    value="NE">Nebraska</option><option value="NV">Nevada</option><option
                                                    value="NH">New Hampshire</option><option
                                                    value="NJ">New Jersey</option><option
                                                    value="NM">New Mexico</option><option
                                                    value="NY">New York</option><option
                                                    value="NC">North Carolina</option><option
                                                    value="ND">North Dakota</option><option
                                                    value="OH">Ohio</option><option value="OK">Oklahoma</option><option
                                                    value="OR">Oregon</option><option
                                                    value="PA">Pennsylvania</option><option
                                                    value="RI">Rhode Island</option><option
                                                    value="SC">South Carolina</option><option
                                                    value="SD">South Dakota</option><option
                                                    value="TN">Tennessee</option><option value="TX">Texas</option><option
                                                    value="UT">Utah</option><option value="VT">Vermont</option><option
                                                    value="VA">Virginia</option><option
                                                    value="WA">Washington</option><option
                                                    value="WV">West Virginia</option><option
                                                    value="WI">Wisconsin</option><option value="WY">Wyoming</option><option
                                                    value="AA">Armed Forces (AA)</option><option value="AE">Armed Forces (AE)</option><option
                                                    value="AP">Armed Forces (AP)</option></select><span
                                                class="select2 select2-container select2-container--default"
                                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                        aria-label="State" role="combobox"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-billing_state-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="California">California</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper"
                                                    aria-hidden="true"></span></span></span></p>
                                    <p class="form-row address-field validate-required validate-postcode form-row-wide float-label"
                                       id="billing_postcode_field" data-priority="90"
                                       data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                        <label for="billing_postcode" class="fl-label">ZIP Code&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="billing_postcode"
                                                                                     id="billing_postcode"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="postal-code"></span>
                                    </p>
                                    <p class="form-row form-row-wide validate-required validate-phone float-label"
                                       id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                                                           class="fl-label">Phone&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="tel" class="input-text "
                                                                                     name="billing_phone"
                                                                                     id="billing_phone"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="tel"></span></p>
                                    <p class="form-row form-row-wide validate-required validate-email float-label"
                                       id="billing_email_field" data-priority="110"><label for="billing_email"
                                                                                           class="fl-label">Email
                                            address&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="email"
                                                                                     class="input-text "
                                                                                     name="billing_email"
                                                                                     id="billing_email"
                                                                                     placeholder="" value=""
                                                                                     autocomplete="email username"></span>
                                    </p></div>

                            </div>

                            <div class="woocommerce-account-fields">

                                <p class="form-row form-row-wide create-account woocommerce-validated">
                                    <label
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input
                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                            id="createaccount" type="checkbox" name="createaccount" value="1"> <span>Create an account?</span>
                                    </label>
                                </p>


                            </div>
                        </div>

                        <div class="col-2">
                            <div class="woocommerce-shipping-fields">

                                <h3 id="ship-to-different-address">
                                    <label
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input id="ship-to-different-address-checkbox"
                                               class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                               type="checkbox" name="ship_to_different_address" value="1"> <span>Ship to a different address?</span>
                                    </label>
                                </h3>

                                <div class="shipping_address" style="display: none;">


                                    <div class="woocommerce-shipping-fields__field-wrapper">
                                        <p class="form-row form-row-first validate-required float-label"
                                           id="shipping_first_name_field" data-priority="10"><label
                                                for="shipping_first_name" class="fl-label">First name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_first_name"
                                                                                         id="shipping_first_name"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="given-name"></span>
                                        </p>
                                        <p class="form-row form-row-last validate-required float-label"
                                           id="shipping_last_name_field" data-priority="20"><label
                                                for="shipping_last_name" class="fl-label">Last name&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_last_name"
                                                                                         id="shipping_last_name"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="family-name"></span>
                                        </p>
                                        <p class="form-row form-row-wide float-label" id="shipping_company_field"
                                           data-priority="30"><label for="shipping_company" class="fl-label">Company
                                                name&nbsp;<span class="optional">(optional)</span></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_company"
                                                                                         id="shipping_company"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="organization"></span>
                                        </p>
                                        <p class="form-row form-row-wide address-field update_totals_on_change validate-required float-label has-val"
                                           id="shipping_country_field" data-priority="40"><label for="shipping_country"
                                                                                                 class="fl-label">Country
                                                / Region&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><select name="shipping_country"
                                                                                          id="shipping_country"
                                                                                          class="country_to_state country_select select2-hidden-accessible"
                                                                                          autocomplete="country"
                                                                                          data-placeholder="Select a country / region…"
                                                                                          data-label="Country / Region"
                                                                                          tabindex="-1"
                                                                                          aria-hidden="true"><option
                                                        value="">Select a country / region…</option><option
                                                        value="AF">Afghanistan</option><option
                                                        value="AX">Åland Islands</option><option
                                                        value="AL">Albania</option><option
                                                        value="DZ">Algeria</option><option
                                                        value="AS">American Samoa</option><option
                                                        value="AD">Andorra</option><option
                                                        value="AO">Angola</option><option
                                                        value="AI">Anguilla</option><option
                                                        value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option
                                                        value="AR">Argentina</option><option
                                                        value="AM">Armenia</option><option value="AW">Aruba</option><option
                                                        value="AU">Australia</option><option
                                                        value="AT">Austria</option><option
                                                        value="AZ">Azerbaijan</option><option
                                                        value="BS">Bahamas</option><option
                                                        value="BH">Bahrain</option><option
                                                        value="BD">Bangladesh</option><option
                                                        value="BB">Barbados</option><option
                                                        value="BY">Belarus</option><option value="PW">Belau</option><option
                                                        value="BE">Belgium</option><option
                                                        value="BZ">Belize</option><option value="BJ">Benin</option><option
                                                        value="BM">Bermuda</option><option
                                                        value="BT">Bhutan</option><option
                                                        value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option
                                                        value="BA">Bosnia and Herzegovina</option><option
                                                        value="BW">Botswana</option><option
                                                        value="BV">Bouvet Island</option><option
                                                        value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option
                                                        value="BN">Brunei</option><option
                                                        value="BG">Bulgaria</option><option
                                                        value="BF">Burkina Faso</option><option
                                                        value="BI">Burundi</option><option
                                                        value="KH">Cambodia</option><option
                                                        value="CM">Cameroon</option><option
                                                        value="CA">Canada</option><option
                                                        value="CV">Cape Verde</option><option
                                                        value="KY">Cayman Islands</option><option
                                                        value="CF">Central African Republic</option><option
                                                        value="TD">Chad</option><option value="CL">Chile</option><option
                                                        value="CN">China</option><option
                                                        value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option
                                                        value="CO">Colombia</option><option
                                                        value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option
                                                        value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option
                                                        value="CR">Costa Rica</option><option
                                                        value="HR">Croatia</option><option value="CU">Cuba</option><option
                                                        value="CW">Curaçao</option><option
                                                        value="CY">Cyprus</option><option
                                                        value="CZ">Czech Republic</option><option
                                                        value="DK">Denmark</option><option
                                                        value="DJ">Djibouti</option><option
                                                        value="DM">Dominica</option><option value="DO">Dominican Republic</option><option
                                                        value="EC">Ecuador</option><option value="EG">Egypt</option><option
                                                        value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option
                                                        value="ER">Eritrea</option><option
                                                        value="EE">Estonia</option><option
                                                        value="SZ">Eswatini</option><option
                                                        value="ET">Ethiopia</option><option
                                                        value="FK">Falkland Islands</option><option
                                                        value="FO">Faroe Islands</option><option
                                                        value="FJ">Fiji</option><option value="FI">Finland</option><option
                                                        value="FR">France</option><option
                                                        value="GF">French Guiana</option><option value="PF">French Polynesia</option><option
                                                        value="TF">French Southern Territories</option><option
                                                        value="GA">Gabon</option><option value="GM">Gambia</option><option
                                                        value="GE">Georgia</option><option
                                                        value="DE">Germany</option><option value="GH">Ghana</option><option
                                                        value="GI">Gibraltar</option><option
                                                        value="GR">Greece</option><option
                                                        value="GL">Greenland</option><option
                                                        value="GD">Grenada</option><option
                                                        value="GP">Guadeloupe</option><option
                                                        value="GU">Guam</option><option
                                                        value="GT">Guatemala</option><option
                                                        value="GG">Guernsey</option><option
                                                        value="GN">Guinea</option><option
                                                        value="GW">Guinea-Bissau</option><option
                                                        value="GY">Guyana</option><option value="HT">Haiti</option><option
                                                        value="HM">Heard Island and McDonald Islands</option><option
                                                        value="HN">Honduras</option><option
                                                        value="HK">Hong Kong</option><option
                                                        value="HU">Hungary</option><option
                                                        value="IS">Iceland</option><option value="IN">India</option><option
                                                        value="ID">Indonesia</option><option
                                                        value="IR">Iran</option><option value="IQ">Iraq</option><option
                                                        value="IE">Ireland</option><option
                                                        value="IM">Isle of Man</option><option
                                                        value="IL">Israel</option><option value="IT">Italy</option><option
                                                        value="CI">Ivory Coast</option><option
                                                        value="JM">Jamaica</option><option value="JP">Japan</option><option
                                                        value="JE">Jersey</option><option value="JO">Jordan</option><option
                                                        value="KZ">Kazakhstan</option><option
                                                        value="KE">Kenya</option><option
                                                        value="KI">Kiribati</option><option
                                                        value="KW">Kuwait</option><option
                                                        value="KG">Kyrgyzstan</option><option
                                                        value="LA">Laos</option><option value="LV">Latvia</option><option
                                                        value="LB">Lebanon</option><option
                                                        value="LS">Lesotho</option><option
                                                        value="LR">Liberia</option><option value="LY">Libya</option><option
                                                        value="LI">Liechtenstein</option><option
                                                        value="LT">Lithuania</option><option
                                                        value="LU">Luxembourg</option><option
                                                        value="MO">Macao</option><option
                                                        value="MG">Madagascar</option><option
                                                        value="MW">Malawi</option><option
                                                        value="MY">Malaysia</option><option
                                                        value="MV">Maldives</option><option value="ML">Mali</option><option
                                                        value="MT">Malta</option><option
                                                        value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option
                                                        value="MR">Mauritania</option><option
                                                        value="MU">Mauritius</option><option
                                                        value="YT">Mayotte</option><option
                                                        value="MX">Mexico</option><option
                                                        value="FM">Micronesia</option><option
                                                        value="MD">Moldova</option><option
                                                        value="MC">Monaco</option><option
                                                        value="MN">Mongolia</option><option
                                                        value="ME">Montenegro</option><option
                                                        value="MS">Montserrat</option><option
                                                        value="MA">Morocco</option><option
                                                        value="MZ">Mozambique</option><option
                                                        value="MM">Myanmar</option><option
                                                        value="NA">Namibia</option><option value="NR">Nauru</option><option
                                                        value="NP">Nepal</option><option
                                                        value="NL">Netherlands</option><option
                                                        value="NC">New Caledonia</option><option
                                                        value="NZ">New Zealand</option><option
                                                        value="NI">Nicaragua</option><option
                                                        value="NE">Niger</option><option value="NG">Nigeria</option><option
                                                        value="NU">Niue</option><option
                                                        value="NF">Norfolk Island</option><option
                                                        value="KP">North Korea</option><option
                                                        value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option
                                                        value="NO">Norway</option><option value="OM">Oman</option><option
                                                        value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option
                                                        value="PA">Panama</option><option
                                                        value="PG">Papua New Guinea</option><option
                                                        value="PY">Paraguay</option><option value="PE">Peru</option><option
                                                        value="PH">Philippines</option><option
                                                        value="PN">Pitcairn</option><option
                                                        value="PL">Poland</option><option
                                                        value="PT">Portugal</option><option
                                                        value="PR">Puerto Rico</option><option
                                                        value="QA">Qatar</option><option value="RE">Reunion</option><option
                                                        value="RO">Romania</option><option
                                                        value="RU">Russia</option><option value="RW">Rwanda</option><option
                                                        value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option
                                                        value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option
                                                        value="SX">Saint Martin (Dutch part)</option><option
                                                        value="MF">Saint Martin (French part)</option><option
                                                        value="PM">Saint Pierre and Miquelon</option><option
                                                        value="VC">Saint Vincent and the Grenadines</option><option
                                                        value="WS">Samoa</option><option
                                                        value="SM">San Marino</option><option value="ST">São Tomé and Príncipe</option><option
                                                        value="SA">Saudi Arabia</option><option
                                                        value="SN">Senegal</option><option
                                                        value="RS">Serbia</option><option
                                                        value="SC">Seychelles</option><option
                                                        value="SL">Sierra Leone</option><option
                                                        value="SG">Singapore</option><option
                                                        value="SK">Slovakia</option><option
                                                        value="SI">Slovenia</option><option
                                                        value="SB">Solomon Islands</option><option
                                                        value="SO">Somalia</option><option
                                                        value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option
                                                        value="KR">South Korea</option><option
                                                        value="SS">South Sudan</option><option
                                                        value="ES">Spain</option><option
                                                        value="LK">Sri Lanka</option><option
                                                        value="SD">Sudan</option><option
                                                        value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option
                                                        value="SE">Sweden</option><option
                                                        value="CH">Switzerland</option><option
                                                        value="SY">Syria</option><option value="TW">Taiwan</option><option
                                                        value="TJ">Tajikistan</option><option
                                                        value="TZ">Tanzania</option><option
                                                        value="TH">Thailand</option><option
                                                        value="TL">Timor-Leste</option><option
                                                        value="TG">Togo</option><option value="TK">Tokelau</option><option
                                                        value="TO">Tonga</option><option
                                                        value="TT">Trinidad and Tobago</option><option
                                                        value="TN">Tunisia</option><option
                                                        value="TR">Turkey</option><option
                                                        value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option
                                                        value="TV">Tuvalu</option><option value="UG">Uganda</option><option
                                                        value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option
                                                        value="GB">United Kingdom (UK)</option><option value="US"
                                                                                                       selected="selected">United States (US)</option><option
                                                        value="UM">United States (US) Minor Outlying Islands</option><option
                                                        value="UY">Uruguay</option><option
                                                        value="UZ">Uzbekistan</option><option
                                                        value="VU">Vanuatu</option><option
                                                        value="VA">Vatican</option><option
                                                        value="VE">Venezuela</option><option
                                                        value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option
                                                        value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option
                                                        value="EH">Western Sahara</option><option
                                                        value="YE">Yemen</option><option value="ZM">Zambia</option><option
                                                        value="ZW">Zimbabwe</option></select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                            aria-label="Country / Region" role="combobox"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-shipping_country-container"
                                                                role="textbox" aria-readonly="true"
                                                                title="United States (US)">United States (US)</span><span
                                                                class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><noscript><button
                                                        type="submit" name="woocommerce_checkout_update_totals"
                                                        value="Update country / region">Update country / region</button></noscript></span>
                                        </p>
                                        <p class="form-row address-field validate-required form-row-wide float-label"
                                           id="shipping_address_1_field" data-priority="50"><label
                                                for="shipping_address_1" class="fl-label">Street address&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_address_1"
                                                                                         id="shipping_address_1"
                                                                                         placeholder="House number and street name"
                                                                                         value=""
                                                                                         autocomplete="address-line1"
                                                                                         data-placeholder="House number and street name"></span>
                                        </p>
                                        <p class="form-row address-field form-row-wide float-label"
                                           id="shipping_address_2_field" data-priority="60"><label
                                                for="shipping_address_2" class="screen-reader-text fl-label">Apartment,
                                                suite, unit, etc.&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_address_2"
                                                                                         id="shipping_address_2"
                                                                                         placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                         value=""
                                                                                         autocomplete="address-line2"
                                                                                         data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                        </p>
                                        <p class="form-row address-field validate-required form-row-wide float-label"
                                           id="shipping_city_field" data-priority="70"
                                           data-o_class="form-row form-row-wide address-field validate-required"><label
                                                for="shipping_city" class="fl-label">Town / City&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_city"
                                                                                         id="shipping_city"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="address-level2"></span>
                                        </p>
                                        <p class="form-row address-field validate-required validate-state form-row-wide float-label has-val"
                                           id="shipping_state_field" data-priority="80"
                                           data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                            <label for="shipping_state" class="fl-label">State&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><select name="shipping_state"
                                                                                          id="shipping_state"
                                                                                          class="state_select select2-hidden-accessible"
                                                                                          autocomplete="address-level1"
                                                                                          data-placeholder="Select an option…"
                                                                                          data-input-classes=""
                                                                                          data-label="State"
                                                                                          tabindex="-1"
                                                                                          aria-hidden="true"><option
                                                        value="">Select an option…</option><option
                                                        value="AL">Alabama</option><option
                                                        value="AK">Alaska</option><option
                                                        value="AZ">Arizona</option><option
                                                        value="AR">Arkansas</option><option
                                                        value="CA">California</option><option
                                                        value="CO">Colorado</option><option
                                                        value="CT">Connecticut</option><option
                                                        value="DE">Delaware</option><option value="DC">District Of Columbia</option><option
                                                        value="FL">Florida</option><option
                                                        value="GA">Georgia</option><option
                                                        value="HI">Hawaii</option><option value="ID">Idaho</option><option
                                                        value="IL">Illinois</option><option
                                                        value="IN">Indiana</option><option value="IA">Iowa</option><option
                                                        value="KS">Kansas</option><option
                                                        value="KY">Kentucky</option><option
                                                        value="LA">Louisiana</option><option
                                                        value="ME">Maine</option><option
                                                        value="MD">Maryland</option><option
                                                        value="MA">Massachusetts</option><option
                                                        value="MI">Michigan</option><option
                                                        value="MN">Minnesota</option><option
                                                        value="MS">Mississippi</option><option
                                                        value="MO">Missouri</option><option
                                                        value="MT">Montana</option><option
                                                        value="NE">Nebraska</option><option
                                                        value="NV">Nevada</option><option
                                                        value="NH">New Hampshire</option><option
                                                        value="NJ">New Jersey</option><option
                                                        value="NM">New Mexico</option><option
                                                        value="NY">New York</option><option
                                                        value="NC">North Carolina</option><option
                                                        value="ND">North Dakota</option><option
                                                        value="OH">Ohio</option><option value="OK">Oklahoma</option><option
                                                        value="OR">Oregon</option><option
                                                        value="PA">Pennsylvania</option><option
                                                        value="RI">Rhode Island</option><option
                                                        value="SC">South Carolina</option><option value="SD">South Dakota</option><option
                                                        value="TN">Tennessee</option><option
                                                        value="TX">Texas</option><option value="UT">Utah</option><option
                                                        value="VT">Vermont</option><option
                                                        value="VA">Virginia</option><option
                                                        value="WA">Washington</option><option
                                                        value="WV">West Virginia</option><option
                                                        value="WI">Wisconsin</option><option
                                                        value="WY">Wyoming</option><option
                                                        value="AA">Armed Forces (AA)</option><option
                                                        value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option></select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                            aria-label="State" role="combobox"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-shipping_state-container" role="textbox"
                                                                aria-readonly="true"
                                                                title="California">California</span><span
                                                                class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span></span></p>
                                        <p class="form-row address-field validate-required validate-postcode form-row-wide float-label"
                                           id="shipping_postcode_field" data-priority="90"
                                           data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                            <label for="shipping_postcode" class="fl-label">ZIP Code&nbsp;<abbr
                                                    class="required" title="required">*</abbr></label><span
                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_postcode"
                                                                                         id="shipping_postcode"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="postal-code"></span>
                                        </p></div>


                                </div>

                            </div>
                            <div class="woocommerce-additional-fields">


                                <div class="woocommerce-additional-fields__field-wrapper">
                                    <p class="form-row notes float-label" id="order_comments_field" data-priority="">
                                        <label for="order_comments" class="fl-label">Order notes&nbsp;<span
                                                class="optional">(optional)</span></label><span
                                            class="woocommerce-input-wrapper"><textarea name="order_comments"
                                                                                        class="input-text "
                                                                                        id="order_comments"
                                                                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                        rows="2"
                                                                                        cols="5"></textarea></span>
                                    </p></div>


                            </div>
                        </div>
                    </div>


                </div>

                <div class="woocommerce-checkout-review-order-container col-lg-5">


                    <div id="order_review" class="woocommerce-checkout-review-order is_stuck"
                         style="position: fixed; top: -273.594px; width: 445px;">


                        <h3 class="order_review_heading">Your order</h3>

                        <table class="shop_table woocommerce-checkout-review-order-table">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart_item">
                                <td class="product-name">
                                    <div class="et-product-thumbnail">
                                        <img width="450" height="450"
                                             src="https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-450x450.jpg"
                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail et-lazyload ls-is-cached lazyloaded"
                                             alt="" decoding="async" loading="lazy"
                                             data-src="https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-450x450.jpg"
                                             data-sizes="(max-width: 450px) 100vw, 450px"
                                             data-srcset="https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-450x450.jpg 450w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-100x100.jpg 100w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-1000x1000.jpg 1000w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-300x300.jpg 300w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-1024x1024.jpg 1024w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-150x150.jpg 150w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-768x768.jpg 768w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1.jpg 1400w"
                                             sizes="(max-width: 450px) 100vw, 450px"
                                             srcset="https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-450x450.jpg 450w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-100x100.jpg 100w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-1000x1000.jpg 1000w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-300x300.jpg 300w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-1024x1024.jpg 1024w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-150x150.jpg 150w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1-768x768.jpg 768w, https://goya.everthemes.com/demo-fashion/wp-content/uploads/sites/3/2019/05/woman-abstract-a1.jpg 1400w">
                                    </div>
                                    <div class="et-product-desc">
                                        Abstract Print Cotton Blouse&nbsp; <strong
                                            class="product-quantity">×&nbsp;1</strong></div>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>39.00</bdi></span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>

                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>39.00</bdi></span>
                                </td>
                            </tr>


                            <tr class="woocommerce-shipping-totals shipping">
                                <th>Shipping</th>
                                <td colspan="2" data-title="Shipping">
                                    <p class="et-shipping-th-title">Shipping</p>
                                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                                        <li>
                                            <input type="hidden" name="shipping_method[0]" data-index="0"
                                                   id="shipping_method_0_flat_rate4" value="flat_rate:4"
                                                   class="shipping_method"><label for="shipping_method_0_flat_rate4">Flat
                                                Rate: <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>10.00</bdi></span></label>
                                        </li>
                                    </ul>


                                </td>
                            </tr>


                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></strong>
                                </td>
                            </tr>


                            </tfoot>
                        </table>

                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio"
                                           name="payment_method" value="cod" checked="checked"
                                           data-order_button_text="">

                                    <label for="payment_method_cod">
                                        Cash on delivery </label>
                                    <div class="payment_box payment_method_cod">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </li>
                                <li class="wc_payment_method payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" class="input-radio"
                                           name="payment_method" value="paypal"
                                           data-order_button_text="Proceed to PayPal">

                                    <label for="payment_method_paypal">
                                        PayPal <img
                                            src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                            alt="PayPal acceptance mark"><a
                                            href="https://www.paypal.com/us/webapps/mpp/paypal-popup"
                                            class="about_paypal"
                                            onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What
                                            is PayPal?</a> </label>
                                    <div class="payment_box payment_method_paypal" style="display:none;">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                            account. SANDBOX ENABLED. You can use sandbox testing accounts only. See the
                                            <a href="https://developer.paypal.com/docs/classic/lifecycle/ug_sandbox/">PayPal
                                                Sandbox Testing Guide</a> for more details.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <noscript>
                                    Since your browser does not support JavaScript, or it is disabled, please ensure you
                                    click the <em>Update Totals</em> button before placing your order. You may be
                                    charged more than the amount stated above if you fail to do so. <br/>
                                    <button type="submit" class="button alt wp-element-button"
                                            name="woocommerce_checkout_update_totals" value="Update totals">Update
                                        totals
                                    </button>
                                </noscript>

                                <div class="woocommerce-terms-and-conditions-wrapper">
                                    <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to
                                            process your order, support your experience throughout this website, and for
                                            other purposes described in our <a
                                                href="https://goya.everthemes.com/demo-fashion/privacy-policy/"
                                                class="woocommerce-privacy-policy-link" target="_blank">privacy
                                                policy</a>.</p>
                                    </div>
                                    <div class="woocommerce-terms-and-conditions"
                                         style="display: none; max-height: 200px; overflow: auto;"><h1
                                            class="page-header">Terms &amp; Conditions</h1>
                                        <div class="entry-content"><h3>Introduction</h3>
                                            <p>These Website Standard Terms and Conditions written on this webpage shall
                                                manage your use of our website,&nbsp;Webiste Name&nbsp;accessible at&nbsp;Website.com.</p>
                                            <p>These Terms will be applied fully and affect to your use of this Website.
                                                By using this Website, you agreed to accept all terms and conditions
                                                written in here. You must not use this Website if you disagree with any
                                                of these Website Standard Terms and Conditions.</p>
                                            <p>Minors or people below 18 years old are not allowed to use this
                                                Website.</p>
                                            <h3>Intellectual Property Rights</h3>
                                            <p>Other than the content you own, under these Terms,&nbsp;Goya WordPress
                                                Theme&nbsp;and/or its licensors own all the intellectual property rights
                                                and materials contained in this Website.</p>
                                            <p>You are granted limited license only for purposes of viewing the material
                                                contained on this Website.</p>
                                            <h3>Restrictions</h3>
                                            <p>You are specifically restricted from all of the following:</p>
                                            <ul>
                                                <li>publishing any Website material in any other media;</li>
                                                <li>selling, sublicensing and/or otherwise commercializing any Website
                                                    material;
                                                </li>
                                                <li>publicly performing and/or showing any Website material;</li>
                                                <li>using this Website in any way that is or may be damaging to this
                                                    Website;
                                                </li>
                                                <li>using this Website in any way that impacts user access to this
                                                    Website;
                                                </li>
                                                <li>using this Website contrary to applicable laws and regulations, or
                                                    in any way may cause harm to the Website, or to any person or
                                                    business entity;
                                                </li>
                                                <li>engaging in any data mining, data harvesting, data extracting or any
                                                    other similar activity in relation to this Website;
                                                </li>
                                                <li>using this Website to engage in any advertising or marketing.</li>
                                            </ul>
                                            <p>Certain areas of this Website are restricted from being access by you and&nbsp;Goya
                                                WordPress Theme&nbsp;may further restrict access by you to any areas of
                                                this Website, at any time, in absolute discretion. Any user ID and
                                                password you may have for this Website are confidential and you must
                                                maintain confidentiality as well.</p>
                                            <h3>Your Content</h3>
                                            <p>In these Website Standard Terms and Conditions, “Your Content” shall mean
                                                any audio, video text, images or other material you choose to display on
                                                this Website. By displaying Your Content, you grant&nbsp;Goya WordPress
                                                Theme&nbsp;a non-exclusive, worldwide irrevocable, sub licensable
                                                license to use, reproduce, adapt, publish, translate and distribute it
                                                in any and all media.</p>
                                            <p>Your Content must be your own and must not be invading any third-party’s
                                                rights.&nbsp;Goya WordPress Theme&nbsp;reserves the right to remove any
                                                of Your Content from this Website at any time without notice.</p>
                                            <h3>No warranties</h3>
                                            <p>This Website is provided “as is,” with all faults, and&nbsp;Goya
                                                WordPress Theme&nbsp;express no representations or warranties, of any
                                                kind related to this Website or the materials contained on this Website.
                                                Also, nothing contained on this Website shall be interpreted as advising
                                                you.</p>
                                            <h3>Limitation of liability</h3>
                                            <p>In no event shall&nbsp;Goya WordPress Theme, nor any of its officers,
                                                directors and employees, shall be held liable for anything arising out
                                                of or in any way connected with your use of this Website whether such
                                                liability is under contract. &nbsp;Goya WordPress Theme, including its
                                                officers, directors and employees shall not be held liable for any
                                                indirect, consequential or special liability arising out of or in any
                                                way related to your use of this Website.</p>
                                            <h3>IndemnificationYou hereby indemnify to the fullest extent&nbsp;Goya
                                                WordPress Theme&nbsp;from and against any and/or all liabilities, costs,
                                                demands, causes of action, damages and expenses arising in any way
                                                related to your breach of any of the provisions of these Terms.</h3>
                                            <h3>Severability</h3>
                                            <p>If any provision of these Terms is found to be invalid under any
                                                applicable law, such provisions shall be deleted without affecting the
                                                remaining provisions herein.</p>
                                            <h3>Variation of Terms</h3>
                                            <p>Goya WordPress Theme&nbsp;is permitted to revise these Terms at any time
                                                as it sees fit, and by using this Website you are expected to review
                                                these Terms on a regular basis.</p>
                                            <h3>Assignment</h3>
                                            <p>The&nbsp;Goya WordPress Theme&nbsp;is allowed to assign, transfer, and
                                                subcontract its rights and/or obligations under these Terms without any
                                                notification. However, you are not allowed to assign, transfer, or
                                                subcontract any of your rights and/or obligations under these Terms.</p>
                                            <h3>Entire Agreement</h3>
                                            <p>These Terms constitute the entire agreement between&nbsp;Goya WordPress
                                                Theme&nbsp;and you in relation to your use of this Website, and
                                                supersede all prior agreements and understandings.</p>
                                            <h3>Governing Law &amp; Jurisdiction</h3>
                                            <p>These Terms will be governed by and interpreted in accordance with the
                                                laws of the State of&nbsp;Country, and you submit to the non-exclusive
                                                jurisdiction of the state and federal courts located in&nbsp;Country&nbsp;for
                                                the resolution of any disputes.</p>
                                        </div>
                                    </div>
                                    <p class="form-row validate-required">
                                        <label
                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                            <input type="checkbox"
                                                   class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                   name="terms" id="terms">
                                            <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website <a
                                                    href="https://goya.everthemes.com/demo-fashion/terms-conditions/"
                                                    class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<abbr
                                                class="required" title="required">*</abbr>
                                        </label>
                                        <input type="hidden" name="terms-field" value="1">
                                    </p>
                                </div>


                                <button type="submit" class="button alt wp-element-button"
                                        name="woocommerce_checkout_place_order" id="place_order" value="Place order"
                                        data-value="Place order">Place order
                                </button>
                                <div id="woo_pp_ec_button_checkout" style="display: none;"></div>

                                <input type="hidden" id="woocommerce-process-checkout-nonce"
                                       name="woocommerce-process-checkout-nonce" value="d648f38759"><input type="hidden"
                                                                                                           name="_wp_http_referer"
                                                                                                           value="/demo-fashion/?wc-ajax=update_order_review">
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </form>

    </div>
</div>
</div>

@include('partials._footer')
