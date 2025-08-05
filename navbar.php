<nav class=" navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <?php 
      if ($pg=='about'){
        echo'Описание';}
        elseif ($pg=='gallery'){
          echo'Галерея';}
        elseif ($pg=='map'){
          echo'Расположение';}
        elseif ($pg=='contact'){
          echo'Контакты';}
        elseif ($pg=='plan'){
          echo'Планировка';}  
          else{};
      ?>

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item  <?php if ($pg=='about'){echo'active';}else{};?>">
        <a class="nav-link" href="index.php?pg=about ">О помещении <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if ($pg=='gallery'){echo'active';}else{};?>">
        <a class="nav-link" href="index.php?pg=gallery ">Галерея <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if ($pg=='plan'){echo'active';}else{};?>">
        <a class="nav-link" href="index.php?pg=plan ">Планировка <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if ($pg=='map'){echo'active';}else{};?>">
        <a class="nav-link" href="index.php?pg=map ">Расположение <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if ($pg=='contact'){echo'active';}else{};?>">
        <a class="nav-link" href="index.php?pg=contact ">Контакты <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>

