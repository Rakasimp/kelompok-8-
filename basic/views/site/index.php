<?php

/** @var yii\web\View $this */

$this->title = 'RaT Coffeshop';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang!</h1>

        <p class="lead">Selamat menikmati, Semoga harimu lebih indah</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">RT coffe</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <!-- Section for Coffee -->
            <div class="col-lg-4 mb-3">
                <h2>Kopi</h2>
                <img src="<?= Yii::getAlias('@web') ?>/Images/Kopi.jpg" alt="Kopi" width="200">

                <p>Menikmati secangkir kopi hangat di pagi hari dapat memberikan semangat untuk memulai aktivitas. Kopi juga sempurna untuk dinikmati di waktu santai.</p>

                <p><a class="btn btn-outline-secondary" href="#">Pelajari tentang kopi &raquo;</a></p>
            </div>
            
            <!-- Section for Snacks -->
            <div class="col-lg-4 mb-3">
                <h2>Camilan</h2>
                <img src="<?= Yii::getAlias('@web') ?>/Images/Camilan.jpg" alt="Camilan" width="200">
                
                <p>Camilan seperti kue kering, keripik, atau cokelat sangat cocok menemani waktu luang atau bekerja. Rasakan kenikmatannya di setiap gigitan.</p>

                <p><a class="btn btn-outline-secondary" href="#">Temukan camilan favoritmu &raquo;</a></p>
            </div>
            
            <!-- Section for Hearty Meals -->
            <div class="col-lg-4">
                <h2>Makanan Berat</h2>
                <img src="<?= Yii::getAlias('@web') ?>/Images/Mie.jpg" alt="Makanan Berat" width="200">

                <p>Makanan berat seperti nasi dengan lauk ayam panggang dan sayuran serta mie ataupun spagheti adalah pilihan sempurna untuk mengisi energi Anda. Nikmati kelezatannya.</p>

                <p><a class="btn btn-outline-secondary" href="#">Lihat menu makanan berat &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
