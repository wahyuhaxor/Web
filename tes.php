<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Official Karawang Cyber Team</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="We Are Party At Your Security">
	<meta name="keywords" content="KarawangCyberTeam">
	<meta name="author" content="KarawangCyberTeam">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
	<!-- styles -->
	<link href="css/css-plugins.css" rel="stylesheet" type="text/css"><link href="css/css-style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<script data-ad-client="ca-pub-6553416736497611" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="https://l.top4top.io/p_35076cthm0.png" alt="logo"></div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
	    <!-- header start -->
	    <header class="fixed-header"><!-- header-flex-box start --><div class="header-flex-box">
			    <!-- logo start -->
				<a href="index.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box">
				        <img class="logo-black" src="https://c.top4top.io/p_3506f7z0u0.jpg" alt="logo"></div>
		        </a><!-- logo end -->
		        
				<!-- menu-open start -->	
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end --><!-- nav-container start --><nav class="nav-container dark-bg-1"><!-- nav-logo start --><div class="nav-logo">
				<img src="https://c.top4top.io/p_3506f7z0u0.jpg" alt="logo"></div><!-- nav-logo end -->
			
			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1"><!-- nav-box start --><li class="nav-box nav-bg-change active dropdown-open">
					<a class="pointer-large nav-link" href="">
						<span class="nav-btn active" data-text="Home">Home</span>
					</a>
					
					<div class="nav-bg" ></div>
				</li><!-- nav-box end -->
				
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="https://karawangcyberteam.my.id/" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" >Official Team</span>
					</a>
					<div class="nav-bg" ></div>
									</li><!-- nav-box end -->
													<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="https://github.com/wahyuhaxor" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" >Ghitub</span>
					</a>
					<div class="nav-bg" ></div>
									</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change dropdown-open">
					<a class="pointer-large nav-link" href="#">
						<span class="nav-btn" data-text="GabungTeam">Join Team</span>
					</a>
					<div class="nav-bg" ></div>
				</li><!-- nav-box end -->
				
			</ul><!-- nav-menu end --></nav>
			
				<div class="content-wrapper" style="min-height: 880px;">
		<section class="content">
<div class="row">
				<div class="col-md-6">
					<div class="box box-solid" style="background: #2e2d2d;">
						<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
												<font color="orange" size="3" face="courier new"> IP ANDA : <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong></font>
 	<br><font color="orange" size="3" face="courier new"> Browser : <strong><span id="browser">Memuat...</span></strong></font>

  <script>
    function detectBrowser() {
      const ua = navigator.userAgent;

      if (ua.indexOf("Chrome") > -1 && ua.indexOf("Edg") === -1 && ua.indexOf("OPR") === -1) {
        return "Google Chrome";
      } else if (ua.indexOf("Firefox") > -1) {
        return "Mozilla Firefox";
      } else if (ua.indexOf("Safari") > -1 && ua.indexOf("Chrome") === -1) {
        return "Safari";
      } else if (ua.indexOf("OPR") > -1 || ua.indexOf("Opera") > -1) {
        return "Opera";
      } else if (ua.indexOf("Edg") > -1) {
        return "Microsoft Edge";
      } else if (ua.indexOf("MSIE") > -1 || ua.indexOf("Trident/") > -1) {
        return "Internet Explorer";
      } else {
        return "Browser tidak dikenal";
      }
    }

    document.getElementById("browser").textContent = detectBrowser();
  </script></font>						
<?php
// Dapatkan alamat IP pengunjung
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();

// Ambil data lokasi dari ip-api
$url = "http://ip-api.com/json/{$ip}?fields=status,message,query,country,regionName,city,zip,lat,lon,timezone,isp";

$response = file_get_contents($url);
$data = json_decode($response, true);
if ($data['status'] === 'success') {
    echo "<p class='box-title' style='font-family: Bungee;'> " . $data['city'] . "</p>";
} 
?>
<main class="animsition-overlay" data-animsition-overlay="true"><!-- home-slider start --><section class="home-slider" id="up">	  		
		<br>	
		
			<div class="tile">
        <marquee><h5><font color="red">SELAMAT DATANG DI WEBSITE WAHYU HAXOR</font></h5></marquee>
      </div>
	<br>
<font color="white"></b><a href="index.php">
          <li class="breadcrumb-item"><i color="white" class="fa fa-home fa-lg"></i></a>
 <br>			
 					<h1><i class="fas fa-cofeee fa-lg"></i><b><font color="white">From Silent To<center><font color="red"> Desctruction</b></h1></li>	<br>				<div class="tile">
      <div align="center">
          <img src="https://l.top4top.io/p_35076cthm0.png" style="border-radius: 10000px;padding-bottom: 10px; width: 170px;">
