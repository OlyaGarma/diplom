<div>

   <h3>Классический массаж -1000 руб.</h3>
    <h3>Спортивный массаж -1200 руб.</h3>
     <h3>Релакс массаж -1300 руб.</h3>
   </ul>
</div>

<!-- <div class= "pol">
 <form class="contact_form" action="contact-form.php" method="post">
    <p>
        <label for="name">Имя:</label>
         <input type="text"  name="name" placeholder="Введите ваше имя" required />
        </p>
       
        <p>
         <label for="tel">Телефон:</label>
           <input type="tel" name="tel" placeholder="Введите номер телефона" required />
           <span class="form_hint"></span>
        </p>
        <input name="bezspama" type="text" style="display:none" value="" />
        <p>
            <button class="submit" type="submit" href="/zayv">Oставить заявку</button>
        </p>
</form>
</div> -->
<main >
<div >
<?php foreach($all_z as $z):?>
<div>
<h3><?php echo $z['usl']; ?></h3>
<p> <?php echo $z['price']; ?></p>
</div>
<?php endforeach;?>
</div>
</main>

               