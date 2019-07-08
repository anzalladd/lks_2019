    <!-- Footer -->
    <footer class="mt-3">
        <div class="container-pad">
            <div class="footer-detail flex wrap">
                <div class="logo flex-xxl-3 flex-xl-3 flex-md-12">
                    <img src="<?= BASEURL?>/assets/logo_me.png" alt="logo_white" width="150">
                    <p>I Love you more than you know</p>
                </div>
                <div class="more flex-xxl-2 flex-xl-2 flex-md-12 more-col">
                    <div class="more-col-1">
                        <h2>Anzalla DD</h2>
                        <ul>
                            <li>About AnzallaDD</li>
                            <li>FAQ (Question)</li>
                        </ul>
                    </div>
                </div>
                <div class="more flex-xxl-2 flex-xl-2 flex-md-12">
                    <h2>My Services</h2>
                    <ul>
                        <li>Bandung</li>
                        <li>Jakarta</li>
                        <li>Yogyakarta</li>
                        <li>Medan</li>
                        <li>Bali</li>
                        <li>Manado</li>
                        <li>Palembang</li>
                    </ul>
                </div>
                <div class="more flex-xxl-2 flex-xl-2 more-col flex-md-12">
                    <div class="more-col-1">
                        <h2>Help</h2>
                        <ul>
                            <li>Terms and Conditions</li>
                            <li>Privacy</li>
                            <li>Complain</li>
                            <li>Call Me</li>
                        </ul>
                    </div>
                </div>
                <div class="subscription flex-xxl-3 flex-xl-3 flex-md-6 flex-s-12">
                    <h2 style="line-height:150%">Keep Contact With Me</h2>
                    <div class="flex-col">
                        <div class="input-subs flex justify-center">
                            <input type="text" placeholder="Insert your email">
                        </div>
                        <button class="main-btn">Send Your Email</button>
                    </div>
                </div>
            </div>
            <div class="copyright flex justify-between">
                <p class="white">2019 © AnzallaDD - All right reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End footer -->
    
</body>


<style scoped>


/* Footer */
footer {
    background: linear-gradient(346.1deg, #2B5165 -120.95%, #101E34 55.04%);
    padding-top: 45px;
}

footer .more-col-2 {
    margin-top: 45px;
}

footer ul {
    list-style-type: none;
    font-size: 14px;
    color: #fff;
    opacity: .6;
    line-height: 35px;
}

footer .footer-detail h2 {
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 0 27px 0;
}

footer .footer-detail .logo p {
    color: #fff;
    opacity: .6;
    padding: 25px 0;
    width: 250px;
}

footer .footer-detail .logo span img:not(:first-of-type) {
    margin-left: 12px;
}

footer .footer-detail .subscription .input-subs {
    width: 100%;
    background: white;
    border-radius: 6px;
    padding: 13px 0;
}

footer .footer-detail .subscription .input-subs input {
    border: none;
    outline: none;
    text-align: center;
    width: 100%;
}

footer .main-btn{
    background-color: var(--main-color);
}

footer .footer-detail .subscription button {
    padding-right: 0;
    padding-left: 0;
    margin-top: 15px;
    width: 100%;
}

footer .store {
    display: flex;
    margin-top: 15px;
}

footer .store img {
    margin: 0 auto;
    width: 142px;
    height: 40px;
}

footer .copyright {
    margin-top: 100px;
    padding-bottom: 22.5px;
}

/* End Footer */

/* Responsive */

@media all and (max-width: 989px) {
    footer .more {
        margin-top: 40px;
    }

    footer .more-col {
        display: flex;
        flex-direction: row !important;
    }

    footer .more-col .more-col-2 {
        margin-top: 0;
        margin-left: 80px;
    }

    footer .subscription {
        margin-top: 40px;
    }
}

</style>

<script src="<?= BASEURL?>/js/jquery.min.js"></script>
<script src="<?= BASEURL?>/js/app.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</html>
