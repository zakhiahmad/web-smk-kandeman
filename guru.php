<?php
include 'includes/header.php';

/* ==============================================================================
 * PENJELASAN STRUKTUR DATA:
 * Data dikelompokkan dalam 3 Tingkat:
 * 1. Kategori Utama (Kategori)   -> Kunci paling luar (e.g., "Pengajar Kejuruan")
 * 2. Sub-Kategori (Jurusan/Mapel) -> Kunci tingkat kedua (e.g., "Teknik Pemesinan (TP)")
 * 3. Array Data Guru            -> Berisi daftar guru (nama, jabatan, foto)
 * ============================================================================== */

$tenaga_pendidik = [

    // --------------------------------------------------------------------------
    // 1. PENGAJAR KEJURUAN
    // --------------------------------------------------------------------------
    "Pengajar Kejuruan" => [
        "Teknik Pemesinan (TP)" => [
            ['nama' => 'IBNU KHAMDANI, S.Pd.', 'jabatan' => 'Guru TP / KKK TP', 'foto' => 'ibnu.jpg'],
            ['nama' => 'IMRON FATHONY, S.T.', 'jabatan' => 'Guru TP', 'foto' => 'imron.jpg'],
            ['nama' => 'EKO RACHMADI, S.T.', 'jabatan' => 'Guru TP / WKS 3 Sarpras', 'foto' => 'eko.jpg'],
            ['nama' => 'YUNIANTO, S.T.', 'jabatan' => 'Guru TP / Staf Sarpras', 'foto' => 'yunianto.jpg'],
            ['nama' => 'SUGENG SANTOSO, S.Pd.', 'jabatan' => 'Guru TP', 'foto' => '.jpg'],
        ],
        "Teknik Audio Video (TAV)" => [
            ['nama' => 'MUHAMMAD HUDA, S.Pd., M.Pd.', 'jabatan' => 'Guru TAV / KKK TAV', 'foto' => 'huda.jpg'],
            ['nama' => 'MUNIFAH, S.Pd.', 'jabatan' => 'Guru TAV', 'foto' => 'munifah.jpg'],
            ['nama' => 'YUMAROH, S.Pd., M.Pd.', 'jabatan' => 'Guru TAV', 'foto' => 'yumaroh.jpg'],
            ['nama' => 'RONI WIJAYANTO, S.Pd.', 'jabatan' => 'Guru TAV', 'foto' => 'roni.jpg'],
        ],
        "Teknik Kendaraan Ringan (TKR)" => [
            ['nama' => 'SIGIT RAHARJO, S.Pd.', 'jabatan' => 'Guru TKR / KKK TKR', 'foto' => 'sigit.jpg'],
            ['nama' => 'Drs. ALI MUSTOFA', 'jabatan' => 'Guru TKR', 'foto' => 'ali.jpg'],
            ['nama' => 'S. MULYONO, S.Pd.', 'jabatan' => 'Guru TKR / WKS 5 Ketenagaan', 'foto' => 'mulyono.jpg'],
            ['nama' => 'MOCH. TOHARI, S.Pd., M.Si.', 'jabatan' => 'Guru TKR', 'foto' => 'tohari.jpg'],
            ['nama' => 'CAHYA BASUKI SUMARNO, S.T.', 'jabatan' => 'Guru TKR', 'foto' => 'cahya.jpg'],
            ['nama' => 'SIDIQ SUPRAYOGI, S.Pd.', 'jabatan' => 'Guru TKR / WKS 4 Kesiswaan', 'foto' => 'sidiq.jpg'],
            ['nama' => 'BENY AGUNG D., S.T.', 'jabatan' => 'Guru TKR', 'foto' => 'benny.jpg'],
            ['nama' => 'SUNARTO, S.Pd., M.Pd.', 'jabatan' => 'Guru TKR / Staf Kesiswaan', 'foto' => 'sunarto.jpg'],
            ['nama' => 'AHMAD SUKUR, S.Pd.', 'jabatan' => 'Guru TKR', 'foto' => 'ahmad_sukur.jpg'],
            ['nama' => 'NAUFAL FARRAS SAJID, S.Pd.', 'jabatan' => 'Guru TKR', 'foto' => 'naufal.jpg'],
        ],
        "Teknik Sepeda Motor (TSM)" => [
            ['nama' => 'ANDI SULISTIYONO, S.Pd.', 'jabatan' => 'Guru TSM / KKK TSM', 'foto' => 'andi.jpg'],
            ['nama' => 'SYAMSU HARYADI, S.T.', 'jabatan' => 'Guru TSM', 'foto' => 'syamsu.jpg'],
            ['nama' => 'BUDI PURNOMO, S.Pd.', 'jabatan' => 'Guru TSM', 'foto' => 'budi-purnomo.jpg'],
            ['nama' => 'KHOERUR ROZIQIN, S.Pd.', 'jabatan' => 'Guru TSM / Staf Ketenagaan', 'foto' => 'rozikin.jpg'],
            ['nama' => 'ARIF SAIFUDIN, S.Pd., M.Pd.', 'jabatan' => 'Guru TSM', 'foto' => 'arif.jpg'],
        ],
        "Teknik Elektronika Industri (TEI)" => [
            ['nama' => 'NUR BUDIONO, S.Pd.T.', 'jabatan' => 'Guru TEI / KKK TEI', 'foto' => 'nur_budiono.jpg'],
            ['nama' => 'AMRI BUSTAMI, S.Pd.', 'jabatan' => 'Guru TEI', 'foto' => 'amri.jpg'],
            ['nama' => 'HERU NUGROHO, S.Pd.', 'jabatan' => 'Guru TEI', 'foto' => 'heru.jpg'],
            ['nama' => 'MOHAMAD ROISUL FATA, S.Pd.', 'jabatan' => 'Guru TEI / Staf Kurikulum', 'foto' => 'roisul_fata.jpg'],
            ['nama' => 'BAYU SETYO P., S.Pd.', 'jabatan' => 'Guru TEI', 'foto' => 'bayu.jpg'],
            ['nama' => 'DWI AGUNG PANCA SAKTI, S.Pd.', 'jabatan' => 'Guru TEI / Staf Sarpras', 'foto' => 'dwi_agung.jpg'],
        ],
        "Teknik Instalasi Tenaga Listrik (TITL)" => [
            ['nama' => 'JALLI KHOIRUL LATIF, S.Pd.', 'jabatan' => 'Guru TITL / KKK TITL', 'foto' => 'jalli.jpg'],
            ['nama' => 'KUSDIONO, S.T.', 'jabatan' => 'Guru TITL / Staf Kesiswaan', 'foto' => 'kusdiono.jpg'],
            ['nama' => 'VARIKA WICAKSONO, S.Pd.', 'jabatan' => 'Guru TITL / Staf Humas', 'foto' => 'varika.jpg'],
            ['nama' => 'RIZKI RETNO MANGGALI, S.Pd.', 'jabatan' => 'Guru TITL / Staf Khusus Kepala Sekolah', 'foto' => 'rizki_retno.jpg'],
        ],
        "Rekayasa Perangkat Lunak (RPL / PPLG)" => [
            ['nama' => 'ALFIAN FAIZ, S.Pd.', 'jabatan' => 'Guru RPL / KKK RPL', 'foto' => 'alfian.jpg'],
            ['nama' => 'MUKTI WIDODO, S.T.', 'jabatan' => 'Guru RPL / Staf Ketenagaan', 'foto' => 'mukti.jpg'],
            ['nama' => 'ABDUL ADJIS, S.Kom.', 'jabatan' => 'Guru RPL', 'foto' => 'ajis.jpg'],
            ['nama' => 'MAZIYA DISTYA, S.Pd.', 'jabatan' => 'Guru RPL', 'foto' => 'maziya.jpg'],
        ]
    ],

    // --------------------------------------------------------------------------
    // 2. PENGAJAR MAPEL UMUM
    // --------------------------------------------------------------------------
    "Pengajar Mata Pelajaran Umum" => [
        "Pendidikan Agama & Budi Pekerti" => [
            ['nama' => 'SRI HARNING, S.Pd.I.', 'jabatan' => 'Guru Agama', 'foto' => 'sri-harning.jpg'],
            ['nama' => 'M. HARIS FAHMI, S.Pd.I.', 'jabatan' => 'Guru Agama', 'foto' => 'fahmi.jpg'],
            ['nama' => 'LAELY HILALLIYAH, S.Fil.I, M.Pd.', 'jabatan' => 'Guru Agama', 'foto' => 'laely.jpg'],
            ['nama' => 'WAHYU PERMANA, S.Pd.I., M.Pd.', 'jabatan' => 'Guru Agama', 'foto' => 'wahyu_permana.jpg'],
            ['nama' => 'TOFFAH, S.Ag., M.Pd.', 'jabatan' => 'Guru Agama', 'foto' => 'toffah.jpg'],
        ],
        "Pendidikan Pancasila / PPKn" => [
            ['nama' => 'Drs. HARNO SUBEDJO', 'jabatan' => 'Guru Pendidikan Pancasila', 'foto' => 'harno.jpg'],
            ['nama' => 'NUR NASETIAWIDODO, S.H.', 'jabatan' => 'Guru Pendidikan Pancasila', 'foto' => 'nurna.jpg'],
            ['nama' => 'AHMAD YUSRON, S.Pd., M.Pd.', 'jabatan' => 'Guru PPKn / Staf Sarpras', 'foto' => 'ahmad_yusron.jpg'],
            ['nama' => 'MARIA ULFA, S.Pd.', 'jabatan' => 'Guru PPKn / Staf Humas', 'foto' => 'maria.jpg'],
        ],
        "Bahasa Indonesia" => [
            ['nama' => 'CICIK SUWANINGSIH, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia', 'foto' => 'cicik.jpg'],
            ['nama' => 'MUJI KUAT, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia / WKS 1 Kurikulum', 'foto' => 'muji.jpg'],
            ['nama' => 'CHANIFAH ULFAH, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia / Staf Humas', 'foto' => 'chanifah.jpg'],
            ['nama' => 'PARTONO HASTHO, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia', 'foto' => 'partono.jpg'],
            ['nama' => 'SILVIA PUTRI HADIYATI, S.Pd.', 'jabatan' => 'Guru B. Indo / Staf Kesiswaan', 'foto' => 'silvia.jpg'],
            ['nama' => 'KARNADI, S.Pd.', 'jabatan' => 'Guru Bahasa Indonesia', 'foto' => 'karnadi.jpg'],
        ],
        "Matematika" => [
            ['nama' => 'DIAN EKOWATI, S.Pd.', 'jabatan' => 'Guru Matematika', 'foto' => 'dian.jpg'],
            ['nama' => 'KUSNANDAR, S.Pd, M.Pd.', 'jabatan' => 'Guru Matematika / Plt. Kasubag TU', 'foto' => 'kusnandar.jpg'],
            ['nama' => 'MEISARI DWI SETYAWATI, S.Pd.', 'jabatan' => 'Guru Matematika / Staf Kurikulum', 'foto' => 'meisari.jpg'],
            ['nama' => 'YUDHA ARVIANI, S.Pd.', 'jabatan' => 'Guru Matematika', 'foto' => 'yudha.jpg'],
            ['nama' => 'ARDIANI PRATIWI, S.Pd.', 'jabatan' => 'Guru Matematika / Staf Kesiswaan', 'foto' => 'ardiani.jpg'],
            ['nama' => 'DWI HERNI NOVIYANTI, S.Pd.', 'jabatan' => 'Guru Matematika', 'foto' => 'dwi_herni.jpg'],
            ['nama' => 'ROKHMAH FARIKHAH, S.Pd.', 'jabatan' => 'Guru Matematika', 'foto' => 'rokhmah.jpg'],
            ['nama' => 'NUR ANISA NIKA ISMAWATI, S.Pd.', 'jabatan' => 'Guru Matematika', 'foto' => 'nur_anisa.jpg'],
        ],
        "Bahasa Inggris" => [
            ['nama' => 'ETTY SETYANINGTYAS, S.S.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'etty.jpg'],
            ['nama' => 'YULI RAHAYU, S.Pd.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'yuli.jpg'],
            ['nama' => 'IDA HERLINA, S.Pd.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'ida.jpg'],
            ['nama' => 'WARDOYO, S.Pd.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'wardoyo.jpg'],
            ['nama' => 'HEKSI INDARTI, S.Pd.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'heksi.jpg'],
            ['nama' => 'IDA ROCHMAH YULIA, S.Pd.', 'jabatan' => 'Guru Bahasa Inggris', 'foto' => 'ida_rochmah.jpg'],
        ],
        "Pendidikan Jasmani, Olahraga & Kesehatan (PJOK)" => [
            ['nama' => 'Drs. BUDI SETIYADI', 'jabatan' => 'Guru PJOK', 'foto' => 'budi_setiyadi.jpg'],
            ['nama' => 'MARNDIYAH, S.Pd.', 'jabatan' => 'Guru PJOK', 'foto' => 'marndiyah.jpg'],
            ['nama' => 'ANGGARA INDRA PRASETYADI, S.Pd.', 'jabatan' => 'Guru PJOK', 'foto' => 'anggara.jpg'],
        ],
        "Sejarah & Seni Budaya" => [
            ['nama' => 'WAHYU DWI YULIANTI, S.Pd.', 'jabatan' => 'Guru Sejarah', 'foto' => 'wahyu.jpg'],
            ['nama' => 'SOLEKHA, S.Pd.', 'jabatan' => 'Guru Sejarah / Staf Humas', 'foto' => 'solekha.jpg'],
            ['nama' => 'PUGUH ARIO SEMBODO, S.Pd.', 'jabatan' => 'Guru Seni Budaya / Staf Kurikulum', 'foto' => 'puguh.jpg'],
            ['nama' => 'SIGIT PURNOMO, S.Pd.', 'jabatan' => 'Guru Seni Budaya', 'foto' => 'sigit-pur.jpg'],
        ],
        "Bahasa Daerah & Bahasa Asing" => [
            ['nama' => 'SUHARTI, S.Pd.', 'jabatan' => 'Guru Bahasa Jawa', 'foto' => 'suharti.jpg'],
            ['nama' => 'RINTA DWI JAYANTI, S.Pd.', 'jabatan' => 'Guru Bahasa Jawa', 'foto' => '.jpg'],
            ['nama' => 'SANTI IHTIARINI, S.Pd.', 'jabatan' => 'Guru B. Jepang / Staf Kesiswaan', 'foto' => 'santi.jpg'],
        ],
        "Informatika & PIPAS" => [
            ['nama' => 'RIRIS YUNIARATRI, S.Pd.', 'jabatan' => 'Guru Informatika / Staf Kesiswaan', 'foto' => 'riris.jpg'],
            ['nama' => 'RAHADIANA ZULRIE WIDIASTUTI, S.Kom.', 'jabatan' => 'Guru Informatika', 'foto' => 'diana.jpg'],
            ['nama' => 'TRI HERSUCI, S.Pd.', 'jabatan' => 'Guru PIPAS', 'foto' => 'tri.jpg'],
            ['nama' => 'UMI KULSUM, S.Pd.', 'jabatan' => 'Guru PIPAS / Staf Humas', 'foto' => 'umi.jpg'],
            ['nama' => 'SATRIA NUR KARIM AMRULLAH, S.Pd.', 'jabatan' => 'Guru PIPAS', 'foto' => 'satria.jpg'],
            ['nama' => 'YUNIDA, S.Si., M.Pd.', 'jabatan' => 'Guru PIPAS', 'foto' => '.jpg'],
            ['nama' => 'VIVID AYUDYA UTAMI, S.Pd.', 'jabatan' => 'Guru PIPAS', 'foto' => '.jpg'],
        ],
        "Kewirausahaan (KWU)" => [
            ['nama' => 'ANIK YULIANAN, S.Pd.', 'jabatan' => 'Guru Kewirausahaan', 'foto' => 'anik.jpg'],
            ['nama' => 'SUPRIYONO, S.Pd.', 'jabatan' => 'Guru KWU / Staf Sarpras', 'foto' => 'supriyono.jpg'],
            ['nama' => 'DWI HARYANINGRUM, S.Pd.', 'jabatan' => 'Guru Kewirausahaan', 'foto' => 'jpg'],
        ],
        "Bimbingan Konseling (BK)" => [
            ['nama' => 'IFA TRIHANDAYANI, S.Psi.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'ifa.jpg'],
            ['nama' => 'KUSUMADEWI, S.Pd., M.Pd.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'dewi.jpg'],
            ['nama' => 'WIWIK APRIANI, S.Pd.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'wiwik.jpg'],
            ['nama' => 'NANUNG SUTAN ARIBOWO, S.Psi., M.Pd.', 'jabatan' => 'Guru BK / WKS 2 Humas', 'foto' => 'nanung.jpg'],
            ['nama' => 'YENI SRI UTAMI, S.Pd.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'yeni.jpg'],
            ['nama' => 'DEFI LISTYANINGRUM, S.Pd.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'defi.jpg'],
            ['nama' => 'ARIYAWAN WIDUANTO, S.Pd.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => 'ariyawan.jpg'],
            ['nama' => 'ZUHROH M. ALBAR, M.Pd.Kons.', 'jabatan' => 'Guru Bimbingan Konseling', 'foto' => '.jpg'],
        ]
    ],

    // --------------------------------------------------------------------------
    // 3. TENAGA KEPENDIDIKAN
    // --------------------------------------------------------------------------
    "Tenaga Kependidikan" => [
        "Staf Tata Usaha & Karyawan Sekolah" => [
            ['nama' => 'URIP PURLANI', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'URIP PURNAMAWATI, S.M.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => 'urip.jpg'],
            ['nama' => 'SRI NINGSIH, S.M.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => 'sri.jpg'],
            ['nama' => 'AHMAD JAZULI, S.Kom.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'RISTRI KURNIAWAN, S.M.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'RINA AGUSTINA, S.M.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'SANDY PRASETYO UTOMO, S.Hum.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'GALIH WIRAWAN, S.Pd.', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'ANDI IRTANTO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'ALIMIN', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'SUWANDI', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'SUTARNO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'WARYANTO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'SANYOTO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'TEGUH SANTOSO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'MUH. RIFQI FIRGIAWAN', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'RAWAT', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
            ['nama' => 'KARYOTO', 'jabatan' => 'Tenaga Kependidikan', 'foto' => 'jpg'],
            ['nama' => 'FARID', 'jabatan' => 'Tenaga Kependidikan', 'foto' => '.jpg'],
        ]
    ]
];
?>

<div class="container" style="max-width: 1200px; margin: 40px auto; padding: 0 20px; font-family: 'Inter', sans-serif;">
    
    <!-- Judul Halaman Utama -->
    <h2 style="font-size: 1.8rem; color: #1e293b; border-bottom: 3px solid #2563eb; display: inline-block; padding-bottom: 5px; margin-bottom: 30px;">
        DAFTAR <span style="color: #64748b; font-weight: normal;">GURU & TENAGA KEPENDIDIKAN</span>
    </h2>

    <!-- LOOP 1: Mengambil Kategori Utama (e.g., Pengajar Kejuruan) -->
    <?php foreach ($tenaga_pendidik as $kategori_utama => $sub_kategori): ?>
        
        <div style="margin-bottom: 45px;">
            <!-- Heading Level 1 (Kategori Utama) -->
            <h3 style="font-size: 1.4rem; color: #0f172a; background: #f1f5f9; padding: 12px 18px; border-radius: 8px; border-left: 5px solid #2563eb; margin-bottom: 20px;">
                <?= $kategori_utama; ?>
            </h3>

            <!-- LOOP 2: Mengambil Sub-Kategori (e.g., Teknik Pemesinan) -->
            <?php foreach ($sub_kategori as $nama_sub => $daftar_guru): ?>
                
                <div style="margin-bottom: 25px; margin-left: 10px;">
                    <!-- Heading Level 2 (Sub-Kategori) -->
                    <h4 style="font-size: 1.05rem; color: #2563eb; margin-bottom: 15px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                        <span style="display:inline-block; width:8px; height:8px; background:#2563eb; border-radius:50%;"></span>
                        <?= $nama_sub; ?>
                    </h4>

                    <!-- GRID CARD GURU -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 18px;">
                        
                        <!-- LOOP 3: Mengambil Data Guru Masing-Masing -->
                        <?php foreach ($daftar_guru as $g): ?>
                            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px; display: flex; align-items: center; gap: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                                
                                <!-- Foto Guru dengan object-position: top -->
                                <img src="assets/images/guru/<?= $g['foto']; ?>" 
                                     style="width: 52px; height: 52px; border-radius: 50%; object-fit: cover; object-position: top; border: 2px solid #2563eb; flex-shrink: 0;"
                                     onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($g['nama']); ?>&background=2563eb&color=ffffff';">
                                
                                <div>
                                    <h5 style="font-size: 0.85rem; margin: 0; font-weight: 700; color: #0f172a; line-height: 1.2;"><?= $g['nama']; ?></h5>
                                    <p style="font-size: 0.75rem; margin: 4px 0 0 0; color: #2563eb; font-weight: 600;"><?= $g['jabatan']; ?></p>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    <?php endforeach; ?>

</div>

<?php include 'includes/footer.php'; ?>