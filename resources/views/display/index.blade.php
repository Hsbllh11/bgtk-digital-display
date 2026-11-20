<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BGTK NTB - Digital Information Display</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
            height: 100%;
            overflow: hidden !important;
        }

        body {
            min-height: 100vh;
            background: #202020;
        }

        main {
            width: 100vw;
            height: 100vh;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden;
        }

        .slide {
            display: none;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            opacity: 0;
            overflow: hidden;
            background-color: #4b4a4a;
        }

        .slide.active {
            display: block;
            animation: fadeIn 0.8s ease-in-out;
            opacity: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="m-0 h-screen w-screen overflow-hidden bg-[#202020] text-slate-800">

    <!-- ===================================================== -->
    <!-- HEADER -->
    <!-- ===================================================== -->

    <!-- <header class="border-b border-slate-200 bg-white shadow-sm">
        <div class="flex items-center justify-between px-10 py-5">

            <div class="flex items-center gap-4">

                <div class="flex h-14 w-14 items-center justify-center overflow-hidden rounded-xl ">
                    <img src="/assets/Logo-Tut-Wuri-Handayani-PNG-Warna.png" alt="Logo Tut Wuri Handayani"
                        class="h-full w-full object-contain p-1">
                </div>

                <div>
                    <h1 class="text-xl font-bold text-blue-800">
                        BGTK PROVINSI NTB
                    </h1>

                    <p class="text-sm text-slate-500">
                        Balai Guru dan Tenaga Kependidikan
                    </p>
                </div>

            </div>

            <div class="text-right">

                <div id="clock" class="text-3xl font-bold text-blue-800">
                    00:00:00
                </div>

                <div id="date" class="text-sm text-slate-500">
                    Memuat tanggal...
                </div>

            </div>

        </div>
    </header> -->


    <!-- ===================================================== -->
    <!-- SLIDES -->
    <!-- ===================================================== -->

    <main class="m-0 h-screen w-screen overflow-hidden p-0">
        <!-- ================================================= -->
        <!-- SLIDE 1 : WELCOME -->

        <!-- =========================================================
        SLIDE 1 - WELCOME
        ======================================================== -->
        <section class="slide active h-screen w-screen bg-[#202020] p-[4px]" data-slide="1">

            <!-- FRAME UTAMA -->
            <div class="flex h-full w-full flex-col overflow-hidden bg-white">


                <!-- =================================================
                 AREA UTAMA
                ================================================== -->
                <div class="relative min-h-0 flex-1">


                    <!-- =================================================
                     KONTEN UTAMA KIRI
                     ================================================== -->
                    <div class="absolute inset-0 overflow-hidden">

                        <!-- BACKGROUND FOTO + BLUR -->
                        <div class="absolute inset-0">

                            <img src="/assets/bc9.png" alt="BGTK NTB" class="h-full w-full object-cover">

                            <!-- Overlay putih transparan -->
                            <div class="absolute inset-0 bg-white/40 backdrop-blur-[6px]"></div>

                        </div>


                        <!-- KONTEN TEXT -->
                        <div class="absolute left-[6%] top-[28%] z-10">

                            <!-- LABEL -->
                            <p class="mb-4 text-[clamp(14px,1.2vw,20px)]
                              font-medium tracking-wide text-white">
                                Digital Information Display
                            </p>


                            <!-- JUDUL -->
                            <h1 class="text-[clamp(48px,5vw,82px)]
                               font-extrabold
                               leading-[0.95]
                               tracking-tight
                               text-white">
                                Selamat Datang
                            </h1>


                            <!-- SUB JUDUL -->
                            <h2 class="mt-5
                               max-w-[900px]
                               text-[clamp(28px,2.5vw,48px)]
                               font-extrabold
                               leading-tight
                               text-white">
                                BGTK Provinsi Nusa Tenggara Barat
                            </h2>

                        </div>

                    </div>



                    <!-- =================================================
                    SIDEBAR KANAN
                     ================================================== -->
                    <div class="absolute right-0 top-0 h-full w-[25%]">


                        <!-- FOTO GEDUNG -->
                        <div class="h-[34%] w-full overflow-hidden">

                            <img src="/assets/kantor.jpg" alt="Gedung BGTK NTB" class="h-full w-full object-cover">

                        </div>


                        <!-- HEADER SIDEBAR -->
                        <div class="flex h-[18%] flex-col
                            items-center justify-center
                            bg-green-600
                            text-center
                            text-white">

                            <p class="text-[clamp(12px,1vw,17px)]
                              font-medium">
                                Informasi Jam Kerja
                            </p>

                            <h3 class="mt-1
                               text-[clamp(24px,2.3vw,40px)]
                               font-extrabold">
                                BGTK NTB
                            </h3>

                        </div>


                        <!-- =================================================
                        JAM KERJA
                        ================================================== -->
                        <div class="flex h-[48%] flex-col
                            justify-center
                            bg-[#414141]
                            px-[10%]
                            text-white">


                            <!-- JAM MASUK -->
                            <div>

                                <p class="text-[clamp(10px,0.8vw,14px)]
                                  font-medium
                                  uppercase
                                  tracking-[0.12em]
                                  text-gray-300">
                                    Jam Masuk
                                </p>

                                <p class="mt-1
                                  text-[clamp(30px,2.8vw,48px)]
                                  font-bold
                                  leading-none">
                                    07:30
                                </p>

                            </div>


                            <!-- PEMBATAS -->
                            <div class="my-7 h-px w-full bg-white/20"></div>


                            <!-- JAM PULANG -->
                            <div>

                                <p class="text-[clamp(10px,0.8vw,14px)]
                                  font-medium
                                  uppercase
                                  tracking-[0.12em]
                                  text-gray-300">
                                    Jam Pulang
                                </p>

                                <p class="mt-1
                                  text-[clamp(30px,2.8vw,48px)]
                                  font-bold
                                  leading-none">
                                    16:00
                                </p>

                            </div>


                            <!-- HARI KERJA -->
                            <p class="mt-7
                              text-center
                              text-[clamp(10px,0.8vw,14px)]
                              text-gray-300">
                                Senin – Jumat
                            </p>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                 FOOTER INFORMASI
                ====================================================== -->
                <div class="h-[22%] shrink-0 border-t border-gray-200 bg-white">


                    <div class="grid h-full w-full
                        grid-cols-[80px_minmax(0,1fr)_150px_1px_270px]
                        items-center
                        gap-3
                        px-[4%]">


                        <!-- =================================================
                         LOGO
                         ================================================== -->
                        <div class="flex items-center justify-center">

                            <img src="/assets/Logo-Tut-Wuri-Handayani-PNG-Warna.png" alt="Tut Wuri Handayani"
                                class="h-[100px] w-[100px] object-contain">

                        </div>


                        <!-- =================================================
                         INFORMASI BGTK
                        ================================================== -->
                        <div class="min-w-0 pl-3">

                    
                         <h3 class="text-[clamp(12px,1.2vw,30px)]
                               font-extrabold
                               leading-tight
                               text-black">
                                Digital Information Display 
                            </h3>

                            <p class="mt-1
                              max-w-2xl
                              text-[clamp(11px,0.9vw,22px)]
                              leading-relaxed
                              text-gray-500">
                                Media informasi digital untuk menyajikan informasi pegawai,
                                kehadiran, kinerja, kegiatan, agenda, dan informasi terkini
                                BGTK Provinsi NTB.
                            </p>
                        </div>


                        <!-- =================================================
                         CUACA
                         ================================================== -->
                        <div class="flex items-center justify-center">

                            <div class="flex items-center gap-2">

                                <div class="text-right">

                                    <span id="temperature" class="text-[clamp(25px,2.1vw,38px)]
                                       font-medium
                                       leading-none
                                       text-black">
                                        --
                                    </span>

                                    <span class="text-xs text-black">
                                        °C
                                    </span>

                                </div>


                                <span id="weather-icon" class="text-[clamp(27px,2.2vw,40px)]
                                   leading-none">
                                    ☁️
                                </span>

                            </div>

                        </div>


                        <!-- =================================================
                         GARIS PEMISAH
                        ================================================== -->
                        <div class="h-[65%] w-px bg-gray-300"></div>


                        <!-- =================================================
                         JAM & TANGGAL
                        ================================================== -->
                        <div class="flex h-full items-center justify-center bg-white">

                            <div class="text-center">

                                <div id="clock" class="text-[clamp(36px,3.3vw,58px)]
                                   font-light
                                   leading-none
                                   tracking-tight
                                   text-black">
                                    00:00:00
                                </div>

                                <div id="date" class="mt-1
                                   text-[clamp(13px,1.1vw,20px)]
                                   font-medium
                                   text-black">
                                    Memuat tanggal...
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- SLIDE 2 : PROFIL -->
        <!-- ================================================= -->

        <section class="slide h-full" data-slide="2">

            <div class="flex h-full flex-col justify-center">

                <div class="mb-8">

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-600">
                        Profil Instansi
                    </p>

                    <h2 class="mt-2 text-5xl font-bold text-slate-800">
                        BGTK Provinsi NTB
                    </h2>

                </div>


                <div class="grid grid-cols-2 gap-8">

                    <div class="rounded-3xl bg-white p-10 shadow-sm border border-slate-200">

                        <h3 class="text-2xl font-bold text-blue-800">
                            Tentang BGTK
                        </h3>

                        <p class="mt-5 text-lg leading-relaxed text-slate-600">
                            Balai Guru dan Tenaga Kependidikan Provinsi
                            Nusa Tenggara Barat merupakan unit kerja yang
                            mendukung peningkatan kompetensi dan
                            profesionalitas guru serta tenaga kependidikan.
                        </p>

                    </div>


                    <div class="rounded-3xl bg-blue-800 p-10 text-white shadow-lg">

                        <h3 class="text-2xl font-bold">
                            Informasi Utama
                        </h3>

                        <div class="mt-6 space-y-5">

                            <div>
                                <p class="text-sm text-blue-200">
                                    WILAYAH KERJA
                                </p>

                                <p class="mt-1 text-xl font-semibold">
                                    Nusa Tenggara Barat
                                </p>
                            </div>

                            <div>
                                <p class="text-sm text-blue-200">
                                    BIDANG
                                </p>

                                <p class="mt-1 text-xl font-semibold">
                                    Guru & Tenaga Kependidikan
                                </p>
                            </div>

                            <div>
                                <p class="text-sm text-blue-200">
                                    MEDIA INFORMASI
                                </p>

                                <p class="mt-1 text-xl font-semibold">
                                    Digital Information Display
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================================================= -->
        <!-- SLIDE 3 : KEHADIRAN -->
        <!-- ================================================= -->

        <section class="slide h-full" data-slide="3">

            <div class="h-full">

                <div class="mb-8">

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-600">
                        Kehadiran Pegawai
                    </p>

                    <h2 class="mt-2 text-5xl font-bold text-slate-800">
                        Kehadiran Hari Ini
                    </h2>

                </div>


                <!-- STATISTIK -->

                <div class="grid grid-cols-4 gap-6">

                    <div class="rounded-2xl bg-white p-7 shadow-sm border border-slate-200">

                        <p class="text-slate-500">
                            Hadir
                        </p>

                        <p class="mt-3 text-5xl font-bold text-blue-700">
                            42
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-7 shadow-sm border border-slate-200">

                        <p class="text-slate-500">
                            Terlambat
                        </p>

                        <p class="mt-3 text-5xl font-bold text-orange-500">
                            3
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-7 shadow-sm border border-slate-200">

                        <p class="text-slate-500">
                            Dinas
                        </p>

                        <p class="mt-3 text-5xl font-bold text-indigo-600">
                            4
                        </p>

                    </div>


                    <div class="rounded-2xl bg-white p-7 shadow-sm border border-slate-200">

                        <p class="text-slate-500">
                            Izin
                        </p>

                        <p class="mt-3 text-5xl font-bold text-slate-600">
                            2
                        </p>

                    </div>

                </div>


                <!-- DAFTAR PEGAWAI -->

                <div class="mt-8 rounded-3xl bg-white shadow-sm border border-slate-200">

                    <div class="border-b border-slate-100 px-8 py-5">

                        <h3 class="text-2xl font-bold">
                            Pegawai Hadir Hari Ini
                        </h3>

                        <p class="text-slate-500">
                            Data kehadiran pegawai
                        </p>

                    </div>


                    <div class="grid grid-cols-3 divide-x divide-slate-100">

                        <div class="p-6">

                            <p class="text-xl font-semibold">
                                Ahmad
                            </p>

                            <p class="text-slate-500">
                                Staf Administrasi
                            </p>

                            <p class="mt-3 font-bold text-blue-700">
                                07:42
                            </p>

                        </div>


                        <div class="p-6">

                            <p class="text-xl font-semibold">
                                Budi
                            </p>

                            <p class="text-slate-500">
                                Pengelola Data
                            </p>

                            <p class="mt-3 font-bold text-blue-700">
                                07:48
                            </p>

                        </div>


                        <div class="p-6">

                            <p class="text-xl font-semibold">
                                Citra
                            </p>

                            <p class="text-slate-500">
                                Analis Kepegawaian
                            </p>

                            <p class="mt-3 font-bold text-blue-700">
                                07:53
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================================================= -->
        <!-- SLIDE 4 : INFORMASI -->
        <!-- ================================================= -->

        <section class="slide h-full" data-slide="4">

            <div class="flex h-full flex-col justify-center">

                <div class="mb-8">

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-600">
                        Informasi
                    </p>

                    <h2 class="mt-2 text-5xl font-bold text-slate-800">
                        Agenda & Pengumuman
                    </h2>

                </div>


                <div class="grid grid-cols-2 gap-8">

                    <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-xl text-blue-700">
                                01
                            </div>

                            <div>

                                <p class="text-sm text-blue-600">
                                    AGENDA
                                </p>

                                <h3 class="text-2xl font-bold">
                                    Kegiatan BGTK
                                </h3>

                            </div>

                        </div>

                        <p class="mt-6 text-lg leading-relaxed text-slate-600">
                            Pelaksanaan kegiatan peningkatan kompetensi
                            guru dan tenaga kependidikan.
                        </p>

                    </div>


                    <div class="rounded-3xl bg-white p-8 shadow-sm border border-slate-200">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-xl text-blue-700">
                                02
                            </div>

                            <div>

                                <p class="text-sm text-blue-600">
                                    PENGUMUMAN
                                </p>

                                <h3 class="text-2xl font-bold">
                                    Informasi Terbaru
                                </h3>

                            </div>

                        </div>

                        <p class="mt-6 text-lg leading-relaxed text-slate-600">
                            Informasi terbaru mengenai kegiatan,
                            pelayanan, dan agenda BGTK Provinsi NTB.
                        </p>

                    </div>

                </div>

            </div>

        </section>


    </main>


    <!-- ===================================================== -->
    <!-- FOOTER -->
    <!-- ===================================================== -->

    <!-- <footer class="fixed bottom-0 left-0 right-0 border-t border-slate-200 bg-white px-10 py-3">

        <div class="flex items-center justify-between">

            <p class="text-sm font-medium text-slate-500">
                BGTK Provinsi Nusa Tenggara Barat
            </p>

            <div class="flex items-center gap-4">

                <span id="slideIndicator" class="text-sm font-medium text-blue-700">
                    01 / 04
                </span>

                <span class="text-sm text-slate-400">
                    Digital Information Display
                </span>

            </div>

        </div>

    </footer> -->


    <!-- ===================================================== -->
    <!-- JAVASCRIPT -->
    <!-- ===================================================== -->

    <script>

        /*
        |--------------------------------------------------------------------------
        | JAM DAN TANGGAL
        |--------------------------------------------------------------------------
        */

        function updateDateTime() {

            const now = new Date();

            const time = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            const date = now.toLocaleDateString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            document.getElementById('clock').textContent = time;
            document.getElementById('date').textContent = date;
        }

        updateDateTime();

        setInterval(updateDateTime, 5000);

        // =====================================================
        // CUACA REAL-TIME BGTK NTB
        // Lokasi: Mataram, Nusa Tenggara Barat
        // =====================================================

        async function updateWeather() {

            const latitude = -8.5833;
            const longitude = 116.1167;

            try {

                const response = await fetch(
                    `https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&current=temperature_2m,weather_code&timezone=Asia%2FMakassar`
                );

                const data = await response.json();

                const temperature = Math.round(
                    data.current.temperature_2m
                );

                const weatherCode = data.current.weather_code;

                document.getElementById('temperature').textContent =
                    temperature;

                document.getElementById('weather-icon').textContent =
                    getWeatherIcon(weatherCode);

            } catch (error) {

                console.error('Gagal mengambil data cuaca:', error);

                document.getElementById('temperature').textContent = '--';
                document.getElementById('weather-icon').textContent = '☁';

            }
        }


        // =====================================================
        // ICON CUACA
        // =====================================================

        function getWeatherIcon(code) {

            if (code === 0) {
                return '☀️';
            }

            if (code === 1 || code === 2) {
                return '🌤️';
            }

            if (code === 3) {
                return '☁️';
            }

            if (
                code === 45 ||
                code === 48
            ) {
                return '🌫️';
            }

            if (
                code >= 51 &&
                code <= 67
            ) {
                return '🌧️';
            }

            if (
                code >= 71 &&
                code <= 77
            ) {
                return '❄️';
            }

            if (
                code >= 80 &&
                code <= 82
            ) {
                return '🌦️';
            }

            if (
                code >= 95
            ) {
                return '⛈️';
            }

            return '☁️';
        }


        // Jalankan pertama kali
        updateWeather();

        // Perbarui setiap 10 menit
        setInterval(updateWeather, 10 * 60 * 1000);
        /*
        |--------------------------------------------------------------------------
        | SLIDE SYSTEM
        |--------------------------------------------------------------------------
        */

        const slides = document.querySelectorAll('.slide');

        const slideIndicator = document.getElementById('slideIndicator');

        let currentSlide = 0;

        const slideDuration = 8000;


        function showSlide(index) {

            slides.forEach((slide) => {
                slide.classList.remove('active');
            });

            slides[index].classList.add('active');

            const number = String(index + 1).padStart(2, '0');

            const total = String(slides.length).padStart(2, '0');

            if (slideIndicator) {
                slideIndicator.textContent = `${number} / ${total}`;
            }
        }


        function nextSlide() {

            currentSlide++;

            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }

            showSlide(currentSlide);
        }


        showSlide(currentSlide);

        setInterval(nextSlide, slideDuration);

    </script>

</body>

</html>