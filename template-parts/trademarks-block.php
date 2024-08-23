<section class="section marks">
  <div class="container">
   <?php
   if (!empty($block_title)) {
    echo '<div class="seporator"></div>';
    echo '<h2 class="section-title">'. $block_title .'</h2>';
    echo '<h2 class="section-title-2">'. $block_title .'</h2>';
   }
   ?>
    <div class="card-marks">
      <a href="./ag-tech.php" class="card-mark">
        <svg class="card-marks-logo">
          <use class="ag-blue" href="img/sprite.svg#ag"></use>
         </svg>
        <h3 class="card-marks-title">Автохимия AG-Tech</h3>
        <p class="card-marks-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
         </p>
      </a>
      <a href="#" class="card-mark">
        <svg class="card-marks-logo">
          <use class="al-blue" href="img/sprite.svg#al"></use>
        </svg>
        <h3 class="card-marks-title">Автохимия AP</h3>
        <p class="card-marks-text">
           Для современного мира разбавленное изрядной долей эмпатии,
           рациональное мышление создаёт предпосылки для поставленных
           обществом задач.
        </p>
      </a>
    </div>
  </div>
</section>