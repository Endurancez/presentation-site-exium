<footer>
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2>Exium</h2>
            <form class="form-inline text-center">
                <div class="form-group">
                    <input type="email" class="form-control inphead" placeholder="E-mail..." >
                </div>
                <button type="submit" class="btn btn-tune btn-tunetop"><?php echo $lang['butonbot']; ?></button>
            </form>
            <ul class="social text-center">
                <li><a href="#" class="fab fa-telegram-plane"></a></li>
                <li><a href="#" class="fab fa-discord"></a></li>
                <li><a href="#" class="fab fa-instagram"></a></li>
                <li><a href="#" class="fab fa-facebook"></a></li>
                <li><a href="#" class="fab fa-reddit"></a></li>
                <li><a href="#" class="fab fa-youtube"></a></li>

            </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>Exium</h3>
            <ul class="text-center">
                <li><a href="#model">Business Model</a></li>
                <li><a href="#press">Press</a></li>
                <li><a href="#ico">Ico Listing</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3> Contact </h3>
            <p class="text-center"><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:contact@exium.ro" target="_top">contact@exium.ro</a></p>

        </div>
    </div>
</footer>
<div id="myBtn"><a href="index.php?lang=en"><img src="resource/anglia.png" height="20" width="20"></a> | <a href="index.php?lang=ro"><img src="resource/romania.png" height="20" width="20"></a></div>

<!--		Bootstrap javascript and JQuery		-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/countdown.js"></script>
<script>
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a:not(".dropdown-toggle")')) {
            $(this).collapse('hide');
        }
    });

    //  Schimba LOGO
    $(window).scroll(function () {
        if ($(window).scrollTop() > 20) {
            $('.navbar-fixed-top .navbar-brand img').attr('src', 'resource/logo.png');
        } else {
            $('.navbar .navbar-brand img').attr('src', 'resource/logoalb.png');
        }

    });


    //Animatie
    $("nav").find("a").click(function (e) {
        e.preventDefault();
        var section = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section).offset().top
        });
    });


</script>
<script>
     window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "none";
        } else {
            document.getElementById("myBtn").style.display = "block";
        }
    }
</script>
</body>
</html>