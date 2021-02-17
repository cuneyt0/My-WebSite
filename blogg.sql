-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Oca 2021, 21:03:52
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogg`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogum`
--

CREATE TABLE `blogum` (
  `BlogumID` int(11) NOT NULL,
  `BlogBaslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `BlogOnizleme` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `BlogMetin` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `BlogTarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Resim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `blogum`
--

INSERT INTO `blogum` (`BlogumID`, `BlogBaslik`, `BlogOnizleme`, `BlogMetin`, `BlogTarih`, `Resim`) VALUES
(9, 'TCP UDP NEDİR', 'TCP UDP NEDİR', '<p><strong>PROTOKOL NEDİR?</strong></p>\r\n\r\n<p><strong>Protokol, bir ağ &uuml;zerindeki bilgisayarlar arasındaki iletişimi y&ouml;neten kurallar k&uuml;mesidir diyebiliriz.</strong></p>\r\n\r\n<p>Bunu biraz daha a&ccedil;acak olursak iki bilgisayarın birbiriyle konuşabilmesi i&ccedil;in aynı dili konuşması gerekir. İşte bu dili belirleyen kurallara genel olarak protokol veya daha doğrusu ağ protokol&uuml; diyoruz.Bilgisayarınız (kullandığınız işletim sistemi, ağ kartı, ya da uygulama ne olursa olsun), yanınızdaki masada bulunan başka bir bilgisayarla veya d&uuml;nyanın diğer ucundaki bir bilgisayarla iletişim kurarken bir &ccedil;ok farklı tipte ağ protokol&uuml;ne ve standardına ihtiya&ccedil; duyar.HTTP,FPT SMTP,TCP gibi. Bug&uuml;n ,TCP (Transmission Control Protocol) ve UDP&nbsp;User Datagram Protocol (Kullanıcı Datagram Protokol&uuml;)&#39;n&uuml; inceleyecegiz.</p>\r\n\r\n<p><strong>TCP&nbsp; NEDİR?</strong></p>\r\n\r\n<p>TCP, Transmission Control Protocol (İletim Denetimi Protokol&uuml;) s&ouml;zc&uuml;klerinin kısaltmasıdır<strong>.</strong>Uygulama programlarının veri alışverişinde bulunabileceği bir ağ iletişiminin nasıl kurulacağını ve s&uuml;rd&uuml;r&uuml;leceğini tanımlayan bir standarttır.TCP, bilgisayarların birbirlerine nasıl veri paketleri g&ouml;ndereceğini tanımlayan İnternet Protokol&uuml; (IP) ile &ccedil;alışır. TCP ve IP birlikte İnterneti tanımlayan temel kurallardır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TCP NASIL &Ccedil;ALIŞIR?</strong></p>\r\n\r\n<p>TCP, bağlantı odaklı bir protokold&uuml;r, yani her iki u&ccedil;taki uygulama programları mesaj alışverişini bitirene kadar bağlantı kurulur ve s&uuml;rd&uuml;r&uuml;l&uuml;r. Uygulama verilerinin ağların teslim edebileceği paketlere nasıl b&ouml;l&uuml;neceğini belirler, paketleri ağ katmanına g&ouml;nderir ve bu katmanlardan gelen paketleri kabul eder, akış kontrol&uuml;n&uuml; y&ouml;netir ve hatasız veri iletimi sağlaması ama&ccedil;landığı i&ccedil;in bırakılan veya bozuk olanların yeniden iletimini y&ouml;netir paketler ve gelen t&uuml;m paketleri onaylar. A&ccedil;ık Sistemler Ara Bağlantısı (OSI) iletişim modelinde, TCP, Katman 4&#39;&uuml;n b&ouml;l&uuml;mlerini, taşıma katmanını ve oturum katmanı olan Katman 5&#39;in b&ouml;l&uuml;mlerini kapsar.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2020/12/image_750x_5fe1bfd4526cd.jpg\" /></p>\r\n\r\n<p>&Ouml;nek verirsek, bir web sunucusu bir istemciye bir HTML dosyası g&ouml;nderdiğinde, bunu yapmak i&ccedil;in k&ouml;pr&uuml; metni aktarım protokol&uuml;n&uuml; (HTTP) kullanır. HTTP program katmanı, TCP katmanından bağlantıyı kurmasını ve dosyayı g&ouml;ndermesini ister. TCP yığını, dosyayı veri paketlerine b&ouml;ler, numaralandırır ve ardından dağıtım i&ccedil;in ayrı ayrı IP katmanına iletir. İletimdeki her paket aynı kaynak ve hedef IP adresine sahip olsa da, paketler birden &ccedil;ok yol &uuml;zerinden g&ouml;nderilebilir. İstemci bilgisayardaki TCP program katmanı, t&uuml;m paketler gelene kadar bekler, daha sonra aldıklarını onaylar ve eksik paket numaralarına bağlı olarak almayanların yeniden iletilmesini ister. TCP katmanı daha sonra paketleri bir dosyada birleştirir ve dosyayı alıcı uygulamaya teslim eder.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>UDP NEDİR</strong></p>\r\n\r\n<p>UDP (Kullanıcı Datagram Protokol&uuml;), &ouml;ncelikle internetteki uygulamalar arasında d&uuml;ş&uuml;k gecikmeli ve kayba toleranslı bağlantılar kurmak i&ccedil;in kullanılan bir iletişim protokol&uuml;d&uuml;r. Alıcı taraf tarafından bir anlaşma yapılmadan &ouml;nce veri aktarımını etkinleştirerek aktarımları hızlandırır. Sonu&ccedil; olarak, UDP, Internet Protokol&uuml; &uuml;zerinden ses (VoIP), alan adı sistemi (DNS) araması ve video veya ses &ccedil;alma gibi zamana duyarlı iletişimlerde faydalıdır. UDP, İletim Kontrol Protokol&uuml;&rsquo;ne (TCP) bir alternatiftir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>UDP NASIL &Ccedil;ALIŞIR?</strong></p>\r\n\r\n<p>UDP protokol&uuml;, TCP&#39;ye benzer şekilde &ccedil;alışır, ancak t&uuml;m hata denetimi &ouml;ğelerini atar. T&uuml;m ileri geri iletişim, işleri yavaşlatan gecikmeye neden olur.</p>\r\n\r\n<p>Bir uygulama UDP kullandığında, paketler yalnızca alıcıya g&ouml;nderilir. G&ouml;nderen, alıcının paketi aldığından emin olmak i&ccedil;in beklemez, yalnızca sonraki paketleri g&ouml;ndermeye devam eder. Alıcı, arada sırada birka&ccedil; UDP paketini ka&ccedil;ırırsa, kaybolur - g&ouml;nderen bunları yeniden g&ouml;ndermez. T&uuml;m bu ek y&uuml;k&uuml; kaybetmek, cihazların daha hızlı iletişim kurabileceği anlamına gelmektedir</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-01-07 17:24:39', 'TCP & UDP nedir.gif'),
(11, 'Atatürk', 'Atatürk Hakkında', '<p><a href=\"https://yandex.com.tr/gorsel/search?pos=1&amp;from=tabbar&amp;img_url=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FD6A6ajxWsAAdERe.jpg&amp;text=atat%C3%BCrk&amp;rpt=simage\"><img alt=\"\" src=\"https://pbs.twimg.com/media/D6A6ajxWsAAdERe.jpg\" style=\"height:540px; width:698px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem İpsum&nbsp;</p>\r\n', '2021-01-07 17:23:06', 'Ataturk1930s.jpg'),
(13, 'FLUTTERDA SAYFA İŞLEMLERİ #1', 'FLUTTER', '<h2><strong>PAGEVİEW NEDİR?</strong></h2>\r\n\r\n<p>PageView widget&#39;i kaydırılabilir bir listedir,ancak daha cok sayfa olarak &ccedil;alışır.Pageview Widgetini kullanarak dinamik&nbsp; sayfa olusturabilir ve kaydırma &ouml;zelligini kullarak hangi y&ouml;nde kaydırma yapacaksanız ayarlayabilirsiniz.PageView ile programımız g&ouml;ze daha hoş gelen kullanıcı dostu bir uygulama yolunda &ouml;nem kazanacaktır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>PAGEVİEW &Ccedil;EŞİTLERİ</strong></h3>\r\n\r\n<p>3 &ccedil;eşit Pageview widget bulunmaktadır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Pageview:</strong>Basit sayfa g&ouml;r&uuml;n&uuml;mleri olusturmak i&ccedil;in kullanırız.</li>\r\n	<li><strong>Pageview.builder</strong>:Dinamik sayfa g&ouml;r&uuml;n&uuml;mleri olusturmak i&ccedil;in kullanırız.</li>\r\n	<li><strong>Pageview.custom</strong>:Sayfalar arası &ouml;zel kaydırma efekti kullanmak istedigimiz zaman kullanırız.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>İlk olarak bu 3 temel PageView nasıl olusturulur g&ouml;relim ardından &ouml;zelliklerini inceleyelim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Pageview(Temel)</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Flutter&#39;da PageView olusturmanın en basit yoludur.Bu constructor dogrudan widget&#39;i &ccedil;agırır ve tek tek sayfa tanımlamamızı saglar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\nPageView(\r\n          children: [\r\n 	     Container(color: Colors.blue,child: Center(child:Text(&quot;SAYFA1&quot;)),), \r\n	     Container(color: Colors.red,child: Center(child: Text(&quot;SAYFA2&quot;)),),\r\n	   ],),\r\n</pre>\r\n\r\n<p>pageview</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff467637c11a9-43326161-91516010.gif\" style=\"height:905px; width:418px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Pageview.builder()</strong></h3>\r\n\r\n<p>Dinamik sayfalar olustururken PageView.builder metodunu kullanırız.<strong>İtembuilder</strong>&nbsp;ve&nbsp;<strong>itemcount&nbsp;</strong>adında iki fonksiyon alır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\nPageView.builder(itemBuilder: (context,index){\r\n	    return Container();\r\n	 }, \r\n	itemCount: 10,),\r\n	 ),\r\n</pre>\r\n\r\n<p>pageview.builder()</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>itemBuilder</strong>&nbsp;sayfa olusturmak i&ccedil;in alan yaratır,<strong>itemCount</strong>&nbsp;ise verilen sayıda sayfa olusturmak i&ccedil;in kullanırız.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&Ouml;rnek verirsek:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\nPageView.builder(itemBuilder: (context,index){\r\n	 return Container(\r\n	    color: index %2==0 ? Colors.yellow : Colors.blue,\r\n	    child: Center(child: Text(&quot;SAYFA $index&quot; ,style:TextStyle(fontSize: 30),)), \r\n	); \r\n	},\r\n	 itemCount: 10,),</pre>\r\n\r\n<p>&Ouml;rnek bir kod</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff4631179e4a7-25061794-56118006.gif\" style=\"height:665px; width:307px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Pageview.custom</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>PageView.custom&#39;ın kullanımı Sliver widgetini kullanarak ozel animasyonlar oluşturmamızı saglamaktadır.Bu widget&#39;i kullanıyorsanız zorunlu olarak childdelegate &ouml;zelligini kullanmanız gerekir .Childdelegate Sliver widgetinin b&uuml;t&uuml;n &ouml;zelliklerini barındırır.İstediginizi se&ccedil;ip kullanabilirsiniz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\nPageView.custom(\r\n 	childrenDelegate: SliverChildBuilderDelegate(( context,index){\r\n 		return Container(\r\n		     alignment: Alignment.center,\r\n		     color: Colors.teal[100 * (index % 5)],\r\n		     child: Text(&#39;Sayfa $index&#39;), \r\n	  );\r\n            }),\r\n     )),\r\n</pre>\r\n\r\n<p>pageview.custom()</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yukarıdaki kullanım şekillerini anladıysak Pageview widgetinin &ouml;zelliklerine g&ouml;z atalım.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Pageview &Ouml;zellikleri</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>ScrollDicrection</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Bu &ouml;zellik sayfaların hangi tarafa kaydırılacagına karar vermenizi saglar.</p>\r\n\r\n<p>Yatay eksende&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p><strong>scrollDirection:Axis.horizontal</strong>&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff4988017ccf2-64704040-20932256.gif\" style=\"height:790px; width:365px\" /></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dikey eksende</p>\r\n\r\n<p><strong>scrollDirection:Axis.vertical</strong></p>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff3657df36d20-83892656-17882683.gif\" style=\"height:763px; width:353px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Pagesnapping</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Bulundugu en yakın sayfaya tutunma &ouml;zelligidir.Boolen bir deger alır,varsayılan degeri true&#39;dur.İsterseniz bu &ouml;zellig kapatabilirsiniz. Kapattıgımız zaman sayfa ge&ccedil;işi nasıl ger&ccedil;ekleşiyor beraber inceleyelim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n PageView(\r\n          pageSnapping: false,\r\n          scrollDirection: Axis.horizontal,\r\n          children: [\r\n            Container(\r\n              color: Colors.yellow,\r\n              child: Center(\r\n                child: Text(\r\n                  &quot;SAYFA1&quot;,\r\n                  style: TextStyle(\r\n                      fontSize: 25,\r\n                      fontWeight: FontWeight.w700,\r\n                      decoration: TextDecoration.underline),\r\n                ),\r\n              ),\r\n            ),\r\n            Container(\r\n              color: Colors.red,\r\n              child: Center(\r\n                child: Text(\r\n                  &quot;SAYFA2&quot;,\r\n                  style: TextStyle(\r\n                      fontSize: 25,\r\n                      fontWeight: FontWeight.w700,\r\n                      decoration: TextDecoration.underline),\r\n                ),\r\n              ),\r\n            ),\r\n          ],\r\n        ),\r\n</pre>\r\n\r\n<p>&Ouml;rnek kod(pagesnaping)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff5813413c060-82218382-60054059.gif\" style=\"height:830px; width:383px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Reverse</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Bu &ouml;zellikle sayfa g&ouml;r&uuml;n&uuml;m&uuml;n&uuml;n okuma y&ouml;n&uuml;nde kaydırılıp kaydırılmayacağına ayarlayabiliriz.Boolen deger alır ve varsayılanı true&#39;dur.</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<h3><strong>Physics</strong></h3>\r\n\r\n<h3><strong>&nbsp;</strong></h3>\r\n\r\n<p>Kullanıcının Flutter&#39;ın destekledigi animasyonlarla scroll yapmasına izin vermesidir.</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<h3><strong>Controller&nbsp;</strong></h3>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Contoller &ouml;zelligi b&uuml;t&uuml;n pageview widgetini kontrol eder.Widget dısında tanımlarız ve widgetin i&ccedil;indeki controller &ouml;zelligiyle bu &ouml;zelligi &ccedil;agırırız.</p>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<pre>\r\n PageController Controller =\r\n      PageController(initialPage: 0, keepPage: true, viewportFraction: 1);\r\n</pre>\r\n\r\n<p><strong>&nbsp;</strong>controller</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;3 temel degişkeni vardır Bunlardan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>initialPage</strong>:Başlangı&ccedil;ta hangi indexli sayfa a&ccedil;ılacagını kontrol eder.</p>\r\n\r\n<p><strong>keepPage</strong>:olusturulan sayfaların hafızada tutulup tutulmayacagını konrol eder.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>viewportFranction</strong>&nbsp;ise sayfaların g&ouml;r&uuml;n&uuml;m boyutlarını belirlemektedir.(0 ile 1 arasında deger almaktadır.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bir &ouml;rnekle inceleyelim:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\nclass _pageState extends State {\r\n  PageController Controller =\r\n      PageController(initialPage: 0, keepPage: true, viewportFraction: 0.8);\r\n\r\n  @override\r\n  Widget build(BuildContext context) {\r\n    return Scaffold(\r\n      appBar: AppBar(\r\n        title: Text(&quot;pageview&quot;),\r\n        centerTitle: true,\r\n      ),\r\n      body: Row(\r\n        children: [\r\n          Expanded(\r\n            child: PageView(\r\n              physics: BouncingScrollPhysics(),\r\n              pageSnapping: false,&nbsp; \r\n  &nbsp; &nbsp; &nbsp; &nbsp;     controller: Controller,\r\n              reverse: false,\r\n           \r\n              scrollDirection: Axis.horizontal,\r\n\r\n              children: [\r\n                Container(\r\n                  color: Colors.yellow,\r\n                  child: Center(\r\n                    child: Text(\r\n                      &quot;SAYFA1&quot;,\r\n                      style: TextStyle(\r\n                          fontSize: 25,\r\n                          fontWeight: FontWeight.bold,\r\n                          decoration: TextDecoration.underline),\r\n                    ),\r\n                  ),\r\n                ),\r\n                Container(\r\n                  color: Colors.red,\r\n                  child: Center(\r\n                    child: Text(\r\n                      &quot;SAYFA2&quot;,\r\n                      style: TextStyle(\r\n                          fontSize: 30,\r\n                          fontWeight: FontWeight.w300,\r\n                          decoration: TextDecoration.underline),\r\n                    ),\r\n                  ),\r\n                ),\r\n                Container(\r\n                  color: Colors.green,\r\n                  child: Center(\r\n                    child: Text(\r\n                      &quot;SAYFA3&quot;,\r\n                      style: TextStyle(\r\n                          fontSize: 35,\r\n                          fontWeight: FontWeight.w500,\r\n                          decoration: TextDecoration.underline),\r\n                    ),\r\n                  ),\r\n                ),\r\n                Container(\r\n                  color: Colors.orange,\r\n                  child: Center(\r\n                    child: Text(\r\n                      &quot;SAYFA4&quot;,\r\n                      style: TextStyle(\r\n                          fontSize: 40,\r\n                          fontWeight: FontWeight.w600,\r\n                          decoration: TextDecoration.underline),\r\n                    ),\r\n                  ),\r\n                ),\r\n              ],\r\n            ),\r\n          ),\r\n        ],\r\n      ),\r\n    );\r\n  }\r\n}\r\n</pre>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.mertmekatronik.com/uploads/images/2021/01/img_5ff589b0500544-89902740-84257522.gif\" style=\"height:559px; width:258px\" /></p>\r\n', '2021-01-07 17:28:29', 'One finds limits by pushing them. (1).png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `YorumID` int(11) NOT NULL,
  `BlogumID` int(11) NOT NULL,
  `Ad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Mesaj` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`YorumID`, `BlogumID`, `Ad`, `Soyad`, `Email`, `Mesaj`, `Tarih`) VALUES
(1, 10, 'dfsdf', 'sdfsdf', 'sdfsdf@skdk', '<p>sdfsdfsdf</p>', '2020-12-24 19:02:53'),
(2, 7, 'dfsdf', 'sdfsdf', 'sdfsdf@skdk', '<p>vgchgvfjhg</p>', '2020-12-29 19:57:48'),
(3, 10, 'dfsdf', 'sdfsdf', 'sdfsdf@skdk', '<p>abcdefg</p><p>&nbsp;</p>', '2021-01-02 12:12:14');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogum`
--
ALTER TABLE `blogum`
  ADD PRIMARY KEY (`BlogumID`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`YorumID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogum`
--
ALTER TABLE `blogum`
  MODIFY `BlogumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `YorumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
