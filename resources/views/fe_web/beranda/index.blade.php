@include('fe_web.part.header')

<div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="water-flow-animation">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('fe_web.part.navbar')
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0" style="font-family: 'Quicksand', sans-serif;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                @foreach($adminberanda as $data)
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"><span class="text-custom" style="font-family: 'Quicksand', sans-serif;">{{ $data->beranda1}}</span></h1>
                    <p class="animated fadeIn mb-4 pb-2" style="font-family: 'Quicksand', sans-serif;">{{ $data->beranda2 }}</p>
                    {{-- <a href="#footer" class="btn btn-info py-2 px-4 me-3 animated fadeIn text-white">Kontak Kami</a> --}}
                    <a href="#footer" class="button-custom py-2 px-4 me-3 animated fadeIn text-white" style="font-family: 'Quicksand', sans-serif;">Kontak Kami</a>

                    </div>
                @endforeach
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Building" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Education" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Health" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Children" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Road" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/400/600?Scholarship" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid button-custom mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" style="font-family: 'Quicksand', sans-serif;" placeholder="Search Donasi">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3" style="font-family: 'Quicksand', sans-serif;">
                                    <option selected>Kategori Donasi</option>
                                    <option value="1">Infrastruktur</option>
                                    <option value="2">Pendidikan</option>
                                    <option value="3">Kesehatan</option>
                                    <option value="3">Makanan</option>
                                </select>
                            </div>
                            <div class="col-md-4" style="font-family: 'Quicksand', sans-serif;">
                                <select class="form-select border-0 py-3">
                                    <option selected>Lokasi</option>
                                    <script>
                                        const cities = [
    "Ambon", "Banda Aceh", "Bandar Lampung", "Bandung", "Banjar", "Banjarmasin", "Bau-Bau", "Bekasi", "Bima", "Bintuhan",
    "Bitung", "Blitar", "Bogor", "Bontang", "Bukittinggi", "Cilegon", "Cimahi", "Denpasar", "Depok", "Dumai",
    "Gorontalo", "Gunungsitoli", "Indralaya", "Jakarta", "Jambi", "Kendari", "Kupang", "Langsa", "Lampung", "Lahat",
    "Lubuk Pakam", "Lubuklinggau", "Madiun", "Magelang", "Makassar", "Malang", "Manado", "Mataram", "Medan", "Metro",
    "Padang", "Padang Panjang", "Padang Sidempuan", "Pagar Alam", "Pangkal Pinang", "Pariaman", "Pasuruan", "Pekanbaru", "Pematangsiantar", "Polewali Mandar",
    "Pontianak", "Prabumulih", "Salatiga", "Samarinda", "Sawahlunto", "Semarang", "Serang", "Sibolga", "Singkawang", "Solok",
    "Sorong", "Subulussalam", "Sukabumi", "Surabaya", "Surakarta", "Tangerang", "Tanjung Pandan", "Tanjung Pinang", "Tarakan", "Tasikmalaya",
    "Tebing Tinggi", "Ternate", "Tomohon", "Yogyakarta", "Lhokseumawe", "Sabang", "Subulussalam", "Sorong", "Bontang", "Bau-Bau",
    "Baturaja", "Payakumbuh", "Pangkal Pinang", "Bukittinggi", "Padang Panjang", "Bintuhan", "Pangkal Pinang", "Prabumulih", "Padang", "Pangkal Pinang",
    "Lahat", "Lahat", "Lampung", "Metro", "Pangkal Pinang", "Bontang", "Semarang", "Surabaya", "Serang"
];
                                        
                                        cities.forEach(city => {
                                            document.write(`<option value="${city}">${city}</option>`);
                                        });
                                    </script>
                                </select>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="font-family: 'Quicksand', sans-serif;">
                        <button class="btn btn-dark border-0 w-100 py-3"><i class="fas fa-spin fa-icon"></i>
                            Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->



        
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3" style="font-family: 'Quicksand', sans-serif;"><strong>Pekerjaan Kami</strong></h1>
                            {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p> --}}
                            {{-- <p style="font-family: 'Quicksand', sans-serif;">{{ $data->fokus_pekerjaan}}</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">                        
                        @php
                        $categoryIcons = [
                            'All Data' => 'fa fa-database mr-2',
                            'Infrastruktur' => 'fas fa-hammer mr-2',
                            'Pendidikan' => 'fa fa-book mr-2',
                            'Kesehatan' => 'fa fa-hospital mr-2',
                            'Makanan' => 'fas fa-utensils mr-2',
                        ];
                        @endphp


                        {{-- @foreach ($categories as $cat)
                        <a href="/blog?category={{ $cat->slug }}" class=" btn btn btn-outline-infomb-4 rounded">
                            <span data-feather="file-plus"></span>
                            <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                        </a>
                        @endforeach --}}
                        
                        
                        @foreach ($categories as $cat)
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a style="font-family: 'Quicksand', sans-serif;"  class="button-custom active text-white" data-bs-toggle="pill" href="/blog?category={{ $cat->slug }}"
                                    style="color: #17a2b8; border-color: #fff;"
                                    onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff';"
                                    onmouseout="this.style.backgroundColor=''; this.style.color='#17a2b8';">
                                     <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                                 </a>
                                 
                                {{-- <a class="btn btn-outline-info active" data-bs-toggle="pill" href="/blog?category={{ $cat->slug }}"><i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}</a> --}}
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">


                            @foreach($datapekerjaan as $data)

                            {{-- /========================================= --}}
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="https://picsum.photos/400/400?{{ $data->category->nama_kategori }}" alt=""></a> 
                                        <div class="button-merah rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="font-family: 'Quicksand', sans-serif;" >{{ $data->waktu_pelaksanaan}} Hari</div>
                                        <div class="button-custom rounded-top text-white position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="font-family: 'Quicksand', sans-serif;" >{{ $data->category->nama_kategori}}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        {{-- <p class="text-dark">Kebutuhan</p> --}}
                                        <h5 class="text-custom mb-3" style="font-family: 'Quicksand', sans-serif;" ><strong class="text-dark" style="font-family: 'Quicksand', sans-serif;" >Kebutuhan</strong> <span class="buttom-custom">{{ 'Rp ' . number_format($data->anggaran, 0, ',', '.') }},-</span>

                                        </h5>
                                        <a class="d-block h5 mb-2" style="font-family: 'Quicksand', sans-serif;">{{ $data->title }}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2" style="font-family: 'Quicksand', sans-serif;"></i>{{ $data->lokasi}}</p>
                                    </div>

                                    <div class="p-4 pb-0 mb-4">

                                        <a class="d-block h5 mb-2" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-spinner fa-spin mr-2"></i> Terkumpul</a>
                                        
                                             @php
                                            $percentage = (100000 / $data->anggaran) * 100;
                                        @endphp
                                        <div class="progress">
                                            <div class="progress-bar button-merah" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($percentage, 2) }}%</div>
                                        </div>

                                    </div>                                    
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark">
                                                <i class="fa fa-eye text-custom me-2"></i><strong>Details</strong>
                                            </a>
                                        </small>
                                        <!-- Tombol untuk membuka modal -->
                    <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                        <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fa fa-users text-custom me-2"></i><strong>Donatur</strong>
                        </a>
                    </small>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Donatur</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table" style="font-family: 'Quicksand', sans-serif;">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col" class="text-custom">No</th>
                                                <th scope="col" class="text-custom">Nama</th>
                                                {{-- <th scope="col">Email</th> --}}
                                                <th scope="col" class="text-custom">Jumlah Donasi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>John Doe</td>
                                                {{-- <td>JohnDoe@gmail.com</td> --}}
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jane Smith</td>
                                                {{-- <td>JaneSmith@gmail.com</td> --}}
                                                <td>$200</td>
                                            </tr>
                                            <!-- Tambahkan baris tambahan sesuai dengan data yang Anda miliki -->
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-dark">Simpan Perubahan</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                                       
                                      
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark">
                                                <i class="fas fa-spin fa-spinner text-custom me-2"></i><strong>Progress</strong>
                                            </a>
                                        </small>
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark">
                                                <i class="fas fa-spinner fa-spin text-custom me-2"></i>
                                                <strong>Vendor/Instansi</strong>
                                            </a>
                                        </small>                                      
                                    </div>
                                    
                                    <div class="d-flex border-top">
                                        <button type="button" class="button-custom d-flex flex-fill justify-content-center align-items-center border-end py-2">
                                            <a href="/error" class="text-decoration-none text-white" style="font-family: 'Quicksand', sans-serif;">
                                                <i class="fas fa-envelope-open-text me-2 " ></i> Donasi Sekarang
                                            </a>
                                        </button>
                                                            
                                    </div>
                                    
                                </div>
                            </div>

                            {{-- ==================================== --}}
                            @endforeach
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                {{-- Tautan Paginasi --}}
                                <nav aria-label="Page navigation" style="font-family: 'Quicksand', sans-serif;">
                                    <ul class="pagination justify-content-center">
                                        {{-- <li class="page-item">
                                            <span class="page-link button-merah">{{ $datapekerjaan->onFirstPage() ? '«' : '' }}</span>
                                        </li> --}}
                                        <ul class="pagination">
                                            <li class="page-item {{ $datapekerjaan->onFirstPage() ? 'disabled' : '' }}" style="font-family: 'Quicksand', sans-serif; margin-right: 10px;">
                                                <a class="page-link button-custom text-white" href="{{ $datapekerjaan->previousPageUrl() }}" aria-label="Previous">
                                                    <span aria-hidden="true">&lsaquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item disabled" style="margin-right: 10px;">
                                                <span class="page-link button-custom text-white">{{ $datapekerjaan->currentPage() }}</span>
                                            </li>
                                            <li class="page-item {{ $datapekerjaan->hasMorePages() ? '' : 'disabled' }}" style="font-family: 'Quicksand', sans-serif; margin-right: 10px;">
                                                <a class="page-link button-custom" href="{{ $datapekerjaan->nextPageUrl() }}" aria-label="Next">
                                                    <span aria-hidden="true">&rsaquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                          {{-- <li class="page-item">
                                            <span class="page-link button-merah">{{ $datapekerjaan->lastPage() }}</span>
                                        </li> --}}
                                    </ul>
                                </nav>
                                {{-- Teks "Lihat Pekerjaan Kami ... Read More" --}}
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Property List End -->



        <!-- Category Start -->

        <section class="button-custom">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-white" style="font-family: 'Quicksand', sans-serif;">Transparansi Kami </h1>
                    {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
                <p>Kami memilih jalan yang berbeda dalam setiap langkah. Keunikan dalam cara kami bekerja menjadi landasan keberhasilan</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="frontend/img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Infrastruktur</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatainsfrastruktur}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Pendidikan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatapendidikan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-house.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Kesehatan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatakesehatan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-housing.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Makanan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatamakanan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-building.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Laporan Pekerjaan </strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $datatotalpekerjaan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Mitra Kerjasama </strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong> {{ $totalmitra}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Vendor</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Sponsor/Mitra</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong>22 Sponsorship </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"></strong></span>
                            </div>
                        </a>
                    </div>
                    
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-villa.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Transparansi</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong>{{ $datatotalpekerjaan}}  Jobs</strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"></strong></span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
        <!-- Category End -->

        <section class="bg-light">

            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="/frontend/img/about.jpg">
                        </div>
                    </div>

                    @foreach($adminberanda as $data)
                    @endforeach
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <a class="button-custom py-3 px-5 mt-3"><i class="fas fa-school mr-2"></i> Visi</a>
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        
                        <a class="button-custom py-3 px-5 mt-3"><i class="fas fa-school mr-2"></i> Misi</a>
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        
                        
                        
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>



        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Agents</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div id="#footer" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    @include('fe_web.part.footer')
