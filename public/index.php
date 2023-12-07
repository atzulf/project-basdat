<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:ital,wght@0,300;0,400;0,600;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-sky-100">

    <?php
        $koneksi = mysqli_connect('localhost', 'root', '', 'rentalfilm') or die ('
        koneksi gagal');
    ?>

<!-- Navbar -->
<header class="bg-sky-300 absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-cyan-50 block py-6">Ataka Dzulfikar</a>
            </div>

            <?php
            $koneksi = mysqli_connect('localhost', 'root', '', 'rentalfilm') or die ('
            koneksi gagal');
            ?>

            <!-- Class yang digunakan untuk membuat garis 3 -->
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
                </button>

                <!-- Class untuk pembuatan navbar -->
                <nav id="nav-menu" class="hidden absolute py-5 bg-sky-400 shadow-lg rounded-lg max-w-[250px] w-full right-2 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home" class="font text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="#about" class="text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Studi Kasus</a>
                        </li>
                        <li class="group">
                            <a href="#query1" class="text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Query 1</a>
                        </li>
                        <li class="group">
                            <a href="#query2" class="text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Query 2</a>
                        </li>
                        <li class="group">
                            <a href="#query3" class="text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Query 3</a>
                        </li>
                        <li class="group">
                            <a href="#query4" class="text-base text-birdong py-2 mx-8 flex group-hover:text-blue-700 font-[Poppins]">Query 4</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Navbar -->

    <!-- Halaman Awal -->
    <section id="home" class="pt-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold font-sans text-birdong md:text-xl lg:text-2xl">Project website ,
                        <span class="block font-bold text-sky-950 font-mono text-3xl mt-1 lg:text-3xl">BASIS DATA
                        </span>
                    </h1>
                    <h2 class="py-2 font-medium text-sky-900 mb-2 font-sans lg:text-2xl">Ataka Dzulfikar 22537141002</h2>
                    <p class="font-[Poppins] font-semibold text-sky-800 ">Mahasiswa Semester 3 Prodi Teknologi Informasi UNY</p>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="ilus.png"
                        class="max-w-full mx-auto"/>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Halaman Awal selesai -->

<!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10">
                    <h2 class="font-[Poppins] text-2xl py-2 font-bold">Studi Kasus Basis Data 3</h2>
                    <h4 class="font-[Poppins] text-xl">Sistem Rental Film </h4>
                    <p class="text-justify pt-8 font-sans">Film-film disewakan di toko-toko dan ada beberapa toko. Setiap toko memiliki distributor unik yang memasok toko dengan kaset. Distributor dapat menyediakan lebih dari satu toko. Setiap distributor memiliki nama, alamat, dan nomor telepon. Setiap toko memiliki nama, alamat, dan nomor telepon. Untuk setiap karyawan kita harus menyimpan informasi berikut: toko kerja, nama, supervisor, alamat , nomor telepon, SIN (nomor asuransi sosial) dan tanggal ketika karyawan dipekerjakan. Untuk setiap pelanggan, kita harus menyimpan informasi berikut: nama, alamat, dan nomor telepon (jika ada).
                        Untuk setiap penyewaan, kita harus melacak karyawan mana yang melayani pelanggan, film mana dan salinan mana (yaitu jenis) yang disewa pelanggan, informasi tentang pembayaran, tanggal dan waktu sewa, status (disewakan, returned_in_time, returned_late), tarif (yaitu harga), dan jika berlaku, tanggal jatuh tempo dan biaya jatuh tempo. Tentang pembayaran kita harus menjaga mana dari karyawan yang menerima pembayaran (tidak harus karyawan yang sama yang menyewa rekaman), jenis pembayaran (yaitu uang tunai, cek, kartu kredit, debit langsung - untuk setiap jenis yang harus diberikan untuk informasi yang relevan untuk disimpan, misalnya nomor kartu kredit jika kartu kredit digunakan), jumlah pembayaran , tanggal + waktu pembayaran, status pembayaran (selesai jika uang tunai atau uang telah diterima, disetujui jika kartu debit atau kredit dilalui, sambil menunggu jika cek belum dibersihkan). Tentang setiap rekaman kita harus menyimpan informasi dalam kondisi apa rekaman itu dan film apa yang ada di rekaman itu. Tentang setiap film kita harus menyimpan data judulnya, nama sutradara, deskripsi sederhana, nama bintang utama (tunggal), peringkat film (nomor penggunaan 1-5).
                        </p>
                </div>
            </div>
        </div>
    </section>
<!-- About Section End -->

<!-- Query 1 -->
    <section id="query1" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-sky-950 font-[Poppins]">Query 1</h4>
                    <h2 class=" text-birdong text-lg mb-4">Menampilkan Semua Pelanggan yang tinggal di hamilton pada Customer id dan Customer nama</h2>
                    <table class="shadow-xl font-[Poppins] border-4 border-cyan-200 w-full max-w-xl mx-auto text-center mb-16">
                        <thead class="text-white">
                            <tr>
                                <th class="py-3 bg-cyan-800">ID Pelanggan</th>
                                <th class="py-3 bg-cyan-800">Nama Pelanggan</th>
                                <th class="py-3 bg-cyan-800">Nama Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $Datas = mysqli_query($koneksi, "
                        SELECT cust_id AS ID_Pelanggan, 
                        cust_nm AS nama_Pelanggan, 'Hamilton' 
                        AS nama_Kota FROM customer WHERE cust_cty='Hamilton'");
                        $counter = 0;
                        while ($row = mysqli_fetch_array($Datas)) { 
                            $bg = $counter % 2 == 0 ? "" : "bg-cyan-50";
                            ?>
                            <tr class="bg-cyan-50 cursor-pointer duration-300" <?php echo $bg ?>>
                                <td class="py-3 px-6"><?php echo $row["ID_Pelanggan"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["nama_Pelanggan"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["nama_Kota"] ?></td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<!-- Query 1 -->

<!-- Query 2 -->
<section id="query2" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto text-center mb-16"> <!-- Atur lebar maksimum sesuai kebutuhan -->
                <h4 class="font-bold text-lg text-sky-950 font-[Poppins]">Query 2</h4>
                <h2 class="text-birdong text-lg mb-4">|| Soal no 4 || Menampilkan semua kaset yang tidak pernah disewakan di setiap toko, dan diurutkan berdasarkan filmid dan tapeid.</h2>
                <div class="overflow-x-auto">
                    <table class="shadow-xl font-[Poppins] border-4 border-cyan-50 w-full text-center mb-16"> <!-- Tambahkan kelas 'w-full' untuk membuat tabel memenuhi lebar container -->
                        <thead class="text-white">
                            <tr>
                                <th class="py-3 bg-cyan-800">ID Movie</th>
                                <th class="py-3 bg-cyan-800">Judul Film</th>
                                <th class="py-3 bg-cyan-800">Tape ID</th>
                                <th class="py-3 bg-cyan-800">Store ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $Datas = mysqli_query($koneksi, "
                        SELECT t.movie_id, m.movie_title, t.tape_id, t.store_id
                        FROM tape t
                        LEFT JOIN movie m ON t.movie_id = m.movie_id
                        WHERE (t.movie_id, t.tape_id, t.store_id) NOT IN (
                            SELECT m.movie_id, m.tape_id, m.store_id
                            FROM movie_rental m
                        )
                        ORDER BY t.movie_id, t.tape_id;
                        ");

                        $counter = 0;
                        while ($row = mysqli_fetch_array($Datas)) { 
                            $bg = $counter % 2 == 0 ? "" : "bg-cyan-50";
                            ?>
                            <tr class="bg-cyan-50 cursor-pointer duration-300" <?php echo $bg ?>>
                                <td class="py-3 px-6"><?php echo $row["movie_id"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["movie_title"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["tape_id"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["store_id"] ?></td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Query 2 -->

<!-- Query 3 -->
<section id="query3" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto text-center mb-16"> <!-- Atur lebar maksimum sesuai kebutuhan -->
                <h4 class="font-bold text-lg text-sky-950 font-[Poppins]">Query 3</h4>
                <h2 class="text-birdong text-lg mb-4">|| Soal no 8 || Tampilkan 5 pelanggan teratas berdasarkan total pembayaran mereka, dan urutkan total pembayaran mereka secara menurun.</h2>
                <div class="overflow-x-auto">
                    <table class="shadow-xl font-[Poppins] border-4 border-cyan-50 w-full text-center mb-16"> <!-- Tambahkan kelas 'w-full' untuk membuat tabel memenuhi lebar container -->
                        <thead class="text-white">
                            <tr>
                                <th class="py-3 bg-cyan-800">ID Pelanggan</th>
                                <th class="py-3 bg-cyan-800">Nama Pelanggan</th>
                                <th class="py-3 bg-cyan-800">Total Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $Datas = mysqli_query($koneksi, "
                        SELECT 
                            p.cust_id AS ID_Pelanggan, 
                            c.cust_nm AS nama_Pelanggan, 
                            SUM(p.pay_amount) AS total_payment
                        FROM 
                            payment p
                        JOIN 
                            customer c ON p.cust_id = c.cust_id
                        GROUP BY 
                            p.cust_id
                        ORDER BY 
                            total_payment DESC
                        LIMIT 5;
                        ");

                        $counter = 0;
                        while ($row = mysqli_fetch_array($Datas)) { 
                            $bg = $counter % 2 == 0 ? "" : "bg-cyan-50";
                            ?>
                            <tr class="cursor-pointer duration-300 <?php echo $bg ?>">
                                <td class="py-3 px-6"><?php echo $row["ID_Pelanggan"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["nama_Pelanggan"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["total_payment"] ?></td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Query 3 -->

<!-- Query 4 -->
<section id="query4" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-4xl mx-auto text-center mb-16"> <!-- Atur lebar maksimum sesuai kebutuhan -->
                <h4 class="font-bold text-lg text-sky-950 font-[Poppins]">Query 4</h4>
                <h2 class="text-birdong text-lg mb-4">|| Soal no 9 || Tampilkan Daftar semua film yang disewa pelanggan. Silakan tampilkan kolom: movie_title, rental_status, rental_rate, rental_employee, pekerja yang menerima pembayaran, payment_type dan payment_status</h2>
                <div class="overflow-x-auto">
                    <table class="shadow-xl font-[Poppins] border-4 border-cyan-50 w-full text-center mb-16 text-xs"> <!-- Tambahkan kelas 'w-full' untuk membuat tabel memenuhi lebar container -->
                        <thead class="text-white">
                            <tr>
                                <th class="py-3 bg-cyan-800 text-xs">Movie title</th>
                                <th class="py-3 bg-cyan-800 text-xs">Rental Status</th>
                                <th class="py-3 bg-cyan-800 text-xs">Rental Rate</th>
                                <th class="py-3 bg-cyan-800 text-xs">Rental Employee</th>
                                <th class="py-3 bg-cyan-800 text-xs">Cashier Employee</th>
                                <th class="py-3 bg-cyan-800 text-xs">Payment Type</th>
                                <th class="py-3 bg-cyan-800 text-xs">Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $Datas = mysqli_query($koneksi, "
                        SELECT 
                            m.movie_title,
                            rs.rdesc AS Status_Rentalan,
                            m.rating AS rental_rating,
                            e.emp_nm AS Pegawai_Rental,
                            emp.emp_nm AS Pembayaran_diterima_oleh,
                            pt.pt_desc AS Type_pembayaran,
                            ps.payment_desc AS Status_pembayaran
                        FROM 
                            movie_rental mr
                        JOIN 
                            movie m ON mr.movie_id = m.movie_id
                        JOIN 
                            rental_status rs ON mr.rentstatus_id = rs.rentstatus_id
                        JOIN 
                            employee e ON mr.emp_sin = e.emp_sin
                        JOIN 
                            payment p ON mr.pay_id = p.pay_id
                        JOIN 
                            employee emp ON p.emp_sin = emp.emp_sin
                        JOIN 
                            payment_type pt ON p.pt_id = pt.pt_id
                        JOIN 
                            payment_status ps ON p.pstatus_id = ps.pstatus_id;

                        ");

                        $counter = 0;
                        while ($row = mysqli_fetch_array($Datas)) { 
                            $bg = $counter % 2 == 0 ? "" : "bg-cyan-50";
                            ?>
                            <tr class="cursor-pointer duration-300 <?php echo $bg ?>">
                                <td class="py-3 px-6"><?php echo $row["movie_title"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["Status_Rentalan"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["rental_rating"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["Pegawai_Rental"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["Pembayaran_diterima_oleh"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["Type_pembayaran"] ?></td>
                                <td class="py-3 px-6"><?php echo $row["Status_pembayaran"] ?></td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Query 4 -->

<script src="js/script.js"></script>
</body>
</html>