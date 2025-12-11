      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="/Latihan MySQL menggunakan PHP/assets/img/php-logo.png" alt="" class="brand-image opacity-75 shadow"/>
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light me-4">PHP | MySQL</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="<?= "/Latihan MySQL menggunakan PHP/mahasiswa/index.php"; ?>" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data Mahasiswa
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= "/Latihan MySQL menggunakan PHP/dosen/index.php"; ?>" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>Data Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= "/Latihan MySQL menggunakan PHP/matkul/index.php"; ?>" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data Mata Kuliah
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= "/Latihan MySQL menggunakan PHP/nilai/index.php"; ?>" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Data Nilai
                  </p>
                </a>
              </li>

            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->