<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<body>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proses Pemesanan</title>
    <!-- Tambahkan tautan ke file CSS yang sesuai -->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Proses Pemesanan</h1>

        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (isset($errors)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form action="<?= site_url('pemesanan/submitPesanan'); ?>" method="post">
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                <input type="text" id="jumlah" name="tanggal_keberangkatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ttujuan">Tujuan</label>
                <input type="text" id="tujuan" name="tujuan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Pesan</button>
        </form>
    </div>
    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>
<?= $this->endSection(); ?>