<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Consignment</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link {{ ($active === "home")? 'active' : '' }}" href="/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "about")? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active=== "posts")? 'active' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "categories")? 'active' : '' }}" href="/categories">Categories</a>
              </li>
          </ul>


          <ul class="navbar-nav ms-auto ">
              @auth
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                    <li><form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                        </form></li>
                    </ul>
            </li>
                     @else
                    <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login")? 'active' : '' }}">Login</a>
                    </li>
                     @endauth
          </ul>

        </div>
    </div>
    </nav>

    <div class="wrapper">

        <section id="About">

            <!-- <img style=  "margin-right: 50px;"width="500" height="390" src="css/welcome.png"/> -->

            <link rel="stylesheet" href="css/style.css">

            <div class="kolom">

                <p class="deskripsi">Welcome to Ficion 2022</p>

                <h2>"Menjadi Produktif dengan Pemanfaatan dan Pengurangan Sampah Plastik di Era Digital"</h2>

                <p>Webinar FICION 2022  Bermaksud Mengajak dan Mengedukasi Masyarakat untuk Melakukan Produktifitas Dalam Menyikapi Limbah Plastik dan Memanfaatkan Teknologi di Era Digital.</p>

            </div>

        </section>



        <!-- untuk Registration -->

        <section id="Registration">

            <div class="kolom1">

                <p class="deskripsi"> </p>

                <h2>Webinar</h2>

                <p>Hari, Tanggal : Minggu, 30 Januari 2022 </br> <p>Waktu : 08.00 – 12.00 </br></p> <p>Tempat : Platform Zoom Cloud Meeting dan Youtube</br></p>

                <p><a href="./config/form.php" class="tbl-biru" >Registrasi</a>

    ></p>

            </div>

            <img widht="320" height="390" src="css/Regist.png"/>

        </section>

        </div>

        <!-- untuk speakers -->

        <section id="speakers">

            <div class="tengah">

                <div class="kolom">

                    <p class="deskripsi"> </p>

                    <h2>Our Speakers</h2>

                </div>



                <div class="speakers-list">

                    <div class="kartu-speakers">

                        <img src="css/Siklus Refil1.jpeg"/>

                        <p>Brenda Cynthia Atmadj</p>

                        <p1>Public Relation & Partnerships Siklus Refill</p1>

                    </div>

                    <div class="kartu-speakers">

                        <img src="css/I komang sugiartha.jpg"/>

                        <p>I Komang Sugiartha</p>

                        <p1>Lecturer of Faculty of Computer Science and Information Technology</p1>

                    </div>

                    <div class="kartu-speakers">

                        <img src="css/Danni Fajariyadi.jpg"/>

                        <p>Danni Fajariyadi</p>

                        <p1>Co-Founder and CMO duitin</p1>

                    </div>

                </div>



                <div class="kolom">

                    <p class="deskripsi"> </p>

                    <h2>MC & Moderator</h2>

                </div>



                <div class="partner-list">

                    <div class="kartu-speakers">

                        <img src="css/fio1.jpg"/>

                        <p style="font-family: 'comic sans ms';

                        font-weight: 800;

                        font-size: 25px;

                        text-align: center;

                        color: #364F6B;">Reni Aulia Fitriani</p>

                        <p1>Master Of Ceremony</p1>

                    </div>

                    <div class="kartu-speakers">

                        <img src="css/reni1.jpg"/>

                        <p style="font-family: 'comic sans ms';

                        font-weight: 800;

                        font-size: 25px;

                        text-align: center;

                        color: #364F6B;">Muhammad Farisi</p>

                        <p1>Moderator</p1>



            </div>

        </section>



        <!-- untuk partners -->

        <!-- <section id="partners">

            <div class="tengah">



               <div class="kolom">

                    <p class="deskripsi"> </p>

                    <h2>Master Of Ceremony</h2>

                </div>



                <div class="partner-list">

                    <div class="kartu-partner">

                        <img src="https://icon2.cleanpng.com/20180508/svq/kisspng-jakarta-state-university-universitas-gunadarma-ka-5af2146f769460.0572641915258143834857.jpg"/>

                    </div>

                    <div class="kartu-partner">

                        <img src="https://icon2.cleanpng.com/20180508/svq/kisspng-jakarta-state-university-universitas-gunadarma-ka-5af2146f769460.0572641915258143834857.jpg"/>

                    </div>

                    <div class="kartu-partner">

                        <img src="https://icon2.cleanpng.com/20180508/svq/kisspng-jakarta-state-university-universitas-gunadarma-ka-5af2146f769460.0572641915258143834857.jpg"/>

                    </div>

                    <div class="kartu-partner">

                        <img src="https://icon2.cleanpng.com/20180508/svq/kisspng-jakarta-state-university-universitas-gunadarma-ka-5af2146f769460.0572641915258143834857.jpg"/>

                    </div>

                    <div class="kartu-partner">

                        <img src="https://icon2.cleanpng.com/20180508/svq/kisspng-jakarta-state-university-universitas-gunadarma-ka-5af2146f769460.0572641915258143834857.jpg"/>

                    </div>

                </div>

            </div>

        </section> -->







    <div id="copyright">

    <div class="wrapper">

        <b>Maintained By</b> &copy; <b>PTI 2021/2022</b>

    </div>

    </div>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
