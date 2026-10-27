<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Users</title>

    <!--begin::Theme Init (prevents flash of incorrect theme on load, #6043)-->
    <script>
      (() => {
        'use strict';
        const root = document.documentElement;

        if (root.getAttribute('data-lte-color-mode') === 'off') {
          return;
        }

        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try {
          stored = localStorage.getItem(STORAGE_KEY);
        } catch {}
        
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') {
          resolved = stored;
        } else if (authored === 'dark' || authored === 'light') {
          resolved = authored;
        } else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) {
          resolved = 'dark';
        }
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        if (resolved !== authored) {
          root.setAttribute('data-lte-theme-resolved', '');
        }
      })();
                      </script>
                      <!--end::Theme Init-->

                      <!--begin::Accessibility Meta Tags-->
                      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
                      <meta name="color-scheme" content="light dark" />
                      <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
                      <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
                      <!--end::Accessibility Meta Tags-->

                      <!--begin::Primary Meta Tags-->
                      <meta name="title" content="AdminLTE 4 | Users" />
                      <meta name="author" content="ColorlibHQ" />
                      <meta
                        name="description"
                        content="AdminLTE is a free Bootstrap 5 admin dashboard template with almost 50 example pages, built with vanilla JS and designed with accessibility in mind."
                      />
                      <meta
                        name="keywords"
                        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel"
                      />
                      <!--end::Primary Meta Tags-->

                      <!--begin::Accessibility Features-->
                      <meta name="supported-color-schemes" content="light dark" />
                      <link rel="preload" href="./css/adminlte.css" as="style" />
                      <!--end::Accessibility Features-->

                      <!--begin::Fonts-->
                      <link
                        rel="stylesheet"
                        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
                        crossorigin="anonymous"
                        media="print"
                        onload="this.media = 'all'"
                      />
                      <!--end::Fonts-->

                      <!--begin::Third Party Plugin(OverlayScrollbars)-->
                      <link
                        rel="stylesheet"
                        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
                        crossorigin="anonymous"
                      />
                      <!--end::Third Party Plugin(OverlayScrollbars)-->

                      <!--begin::Third Party Plugin(Bootstrap Icons)-->
                      <link
                        rel="stylesheet"
                        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
                        crossorigin="anonymous"
                      />
                      <!--end::Third Party Plugin(Bootstrap Icons)-->

                      <!--begin::Required Plugin(AdminLTE)-->
                      <link rel="stylesheet" href="./css/adminlte.css" />
                      <!--end::Required Plugin(AdminLTE)-->
                    </head>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
                      <!--begin::App Wrapper-->
                      <div class="app-wrapper">
                        <!--begin::Header-->
                        <!--end::Header-->
                        <!--begin::Sidebar-->
                        <!--end::Sidebar-->
                        <!--begin::App Main-->
                        <main class="app-main">
                          <!--begin::App Content Header-->
                          <div class="app-content-header">
                            <!--begin::Container-->
                            <div class="container-fluid">
                              <!--begin::Row-->
                              <div class="row">
                                <div class="col-sm-6">
                                  <h1 class="mb-0 fs-3">Rekap Nilai Mahasiswa</h1>
                                </div>
                                <div class="col-sm-6">
                                  <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb float-sm-end">
                                      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Nilai</li>
                                    </ol>
                                  </nav>
                                </div>
                              </div>
                              <!--end::Row-->
                            </div>
                            <!--end::Container-->
                          </div>
                          <!--end::App Content Header-->
                          <!--begin::App Content-->
                          <div class="app-content">
                            <!--begin::Container-->
                            <div class="container-fluid">
                              <!--begin::Row-->
                              <div class="row">
                                <div class="col-12">
                                  <!--begin::Card-->
                                  <div class="card mb-4">
                                    <!--begin::Card Header-->
                                    <div class="card-header">
                                      <div class="row g-2 align-items-center">
                                        <div class="col-12 col-md-4">
                                          <h3 class="card-title">Direktori Nilai</h3>
                                        </div>
                                        <div class="col-12 col-md-8">
                                          
                  <!-- Formulir Pencarian Berdasarkan Nama, Predikat, & Limit Data -->
                  <form method="GET" action="" class="d-flex flex-wrap justify-content-md-end gap-2 align-items-center">
                    
                    <!-- Kotak Pencarian Nama -->
                    <div class="input-group input-group-sm w-auto">
                      <span class="input-group-text"><i class="bi bi-search" aria-hidden="true"></i></span>
                      <input
                        type="search"
                        name="cari"
                        class="form-control"
                        placeholder="Search Nama..."
                        style="width: 150px"
                        value="<?php echo isset($_GET['cari']) ? htmlspecialchars($_GET['cari']) : ''; ?>"
                      />
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                    
                    <!-- Dropdown Filter Predikat (Otomatis Submit) -->
                    <select
                      name="predikat"
                      class="form-select form-select-sm w-auto"
                      onchange="this.form.submit()"
                    >
                      <option value="all" <?php echo (!isset($_GET['predikat']) || $_GET['predikat'] == 'all') ? 'selected' : ''; ?>>Semua Predikat</option>
                      <option value="Sangat Memuaskan" <?php echo (isset($_GET['predikat']) && $_GET['predikat'] == 'Sangat Memuaskan') ? 'selected' : ''; ?>>Sangat Memuaskan</option>
                      <option value="Memuaskan" <?php echo (isset($_GET['predikat']) && $_GET['predikat'] == 'Memuaskan') ? 'selected' : ''; ?>>Memuaskan</option>
                      <option value="Cukup Memuaskan" <?php echo (isset($_GET['predikat']) && $_GET['predikat'] == 'Cukup Memuaskan') ? 'selected' : ''; ?>>Cukup Memuaskan</option>
                      <option value="Kurang Memuaskan" <?php echo (isset($_GET['predikat']) && $_GET['predikat'] == 'Kurang Memuaskan') ? 'selected' : ''; ?>>Kurang Memuaskan</option>
                      <option value="Tidak Lulus" <?php echo (isset($_GET['predikat']) && $_GET['predikat'] == 'Tidak Lulus') ? 'selected' : ''; ?>>Tidak Lulus</option>
                    </select>

                    <!-- Dropdown Pilihan Limit Data per Halaman (5, 10, 15) -->
                    <select
                      name="limit"
                      class="form-select form-select-sm w-auto"
                      onchange="this.form.submit()"
                    >
                      <option value="5" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 5) ? 'selected' : ''; ?>>5 </option>
                      <option value="10" <?php echo (!isset($_GET['limit']) || $_GET['limit'] == 10) ? 'selected' : ''; ?>>10 </option>
                      <option value="15" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 15) ? 'selected' : ''; ?>>15 </option>
                    </select>

                    <!-- Tombol Tambah Data -->
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-user">
                      <i class="bi bi-person-plus-fill me-1"></i> Tambah Data Nilai
                    </button>
                  </form>
                      </div>
                    </div>
                  </div>
                  <!--end::Card Header-->

                  <?php
