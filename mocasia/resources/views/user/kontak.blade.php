@extends('user.layout.main')
@section('user.container')
    <style>
        .rating {
            display: inline-flex;
            flex-direction: row-reverse;
            /* Urutkan dari kanan ke kiri */
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            width: 40px;
            /* Ukuran ikon bintang */
            height: 40px;
            margin: 0;
            padding: 0;
            font-size: 30px;
            /* Besar ikon bintang */
            line-height: 40px;
            text-align: center;
            color: #ddd;
            /* Warna default bintang */
        }

        .rating label:hover,
        .rating label:hover~label,
        .rating input:checked~label {
            color: #ffc107;
            /* Warna emas untuk bintang yang di-hover atau dipilih */
        }
    </style>

    <section class="bg0 p-t-145 p-b-100">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                    <div class="how-pos1">
                        <img src="assets/images/icons/mocasia.png" width="60px" alt="IMG">
                    </div>
                </div>
                <h2 class="txt-center txt-m-401 cl10 how-pos1-parent m-all-7" style="color: #564067">Hubungi Kami</h2>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Tinggalkan pesan untuk kami!
                </h3>
            </div>

            <form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
                <div class="row">
                    <div class="col-sm-6 p-b-30">
                        <div class="validate-input" data-validate="Nama harus diisi">
                            <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                name="name" placeholder="Nama Lengkap *">
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-30">
                        <div class="validate-input" data-validate="Email tidak valid. Contoh: ex@abc.xyz">
                            <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                name="email" placeholder="Email Anda *">
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-30">
                        <div>
                            <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                name="address" placeholder="Alamat Anda">
                        </div>
                    </div>

                    <div class="col-sm-6 p-b-30">
                        <div class="validate-input" data-validate="Nomor telepon harus diisi">
                            <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20" type="text"
                                name="phone" placeholder="Nomor Telepon *">
                        </div>
                    </div>

                    <div class="col-12 p-b-30">
                        <div class="validate-input" data-validate="Pesan harus diisi">
                            <textarea class="txt-s-101 cl3 plh1 size-a-47 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10" name="msg"
                                placeholder="Pesan Anda"></textarea>
                        </div>
                    </div>

                    <div class="col-12 p-b-30">
                        <div class="validate-input">
                            <label for="rating" class="txt-s-101 cl3">Penilaian:</label><br>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5" title="Excellent"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4" title="Very good"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3" title="Good"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2" title="Poor"><i class="fa fa-star"></i></label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1" title="Very Poor"><i class="fa fa-star"></i></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-c p-t-10">
                    <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                        Kirim Sekarang
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Font Awesome CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- JavaScript untuk warna bintang --}}
    <script>
        // Menggunakan JavaScript untuk menangani perubahan warna bintang
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.rating input[type="radio"]');
            stars.forEach(star => {
                star.addEventListener('change', function() {
                    // Menghapus kelas active dari semua label
                    stars.forEach(s => s.parentNode.classList.remove('active'));
                    // Menambahkan kelas active ke label yang dipilih dan semua sebelumnya
                    let selected = this;
                    while (selected) {
                        selected.parentNode.classList.add('active');
                        selected = selected.previousElementSibling;
                    }
                });
            });
        });
    </script>
@endsection
