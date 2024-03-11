<?php 
    error_reporting(0);
    require 'dom.php';
    if(isset($_GET['year']) && isset($_GET['level']) && isset($_GET['school'])){
        $resYear = $_GET['year'];
        $resLevel = $_GET['level'];
        $resSchool = $_GET['school'];
        switch($resLevel){
            case "std4":
                // Kuanzia mwaka 2015
                if($resYear < 2015 || $resYear > date("Y")){ ?>
                    <script>
                        alert('STD IV results is from 2015');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }elseif($resYear >= 2022){
                    //
                    $linkToGo = file_get_html("https://matokeo.necta.go.tz/sfna2022/results/".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/SFNA".$resYear."/".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }
                break;
            case "std7":
                // Kuanzia mwaka 2013
                if($resYear < 2013 || $resYear > date("Y")){?>
                    <script>
                        alert('STD VII results is from 2013');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }elseif($resYear == 2022){
                    $linkToGo = file_get_html("https://matokeo.necta.go.tz/psle2022/results/shl_".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/PSLE".$resYear."/shl_".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }
                break;
            case "f2":
                // Kuanzia mwaka 2015
                if($resYear < 2015 || $resYear >= date("Y")){ ?>
                    <script>
                        alert('Form two results is from 2015');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }elseif($resYear >= 2022){
                    $linkToGo = file_get_html("https://matokeo.necta.go.tz/ftna2022/results/".strtoupper($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }
                else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/FTNA".$resYear."/".strtoupper($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $schoolName = $linkToGo->find('table tr th',3)->plaintext;
                    $examType = $linkToGo->find("table tr th",1)->text();
                }
                break;
            case "f4":
                // Kuanzia mwaka 2003
                if($resYear >= date("Y")){ ?>
                    <script>
                        alert('Form four results is from 2003');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }elseif($resYear == 2003 || $resYear == 2004){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE".$resYear."/".strtolower($resSchool).".html");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = "CSEE 2005 EXAMINATION RESULTS";
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                elseif($resYear == 2005){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE2005/".strtoupper($resSchool).".html");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                elseif($resYear == 2006){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE2006/".strtoupper($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                elseif($resYear == 2007){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE207/".strtoupper($resSchool).".HTM");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                elseif($resYear == 2012){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE2012-2/".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                elseif($resYear == 2013){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE2013/".strtolower($resSchool).".html");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/CSEE".$resYear."/".strtolower($resSchool).".htm");
                    if(empty($linkToGo)){header("Location: error.php");}
                    $examType = $linkToGo->find("h1 p",0)->text();
                    $schoolName = $linkToGo->find('h3',0)->plaintext;
                }
                break;
            case "f6":
                // Kuanzia mwaka 2005
                if($resYear < 2005 || $resYear > date("Y")){ ?>
                    <script>
                        alert('Form six results is from 2005');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }elseif($resYear == 2008){ ?>
                    <script>
                        alert('Matokeo ya mwaka 2008 hayakupatikana');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }
                elseif($resYear >= 2005 && $resYear <= 2007){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/ACSEE".$resYear."/".strtolower($resSchool).".html");
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }
                else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/ACSEE".$resYear."/".strtolower($resSchool).".htm");
                    $schoolName = $linkToGo->find('h3 p',0)->plaintext;
                    $examType = $linkToGo->find("h1 p",0)->text();
                }
                break;
            case "qt":
                if($resYear < 2016 || $resYear >= date("Y")){ ?>
                    <script>
                        alert('QT results is from 2016');
                        window.location.href = 'https://matokeo.mafasystems.com/';
                    </script>
                    <?php
                }
                elseif($resYear == 2016){
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/QT2016/QT2016.html");
                    $examType = "QT 2016 EXAMINATION RESULTS";
                    $schoolName = "QT All Schools";
                }else{
                    $linkToGo = file_get_html("https://maktaba.tetea.org/exam-results/QT".$resYear."/qt".$resYear.".htm");
                    $examType = "QT ".$resYear." EXAMINATION RESULTS";
                    $schoolName = "QT All Schools";
                }
                break;
            default:
                header('Location: error.php');
                break;
        }
    }
    else{ header("Location: index.php"); }
?>
<?php require 'includes/head.php'; ?> <title><?php echo "$schoolName $examType"; ?></title>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header"><div class="site-mobile-menu-close mt-3"><span class="icon-close2 js-menu-toggle"></span></div></div>
                <div class="site-mobile-menu-body"></div>
            </div>
            <header class="site-navbar py-4 js-sticky-header site-navbar-target bg-secondary" role="banner">
                <div class="container-fluid">
                    <div class="d-flex"><div class="site-logo mr-auto w-auto align-items-center"><a href="/"><?php echo $schoolName ?></a></div></div>
                </div>
            </header>
            <div class="intro-section" id="home-section">
                <div class="" data-stellar-background-ratio="0.5">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p>
                                <?php
                                    if($resLevel == "qt"){
                                        $dataOut = $linkToGo->find("body",0);
                                        $dataOut = str_replace("",'<br/>',$dataOut);
                                        $dataOut = str_replace("-------------"," ", $dataOut);
                                        echo $dataOut;
                                    }
                                    if($resLevel == "std7" && $resYear == 2020){$dataOut = $linkToGo->find("table",1); echo $dataOut;}
                                    elseif($resYear == 2021 && $resLevel == "std7"){$dataOut = $linkToGo->find("body",0); echo $dataOut; $andList = $linkToGo->find("table",1); echo $andList;}
                                    elseif($resYear == 2022 && $resLevel == "std7"){$dataOut = $linkToGo->find("body",0); echo $dataOut; echo "<br/>"; $andList = $linkToGo->find("table",1); echo $andList;}
                                    else{$dataOut = $linkToGo->find("body",0); echo $dataOut;}
                                ?>
<script>var as_opt = {};as_opt.providers = {"copylink":"Copy Link","print":"Print","whatsapp":"WhatsApp"};as_opt.template= {corners:"50%",interface:"floating",topoffset:"80%",alignment: {desktop: "right",mobile: "bottom"}};new ass_SocialShare(as_opt);</script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require 'includes/footer.php'; ?>