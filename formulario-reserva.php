<div class="reservation-form small-12 columns no-padding">
   <form action="index.php#contact-us" method="post">
      <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
         <input type="text" name="nome" class="field" placeholder="Nome completo" required/>
         <input type="email" name="email" class="field" placeholder="E-mail" required/>
         <textarea type="text" name="mensagem" class="field" placeholder="Mensagem"></textarea>
      </div>

      <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
         <input type="text" name="telefone" class="field" placeholder="Telefone" required/>
         <input type="datetime-local" name="data" class="field" placeholder="Data e hora" required/>
         <input type="text" name="num_pessoas" class="field" placeholder="Número de pessoas" required/>
         <input type="submit" name="submit" value="Reservar"/>
      </div>
   </form>
</div>
