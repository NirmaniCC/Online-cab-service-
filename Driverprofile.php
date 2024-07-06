<html>

<head>
    <title>CabWeb</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "header.php"; ?>
    <div>

        <div class="drivers">

            <br><br><br><br><br>

            <div class="hello"><img src="images/back.png" class="pa" id="driiii">
                <h2 id="driiii" class="droprof">Edit Profille</h2>
            </div><br><br><br><br><br><br>

            <div class="dri_prof">


                <div class="gen-fix">
                    <div class="ho-color">
                        <h5 class="general">General Information</h5>
                    </div>
                    <div class="ho-color">
                        <h5 class="general">About</h5>
                    </div>
                    <div class="ho-color">
                        <h5 class="general">Working</h5>
                    </div>
                    <div class="ho-color">
                        <h5 class="general">Vehicle</h5>
                    </div>
                </div>

            </div>
            <div class="dri_prof" id="var">

                <h3 class="drag">General Information</h3>
                <div class="drag" id="draggg">100% Completed</div>
                <div class="upload"><img src="images/upload.png" class="upside"><br><br><br><br><br>

                    <div class="gen-profile"><img src="images/user (1).png" class="user-phto"></div>
                    <button class="gen-profile" id="gen-btn">Change</button>
                    <button class="gen-profile" id="gen-btn">Remove</button><br><br><br><br><br><br><br>

                    <form action="">
                        <div class="form-label">
                            <label>Name</label><br>
                            <input type="text" spellcheck="false" placeholder="XXXXXXXXXXXXX" class="field-names">
                        </div>
                        <div class="form-label">
                            <label>Phone Number</label><br>
                            <input type="text" spellcheck="false" placeholder="+94 XXX XXX XXX" class="field-names">
                        </div><br><br>
                        <div class="form-label">
                            <label>Emaill</label><br>
                            <input type="text" spellcheck="false" placeholder="XXXXX123@gmail.com" class="field-names">
                        </div>
                        <div class="form-label">
                            <label>Address</label><br>
                            <input type="text" spellcheck="false" placeholder="NO.XX,XXX road,Kandy" class="field-names">
                        </div><br><br>
                        <div class="form-label">
                            <label>NIC Number</label><br>
                            <input type="text" spellcheck="false" placeholder="XXXXXXXXXX" class="field-names">
                        </div>
                        <div class="form-label">
                            <label>Birth Day</label><br>
                            <input type="text" spellcheck="false" placeholder="XX XX XXXX" class="field-names">
                        </div>



                    </form>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="dri_proftttt" id="shorts"><br>

                    <h3 class="drag">ABOUT</h3>

                    <div class="upload"><img src="images/down-arrow.png" class="upsiders"><br><br><br>



                        <form action="">
                            <div class="ques">

                                <label class="subscrip">Description</label><br><br>
                                <textarea placeholder="Enter question" rows="6" cols="85" class="area"></textarea><br><br>
                            </div>



                        </form>
                    </div>


                </div><br><br><br><br><br><br><br><br><br>
                <div class="dri_proftttt" id=""><br>

                    <h3 class="drag">WORKING</h3>

                    <div class="upload"><img src="images/down-arrow.png" class="upsiders"><br><br><br><br><br>

                        <div class="movess">
                            <form action="">
                                <label for="cars">Work as a</label><br>
                                <select name="job" id="job" class="jobss">
                                    <option value="fulltime">Fulltime</option>
                                    <option value="parttime">Parttime</option>
                                </select>
                                <input id="rememberChkBox" type="checkbox" class="jobssss">
                                <h3 class="" id="cusstom">I am currently working in this role.</h3><br><br><br>
                                <label for="cars">Start Date</label><br>
                                <input type="date" class="dates"><br><br>

                                <div class="ques">
                                    <div class="desc">

                                        <label class="subscrip">Description</label><br>
                                        <textarea placeholder="Enter question" rows="6" cols="85" class="area"></textarea><br><br>
                                    </div>
                                </div>
                        </div>
                    </div>


                </div><br><br><br><br><br><br><br><br><br>

                <div class="dri_proftttt" id=""><br>

                    <h3 class="drag">VEHICLE</h3>

                    <div class="upload"><img src="images/upload.png" class="upsiders"><br><br>
                        <div class="gen-profile" id="uploadssss"><img src="" class="user-phto"></div>
                        <button class="gen-profile" id="gen-btn">Change</button>
                        <button class="gen-profile" id="gen-btn">Remove</button><br><br><br><br><br><br>





                        <form action="">
                            <div class="form-label">
                                <label>Vehicle Type</label><br>
                                <input type="text" spellcheck="false" placeholder="XXXXXXXXXXXXX" class="field-names">
                            </div>
                            <div class="form-label">
                                <label>Vehicle Model</label><br>
                                <input type="text" spellcheck="false" placeholder="XXXXXXXXXX" class="field-names">
                            </div><br><br>
                            <div class="form-label">
                                <label>Vehicle Number</label><br>
                                <input type="text" spellcheck="false" placeholder="XXXXXXXXXXXXX" class="field-names">
                            </div>
                            <div class="form-label">
                                <label>Chassis Number</label><br>
                                <input type="text" spellcheck="false" placeholder="XXXXXXXXXX" class="field-names">
                            </div><br><br><br><br><br>
                            <div class="ques">
                                <div class="veh-descrip">

                                    <label class="subscrip">Description</label><br>
                                    <textarea placeholder="Enter question" rows="6" cols="85" class="area"></textarea><br><br>
                                </div>
                            </div>



                        </form>
                    </div>


                </div>

                <div class="invoice">

                    <button class="vehicl-note" id="cdex">Cancel</button>
                    <button class="vehicl-note">Save</button>
                </div>
            </div>




        </div>
        <footer>
            <div class="container">
                <div class="footer-content">
                    <h3 class="d">T & C</h3>

                </div>
                <div class="footer-content">
                    <h3>Privacy & policy</h3>

                </div>
                <div class="footer-content">
                    <h3>Careers</h3>

                </div>
                <div class="footer-contents">

                    <ul class="social-icons">
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

    </div>

    </footer>


</body>

</html>