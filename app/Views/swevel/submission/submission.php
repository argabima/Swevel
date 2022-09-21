<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/materia/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
<link rel="stylesheet" href="/sidebar-assets/css/sidebar.css">
<link rel="stylesheet" href="/sidebar-assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="/sidebar-assets/js/main.js"></script>

<main>
    <header>
        <div class="container m-5 p-4">
            <div class="row" id="section1">
                <h2 class="row fw-bold">Submission Tugas Akhir : Pemrograman Dengan Kotlin</h2>
                <p><b>Kuis Latihan</b> &emsp;&emsp;&emsp; 20 Min</p>
            </div>
            <div class="row">
                <p>Selamat! Anda berada di penghujung akhir kelas. Sejauh ini Anda telah:</p>
                <br>
                <div class="dot mb-3">
                    <li>mengetahui car menjalankan dan menangani proses asynchronous di komponen
                        Kotlin</li>
                    <li>mengetahui fase mounting, updating, dan unmounting di komponen Kotlin,</li>
                    <li>mengetahui cara bypass props drilling dalam mengirimkan state antar komponen
                        dengan Kotlin Context, dan</li>
                    <li>menuliskan kode React yang lebih baik dengan memanfaatkan fitur Hooks.</li>
                </div>
                <p>Untuk menguji pemahaman dan lulus dari kelas ini, Anda perlu menyelesaikan
                    submission akhir. Submission akhir di kelas in merupakan tugas lanjutan dari proyek
                    yang sudah Anda kerjakan pada submission awal. Tentunya, dengan penambahan fitur
                    yang akan kami jelaskan kriterianya. Nantinya, tim Reviewer kami akan memeriksa
                    pekerjaan Anda dan memberikan reviu pada proyek yang Anda buat.</p>
                <div class="title-kriteria" id="link-utama">
                    <h3>Kriteria</h3>
                    <p>Kembangkan aplikasi catatan pribadi dengan kriteria berikut ini
                        PAAPI, lembangun context</p>
                </div>
                <div class="item-kriteria1" id="link-1">
                    <p><strong>Kriteria Utama 1 :</strong> Memanfaatkan RESTful API sebagai sumber data
                        Aplikasi harus memanfaatkan RESTful API sebagai sumber data dengan detail berikut.</p>
                    <div class="dot mb-3" style="display:block;left: 20px;position:relative">
                        <li>RESTful API yang digunakan adalah https://notes-api.dicodingvi. Dokumanrasi API
                            bisa Anda akses pada tautan tersebut.</li>
                        <li>Harus menggunakan RESTful API sebagai sumber data dalam berbagai fitur di
                            aplikasi catatan, seperti:</li>
                        <ol class="mt-2" type="o">
                            <li>registrasi dan autentikasi, daftar catatan, daftar catatan terarsip (opsional), detil catatan, arsip/batal arsip catatan (opsional), dan</li>
                            <li>hapus catalan laulya Nalchilah Referensi</li>
                        </ol>
                    </div>
                </div>
                <div class="item-kriteria2" id="link-2">
                    <p><strong>Kriteria Utama 2 :</strong> Registrasi dan Autentikasi</p>
                    <p>Pengguna Aplikasi memiliki fitur registrasi dan autentikasi (lopin) penguna dengan detail berikut</p>
                    <p>Membuat halaman bar untuk registrasi pengguna dengan input.</p>
                    <div class="dot mb-3" style="display:block;left: 20px;position:relative">
                        <li>password, dan confirm password (opsional)
                        </li>
                        <li>Membuat halaman baru untuk autentikasi (loRin) pengguna dengan input email dan
                            Dasswore Menyimpan access token dari proses autentikasi di local storage (Anda bisa
                            gunakan fungsi yang telah kami sediakan). Simpan data pengguna yang terautentikasi
                        </li>
                    </div>
                </div>
                <div class="item-kriteria3 mb-3" id="link-3">
                    <p><strong>Kriteria Utama 3 :</strong> Memproteksi Fitur Catatan</p>
                    <p>Fitur Catatan hanya dapat diakses oleh pengguna yang telah terautentikasi. Berikut
                        detailnya. Fitur catatan seperti daftar catatan, detail catatan, dan haps catatan hanya dapat
                        diakses bila pengguna telah melakukan autentikasi. Bila belum, pengguna hanya dapat
                        mensakses halaman login atau registrasi saia (Menampilkan resoure atatan vans hanva dimilki olen pens?una vane</p>
                </div>

                <div class="row mb-3 justify-content-center" style="background-color: #F1E5FF;height: 300px;position: relative;width: 800px;margin: auto; border-radius: 20px;">
                    <h4 class="text-center mt-5 pt-5">KIRIM TUGAS AKHIR DENGAN FORMAT ZIP DISINI</h4>
                    <button type="button" id="" class="btn btn-purple" style="width: 400px; height:50px; color:white">
                        <h5>SUBMIT TUGAS AKHIR</h5>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <aside>
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="m-auto" style="width: 90px;height:20px; position:relative;"><img src="/img/pexels-fauxels-3184652 1.jpeg" alt=""></a>
                <i class="btn-sidebar-close mdi mdi-close mdi-24px"></i>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="header-menu">
                        <span>SUBMISSION</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">Dashboard</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#link-utama">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#link-1">Dashboard v.1</a></li>
                                            <li><a href="#link-2">Dashboard v.2</a></li>
                                            <li><a href="#link-3">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">E-commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">E-commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">E-commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">E-commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <span class="menu-text">E-commerce</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="#">
                                        <span class="menu-text2">Dashboard v.1</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.2</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"><span class="menu-text2">Dashboard v.3</span></a>
                                    <div class="sidebar-submenu2">
                                        <ul>
                                            <li><a href="#">Dashboard v.1</a></li>
                                            <li><a href="#">Dashboard v.2</a></li>
                                            <li><a href="#">Dashboard v.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <div class="sidebar-footer">
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                        <i class="mdi mdi-bell mdi-18px"></i>
                        <span class="badge badge-pill badge-warning">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="notifications-header">
                            <i class="mdi mdi-bell"></i>
                            Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="mdi mdi-check-bold text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Do eiusmod tempor incididunt est pariatur aute laboris cillum consequat reprehenderit excepteur.</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="mdi mdi-exclamation-thick text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Deserunt fugiat exercitation cillum duis cillum tempor esse incididunt ex esse mollit.</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="mdi mdi-alert text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Ullamco minim nostrud exercitation ipsum eu.</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                        <i class="mdi mdi-email mdi-18px"></i>
                        <span class="badge badge-pill badge-success">7</span>
                    </a>
                    <div class="dropdown-menu messages">
                        <div class="messages-header">
                            <i class="mdi mdi-email"></i>
                            Messages
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong>Sander Sørensen</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong>Jenny Ford</strong>
                                    </div>
                                    <div class="message-detail">Veniam velit tempor aliquip duis deserunt culpa et fugiat ea minim.</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong>Kayla Wood</strong>
                                    </div>
                                    <div class="message-detail">Voluptate sint laboris est officia quis dolore laborum ex magna tempor id aute.</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all messages</a>

                    </div>
                </div>
                <a href="#"><i class="mdi mdi-cog mdi-18px"></i> </a>
                <a href="#"><i class="mdi mdi-power mdi-18px"></i></a>
            </div> -->
        </nav>
        <a class="btn-sidebar-show btn btn-sm btn-dark" href="#">
            <i class="mdi mdi-menu" style="font-size:20px"></i>
        </a>
    </aside>
</main>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<?= $this->endSection(); ?>