</div>
      </div> <br><br>
<center><font color="white" face="courier new" size="3">Website Ini Sedang Dalam Pengembangan Ya Ges:v Jadi Maklum Kalau Jelek:)</font></center><br><br><br><br><br><br><br><br><br>		  							<div class="slider-fade slider-tr-delay07 top-margin-30">
										  	<div class="border-btn-box border-btn-red pointer-large">
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->

			  	

			  	
			  	<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- home-slider end --><!-- flex-min-height-box start --><section id="down" class="dark-bg-1 flex-min-height-box"><!-- flex-min-height-inner start --><div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="About Me">About Me</span>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-right-margin-20">
									<center><p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim"><font face="courier new" size="4">Hello My Name Is Wahyu Haxor Me Is Defacer Or Grey Hat From Karawang Cyber Team Since 2021, I Am a Otodidak Programmer Nick Previously I Was Xnuxer Wahyu But Now It Has Been Changed To Wahyu Haxor </p></center>
								</div>
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
								<center><br>	<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="About Team">About Team</span><br>
								</h2>
							</div><!-- column end -->
							<!-- column start -->
							<div class="six-columns">
								<div class="content-right-margin-20">
									<center><p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim"><font face="courier new" size="4">Karawang Cyber Team is a group initiated by IT activists domiciled in West Java and was founded on June 14, 2021, even though it is relatively new.</p></center>
								</div>
								</div>
						</div><!-- column end -->
							<!-- column start -->
							<div class="twelve-columns text-center">
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end --><!-- section start -->
					</ul><!-- client-list end --></div><!-- container end -->
			</section><!-- section end --><!-- light-bg-2 start --><div class="light-bg-2 top-bottom-padding-110" data-midnight="black">
				<div data-animation-container class="text-center">
						<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2"><b>Quotes</b></h2><hr><br><br>
					</div>
				<!-- testimonials-slider start -->
				<div class="testimonials-slider container small">

					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="https://e.top4top.io/p_3506rua3x0.jpeg" alt="author"><div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Antara adzan yang berkumandang Dan lonceng yang berdentang Antara kiblat yang menentukan arahku pulang Dan salib yang membuat mu tenang Sebrengsek apapun aku Takkan kurebut kamu dari tuhanmu</p>
							</div>
							<div class="text-color-1 small-title-oswald"><br></span>
							</div>
                            </div><!-- slide end -->
                            
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="https://a.top4top.io/p_3506t5n450.jpeg"><div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir</p>
							</div>
							<div class="text-color-1 small-title-oswald"><br></span>
							</div>
						</div><!-- slide end -->

						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="https://l.top4top.io/p_35068gu6x0.jpeg" alt="author"><div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Bila kalian ragu untuk memulai, maka kalian hanya butuh yang namanya 20 detik keberanian. Kemudian lihatlah duniamu pasti berubah.</p>
							</div>
						<div class="text-color-1 small-title-oswald"></span>
							</div>
													</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="https://a.top4top.io/p_3506t81ye0.jpeg" alt="author"><div class="testimonials-content">
								<p class="text-color-4 p-style-bold">Apa yang menjadi milikmu, akan selalu menjadi milikmu. Jika ia kembali, maka ia milikmu. Namun jika tidak, maka bukan milikmu</p>
							</div>
							<div class="text-color-1 small-title-oswald"<br></span>
							</div>
                            </div><!-- slide end -->
                            
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="https://j.top4top.io/p_3506ai06b0.png" alt="author"><div class="testimonials-content">
								<p class="text-color-4 p-style-bold">jangan berhenti belajar dan melakukan eksploitasi bug</p>
							</div>
							<div class="text-color-1 small-title-oswald"></span>
							</div>
						</div><!-- slide end -->
						</div><!-- slide end -->
						
					</div><!-- swiper-wrapper end -->
					

						<center>
			        <div class="tile">
       <div align="center">
      <div id="kopi-covid"><iframe src="https://kopi.dev/widget-covid-19/?dark=true" width="100%" height="380" scrolling="no" frameborder="0"></iframe></div>
    </center>
    </div>
			</main>
			<footer class="footer dark-bg-1">
			</div><!-- flex-container end -->
		</footer><!-- footer end --><!-- scripts --><!-- animsition-overlay end --><!-- footer start --><!-- scripts --><script src="js/js-plugins.js"></script><script src="js/js-main.js"></script></body></html>
