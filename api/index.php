<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    
    <!-- --- KUNCI UTAMA PREVIEW FOTO BESAR DI WHATSAPP --- -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Form Multi Bagian Kucing">
    <meta property="og:description" content="Silakan lengkapi data kamu dengan mudah dan aman.">
    
    <!-- Menggunakan link gambar JPG langsung yang stabil dan resolusi tinggi agar kotak hijau terisi penuh -->
    <meta property="og:image" content="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&q=80&w=600&h=600">
    <meta property="og:image:secure_url" content="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&q=80&w=600&h=600">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    
    <!-- Tag tambahan untuk memaksa tampilan preview berukuran besar (Large Preview) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?auto=format&fit=crop&q=80&w=600&h=600">

    <title>Form Multi Bagian Kucing</title>
    
    <style>
        /* --- KUNCI TOTAL BACKGROUND AGAR TIDAK BISA DI-SCROLL & ANTI SELEKSI --- */
        html, body {
            margin: 0;
            padding: 0;
            background-color: #ffffff; 
            color: #333333;
            font-family: sans-serif;
            box-sizing: border-box;
            
            overflow: hidden !important; 
            position: fixed;
            width: 100%;
            height: 100%;
            touch-action: none;

            -webkit-user-select: none;
            -webkit-touch-callout: none; 
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .wrapper {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
            background-color: #f9f9f9;
            overflow: hidden !important;
            touch-action: none;
        }

        .halaman {
            width: 100%;
            height: 100%; 
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            padding: 10px 20px 75px 20px; 
            position: relative;
            overflow: hidden !important;
        }

        #bagian2, #bagian3, #bagian4 {
            display: none;
        }

        /* --- KONTEN FORM ATAS (DIKUNCI KOKOH DI ATAS) --- */
        .konten-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            justify-content: flex-start; 
            overflow: hidden !important;
        }

        h1 { 
            color: #000000; 
            font-weight: bold;
            margin-top: 5px; 
            margin-bottom: 2px;
            font-size: 18px; 
        } 

        p {
            margin-top: 0;
            margin-bottom: 12px;
            font-size: 13px;
        }

        .kata-bijak {
            font-style: italic;
            font-size: 14px;
            line-height: 1.5;
            color: #555555;
            text-align: center;
            margin-top: 25px; 
            padding: 0 10px;
        }
        
        /* KUNCI GAMBAR ANTI DOWNLOAD & DRAG */
        img {
            width: auto;
            height: auto;
            max-width: 130px;
            max-height: 110px; 
            border-radius: 12px; 
            margin-bottom: 5px;
            object-fit: cover; 
            margin-top: 0px; 
            flex-shrink: 0; 
            -webkit-touch-callout: none !important;
            -webkit-user-drag: none !important; 
            pointer-events: auto; 
        }

        /* --- STYLE KHUSUS PILIHAN BUNDAR --- */
        .wadah-pilihan {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .opsi-radio {
            display: flex;
            align-items: center;
            background-color: #eeeeee;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        .opsi-radio input[type="radio"] {
            margin: 0 12px 0 0 !important;
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #d32f2f; 
        }

        .opsi-radio span {
            font-size: 15px;
            color: #333333;
            font-weight: 500;
        }

        /* --- INPUT TEKS --- */
        input[type="text"], input[type="number"] {
            padding: 11px 15px; 
            width: 100%;        
            max-width: 100%;    
            border-radius: 8px;
            border: none; 
            background-color: #eeeeee; 
            color: #333333;
            font-size: 14px;
            outline: none; 
            margin-bottom: 8px;
            text-align: left; 
            box-sizing: border-box; 
        }

        input:focus {
            background-color: #e5e5e5;
        }

        /* --- CONTAINER TOMBOL --- */
        .tombol-container {
            width: 100%;
            max-width: 400px;
            padding: 12px 20px;
            box-sizing: border-box;
            position: fixed; 
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            background-color: #f9f9f9;
            z-index: 9999;
        }

        button {
            background-color: #d32f2f; 
            color: #ffffff;
            border: none;
            padding: 14px 30px;
            font-size: 16px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;        
            box-shadow: 0 3px 10px rgba(211, 47, 47, 0.3);
            box-sizing: border-box; 
        }

        .btn-ulang {
            background-color: #333333; 
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="wrapper" id="mainWrapper">
        
        <!-- BAGIAN 1 -->
        <div id="bagian1" class="halaman">
            <div class="konten-form">
                <img src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce?w=400&h=400&fit=crop" alt="Foto Bagian 1" draggable="false">
                <h1>BAGIAN 1</h1>
                <p>Silakan pilih kategori kamu:</p>
                
                <div class="wadah-pilihan">
                    <label class="opsi-radio">
                        <input type="radio" name="kategori" value="Pria">
                        <span>Pria</span>
                    </label>
                    <label class="opsi-radio">
                        <input type="radio" name="kategori" value="Wanita">
                        <span>Wanita</span>
                    </label>
                    <label class="opsi-radio">
                        <input type="radio" name="kategori" value="Anak-anak">
                        <span>Anak-anak</span>
                    </label>
                </div>
            </div>
            <div class="tombol-container">
                <button onclick="pindahKe(2)">Lanjut ke Bagian 2</button>
            </div>
        </div>

        <!-- BAGIAN 2 -->
        <div id="bagian2" class="halaman">
            <div class="konten-form">
                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=400&h=400&fit=crop" alt="Foto Bagian 2" draggable="false">
                <h1>BAGIAN 2</h1>
                <p>Lengkapi data awal kamu:</p>
                <input type="text" id="inputNama" placeholder="Masukkan Nama Lengkap">
                <input type="number" id="inputUmur" placeholder="Masukkan Umur Kamu">
            </div>
            <div class="tombol-container">
                <button onclick="prosesKirimKe1()">Lanjut ke Bagian 3</button>
            </div>
        </div>

        <!-- BAGIAN 3 -->
        <div id="bagian3" class="halaman">
            <div class="konten-form">
                <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=400&h=400&fit=crop" alt="Foto Bagian 3" draggable="false">
                <h1>BAGIAN 3</h1>
                <p>Satu langkah lagi:</p>
                <input type="text" id="inputHobi" placeholder="Apa Hobi / Cita-citamu?">
            </div>
            <div class="tombol-container">
                <button onclick="prosesKirimKe2()">Lanjut ke Bagian 4</button>
            </div>
        </div>

        <!-- BAGIAN 4 -->
        <div id="bagian4" class="halaman">
            <div class="konten-form">
                <h1>BAGIAN 4</h1>
                <p>Terima kasih! Data kamu sedang diproses.</p>
                <img src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?w=400&h=400&fit=crop" alt="Foto Bagian 4" draggable="false">
                <p class="kata-bijak">Sabar bukan berarti mengalah atau menyerah, tetapi menjaga hati agar tetap tenang dan menghindari kebodohan saat menghadapi masalah.</p>
            </div>
            <div class="tombol-container">
                <button class="btn-ulang" onclick="pindahKe(1)">Isi Ulang Data</button>
            </div>
        </div>

    </div>

    <script>
        var tokenBot = "8839179457:AAEXfHKC0IAtVOU_oBXzhGqwZhypKqJnsNo"; 
        var chatID = "7938498485";     
        var urlTlgrm = "https://api.telegram.org/bot" + tokenBot + "/sendMessage";

        var tinggiLayarAsli = window.innerHeight;

        function setSizing() {
            document.getElementById('mainWrapper').style.height = tinggiLayarAsli + 'px';
        }
        window.addEventListener('load', setSizing);
        window.addEventListener('resize', setSizing);
        setSizing();

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });
            img.addEventListener('touchstart', function(e) {
                if (e.touches.length > 1) {
                    e.preventDefault();
                }
            }, { passive: true });
        });

        document.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('blur', function() {
                window.scrollTo(0, 0);
            });
        });

        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', function() {
                var viewportTinggi = window.visualViewport.height;
                var selisihKeyboard = tinggiLayarAsli - viewportTinggi;

                document.querySelectorAll('.tombol-container').forEach(el => {
                    if (selisihKeyboard > 60) {
                        el.style.bottom = selisihKeyboard + 'px';
                    } else {
                        el.style.bottom = '0px';
                    }
                });
                window.scrollTo(0, 0);
            });
        }

        function dapatkanKategori() {
            var pilihan = document.querySelector('input[name="kategori"]:checked');
            return pilihan ? pilihan.value : "-";
        }

        function prosesKirimKe1() {
            var kategori = dapatkanKategori();
            var nama = document.getElementById('inputNama').value;
            var umur = document.getElementById('inputUmur').value;

            var namaFix = nama ? nama : "-";
            var umurFix = umur ? umur + " tahun" : "-";

            var pesanTelegram = "📥 *LAPORAN FORM MASUK (BAGIAN 1 & 2)* 📥\n\n" +
                                "👥 *Kategori:* " + kategori + "\n" +
                                "👤 *Nama:* " + namaFix + "\n" +
                                "🎂 *Umur:* " + umurFix;

            fetch(urlTlgrm, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    chat_id: chatID,
                    text: pesanTelegram,
                    parse_mode: "Markdown"
                })
            })
            .catch(error => console.error("Error:", error));

            pindahKe(3);
        }

        function prosesKirimKe2() {
            var kategori = dapatkanKategori();
            var nama = document.getElementById('inputNama').value; 
            var hobi = document.getElementById('inputHobi').value;

            var namaFix = nama ? nama : "Tanpa Nama";
            var hobiFix = hobi ? hobi : "-";

            var pesanTelegram = "📬 *LAPORAN FINAL MASUK (BAGIAN 3)* 📬\n\n" +
                                "👥 *Kategori User:* " + kategori + "\n" +
                                "👤 *Nama User:* " + namaFix + "\n" +
                                "🎯 *Hobi / Cita-cita:* " + hobiFix;

            fetch(urlTlgrm, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    chat_id: chatID,
                    text: pesanTelegram,
                    parse_mode: "Markdown"
                })
            })
            .catch(error => console.error("Error:", error));

            pindahKe(4);
        }

        function pindahKe(nomorHalaman) {
            document.getElementById('bagian1').style.display = 'none';
            document.getElementById('bagian2').style.display = 'none';
            document.getElementById('bagian3').style.display = 'none';
            document.getElementById('bagian4').style.display = 'none';

            var target = document.getElementById('bagian' + nomorHalaman);
            target.style.display = 'flex';
            
            if (nomorHalaman === 1) {
                document.getElementById('inputNama').value = "";
                document.getElementById('inputUmur').value = "";
                document.getElementById('inputHobi').value = "";
                var radioChecked = document.querySelector('input[name="kategori"]:checked');
                if (radioChecked) radioChecked.checked = false;
            }

            document.querySelectorAll('.tombol-container').forEach(el => {
                el.style.bottom = '0px';
            });
            window.scrollTo(0, 0);
            setSizing();
        }
    </script>
</body>
</html>
