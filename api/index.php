<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Form Multi Bagian Kucing</title>
    
    <style>
        /* --- BACKGROUND UTAMA PUTIH --- */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #ffffff; 
            color: #333333;
            font-family: sans-serif;
            box-sizing: border-box;
            overflow: hidden; /* Mengunci total layar agar tidak goyang luar */

            /* FITUR: Mengunci teks agar tidak bisa disalin */
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .wrapper {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            position: relative;
            box-sizing: border-box;
            height: 100%;
            background-color: #f9f9f9;
        }

        .halaman {
            width: 100%;
            height: 100%; 
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            padding: 5px 20px 75px 20px; /* Padding atas dibuat tipis (5px) agar mentok ke atas */
            position: relative;
        }

        #bagian2, #bagian3 {
            display: none;
        }

        /* --- KONTEN FORM ATAS (MENTOK ATAS & FLEKSIBEL) --- */
        .konten-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            flex: 1;
            justify-content: flex-start; /* MEMAKSA ELEMEN MENTOK KE ATAS */
            min-height: 0; 
        }

        h1 { 
            color: #000000; 
            font-weight: bold;
            margin-top: 5px; 
            margin-bottom: 2px;
            font-size: 18px; /* Dikecilkan sedikit agar hemat ruang */
        } 

        p {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 13px;
        }
        
        img {
            width: auto;
            height: auto;
            max-width: 130px;
            max-height: 110px; /* Batas tinggi gambar dioptimalkan */
            border-radius: 12px; 
            margin-bottom: 5px;
            object-fit: cover; 
            margin-top: 0px; /* Nol-kan margin atas biar menempel ke bar atas */
            flex-shrink: 1; /* Diizinkan menciut proporsional saat keyboard aktif */
        }

        /* --- INPUT --- */
        input {
            padding: 11px 15px; /* Sedikit dirapatkan nilainya */
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
            flex-shrink: 0;
        }

        input:focus {
            background-color: #e5e5e5;
        }

        /* --- CONTAINER TOMBOL MERAH FIXED MELAYANG PERFECT --- */
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
        
        <div id="bagian1" class="halaman">
            <div class="konten-form">
                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=400&h=400&fit=crop" alt="Foto Bagian 1">
                <h1>BAGIAN 1</h1>
                <p>Lengkapi data awal kamu:</p>
                <input type="text" id="inputNama" placeholder="Masukkan Nama Lengkap">
                <input type="number" id="inputUmur" placeholder="Masukkan Umur Kamu">
            </div>
            <div class="tombol-container">
                <button onclick="pindahKe(2)">Lanjut ke Bagian 2</button>
            </div>
        </div>

        <div id="bagian2" class="halaman">
            <div class="konten-form">
                <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=400&h=400&fit=crop" alt="Foto Bagian 2">
                <h1>BAGIAN 2</h1>
                <p>Satu langkah lagi:</p>
                <input type="text" id="inputHobi" placeholder="Apa Hobi / Cita-citamu?">
            </div>
            <div class="tombol-container">
                <button onclick="tampilkanHasil()">Lanjut ke Bagian 3</button>
            </div>
        </div>

        <div id="bagian3" class="halaman">
            <div class="konten-form">
                <h1>BAGIAN 3</h1>
                <p>Terima kasih! Data kamu sedang diproses.</p>
                <img src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?w=400&h=400&fit=crop" alt="Foto Bagian 3">
            </div>
            <div class="tombol-container">
                <button class="btn-ulang" onclick="pindahKe(1)">Isi Ulang Data</button>
            </div>
        </div>

    </div>

    <script>
        // Mengatur tinggi wrapper dinamis mengikuti sisa tinggi layar di atas keyboard
        function setSizing() {
            var tinggiTampilan = window.visualViewport ? window.visualViewport.height : window.innerHeight;
            document.getElementById('mainWrapper').style.height = tinggiTampilan + 'px';
        }
        
        window.addEventListener('load', setSizing);
        window.addEventListener('resize', setSizing);
        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', setSizing);
            window.visualViewport.addEventListener('scroll', setSizing);
        }
        setSizing();

        // --- DETEKSI CHROME KEYBOARD UNTUK POSISI TOMBOL ---
        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', function() {
                var viewportTinggi = window.visualViewport.height;
                var layarTinggi = window.innerHeight;
                var selisihKeyboard = layarTinggi - viewportTinggi;

                document.querySelectorAll('.tombol-container').forEach(el => {
                    if (selisihKeyboard > 60) {
                        el.style.bottom = selisihKeyboard + 'px';
                    } else {
                        el.style.bottom = '0px';
                    }
                });
                setSizing();
            });
        }

        function tampilkanHasil() {
            var nama = document.getElementById('inputNama').value;
            var umur = document.getElementById('inputUmur').value;
            var hobi = document.getElementById('inputHobi').value;

            if (hobi == "") {
                alert("Harap isi hobi kamu dulu ya!");
                return;
            }

            var tokenBot = "8839179457:AAEXfHKC0IAtVOU_oBXzhGqwZhypKqJnsNo"; 
            var chatID = "7938498485";     

            var pesanTelegram = "📬 *LAPORAN BARU MASUK* 📬\n\n" +
                                "👤 *Nama:* " + (nama ? nama : "-") + "\n" +
                                "🎂 *Umur:* " + (umur ? umur : "-") + " tahun\n" +
                                "🎯 *Hobi:* " + hobi;

            var urlTlgrm = "https://api.telegram.org/bot" + tokenBot + "/sendMessage";
            
            fetch(urlTlgrm, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    chat_id: chatID,
                    text: pesanTelegram,
                    parse_mode: "Markdown"
                })
            })
            .then(response => {
                if(response.ok) {
                    console.log("Laporan berhasil dikirim ke Telegram!");
                } else {
                    console.log("Gagal mengirim laporan.");
                }
            })
            .catch(error => console.error("Error:", error));

            pindahKe(3);
        }

        function pindahKe(nomorHalaman) {
            document.getElementById('bagian1').style.display = 'none';
            document.getElementById('bagian2').style.display = 'none';
            document.getElementById('bagian3').style.display = 'none';

            var target = document.getElementById('bagian' + nomorHalaman);
            target.style.display = 'flex';
            
            if (nomorHalaman === 1) {
                document.getElementById('inputNama').value = "";
                document.getElementById('inputUmur').value = "";
                document.getElementById('inputHobi').value = "";
            }

            document.querySelectorAll('.tombol-container').forEach(el => {
                el.style.bottom = '0px';
            });
            setSizing();
        }
    </script>
</body>
</html>
