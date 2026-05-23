<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>Form Multi Bagian Kucing</title>
    
    <style>
        /* --- KUNCI TOTAL BACKGROUND NYA --- */
        html, body {
            margin: 0;
            padding: 0;
            background-color: #ffffff; 
            color: #333333;
            font-family: sans-serif;
            box-sizing: border-box;
            
            /* Matikan semua akses scroll secara brutal via CSS */
            overflow: hidden !important; 
            position: fixed;
            width: 100%;
            height: 100%;
            touch-action: none; /* Mematikan gerakan gerak jari di layar luar */

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
            background-color: #f9f9f9;
            overflow: hidden !important;
            touch-action: none; /* Kunci total pembungkus dalam */
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

        #bagian2, #bagian3 {
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
            margin-bottom: 8px;
            font-size: 13px;
        }
        
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
        }

        /* --- INPUT RATA KIRI-KANAN --- */
        input {
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

        /* --- CONTAINER TOMBOL MERAH FIXED MELAYANG DI ATAS KEYBOARD --- */
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
        // Tangkap tinggi asli layar HP saat pertama kali dibuka (dikunci mati)
        var tinggiLayarAsli = window.innerHeight;

        function setSizing() {
            // Paksa wrapper selalu berukuran pixel tetap tinggi asli layar, tidak boleh berubah!
            document.getElementById('mainWrapper').style.height = tinggiLayarAsli + 'px';
        }
        window.addEventListener('load', setSizing);
        window.addEventListener('resize', setSizing);
        setSizing();

        // --- RAHASIA PAMUNGKAS: MEMATIKAN SCROLL MANUAR DAN OTOMATIS BROWSER ---
        // Mencegah layar bergeser secara paksa saat ditarik jari atau saat input aktif
        document.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('blur', function() {
                // Paksa browser kembali ke posisi koordinat paling atas (0,0) saat selesai mengetik
                window.scrollTo(0, 0);
            });
        });

        // --- DETEKSI KEYBOARD UNTUK POSISI TOMBOL MERAH ---
        if (window.visualViewport) {
            window.visualViewport.addEventListener('resize', function() {
                var viewportTinggi = window.visualViewport.height;
                var selisihKeyboard = tinggiLayarAsli - viewportTinggi;

                document.querySelectorAll('.tombol-container').forEach(el => {
                    if (selisihKeyboard > 60) {
                        // Tombol merah melompat tepat di atas keyboard Chrome
                        el.style.bottom = selisihKeyboard + 'px';
                    } else {
                        el.style.bottom = '0px';
                    }
                });
                // Jaga koordinat window tetap di paling atas (0,0) agar tidak terangkat naik
                window.scrollTo(0, 0);
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
            window.scrollTo(0, 0);
            setSizing();
        }
    </script>
</body>
</html>
