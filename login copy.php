<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration form</title>
    <meta name="Description"
        content="Rentalproperty management software that brings landlords,property managers, tenants and contractors together.">
    <meta name="Keywords"
        content="rental property management software, property management software, mobile landlord, mobile property management,landlord app">
    <meta name="author" content="Rentalr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/96bedca6d6.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="login section">
        <div class="container">
            <div class="row">
                <div class="login-page">
                    <div class="form">
                        <form id="form" method="post" action="/Account/Save" class="needs-validation" novalidate>
                            <input name="__RequestVerificationToken" type="hidden"
                                value="CfDJ8LRzdM0B9G1PoeTiSm3oe9XKA88Zh5zngTf-NR69tVEWJw4o0CUN-bpXJrwQX0cfyWwN6D5V8SEfckCpv6XbO0R92ddvCCQsN7-dIW74XC5Tn5C3c497XbtaB7h_Aq1ly3f_-b4txqRmX07ilBmqTEs" />
                            <input name="spam" type="text" class="hide" />
                            <input id="country" name="country" type="hidden" />
                            <input id="country-code" name="countryCode" type="hidden" />
                            <input id="exchange-rate" name="exchangeRate" type="hidden" />
                            <input id="currency-code" name="currencyCode" type="hidden" />
                            <input id="currency-symbol" name="currencySymbol" type="hidden" />
                            <input name="affiliateCode" type="hidden" />

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="user_Role" name="user.Role" required="True">
                                        <option value="">Select Role...</option>
                                        <option selected="selected" value="1">Landlord</option>
                                        <option value="5">Property Manager</option>
                                        <option value="2">Tenant</option>
                                        <option value="4">Contractor</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a role.</div>
                                    <span class="form-text">If you're both a Property Manager and a Landlord, select
                                        Property Manager.</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="emailAddress" name="user.EmailAddress" type="email" required
                                        maxlength="100" class="form-control" placeholder="Your Email Address" />
                                    <div class="invalid-feedback">Please input a valid email address.</div>
                                    <span class="form-text">This will be your signin name.</span>
                                </div>

                                <div id="owner-email-address" class="form-group col-md-6" style="display: none;">
                                    <input name="ownerEmailAddress" type="email" required maxlength="100"
                                        class="form-control" placeholder="Landlord or Property Manager's Email" />
                                    <div class="invalid-feedback">Please input a valid email address.</div>
                                    <span class="form-text">Enter the email address of your landlord or property
                                        manager. We'll send them an
                                        invite to Housters.</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input id="password" name="user.Password" type="password" required maxlength="30"
                                        class="form-control" placeholder="Create a Password" />
                                    <div class="invalid-feedback">Please input a password.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="confirmPassword" type="password" maxlength="30" class="form-control"
                                        required placeholder="Confirm Password" />
                                    <div class="invalid-feedback">Please input a password.</div>
                                </div>
                            </div>

                            <div id="international-fields" class="row" style="display: none;">
                                <div class="form-group col-md-6">
                                    <label for="user_Preferences_DateFormat">Date Format</label>
                                    <select class="form-control" id="user_Preferences_DateFormat"
                                        name="user.Preferences.DateFormat" required="True">
                                        <option value="M/d/yyyy">M/d/yyyy</option>
                                        <option value="d/M/yyyy">d/M/yyyy</option>
                                        <option value="yyyy/M/d">yyyy/M/d</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a date format.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="user_Preferences_CurrencyFormat">Currency Format</label>
                                    <select class="form-control" id="user_Preferences_CurrencyFormat"
                                        name="user.Preferences.CurrencyFormat" required="True">
                                        <option value="$">$</option>
                                        <option value="&#xA3;">&#xA3;</option>
                                        <option value="&#x20AC;">&#x20AC;</option>
                                        <option value="&#x20B9;">&#x20B9;</option>
                                        <option value="&#xFDFC;">&#xFDFC;</option>
                                        <option value="#">#</option>
                                        <option value="&#x20B1;">&#x20B1;</option>
                                        <option value="&#x20A9;">&#x20A9;</option>
                                        <option value="&#x20AA;">&#x20AA;</option>
                                        <option value="&#x62F;&#x631;&#x647;&#x645;">&#x62F;&#x631;&#x647;&#x645;
                                        </option>
                                        <option value="&#x62F;&#x64A;&#x646;&#x627;&#x631;">
                                            &#x62F;&#x64A;&#x646;&#x627;&#x631;</option>
                                        <option value="CZK">CZK</option>
                                        <option value="kr">kr</option>
                                        <option value="KSh">KSh</option>
                                        <option value="MRO">MRO</option>
                                        <option value="R">R</option>
                                        <option value="R$">R$</option>
                                        <option value="RWF">RWF</option>
                                        <option value="Rs">Rs</option>
                                        <option value="S/">S/</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a currency format.</div>
                                </div>
                            </div>

                            <div id="promotion-code-container" class="row" style="display: none;">
                                <div class="form-group col-md-6">
                                    <button type="button" id="promotion-code-link" class="btn btn-secondary btn-sm">Add
                                        a promo code...</button>
                                    <input id="promotion-code" name="promotionCode" type="text" maxlength="30"
                                        style="display: none;" class="form-control" placeholder="A Promo Code" />
                                </div>
                            </div>

                            <div class="form-group center">
                                <button id="signup-button" type="submit" class="btn btn-primary btn-lg">Start your Free
                                    Trial <i class="far fa-arrow-alt-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>