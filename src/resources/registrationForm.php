<?php
$firstName = $lastName = $companyName = $cityName = $State = $Zip = $Address1 = $Address2 = $phoneNumber = $faxNumber = $email = $donationAmount = $otherAmount = $recurringAmount = $donationTo = $donarName = $acknoledgeTo = $acknoledgeAddress = $acknoledgeCity = $acknoledgeState = $acknoledgeZip = $additionalName = $ckbanonymus = $giftProgram = $notNeeded = $addtionalAddress = $termsAndConditions = "";

$firstNameError = $lastNameError = $companyNameError = $cityNameError = $StateError = $ZipError = $Address1Error = $Address2Error = $phoneNumberError = $faxNumberError = $emailError = $donationAmountError = $otherAmountError = $recurringAmountError = $donationToError = $donarNameError = $acknoledgeToError = $acknoledgeAddressError = $acknoledgeCityError = $acknoledgeStateError = $acknoledgeZipError = $additionalNameError = $ckbanonymusError = $giftProgramError = $notNeededError = $addtionalAddressError = $termsAndConditionsError = "";


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <div class="container">
        <h1 class="text-info">Registration Form</h1>
        <div class="container">
            <form>
                <legend>Donar Information</legend>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" name="firstName"  placeholder="First name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" name="lastName"  placeholder="Last name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefaultUsername">Company</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="companyName"  placeholder="Company" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" name="cityName" placeholder="City" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">State</label>
                        <input type="text" class="form-control" name="State"  placeholder="State" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" name="Zip"  placeholder="Zip" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="">Main Address</label>
                        <textarea class="form-control" name="Address1"  id="" cols="10" rows="10"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Alternative Address</label>
                        <textarea class="form-control" name="Address2"  id="" cols="20" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">Phone</label>
                        <input type="number" class="form-control" name="phoneNumber"  placeholder="Phone" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Fax</label>
                        <input type="text" class="form-control" name="faxNumber"  placeholder="Fax" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefaultUsername">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            </div>
                            <input type="email" class="form-control" name="email"  placeholder="Email" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="">Donation Amount : </label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="donationAmount" value="50">$50
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="donationAmount" value="75">$75
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="donationAmount" value="100">$100
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="donationAmount" value="other">Other
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefaultUsername">Other Amount <small class="text-muted">(check a button or type in your amount)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">$</span>
                            </div>
                            <input type="number" class="form-control" name="otherAmount" placeholder="Amount" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="validationDefaultUsername">Recurring Amount <br><small class="text-muted">(Im Interested in giving on a regular basis)</small></label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="recurringAmount" value="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="recurringAmount" value="no">No
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <legend class="text-danger">Honorarium and Memorial Donation Information</legend>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <div class="p-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        I would like make This Donation
                                    </label>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="to-honor" name="donationTo">
                                    <label class="form-check-label">
                                        To Honor
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" value="in-memory-of" name="donationTo">
                                    <label class="form-check-label">
                                        In Mamory Of
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="validationDefault03">Name</label>
                        <input type="text" class="form-control" name="donarName"  placeholder="Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="validationDefault03">Acknoledge Donation to</label>
                    <input type="text" class="form-control" name="acknoledgeTo"  placeholder="Acknoledge to" required>
                </div>
                <div class="form-row">
                    <label for="validationDefault03">Address</label>
                    <input type="text" class="form-control" name="acknoledgeAddress" placeholder="Address" required>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" name="acknoledgeCity"  placeholder="City" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault04">State</label>
                        <input type="text" class="form-control" name="acknoledgeState"  placeholder="State" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" name="acknoledgeZip" placeholder="Zip" required>
                    </div>
                </div>
                <br>
                <br>
                <legend class="text-danger">Additional Information</legend>
                <small class="text-muted">(Please enter your name, company or organization as you would like it to apear in our publication)</small>
                <div class="form-row">
                    <div class="col-md-12 ">
                        <label for="validationDefault01">Name</label>
                        <input type="text" class="form-control" name="additionalName"  placeholder="Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <div class="p-2">

                            </div>
                            <div class="p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="ckbanonymus" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        I would like my gift to remain anonymus
                                    </label>
                                </div>
                            </div>
                            <div class="p-2">
                            </div>
                            <div class="p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="giftProgram" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        My employer offers a matching gift program
                                    </label>
                                </div>
                            </div>
                            <div class="p-2">
                            </div>
                            <div class="p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="notNeeded" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Please save the cost of acknowledging this gift by not mailing letter
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="">Remarks</label>
                        <textarea class="form-control" name="addtionalAddress" cols="10" rows="10"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="termsAndConditions" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <button class="btn btn-danger" type="reset">Reset form</button>
                <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>