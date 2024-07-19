<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Ghostwind CSS : Tailwind Toolbox</title>
		<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
	<style>
	.smooth {transition: box-shadow 0.3s ease-in-out;}
	::selection{background-color: aliceblue}
	:root{::-webkit-scrollbar{height:10px;width:10px;}::-webkit-scrollbar-track{background:#efefef;border-radius:6px}
	::-webkit-scrollbar-thumb{background:#d5d5d5;border-radius:6px} ::-webkit-scrollbar-thumb:hover{background:#c4c4c4}}
	/*scroll to top*/
	 .scroll-top {position: fixed;z-index: 50;padding: 0;right: 30px;bottom: 100px;opacity: 0;visibility: hidden;transform: translateY(15px);height: 46px;width: 46px;cursor: pointer;display: flex;align-items: center;justify-content: center;border-radius: 50%;transition: all .4s ease;border: none;box-shadow: inset 0 0 0 2px #ccc;color: #ccc;background-color: #fff;}.scroll-top.is-active {opacity: 1;visibility: visible;transform: translateY(0);}.scroll-top .icon-tabler-arrow-up {position: absolute;stroke-width: 2px;stroke: #333;}.scroll-top svg path {fill: none;}.scroll-top svg.progress-circle path {stroke: #333;stroke-width: 4;transition: all .4s ease;}.scroll-top:hover {color: var(--ghost-accent-color);}.scroll-top:hover .progress-circle path, .scroll-top:hover .icon-tabler-arrow-up {stroke: var(--ghost-accent-color);}
	</style>
</head>
<body class="bg-white font-sans leading-normal tracking-normal">

  <!--Header-->
  <header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{route('home')}}">
            TaySoft 
        </a>
    </div>
  </header>

	<!--slide in nav-->
	<div id="header" class="bg-white fixed w-full z-10 top-0 hidden animated" style="opacity: .95;">
		<div class="bg-white">
			<div class="flex flex-wrap items-center content-center">
				<div class="flex w-1/2 justify-start text-white font-extrabold">
					<a class="flex text-gray-900 no-underline hover:text-gray-900 hover:no-underline pl-2" href="#">
											<svg xmlns="https://flowbite.com/docs/images/logo.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#334484" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-squirrel"><path d="M18 6a4 4 0 0 0-4 4 7 7 0 0 0-7 7c0-5 4-5 4-10.5a4.5 4.5 0 1 0-9 0 2.5 2.5 0 0 0 5 0C7 10 3 11 3 17c0 2.8 2.2 5 5 5h10"/><path d="M16 20c0-1.7 1.3-3 3-3h1a2 2 0 0 0 2-2v-2a4 4 0 0 0-4-4V4"/><path d="M15.2 22a3 3 0 0 0-2.2-5"/><path d="M18 13h.01"/></svg> <span class="hidden w-0 md:w-auto md:block pl-1">TAYSOFT</span>
					</a>
				</div>
			</div>	
	</div>

		<!--Progress bar-->
		<div id="progress" class="h-1 bg-white shadow" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
    </div>
	

	<!--Title-->
    <section class="container mx-auto p-10 md:py-20 px-0 md:p-10 md:px-0">
        <section class="relative px-10 md:p-0 transform duration-500 hover:shadow-2xl cursor-pointer hover:-translate-y-1 ">
            <img class="xl:max-w-6xl" src="https://images.pexels.com/photos/5990153/pexels-photo-5990153.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1860" alt="">
            <div class="content bg-white p-2 pt-8 md:p-12 pb-12 lg:max-w-lg w-full lg:absolute top-48 right-5">
                <div class="flex justify-between font-bold text-sm">
                    <p>Ömer Faruk Taylan</p>
                    <p class="text-gray-400">28th May, 2024</p>
                </div>
                <h2 class="text-3xl font-semibold mt-4 md:mt-10">Teknolojinin İş Yerine Etkisi: Teknoloji Nasıl Değişiyor? Taysoft ile Her Daim Gündemde Kal!</h2>
                <button class="mt-2 md:mt-5 p-3 px-5 bg-black text-white font-bold text-sm hover:bg-purple-800"
                onclick="window.location='{{ route('home') }}'">
            Gündeme git
        </button>
            </div>
        </section>
    </section>
      

	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">
		
		<div class="mx-0 sm:mx-6">
			
			<div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
				
				<!--Post Content-->
				

				<!--Lead Para-->
				<p class="text-2xl md:text-3xl mb-5">
                    Sektöre Özel Yazılım Geliştirme 
				</p>
				<p class="py-6">TAYSOFT olarak işletmelerin ihtiyaçlarına özel yazılım geliştirme hizmetleri sunmaktayız. İşe özel yazılım geliştirme, işletmelerin belirli gereksinimlerine yönelik özelleştirilmiş çözümler üretmeyi içerir..</p>				
				<p class="py-6">İşe özel yazılım geliştirme sürecinde, işletmenizin ihtiyaçlarını ve hedeflerini anlamak için bir analiz yapılır. Bu aşamada, iş süreçleriniz, veri yönetimi, kullanıcı ihtiyaçları ve diğer gereksinimler belirlenir. </p>
				<ol>
					<li class="py-3">Daha sonra, analiz sonuçlarına dayanarak özelleştirilmiş bir yazılım çözümü tasarlanır ve geliştirilir. Bu süreçte, kullanıcı dostu bir kullanıcı arayüzü, iş süreçlerini destekleyen işlevler, veri yönetimi ve raporlama gibi özellikler entegre edilir.</li>
				</ol>

                <br>

                <p class="text-2xl md:text-3xl mb-5">
                    İşe özel yazılım geliştirme adımları 
				</p>
                <p class="py-6">1. İhtiyaç Analizi: İşletmenizin ihtiyaçlarını ve hedeflerini belirlemek için bir analiz yapılır. Bu aşamada, iş süreçleri, sorunlar, veri yönetimi gereksinimleri ve diğer özel gereksinimler değerlendirilir.</p>		
                <p class="py-6">2. Planlama ve Tasarım: İhtiyaç analizi sonuçlarına dayanarak, projenin planlaması ve tasarımı yapılır. Bu aşamada, kullanıcı arayüzü tasarımı, veri tabanı yapısı, iş süreçleri akışı ve diğer teknik ayrıntılar ele alınır.</p>		
                <p class="py-6">3. Yazılım Geliştirme: Tasarım aşamasının ardından, işe özel yazılımın geliştirme süreci başlar. Bu aşamada, kodlama ve programlama işlemleri gerçekleştirilerek özelleştirilmiş yazılım geliştirilir.</p>		
                <p class="py-6">4. Test Etme: Geliştirilen yazılımın kalitesini sağlamak için kapsamlı bir test süreci uygulanır. Bu aşamada, birim testleri, entegrasyon testleri ve kullanılabilirlik testleri gibi farklı test türleri kullanılır. Yazılımda hatalar tespit edilir ve düzeltilir.</p>		
                <p class="py-6">5. Dağıtım ve Entegrasyon: Yazılım, işletmenin mevcut altyapısına entegre edilir ve kullanıma sunulur. Bu aşamada, veri aktarımı, kullanıcı hesaplarının oluşturulması, gerektiğinde eğitim süreçleri ve diğer entegrasyon işlemleri gerçekleştirilir.</p>		
                <p class="py-6">6. Sürdürme ve Destek: Yazılımın sürdürülebilirliği ve sorunsuz çalışması için sürdürme ve destek süreci önemlidir. Güncellemeler yapılır, kullanıcı talepleri karşılanır, sorunlar çözülür ve kullanıcı desteği sağlanır.</p>		
                <p class="py-6">Bu adımlar, genel bir işe özel yazılım geliştirme sürecini temsil etmektedir. Ancak her projenin kendine özgü ihtiyaçları olduğunu unutmayın ve projenizin gereksinimlerine göre adımların özelleştirilebileceğini unutmayın. İyi bir proje yönetimi, sürekli iletişim ve kullanıcı geri bildirimlerine odaklanmak da başarılı bir işe özel yazılım geliştirme projesinde önemlidir.
                </p>		
			</div>
		</div>
	</div>
		</div>

<!--   Scroll Top Button  -->
    <button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
      <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="cuurentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <line x1="12" y1="5" x2="12" y2="19" />
        <line x1="18" y1="11" x2="12" y2="5" />
        <line x1="6" y1="11" x2="12" y2="5" />
      </svg>
    </button>

<script>
	/* Progress bar */
	//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
	var h = document.documentElement,
		  b = document.body,
		  st = 'scrollTop',
		  sh = 'scrollHeight',
		  progress = document.querySelector('#progress'),
		  scroll;
	var scrollpos = window.scrollY;
	var header = document.getElementById("header");

	document.addEventListener('scroll', function() {

		/*Refresh scroll % width*/
		scroll = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
		progress.style.setProperty('--scroll', scroll + '%');

		/*Apply classes for slide in bar*/
		scrollpos = window.scrollY;

    if(scrollpos > 100){
      header.classList.remove("hidden");
	  header.classList.remove("fadeOutUp");
	  header.classList.add("slideInDown");
    }
    else {
	  header.classList.remove("slideInDown");
      header.classList.add("fadeOutUp");
	  header.classList.add("hidden");
    }

	});

// scroll to top	
const t=document.querySelector(".js-scroll-top");if(t){t.onclick=()=>{window.scrollTo({top:0,behavior:"smooth"})};const e=document.querySelector(".scroll-top path"),o=e.getTotalLength();e.style.transition=e.style.WebkitTransition="none",e.style.strokeDasharray=`${o} ${o}`,e.style.strokeDashoffset=o,e.getBoundingClientRect(),e.style.transition=e.style.WebkitTransition="stroke-dashoffset 10ms linear";const n=function(){const t=window.scrollY||window.scrollTopBtn||document.documentElement.scrollTopBtn,n=Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight),s=Math.max(document.documentElement.clientHeight,window.innerHeight||0);var l=o-t*o/(n-s);e.style.strokeDashoffset=l};n();const s=100;window.addEventListener("scroll",(function(e){n();(window.scrollY||window.scrollTopBtn||document.getElementsByTagName("html")[0].scrollTopBtn)>s?t.classList.add("is-active"):t.classList.remove("is-active")}),!1)}	

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>