

 <form action="creation1" method = "post" id="emplorm">
    @csrf

        
        <div class="col-md-9">
            <button class="btn btn-primary btn-block btn-lg" type="submit">Enregistrer</button>
        </div> 

</form>

<div class="row dtailvhicule">
    <div class="col-md-3">
        <label> </label>
        <?php
 $today = getdate();
 print_r($today); echo '<br>';
 $anne = $today['year']; echo '<br>';
 $mois = $today['mon']; echo '<br>';
 $jour = $today['mday']; echo '<br>';

 $heure = $today['hours']; echo '<br>';
 $miniit = $today['minutes']; echo '<br>';
 $msecond = $today['seconds']; echo '<br>';
  
 $tchien = $anne.'-'.$mois.'-'.$jour.' '.$heure.':'.$miniit.':'.$msecond;
 echo $tchien; echo '<br>';

$plus = '2021-2-11 17:13:42';

echo $plus; echo '<br>';
 echo 'la date du jour est ' .$anne.'-'.$mois.'-'.$jour.' '.$heure.':'.$miniit.':'.$msecond;

  echo '<br>';
 $anaye = date('Y/m/d H :m :s', $today[0]);

echo $anaye;
?>
    </div>
</div>

