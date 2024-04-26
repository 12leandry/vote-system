@extends('layouts.regis')

@section('content')
<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100 pt-5 pb-11 m-3 border-radius-lg">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-2">Welcome!</h1>
                    <p class="text-lead text-white">Use these awesome forms to login or create a new account in your
                        project for free.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: -30rem">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Register</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">
                        <div class="mt-2 position-relative text-center">
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="registrationForm" method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Step 1 -->
                            <div id="step1">
                                <div>
                                    <label for="name">Your Name:</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required><br>
                                    <span id="nameError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select><br>
                                    <span id="genderError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="stage_name">Stage Name:</label>
                                    <input class="form-control" type="text" id="stage_name" name="stage_name" placeholder="Stage Name" required><br>
                                    <span id="stageNameError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="facebook">Facebook:</label>
                                    <input class="form-control" type="text" id="facebook" name="facebook" placeholder="Facebook" required><br>
                                    <span id="facebookError" class="text-danger"></span>
                                </div>
                                <button type="button" class="btn btn-primary w-100" onclick="validateStep1()">Next</button>
                            </div>

                            <!-- Step 2 -->
                            <div id="step2" style="display: none;">
                                <div>
                                    <label for="instagram">Instagram:</label>
                                    <input class="form-control" type="text" id="instagram" name="instagram" placeholder="Instagram" required><br>
                                    <span id="instagramError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="youtube">Youtube:</label>
                                    <input class="form-control" type="text" id="youtube" name="youtube" placeholder="Youtube" required><br>
                                    <span id="youtubeError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="bio">Bio:</label>
                                    <textarea class="form-control" id="bio" name="bio" placeholder="Bio" required></textarea><br>
                                    <span id="bioError" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="picture">Picture:</label>
                                    <input class="form-control" type="file" id="picture" name="picture" required onchange="previewImage(event)"><br>
                                    <span id="pictureError" class="text-danger"></span>
                                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px;">
                                </div>
                                <button type="button" class="btn btn-primary w-100" onclick="validateStep2()">Submit</button>
                            </div>
                        </form>
                        <script>
                            function previewImage(event) {
                                var input = event.target;
                                var reader = new FileReader();
                                reader.onload = function(){
                                    var imagePreview = document.getElementById('imagePreview');
                                    imagePreview.src = reader.result;
                                    imagePreview.style.display = 'block';
                                };
                                reader.readAsDataURL(input.files[0]);
                            }

                            function validateStep1() {
                                var name = document.getElementById("name").value;
                                var gender = document.getElementById("gender").value;
                                var stageName = document.getElementById("stage_name").value;
                                var facebook = document.getElementById("facebook").value;

                                var nameError = document.getElementById("nameError");
                                var genderError = document.getElementById("genderError");
                                var stageNameError = document.getElementById("stageNameError");
                                var facebookError = document.getElementById("facebookError");

                                nameError.textContent = "";
                                genderError.textContent = "";
                                stageNameError.textContent = "";
                                facebookError.textContent = "";

                                if (!name) {
                                    nameError.textContent = "Please enter your name.";
                                    return false;
                                }
                                if (!gender) {
                                    genderError.textContent = "Please select your gender.";
                                    return false;
                                }
                                if (!stageName) {
                                    stageNameError.textContent = "Please enter your stage name.";
                                    return false;
                                }
                                if (!facebook) {
                                    facebookError.textContent = "Please enter your Facebook username.";
                                    return false;
                                }

                                // Hide Step 1, show Step 2
                                document.getElementById("step1").style.display = "none";
                                document.getElementById("step2").style.display = "block";
                            }

                            function validateStep2() {
                                var instagram = document.getElementById("instagram").value;
                                var youtube = document.getElementById("youtube").value;
                                var bio = document.getElementById("bio").value;
                                var picture = document.getElementById("picture").value;

                                var instagramError = document.getElementById("instagramError");
                                var youtubeError = document.getElementById("youtubeError");
                                var bioError = document.getElementById("bioError");
                                var pictureError = document.getElementById("pictureError");

                                instagramError.textContent = "";
                                youtubeError.textContent = "";
                                bioError.textContent = "";
                                pictureError.textContent = "";

                                if (!instagram) {
                                    instagramError.textContent = "Please enter your Instagram username.";
                                    return false;
                                }
                                if (!youtube) {
                                    youtubeError.textContent = "Please enter your Youtube username.";
                                    return false;
                                }
                                if (!bio) {
                                    bioError.textContent = "Please enter your bio.";
                                    return false;
                                }
                                if (!picture) {
                                    pictureError.textContent = "Please upload your picture.";
                                    return false;
                                }

                                // Submit the form
                                document.getElementById("registrationForm").submit();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
