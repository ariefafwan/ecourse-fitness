<footer id="footer" class="footer shadow-sm p-3  bg-body rounded border border-light" data-aos="fade-up" data-aos-delay="50">

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 d-flex">
                <div>
                    <h4 class="fs-5">Tentang Kami</h4>
                        <img src="/img/gym.jpg" alt="logo" width="100">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 footer-links d-flex">
                <div class="">
                    <h4 class="fs-5 fw-semibold">Dashboard</h4>
                    <p class="fw-light">
                        <strong class="fst">
                            <a href="/login">dashboard</a>
                        </strong>
                        <br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 footer-links d-flex">
                <div class="">
                    <h4 class="fs-5 fw-semibold">Lainnya</h4>
                    <p class="fw-light">
                        <strong class="fst">
                            <a href="{{ route('berita.index') }}">Berita</a>
                        </strong><br>
                        <strong class="fst">
                            <a href="#">Kontak</a>
                        </strong><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 footer-links">
                <h4 class="fs-5 fw-semibold">TEMUKAN KAMI DI</h4>
                <div class="social-links d-flex">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                {{-- <p class="h6 fst-italic">Email : sisteminformasi@unimal.ac.id</p> --}}
            </div>

        </div>
    </div>
    <hr class="bg-secondary">
    <div class="container">
        <div class="copyright fst-italic">
            &copy; Copyright <strong>
                <span>
                    <a href="/"> Ecourse-Fitness</a>
                    <b>|</b>
                </span>
            </strong>
            <span class="text-primary fw-bold">
                <a class="fw-bold"  target="_black"> Hidayat</a>
                .</span>2023
        </div>
    </div>

</footer>
