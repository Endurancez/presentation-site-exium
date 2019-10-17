<?php include 'header.php'; ?>

<!--
            Whats is barabude???
-->
<section class="secheader" id="head">
    <div class="container">
        <div class="col-md-12">
            <h1 class="headerh1"><?php echo $lang['1header']; ?></h1>
            <h1 class="offlaunch"><?php echo $lang['1minhead']; ?></h1>
            <div id="del-countdown" class="text-center">

                <div id="clock"></div>
                <div id="units">
                    <span><?php echo $lang['zi']; ?></span>
                    <span><?php echo $lang['ora']; ?></span>
                    <span><?php echo $lang['minut']; ?></span>
                    <span><?php echo $lang['secunda']; ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="progressbarcont">
                <div class="top">
                    <span>13 jul</span>
                    <span class="apare">10 aug</span>
                    <span>7 sep</span>
                    <span class="apare">28 sep</span>
                    <span>12 oct</span>
                </div>
                <div class="topbot">
                    <span class="glyphicon glyphicon-menu-down"></span>
                    <span class="apare glyphicon glyphicon-menu-down "></span>
                    <span class="glyphicon glyphicon-menu-down"></span>
                    <span class="apare glyphicon glyphicon-menu-down"></span>
                </div>
                <div class="progress">
                    <!--<div id="myBar" class="progress-bar progress-barr progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"></div>-->
                </div>
                <div class="bot">
                    <span>30% bonus</span>
                    <span class="apare">20% bonus</span>
                    <span>10% bonus</span>
                    <span class="apare">0% bonus</span>
                    <span>END OF SALE</span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <form class="form-inline text-center">
                <div class="form-group">
                    <input type="email" class="form-control inphead" placeholder="E-mail..." >
                </div>
                <button type="submit" class="btn btn-tune btn-tunetop"><?php echo $lang['butonhead']; ?></button>
            </form>
        </div>
        <div class="col-md-12 text-center social">
            <ul class="social">
                <li><a href="#" class="fab fa-telegram-plane"></a></li>
                <li><a href="#" class="fab fa-discord"></a></li>
                <li><a href="#" class="fab fa-instagram"></a></li>
                <li><a href="#" class="fab fa-facebook"></a></li>
                <li><a href="#" class="fab fa-reddit"></a></li>
                <li><a href="#" class="fab fa-youtube"></a></li>

            </ul>
        </div>
    </div>
</section>
<!--
          FINAL  Whats is barabude???
-->
<hr>
<!--
        FACTS
-->
<div class="container">
    <div class="secfacts">
        <h2 class="text-center"><?php echo $lang['2header'];?></h2>
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h4><?php echo $lang['2header1'];?></h4>
                <ul class="padding">
                    <li><?php echo $lang['2header11'];?></li>
                    <li><?php echo $lang['2header12'];?></li>
                    <li><?php echo $lang['2header13'];?></li>
                    <li><?php echo $lang['2header14'];?></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <img class="img img-responsive center-block" src="resource/messa.png"  height="190" width="190"/>
                <h4><?php echo $lang['2header2'];?></h4>
                <ul class="padding">
                    <li><?php echo $lang['2header21'];?></li>
                    <li><?php echo $lang['2header22'];?></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4><?php echo $lang['2header3'];?></h4>
                <ul class="padding">
                    <li><?php echo $lang['2header31'];?></li>
                    <li><?php echo $lang['2header32'];?></li>
                    <li><?php echo $lang['2header33'];?></li>
                    <li><?php echo $lang['2header34'];?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--
        Final FACTS
-->
<hr>
<!--
       Introducing Exium
-->
<section  id="intro" class="intro">
    <div class="container">
        <img class="img img-responsive center-block" src="resource/telefon.png"  width="550" height="200"/>
        <h2 class="text-center top7"><?php echo $lang['3header'];?></h2>
        <p class="text-center"><?php echo $lang['3headermin'];?></p>
        <div class="row top3">
            <div class="col-md-4 col-sm-4">
                <h4><?php echo $lang['3header1'];?></h4>
                <p><?php echo $lang['3header11'];?></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4><?php echo $lang['3header2'];?></h4>
                <p><?php echo $lang['3header12'];?></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4><?php echo $lang['3header3'];?></h4>
                <p><?php echo $lang['3header13'];?></p>
            </div>
        </div>
        <div class="row">
            <div class="text-center top3">
                <h4><?php echo $lang['3header4'];?></h4>
                <button class="btn btn-tune"><?php echo $lang['3header14'];?></button>
                <br>
                <br>
                <p><?php echo $lang['3header24'];?></p>
            </div>
        </div>
    </div>
</section>
<!--
        Final Exium
-->
<hr>
<!--
    DOCUMENTS
