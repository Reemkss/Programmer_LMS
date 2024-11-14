<?php include 'header.php'; ?>

<section class="banner_slider">

  <div class="container-xxl p-lg-0 ">
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption  d-md-block">
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption  d-md-block">
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../assets/img/banner.png" class="img-fluid" alt="banner">
            <div class="carousel-caption  d-md-block">
              <h2 class="mb-3">Web Development</h2>
              <p>Explore our curated courses and master new skills, guided by industry experts.</p>
            </div>
          </div>

        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </div>
  </div>
</section>
<section class="section dashboard ">
  <div class="container-xxl">
    <div class="row">



      <div class="card_shadow shadow_sec_padd chat_uii">

        <div class="row d-flex justify-content-center">
          <div class="col-md-12 col-lg-12 col-xl-12">

            <div class="heading_sec">
              <h2 class="main_heading ">Chat AI</h2>

            </div>

            <div class="card chat_ai_screen" id="aichat" style="box-shadow:unset !important;">

              <div class="card-body-">


                <div class="d-flex flex-row justify-content-start">
                  <img src="../assets/img/logo.png"
                    alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3 "> <strong>Chat Ai</strong></p>

                  </div>


                </div>
                <div style="border-bottom: 1px solid #B9B9B9;" class="mb-3 mt-2"></div>



                <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Hiii, </p>

                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:06</p>
                  </div>
                  <img src="../assets/img/profile-img.jpg"
                    alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                </div>

                <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="../assets/img/profile-img.jpg"
                    alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3 bg-body-tertiary">Hi! How can I assist you today?</p>

                    <p class="small ms-3 mb-3 rounded-3 text-muted">00:07</p>
                  </div>
                </div>

                <div class="d-flex flex-row justify-content-end mb-4">
                  <div>
                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Can you Help me with my learning </p>

                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">00:09</p>
                  </div>
                  <img src="../assets/img/profile-img.jpg"
                    alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                </div>

                <div class="d-flex flex-row justify-content-start mb-4">
                  <img src="../assets/img/profile-img.jpg"
                    alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                  <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3 bg-body-tertiary">typing...</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted">00:11</p>
                  </div>
                </div>



              </div>

            </div>

            <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3 mt-2">
              <!-- <img src="../assets/img/profile-img.jpg"
                  alt="avatar 3" style="width: 40px; height: 100%; " class="rounded-circle"> -->
              <input type="text" class="form-control form-control-lg border-0" id="exampleFormControlInput1"
                placeholder="writ your message...">

              <!-- <i class="fa fa-paperclip"></i> -->
              <!-- <svg width="15" height="25" viewBox="0 0 15 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.0188408 5.0943C0.0275297 2.30455 2.26202 0.0634594 5.01784 0.0271721C7.80553 -0.0105667 10.1501 2.19714 10.1646 5.01157C10.1979 11.2747 10.1761 17.5379 10.1544 23.801C10.1486 25.5718 8.79027 26.8869 7.07276 26.8666C5.41319 26.8491 4.08813 25.5167 4.08813 23.7734C4.08813 20.0228 4.11854 16.2707 4.14171 12.5201V12.5143L4.14316 12.2559L4.16199 7.95953C4.16344 7.3978 4.6225 6.9464 5.18148 6.9522H5.19307C5.74916 6.95801 6.19519 7.41232 6.19229 7.96824L6.17202 12.523C6.17202 12.5665 6.16912 12.6086 6.16188 12.6493C6.14016 16.278 6.11843 19.9067 6.09671 23.5339C6.09382 24.0957 6.16622 24.6095 6.8121 24.8011C7.59699 25.0319 8.15018 24.55 8.15453 23.5964C8.16322 21.4685 8.15742 19.3392 8.15742 17.2113C8.15742 13.2212 8.15887 9.23103 8.15308 5.2409C8.15163 4.0144 7.68678 3.03465 6.56881 2.43664C5.46822 1.84733 4.38645 1.917 3.35248 2.5963C2.42566 3.20447 2.04045 4.1131 2.03611 5.193C2.02452 7.6344 2.02742 10.0772 2.02597 12.5201C2.02597 16.2446 2.01583 19.9677 2.03032 23.6922C2.03756 25.775 2.91079 27.4051 4.78035 28.3601C6.63253 29.308 8.46298 29.1178 10.1761 27.9305C10.4122 27.7679 10.6178 27.5604 10.7612 27.4384C11.7358 26.3498 12.2267 25.1756 12.2166 23.8068C12.1949 20.467 12.1775 17.1286 12.1485 13.7887C12.1369 13.7321 12.1311 13.6726 12.1311 13.6131L12.0891 8.49368C12.0848 7.93485 12.5337 7.47764 13.0913 7.47328C13.6488 7.46893 14.105 7.91889 14.1093 8.47771L14.1122 8.82026V8.82171C14.1223 8.98282 14.1238 9.18023 14.1267 9.42698C14.1643 14.1661 14.2338 18.9066 14.2324 23.6457C14.231 26.7025 12.8639 29.0148 10.0719 30.2921C7.24509 31.5839 4.5834 31.0759 2.2823 29.0336C0.771878 27.6939 0.0144968 25.9173 0.0101528 23.8838C-0.00577736 17.6206 0.00146294 11.3575 0.0188408 5.0943Z" fill="#8E8E8E" />
                </svg> -->
              <div class="send-btns">
                <div class="attachs">
                  <div class="button-wrapper">
                    <span class="label">
                      <svg width="15" height="25" viewBox="0 0 15 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0188408 5.0943C0.0275297 2.30455 2.26202 0.0634594 5.01784 0.0271721C7.80553 -0.0105667 10.1501 2.19714 10.1646 5.01157C10.1979 11.2747 10.1761 17.5379 10.1544 23.801C10.1486 25.5718 8.79027 26.8869 7.07276 26.8666C5.41319 26.8491 4.08813 25.5167 4.08813 23.7734C4.08813 20.0228 4.11854 16.2707 4.14171 12.5201V12.5143L4.14316 12.2559L4.16199 7.95953C4.16344 7.3978 4.6225 6.9464 5.18148 6.9522H5.19307C5.74916 6.95801 6.19519 7.41232 6.19229 7.96824L6.17202 12.523C6.17202 12.5665 6.16912 12.6086 6.16188 12.6493C6.14016 16.278 6.11843 19.9067 6.09671 23.5339C6.09382 24.0957 6.16622 24.6095 6.8121 24.8011C7.59699 25.0319 8.15018 24.55 8.15453 23.5964C8.16322 21.4685 8.15742 19.3392 8.15742 17.2113C8.15742 13.2212 8.15887 9.23103 8.15308 5.2409C8.15163 4.0144 7.68678 3.03465 6.56881 2.43664C5.46822 1.84733 4.38645 1.917 3.35248 2.5963C2.42566 3.20447 2.04045 4.1131 2.03611 5.193C2.02452 7.6344 2.02742 10.0772 2.02597 12.5201C2.02597 16.2446 2.01583 19.9677 2.03032 23.6922C2.03756 25.775 2.91079 27.4051 4.78035 28.3601C6.63253 29.308 8.46298 29.1178 10.1761 27.9305C10.4122 27.7679 10.6178 27.5604 10.7612 27.4384C11.7358 26.3498 12.2267 25.1756 12.2166 23.8068C12.1949 20.467 12.1775 17.1286 12.1485 13.7887C12.1369 13.7321 12.1311 13.6726 12.1311 13.6131L12.0891 8.49368C12.0848 7.93485 12.5337 7.47764 13.0913 7.47328C13.6488 7.46893 14.105 7.91889 14.1093 8.47771L14.1122 8.82026V8.82171C14.1223 8.98282 14.1238 9.18023 14.1267 9.42698C14.1643 14.1661 14.2338 18.9066 14.2324 23.6457C14.231 26.7025 12.8639 29.0148 10.0719 30.2921C7.24509 31.5839 4.5834 31.0759 2.2823 29.0336C0.771878 27.6939 0.0144968 25.9173 0.0101528 23.8838C-0.00577736 17.6206 0.00146294 11.3575 0.0188408 5.0943Z" fill="#8E8E8E" />
                      </svg>
                    </span>
                    <input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File" aria-label="Upload File">
                  </div>


                </div>
              </div>


              <a class="ms-3 text-muted" href="#!">
                <!-- <i class="fa fa-smile-o"></i> -->
                <svg width="20" height="20" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.0192871 16.3961C0.0192871 15.7915 0.0192871 15.1862 0.0192871 14.5817C0.0367112 14.4946 0.0647413 14.4082 0.0708018 14.3211C0.221558 12.1597 0.781402 10.106 1.84124 8.22113C4.69349 3.14845 9.04345 0.386349 14.8555 0.0287762C17.6373 -0.142434 20.2994 0.453772 22.7395 1.81285C27.8365 4.65146 30.6016 9.01203 30.9637 14.8362C31.1372 17.6294 30.522 20.293 29.1721 22.749C26.7706 27.1172 23.1047 29.7815 18.204 30.7361C17.6108 30.852 17.0055 30.8679 16.4116 30.974C15.807 30.974 15.2017 30.974 14.5972 30.974C14.5192 30.9573 14.4419 30.9293 14.3639 30.9247C12.4631 30.7997 10.6412 30.3459 8.93663 29.5058C4.18743 27.1649 1.28519 23.3899 0.257921 18.1854C0.139741 17.593 0.123074 16.9892 0.0192871 16.3961ZM29.0531 15.4809C29.0463 8.00749 22.9858 1.94618 15.5116 1.94012C8.03134 1.93406 1.94882 8.01658 1.95488 15.4968C1.96094 22.9702 8.02225 29.0315 15.4964 29.0384C22.9767 29.0437 29.0592 22.9611 29.0531 15.4809Z" fill="#8E8E8E" />
                  <path d="M15.4075 24.1975C11.3053 24.1899 7.68035 21.1665 6.94247 17.0642C6.86369 16.6271 6.82808 16.1862 6.79702 15.743C6.78338 15.5514 6.82505 15.4771 7.0349 15.4839C7.51823 15.4991 8.00307 15.4991 8.4864 15.4839C8.69094 15.4771 8.73109 15.5521 8.74094 15.7392C8.86064 17.9491 9.81442 19.7112 11.6 21.0195C14.2326 22.9483 18.156 22.571 20.381 20.1862C21.5484 18.9347 22.1855 17.4635 22.2635 15.7544C22.2726 15.5529 22.3166 15.4756 22.534 15.4832C23.0173 15.5006 23.5014 15.4938 23.9855 15.4854C24.1446 15.4832 24.2181 15.5097 24.2097 15.6968C24.0931 18.3862 23.0113 20.6005 20.9196 22.2945C19.3462 23.5702 17.5174 24.1732 15.4075 24.1975Z" fill="#8E8E8E" />
                  <path d="M10.6494 8.71653C11.7092 8.70592 12.5979 9.58849 12.5971 10.6506C12.5963 11.7013 11.7312 12.5726 10.6782 12.5832C9.61834 12.5938 8.72971 11.7112 8.73047 10.6491C8.73123 9.59834 9.59637 8.72637 10.6494 8.71653Z" fill="#8E8E8E" />
                  <path d="M22.2763 10.6414C22.2824 11.7013 21.3968 12.5876 20.3362 12.5831C19.2839 12.5778 18.4158 11.7104 18.4097 10.6581C18.4036 9.59826 19.2892 8.7119 20.3498 8.71645C21.4021 8.72175 22.2703 9.58917 22.2763 10.6414Z" fill="#8E8E8E" />
                </svg>

              </a>
              <!-- <a class="ms-3" href="#!"><i class="fa fa-paper-plane"></i></a> -->

              <a href="" class="ms-3 text-muted"><svg width="25" height="28" viewBox="0 0 39 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.79976 33.7657L37.6998 18.8057C38.0605 18.6521 38.3682 18.3957 38.5844 18.0685C38.8006 17.7414 38.9159 17.3579 38.9159 16.9657C38.9159 16.5736 38.8006 16.1901 38.5844 15.863C38.3682 15.5358 38.0605 15.2794 37.6998 15.1257L2.79976 0.165749C2.49756 0.0339377 2.1673 -0.0205656 1.83877 0.00715498C1.51025 0.0348755 1.19379 0.143948 0.917953 0.324533C0.642114 0.505117 0.415573 0.751533 0.258765 1.04155C0.101958 1.33156 0.0198179 1.65606 0.0197558 1.98575L-0.000244141 11.2057C-0.000244141 12.2057 0.739756 13.0657 1.73976 13.1857L29.9998 16.9657L1.73976 20.7257C0.739756 20.8657 -0.000244141 21.7257 -0.000244141 22.7257L0.0197558 31.9457C0.0197558 33.3657 1.47976 34.3457 2.79976 33.7657Z" fill="url(#paint0_linear_203_4794)" />
                  <defs>
                    <linearGradient id="paint0_linear_203_4794" x1="19.4578" y1="0.00012207" x2="19.4578" y2="33.9355" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#59B5C6" />
                      <stop offset="1" stop-color="#0A2B7D" />
                    </linearGradient>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>


      </div>


    </div><!-- End Left side columns -->

    <!-- End Right side columns -->

  </div>
  </div>
</section>

</main><!-- End #main -->


<!-- footer sec -->
<?php include 'footer.php'; ?>