require_once __DIR__ . "/koneksi.php"; 

// 1. Tentukan jumlah data per halaman (default 10 jika tidak dipilih)
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// 2. Logika Filter Pencarian & Predikat
$whereClauses = array("1=1");
if (isset($_GET['cari']) && !empty(trim($_GET['cari']))) {
    $keyword = mysqli_real_escape_string($conn, $_GET['cari']);
    $whereClauses[] = "namalengkap LIKE '%$keyword%'";
}
if (isset($_GET['predikat']) && $_GET['predikat'] != 'all' && !empty($_GET['predikat'])) {
    $selectedPredikat = mysqli_real_escape_string($conn, $_GET['predikat']);
    $whereClauses[] = "predikat = '$selectedPredikat'";
}
$whereSQL = implode(" AND ", $whereClauses);

// 3. Hitung total data keseluruhan berdasarkan filter
$sqlTotal = "SELECT COUNT(*) AS total FROM nilaimahasiswa WHERE $whereSQL";
$resultTotal = mysqli_query($conn, $sqlTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalData = $rowTotal['total'];
$totalPages = ceil($totalData / $limit);

// 4. Logika Sorting
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'nilaiakhir';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';
$nextOrder = ($order == 'ASC') ? 'DESC' : 'ASC';

// 5. Query Utama dengan LIMIT dan OFFSET
$sql = "SELECT * FROM nilaimahasiswa WHERE $whereSQL ORDER BY $sort $order LIMIT $start, $limit";
$result = mysqli_query($conn, $sql);
?>
                  <!--begin::Card Body-->
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-hover align-middle m-0">
                     <thead>
  <tr>
    <th>NIM</th>
    <!-- Sorting Header Nama Lengkap -->
    <th>
      <a href="?sort=namalengkap&order=<?php echo $nextOrder; ?>&cari=<?php echo $_GET['cari'] ?? ''; ?>&predikat=<?php echo $_GET['predikat'] ?? ''; ?>&limit=<?php echo $limit; ?>" class="text-decoration-none text-body fw-bold">
        Nama Lengkap 
        <?php if($sort == 'namalengkap') echo ($order == 'ASC') ? '▲' : '▼'; else echo '↕'; ?>
      </a>
    </th>
    <!-- Sorting Header Nilai Akhir -->
    <th>
      <a href="?sort=nilaiakhir&order=<?php echo $nextOrder; ?>&cari=<?php echo $_GET['cari'] ?? ''; ?>&predikat=<?php echo $_GET['predikat'] ?? ''; ?>&limit=<?php echo $limit; ?>" class="text-decoration-none text-body fw-bold">
        Nilai Akhir 
        <?php if($sort == 'nilaiakhir') echo ($order == 'ASC') ? '▲' : '▼'; else echo '↕'; ?>
      </a>
    </th>
    <th>Nilai Huruf</th>
    <th>Predikat</th>
    <th>Tanggal Dibuat</th>
    <th>Tanggal Diubah</th>
    <th class="text-end">Aksi</th>
  </tr>
</thead>

                        <tbody>
                          <?php
                          if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {
                          ?>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">        
                                  <span class="fw-medium"><?php echo $row['nim']; ?> </span>
                                </div>
                              </td>
                              <!-- Kolom Foto + Nama Lengkap sesuai permintaan UTS -->
                              <td>
                              <div class="d-flex align-items-center">
                                <?php if(!empty($row['foto']) && file_exists("img/" . $row['foto'])): ?>
                                  <img src="img/<?php echo $row['foto']; ?>" class="rounded-circle me-2" alt="Foto" style="width: 32px; height: 32px; object-fit: cover;">
                                <?php else: ?>
                                  <!-- Fallback jika foto tidak ada -->
                                  <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($row['namalengkap']); ?>&background=random&size=32" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                                <?php endif; ?>
                                <span class="fw-medium"><?php echo $row['namalengkap']; ?></span>
                              </div>
                            </td>
                              <td>
                                <span class="fw-medium"> <?php echo $row['nilaiakhir']; ?> </span>
                              </td>
                              <td>
                                <span class="fw-medium"><?php echo $row['nilaihuruf']; ?></span>
                              </td>
                              <td>
                                <span class="fw-medium"><?php echo $row['predikat']; ?></span>
                              </td>
                              <td>
                                <span class="fw-medium"><?php echo $row['entry_date']; ?></span>
                              </td>
                              <td>
                                <span class="fw-medium"><?php echo $row['modified_at']; ?></span>
                              </td>
                              <td class="text-end">
                              <div class="btn-group btn-group-sm">
                                <!-- Ganti bagian tombol edit dengan ini -->
                                <button
                                  type="button"
                                  class="btn btn-outline-secondary"
                                  data-bs-toggle="modal"
                                  data-bs-target="#modalEdit<?php echo $row['nim']; ?>"
                                  aria-label="Edit"
                                >
                                  <i class="bi bi-pencil" aria-hidden="true"></i>
                                </button>
                                
                                <a
                                  href="hapusnilai.php?nim=<?php echo $row['nim']; ?>"
                                  class="btn btn-outline-danger"
                                  onclick="return confirm('Yakin ingin menghapus data ini?');"
                                  aria-label="Delete"
                                >
                                  <i class="bi bi-trash" aria-hidden="true"></i>
                                </a>
                              </div>

                              <!-- MODAL EDIT UNTUK SETIAP BARIS DATA -->
                              <div class="modal fade" id="modalEdit<?php echo $row['nim']; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content text-start">
                                    <form action="editnilai.php" method="POST" enctype="multipart/form-data">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Edit Data Nilai Mahasiswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="mb-3">
                                          <label class="form-label">NIM</label>
                                          <input type="text" class="form-control" name="nim" value="<?php echo $row['nim']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Nama Lengkap</label>
                                          <input type="text" class="form-control" name="namalengkap" value="<?php echo $row['namalengkap']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Nilai Akhir</label>
                                          <input type="number" step="0.01" class="form-control" name="nilaiakhir" value="<?php echo $row['nilaiakhir']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                          <label class="form-label">Foto Saat Ini</label><br>
                                          <?php if(!empty($row['foto']) && file_exists("img/" . $row['foto'])): ?>
                                            <img src="img/<?php echo $row['foto']; ?>" width="40" height="40" class="rounded-circle mb-2" style="object-fit:cover;">
                                          <?php else: ?>
                                            <p class="text-muted mb-2">Tidak ada foto</p>
                                          <?php endif; ?>
                                          <input type="file" class="form-control" name="foto" accept="image/*">
                                          <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </td>
                            </tr>
                          <?php 
                              }
                          } else {
                              echo "<tr><td colspan='8' class='text-center py-3'>0 results - Data Not Found!</td></tr>";
                          } 
                          mysqli_close($conn);
                          ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!--end::Card Body-->

                  <!--begin::Card Footer-->
                  <div class="card-footer clearfix">
                  <div class="float-start pt-1 fs-7 text-body-secondary">
                      Menampilkan <?php echo ($totalData > 0) ? $start + 1 : 0; ?> sampai <?php echo min($start + $limit, $totalData); ?> dari total <?php echo $totalData; ?> data
                    </div>
                    
                    <ul class="pagination pagination-sm m-0 float-end">
                      <!-- Tombol Previous -->
                      <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>&cari=<?php echo $_GET['cari'] ?? ''; ?>&predikat=<?php echo $_GET['predikat'] ?? ''; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>"> &laquo; </a>
                      </li>
                      
                      <!-- Nomor Halaman Dinamis -->
                      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                          <a class="page-link" href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>&cari=<?php echo $_GET['cari'] ?? ''; ?>&predikat=<?php echo $_GET['predikat'] ?? ''; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>"><?php echo $i; ?></a>
                        </li>
                      <?php endfor; ?>

                      <!-- Tombol Next -->
                      <li class="page-item <?php echo ($page >= $totalPages) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>&cari=<?php echo $_GET['cari'] ?? ''; ?>&predikat=<?php echo $_GET['predikat'] ?? ''; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>"> &raquo; </a>
                      </li>
                    </ul>
                  </div>
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->

            <!--begin::Add User Modal-->
            <div
              class="modal fade"
              id="modal-add-user"
              tabindex="-1"
              aria-labelledby="modal-add-user-label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action='inputnilai.php' method='post' enctype="multipart/form-data">
  <div class="modal-header">
    <h5 class="modal-title" id="modal-add-user-label">Add new user</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="mb-3">
      <label class="form-label">NIM</label>
      <input type="text" minlength="10" maxlength="10" class="form-control" name="nim" placeholder="e.g. 3202416080" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan Nama Lengkap" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Nilai Akhir</label>
      <input type="number" step="0.01" class="form-control" name="nilaiakhir" placeholder="Masukkan Nilai Akhir" required />
    </div>
    <!-- TAMBAHAN INPUT FOTO -->
    <div class="mb-3">
      <label class="form-label">Foto Mahasiswa</label>
      <input type="file" class="form-control" name="foto" accept="image/*" required />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </div>
</form>
                </div>
              </div>
            </div>
            <!--end::Add User Modal-->

            <!--begin::Delete User Modal-->
            <div
              class="modal fade"
              id="modal-delete-user"
              tabindex="-1"
              aria-labelledby="modal-delete-user-label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-delete-user-label">Delete user</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-0">
                      Are you sure you want to delete this user? All content owned by the account
                      will be reassigned to the site administrator. This action cannot be undone.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancel
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                      Delete user
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Delete User Modal-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Web Programming Semester 5</div>
        <strong>
          Copyright &copy; 2014-2026&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/adminlte.js"></script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbarbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::Script-->
  </body>
</html>