-->
<section id="documents" class="documents">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h2 class="text-center"><strong><?php echo $lang['4header'];?></strong></h2>
            <p class="text-center margintop"><?php echo $lang['4header1'];?></p>

        </div>
    </div>
    <footer class="margintop">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#" target="_blank"><img class="img img-responsive margintop marginbot" src="resource/media/1.png"></a>
                <p class="text-center">Whitepaper</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#" target="_blank"><img class="img img-responsive margintop marginbot" src="resource/media/2.png"></a>
                <p class="text-center">One-Pager</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#" target="_blank"><img class="img img-responsive margintop marginbot" src="resource/media/3.png"></a>
                <p class="text-center">Presentation</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#" target="_blank"><img class="img img-responsive margintop marginbot" src="resource/media/4.png"></a>
                <p class="text-center">Terms & Conditions</p>
            </div>
        </div>
    </footer>
</section>
<!--
        FINAL DOCUMENTS
-->
<hr>
<!--
        A FAIR BUSINESS MODEL
-->
<div class="container" id="model">
    <div class="secfacts">
        <h2 class="text-center"><?php echo $lang['5header'];?></h2>
        <p class="text-center"><?php echo $lang['5headermin'];?></p>
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h4><strong><?php echo $lang['5header1'];?></strong></h4>
                <ul class="padding">
                    <li><?php echo $lang['5header11'];?></li>
                    <li><?php echo $lang['5header12'];?></li>
                    <li><?php echo $lang['5header13'];?></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <img class="img img-responsive center-block" src="resource/messa2.png" />
            </div>
            <div class="col-md-4 col-sm-4">
                <h4><strong><?php echo $lang['5header2'];?></strong></h4>
                <ul class="padding">
                    <li><?php echo $lang['5header21'];?></li>
                    <li><?php echo $lang['5header22'];?></li>
                    <li><?php echo $lang['5header23'];?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--
        FINAL A FAIR BUSINESS MODEL
-->
<hr>
<!--
        MEDIA
-->
<section class="secmedia" id="press">
    <div class="container">
        <h2 class="text-center">Press</h2>
        <h4 class="text-center"><?php echo $lang['6header'];?></h4>
        <ul class="socmedia">
            <li><img class="img img-responsive" src="resource/media/2b.png"></li>
            <li><img class="img img-responsive" src="resource/media/5a.png"></li>
            <li><img class="img img-responsive" src="resource/media/7b.png"></li>
            <li><img class="img img-responsive" style="padding-bottom: 20px;" src="resource/media/7e.png"></li>
            <li><img class="img img-responsive" src="resource/media/8.png"></li>
        </ul>
    </div>
</section>
<!--
        FINAL MEDIA
-->
<!--
        Exium Token sale
-->
<section id="tokensale" class="tokensale">
    <div class="container">
        <h2 class="text-center"><?php echo $lang['7header'];?></h2>
        <p class="text-center"><?php echo $lang['7headermin'];?></p>
        <br>
        <div class="col-xs-12 col-md-6 col-sm-6 grafic">
            <img class="img img-responsive center-block" src="resource/grafic1.png">
        </div>
        <div class="col-md-6 col-sm-6 grafic">
            <img class="img img-responsive center-block" src="resource/grafic2.png">
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h4 class="text-center"><strong><?php echo $lang['7header1'];?></strong></h4>
                <p class="text-center"><?php echo $lang['7header12'];?></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4 class="text-center"><strong><?php echo $lang['7header2'];?></strong></h4>
                <p class="text-center"><?php echo $lang['7header21'];?></p>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4 class="text-center"><strong><?php echo $lang['7header3'];?></strong></h4>
                <p class="text-center"><?php echo $lang['7header31'];?></p>
            </div>
            <div class="col-md-12 col-sm-12">
                <h2 class="margintop"><?php echo $lang['7header4'];?></h2>
                <p class="text-center"><?php echo $lang['7header41'];?></p>
                <div class="row margintop">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header42'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-barr" role="progressbar" style="width:54%">
                                54%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header43'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress-bar colorwhite" role="progressbar" style="width:54%">
                            </div>
                            <div class="progress-bar progress-bar-striped progress-barr" role="progressbar" style="width:18%">
                                18%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header44'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress-bar colorwhite" role="progressbar" style="width:72%">
                            </div>
                            <div class="progress-bar progress-bar-striped progress-barr" role="progressbar" style="width:15%">
                                15%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header45'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress-bar colorwhite" role="progressbar" style="width:87%">
                            </div>
                            <div class="progress-bar progress-bar-striped progress-barr" role="progressbar" style="width:9%">
                                9%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header46'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress">
                                <div class="progress-bar colorwhite" role="progressbar" style="width:96%">
                                </div>
                                <div class="progress-bar progress-bar-striped progress-barr" role="progressbar" style="width:3%">
                                    3%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><strong><?php echo $lang['7header47'];?></strong></p>
                    </div>
                    <div class="col-md-9">
                        <div class="progress">
                            <div class="progress">
                                <div class="progress-bar colorwhite " role="progressbar" style="width:98%">
                                </div>
                                <div class="progress-bar progress-barr" role="progressbar" style="width:2%">
                                    1%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-sm-12">
                <div class="text-center">
                    <h4><strong><?php echo $lang['7header48'];?></strong></h4>
                    <button class="btn btn-tune"><?php echo $lang['7header49'];?></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
        FINAL Exium Token sale
