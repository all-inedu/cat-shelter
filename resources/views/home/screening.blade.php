<style>
    .screening-banner {
        background: #dedede;
    }

    .tab {
        display: none;
    }

    textarea.invalid {
        border: 1px solid rgb(253, 97, 97);
    }


    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 10px;
        width: 10px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
</style>

@extends('template.home.main')

@section('title', 'Screening - Cat Shelter')

@section('banner')
    <div class="screening-banner">
        <div class="container py-5">
            <h2 class="text-dark">Screening Test</h2>
            <h5 class="fw-light text-dark pt-3">
                Please fill in the input field below, so you can be approved
            </h5>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post" id="screeningForm">
                    @csrf
                    <div class="tab">
                        <div class="mb-3">
                            <label for="q1">Question 1</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 2</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 3</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 4</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="mb-3">
                            <label for="q1">Question 5</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 6</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 7</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="q1">Question 8</label>
                            <textarea name="" id="" class="form-control" rows="2" oninput="this.className = 'form-control'"></textarea>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn button-primary rounded-pill px-3" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn button-primary rounded-pill px-3" id="nextBtn"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("screeningForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("textarea");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

@endsection
