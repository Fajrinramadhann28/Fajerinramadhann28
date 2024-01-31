<html><meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
  <link href="https://htmlku.com/dariku/style.css" rel="stylesheet" type="text/css" />

<head>
<title>Script HTML Pesan Dariku - feeldream</title>
</head>
<body>
	
   <div id="bodyblur">
     <!-- Wallpaper / Background --><img src="https://feeldreams.github.io/pics/awan/2.jpg" id="wallpaper"/>
   </div>
  
  <div class="kumpulanstiker">
         <!-- Stiker untuk Konten -->
         <img src="https://htmlku.com/0/panda/pusn.gif" id="fotoakhir1"/>
         <img src="https://feeldreams.github.io/mndkat.gif" id="fotoakhir2"/>
         <img src="https://i.ibb.co/xGc2wBh/cartoons.gif" id="fotoakhir3"/>
         <img src="https://htmlku.com/0/panda/gemoy.gif" id="fotoakhir4"/>
  </div>

   <div id='Content'>
   	
     <div id="suratin" onClick="memulai();audio.play();">
       <!-- Surat --><img src="https://rayyscoding.github.io/envelope.png"/>
     </div>
     <p id="ket">BUAT PACARKU "NOVA WIDYANA" , KLIK YA SAYANG HEHE</p>
   
     <div><!-- Foto Akhir --><img src="https://i.ibb.co/z7N6gKp/tos.gif" id="fotoakhir" /></div>
     <div><blockquote id='bq'>
       <p id="kalimat"></p>
       <p id="kalimatc"></p>
     </blockquote></div>
   
     <!-- Tombol Kirim Pesan -->
     <div id="Tombol">
       <a onClick="sjawab()">
         <b>💌 Balas</b>
       </a>
     </div>
     
   </div>

<div class='sticky-ad' id='sticky-ad'>
 <div class='adB'><a rel="dofollow" href='https://bit.ly/htmlfeeldream'>Lihat Script HTML Lainnya di Sini!</a></div>
<button aria-label='Close this ad' class='sticky-ad-close-button' onclick='hilangkan();'/>
</div>

<script src="https://htmlku.com/dariku/script.js"></script>

<!-- Ganti Kata², Foto, Lagu di bawah ya
1) Upload foto ke https://postimages.org
     buat dapetin linknya
2) Ganti Lagu Upload ke replit.com
     atau bisa juga ke mailboxdrive.com -->

<script type="text/javascript">
       async function jawab(){await swals.fire('Kirim pesan ke WhatsApp aku, ya!');window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;}

       async function pertama(){
         audio = new Audio('https://feeldreams.github.io/almostday.mp3');setTimeout(showDiv,1000);
       } pertama();
	
       
       async function pesan(){
             	await swalst.fire({
                  title: 'HALLO CINTAKU NOVA WIDYANA❤️❤️❤️', 
                  imageUrl: '' + fotoakhir1.src,
                  });   	
                 await swalst.fire({
                  title: 'SELAMAT MALAM NOVA WIDYANA,CAPEK YA ABIS PULANG KERJA ? TAPI AKU ADA SEDIKIT UNGKAPAN BUAT KAMU LOH. DIBACA YA SAYANG ',
              
                   
                  imageUrl: '' + fotoakhir2.src,
                  });
                 await swalst.fire({
                  title: 'TETAP JAGA KESEHATAN KAMU YA 🫶',
                  imageUrl: '' + fotoakhir3.src,
                  });
                 await swalst.fire({
                  title: 'DAN INGAT JANGAN MENEL MENEL ATAUPUN GENIT, DISINI ADA AKU YG CEMBURUAN🥺🥺',
                  imageUrl: '' + fotoakhir4.src,
                  });
                  
                  katangetik = "<b>Terakhir, aku cuma mau bilang sama kamu:</b><br><br><i>im very lucky to have you,aku beruntung punya kamu</i> aku suka<br>semua tentang kamu, aku suka banget<br>denger suara kamu yang selalu bikin<br>aku tenang, pokoknya aku suka<br>semuanya tentang kamu.<br><br>Tetaplah menjadi tujuanku yaa, jangan<br>menjauh, jangan pergi, dan jangan<br>berpindah ke lain hati,jangan genit genit tolong jaga perasaan aku ya sayang, aku sayang<br>kamu selaluuu ❤️❤️❤️";
                  katangetik2 = "<i>I LOVE U NOVA WIDYANA❤️</i>";
                  
                 setTimeout(kpemb,1500);
            }
</script>
</body>
</html>