-->
<!--
        ICONS
-->
<section class="secicons" id="ico">
    <div class="container">
        <h2 class="text-center" style="margin-bottom: 5%"><?php echo $lang['8header'];?></h2>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download.png" height="150" width="150">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download (1).png" height="150" width="150">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download (2).png" height="150" width="150">
            </div>
        </div>
        <div class="row margintop">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download (3).png" height="150" width="150">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download (5).png" height="150" width="150">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img class="img img-responsive center-block" src="/resource/ico/download (6).png" height="150" width="150">
            </div>
        </div>
    </div>
</section>
<!--
        FINAL ICONS
-->
<hr>
<!--
        ROADMAP
-->
<section id="roadmap" class="roadmap">
    <div class="container">
        <div class="text-center">
            <h2><?php echo $lang['9header'];?></h2>
            <p><?php echo $lang['9headermin'];?></p>
        </div>
        <div class="timeline">

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header1'];?></h2>
                    <p><?php echo $lang['9header1s'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header2'];?></h2>
                    <p><?php echo $lang['9header21'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header3'];?></h2>
                    <p><?php echo $lang['9header31'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header4'];?></h2>
                    <p><?php echo $lang['9header41'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header5'];?></h2>
                    <p><?php echo $lang['9header51'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header6'];?></h2>
                    <p><?php echo $lang['9header61'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header7'];?></h2>
                    <p><?php echo $lang['9header71'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header8'];?></h2>
                    <p><?php echo $lang['9header81'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header9'];?></h2>
                    <p><?php echo $lang['9header91'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header10'];?></h2>
                    <p><?php echo $lang['9header101'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header11'];?></h2>
                    <p><?php echo $lang['9header111'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header12'];?></h2>
                    <p><?php echo $lang['9header121'];?></p>
                </div>
            </div>

            <div class="containerr left">
                <div class="content">
                    <h2><?php echo $lang['9header13'];?></h2>
                    <p><?php echo $lang['9header131'];?></p>
                </div>
            </div>

            <div class="containerr right">
                <div class="content">
                    <h2><?php echo $lang['9header14'];?></h2>
                    <p><?php echo $lang['9header141'];?></p>
                </div>
            </div>


        </div> 
    </div>
    <div class="marginbot"></div>
</section>
<!--
        Final ROADMAP
-->
<hr>
<!--
       Intro TEAM
-->
<section id="team" class="team">
    <div class="container">
        <h2 class="text-center"><?php echo $lang['10header'];?></h2>
        <p class="text-center"><?php echo $lang['10headermin'];?></p>
        <div class="row" style="margin-top: 10%;">
            <div class="col-md-12 col-sm-12 botteam">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Bogdan S.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Chief Executive Officer
                </p>
            </div>
            <div class="col-md-4 col-sm-6 botteam">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Razvan M.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Business Development
                </p>
            </div>
            <div class="col-md-4 col-sm-6 botteam">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Alex S.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Chief Technology Officer
                </p>
            </div>
            <div class="col-md-4 col-sm-6 botteam">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Bogdan T.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Cyber Security Specialist
                </p>
            </div>
            <div class="col-md-4 col-sm-6 botteam">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Andu V.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Developer TeamLead
                </p>
            </div>
            <div class="col-md-4 col-sm-6 botteam">
                <img class="img-circle center-block" src="resource/agenta3.jpg" height="150" width="150">
                <p class="text-center">Delia U.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    UX/UI Designer
                </p>
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-circle center-block" src="resource/agenta3.jpg" height="150" width="150">
                <p class="text-center">Nadia P.<br>
                    <a href="#" class="fab fa-linkedin"></a><br>
                    Public Relations
                </p>
            </div>
<!--            <div class="col-md-3 col-sm-6">
                <img class="img-circle center-block" src="resource/agent.jpg" height="150" width="150">
                <p class="text-center">Joe Poe Doe<br>
                    <a href="#" class="fab fa-linkedin"></a>
                </p>
            </div>-->
        </div>
    </div>
</section>
<!--
        Final TEAM
-->

<!--
        Inceput EXIUM
-->
<section id="faq">
    <div class="container">
        <h2 class="marginbot"><strong>FAQ</strong></h2>
        <div class="col-lg-6 col-md-6 col-sm-6 margintop">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body"><?php echo $lang['11headers']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header1']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php echo $lang['11header1s']; ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header2']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header2s']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header3']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header3s']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header4']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header4s']; ?></div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 margintop">
            <div class="panel-group" id="accordio">
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordio" href="#collapse6">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header5']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse6" class="panel-collapse collapse in">
                        <div class="panel-body"><?php echo $lang['11header5s']; ?></div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordio" href="#collapse8">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header6']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header6s']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordio" href="#collapse9">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header7']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header7s']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordio" href="#collapse10">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header8']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header8s']; ?></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a data-toggle="collapse" data-parent="#accordio" href="#collapse7">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo $lang['11header9']; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $lang['11header9s']; ?></div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!--
        Final EXIUM
-->
<?php include 'footer.php'; ?>