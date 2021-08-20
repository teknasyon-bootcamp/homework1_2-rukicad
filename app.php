<?php
/**
*Cinsiyet, boy yaş ve kilo değeri girip bmr hesabı yapıyoruz.
*İlk olarak kadın bilgilerini kod satırlarına ekledik.
*Kadın için girilen değerlere bakıp bmr hesabı yapılacak ekran çıktısı verilecek.
*/
$gender = "female"; // Cinsiyet
$weight = 55; // Kilo 
$height = 160; // Boy
$age = 23; // Yaş

$guess = "1470"; // Tahmin edilen değer
	$guess = (int) $guess; // Cast to integer
	
      if($gender == "female"){ // Cinsiyetin kadın olması durumu
	    $female_bmr = 75.362 + (50.397 * $weight) + (6.799 * $height) - (7.677 * $age); // bmr (female)
	    echo "BMR: " . $female_bmr ;
	    echo "<br>";
	    if ($female_bmr < $guess) {
	        echo "Tahmin değerinden düşük";
	    } elseif ($female_bmr == $guess){
	        echo "Tahmin değerine eşit";
	    } else {
	        echo "Tahmin değerinden büyük";
	    }
	} else { // Cinsiyetin erkek olması durumu
	    $male_bmr = 347.593 + (8.247 * $weight) + (4.098 * $height) - (5.330 * $age); // bmr (male)
		echo "BMR: " . $male_bmr;
		echo "<br>";
	    if ($male_bmr < $guess) {
	        echo "Tahmin değerinden düşük";
	    } elseif ($male_bmr == $guess){
	        echo "Tahmin değerine eşit";
	    } else {
	        echo "Tahmin değerinden büyük";
	    }
	}
/**
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 */
