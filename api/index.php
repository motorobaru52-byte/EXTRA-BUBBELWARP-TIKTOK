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
            overflow: hidden; /* Mengunci total layar luar agar bar browser tidak goyang */

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
            padding: 20px;
            position: relative;
        }

        #bagian2, #bagian3 {
            display: none;
        }

        /* --- KONTEN FORM ATAS (MENGGUNAKAN FLEXBOX PROPORSIONAL) --- */
        .konten-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            flex: 1;
            justify-content: flex-start;
        }

        h1 { 
            color: #000000; 
            font-weight: bold;
            margin-top: 10px; 
            margin-bottom: 5px;
            font-size: 22px;
        } 

        p {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        /* RAHASIA UTAMA: Menggunakan max-height vh agar gambar otomatis mengecil secara elastis saat keyboard muncul */
        img {
            width: auto;
            height: auto;
            max-width: 140px;
            max-height: 20vh; 
            border-radius: 15px; 
            margin-bottom: 10px;
            object-fit: cover; 
            margin-top: 10px;
            flex-shrink: 1; 
        }

        /* --- INPUT RATA KIRI-KANAN --- */
        input {
            padding: 12px 15px;
            width: 100%;        
            max-width: 100%;    
            border-radius: 8px;
            border: none; 
            background-color: #eeeeee; 
            color: #333333;
            font-size: 15px;
            outline: none; 
            margin-bottom: 12px;
            text-align: left; 
            box-sizing: border-box; 
            flex-shrink: 0;
        }

        input:focus {
            background-color: #e5e5e5;
        }

        /* --- CONTAINER TOMBOL MERAH FIXED MELAYANG DI ATAS KEYBOARD --- */
        .tombol-container {
            width: 100%;
            max-width: 400px;
            padding: 15px 20px;
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
                <img src="
