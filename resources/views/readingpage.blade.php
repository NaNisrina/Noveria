@extends('template')

@section('page_title', 'Reading Page')
@section('page_content')

    <!-- Header -->
    <section class="mx-auto">

        <div class="d-flex read_center">

            <!-- Back -->
            <div class="mx-2">
                <a href="/CoverDescription" class="font_white" role="button">
                    <img src="img/svg/angle-left-solid.svg" alt="back" class="dropdown_background">
                </a>
            </div>
            <!-- End of Back -->

            <!-- Dropdown -->
            <li class="dropdown col-3">
                <a class="font_white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/svg/chevron-down-solid.svg" alt="archive" class="dropdown_background">
                </a>

                <div class="read_center">
                    <ul class="dropdown-menu dropdown">
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter List:
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 1
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 2
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 3
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 4
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 5
                            </a></li>
                    </ul>
                </div>

            </li>
            <!-- End of Dropdown -->

            <!-- Chapters -->
            <div class="col-md-9 font_right">
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Previous Chapter</a>
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Next Chapter</a>
            </div>
            <!-- End of Chapters -->

        </div>
    </section>
    <!-- End of Header -->

    <!-- Reading -->
    <section class="py-3">
        {{-- style="background-color: rgb(108, 74, 140)" --}}

        <div class="container font_white d-flex flex-column justify-content-center align-items-center">
            <div class="header container_center">
                <h3>Story Title</h3>
                <p class="lead text-white-50 mb-6"><Small>By: Author</Small></p>
            </div>

            <p class="read_center fs-6">Chapter:</p>

            {{-- <div class="content col-5"> --}}
            <p class="read_center">
                Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan
                semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan
                penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara
                kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi
                siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang
                tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak
                menghasilkan kesenangan?"
                Demikian pula, tidak adakah orang yang mencintai atau mengejar atau ingin mengalami penderitaan, bukan
                semata-mata karena penderitaan itu sendiri, tetapi karena sesekali terjadi keadaan di mana susah-payah dan
                penderitaan dapat memberikan kepadanya kesenangan yang besar. Sebagai contoh sederhana, siapakah di antara
                kita yang pernah melakukan pekerjaan fisik yang berat, selain untuk memperoleh manfaat daripadanya? Tetapi
                siapakah yang berhak untuk mencari kesalahan pada diri orang yang memilih untuk menikmati kesenangan yang
                tidak menimbulkan akibat-akibat yang mengganggu, atau orang yang menghindari penderitaan yang tidak
                menghasilkan kesenangan?"
            </p>
            <p class="read_center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
            </p>

            <img src="img/jpg/try.jpg" alt="" class="image_card">
            {{-- </div> --}}
        </div>
        {{-- <br> --}}

    </section>
    <!-- End of Reading -->

    <!-- Footer -->
    <section class="mx-auto">

        <div class="d-flex read_center">

            <!-- Bookmark -->
            <div class="mx-2">
                <a href="#" class="font_white" role="button">
                    <img src="img/svg/button_bookmark.svg" alt="bookmark" class="dropdown_background">
                </a>
            </div>
            <!-- End of Bookmark -->

            <!-- Heart -->
            <div class="mx-2 col-3">
                <a href="#" class="font_white" role="button">
                    <img src="img/svg/button_heart.svg" alt="heart" class="dropdown_background">
                </a>
            </div>
            <!-- End of Heart -->

            <!-- Chapters -->
            <div class="col-md-9 font_right">
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Previous Chapter</a>
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Next Chapter</a>
            </div>
            <!-- End of Chapters -->

        </div>
    </section>
    <!-- End of Footer -->

@endsection
