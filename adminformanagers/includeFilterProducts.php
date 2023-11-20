

<div class="filterProod">

	<img class="filterProodImgJpg" src="../img/FilterJpgOpen.jpg">

	<img class="filterProodImgJpg1" src="../img/greyClose.jpg">

	<h2>FILTRU</h2>

	<div class="filterProodButtons">





    <div class="mobversionarticle17">

          <div class="divCloseThis011"></div>

          <div class="divCloseThis01"></div>  

      <img class="imgClosePosition" src="../img/filterButton1.png">

      <img class="imgOpenedPosition" src="../img/filterButton1.png">

      <h3>TEXTURA</h3>

            <?php
            $query = "SELECT DISTINCT(texture) FROM imgslick ORDER BY texture";
            $statement = $connect->prepare($query);
            $statement->execute();
             $result = $statement->fetchAll();
            foreach($result as $rowwe)
            {
            ?>

          <label class="containerLabelFilter"  for="<?php echo $rowwe['texture']; ?>1" ><?php echo $rowwe['texture']; ?>
            <input type="checkbox" class="common_selector texture" id="<?php echo $rowwe['texture']; ?>1"  value="<?php echo $rowwe['texture']; ?>">
            <span class="checkmarkLabelFilter checknaznacenie"></span>
          </label>



             <?php
               }
             ?>
      
    </div>


        <div class="mobversionarticle18">

          <div class="divCloseThis11"></div>

          <div class="divCloseThis1"></div>  

       <img class="imgClosePosition1" src="../img/filterButton1.png">

      <img class="imgOpenedPosition1" src="../img/filterButton1.png">

      <h3>TIP</h3>

            <?php
            $query = "SELECT DISTINCT(tip) FROM imgslick ORDER BY tip";
            $statement = $connect->prepare($query);
            $statement->execute();
             $result = $statement->fetchAll();
            foreach($result as $rowwe)
            {
            ?>

          <label class="containerLabelFilter"  for="<?php echo $rowwe['tip']; ?>1" ><?php echo $rowwe['tip']; ?>
            <input type="checkbox" class="common_selector tip" id="<?php echo $rowwe['tip']; ?>1"  value="<?php echo $rowwe['tip']; ?>">
            <span class="checkmarkLabelFilter checknaznacenie"></span>
          </label>



             <?php
               }
             ?>
      
    </div>


            <div class="mobversionarticle19">

         <div class="divCloseThis22"></div>

          <div class="divCloseThis2"></div>           

                    <img class="imgClosePosition2" src="../img/filterButton1.png">

      <img class="imgOpenedPosition2" src="../img/filterButton1.png">

      <h3>SUPRAFAȚA</h3>

            <?php
            $query = "SELECT DISTINCT(suprafata) FROM imgslick ORDER BY suprafata";
            $statement = $connect->prepare($query);
            $statement->execute();
             $result = $statement->fetchAll();
            foreach($result as $rowwe)
            {
            ?>

          <label class="containerLabelFilter"  for="<?php echo $rowwe['suprafata']; ?>1" ><?php echo $rowwe['suprafata']; ?>
            <input type="checkbox" class="common_selector suprafata" id="<?php echo $rowwe['suprafata']; ?>1"  value="<?php echo $rowwe['suprafata']; ?>">
            <span class="checkmarkLabelFilter checknaznacenie"></span>
          </label>



             <?php
               }
             ?>
      
    </div>


                <div class="mobversionarticle20">

      <div class="divCloseThis33"></div>

      <div class="divCloseThis3"></div>

                        <img class="imgClosePosition3" src="../img/filterButton1.png">

      <img class="imgOpenedPosition3" src="../img/filterButton1.png">

      <h3>PRODUCATOR</h3>

            <?php
            $query = "SELECT DISTINCT(producator) FROM article ORDER BY producator";
            $statement = $connect->prepare($query);
            $statement->execute();
             $result = $statement->fetchAll();
            foreach($result as $rowwe)
            {
            ?>

          <label class="containerLabelFilter"  for="<?php echo $rowwe['producator']; ?>1" ><?php echo $rowwe['producator']; ?>
            <input type="checkbox" class="common_selector producator" id="<?php echo $rowwe['producator']; ?>1"  value="<?php echo $rowwe['producator']; ?>">
            <span class="checkmarkLabelFilter checknaznacenie"></span>
          </label>



             <?php
               }
             ?>
      
    </div>


    <div class="mobversionarticle21">

      <div class="divCloseThis44"></div>

      <div class="divCloseThis4"></div>

            <img class="imgClosePosition4" src="../img/filterButton1.png">

      <img class="imgOpenedPosition4" src="../img/filterButton1.png">

      <h3>DIMENSIUNE</h3>

            <?php
            $query = "SELECT DISTINCT(size) FROM imgslick ORDER BY size";
            $statement = $connect->prepare($query);
            $statement->execute();
             $result = $statement->fetchAll();
            foreach($result as $rowwe)
            {
            ?>

          <label class="containerLabelFilter"  for="<?php echo $rowwe['size']; ?>1" ><?php echo $rowwe['size']; ?>
            <input type="checkbox" class="common_selector size" id="<?php echo $rowwe['size']; ?>1"  value="<?php echo $rowwe['size']; ?>">
            <span class="checkmarkLabelFilter checknaznacenie"></span>
          </label>



             <?php
               }
             ?>
      
    </div>
		
	</div>

      <button onclick="window.location.href='#cill'" class="LoadFilter">VEZI REZULTATELE</button>
	
</div>

