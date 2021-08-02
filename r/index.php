<?php
    include_once("../config.php");
    $q = $_GET['q'];
    $sql = "SELECT * FROM products WHERE (product_name like '%$q%' OR category like '%$q%' OR (sub_category like '%$q%' OR idioma like '%$q%' OR (criador like '%$q%' OR tags like '%$q%')))";
    $result = $conn->query($sql,$firstname);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                 echo "<script>
                            window.location.href = 'https://aprend.com.br/buscar/?q=$q'
                       </script>";
?>
    <?php
           }
        }
    else {?>
                                
<?php
include_once("../config.php");

$q = $_GET['q'];

/* DESCOBRINDO VALOR FINAL */
$sqlPreFinal = "SELECT DISTINCT category,sub_category,idioma,product_name,criador FROM products WHERE username='rodrigo'";
$resultPreFinal = $conn->query($sqlPreFinal,$firstname);
    if ($resultPreFinal->num_rows > 0) {
        while($rowPreFinal = $resultPreFinal->fetch_assoc()) {
            
            $categoryPreFinal = $rowPreFinal["category"];
            $levenshteinTextcategoryPreFinal = levenshtein("$categoryPreFinal","$q");
            $similarTextcategoryPreFinal = similar_text("$categoryPreFinal","$q");
            
            
            
            $sub_categoryPreFinal = $rowPreFinal["sub_category"];
            $levenshteinTextsub_categoryPreFinal = levenshtein("$sub_categoryPreFinal","$q");
            $similarTextsub_categoryPreFinal = similar_text("$sub_categoryPreFinal","$q");
            
            
            
            $idiomaPreFinal = $rowPreFinal["idioma"];
            $levenshteinTextidiomaPreFinal = levenshtein("$idiomaPreFinal","$q");
            $similarTextidiomaPreFinal = similar_text("$idiomaPreFinal","$q");
            
            
            
            $product_namePreFinal = $rowPreFinal["product_name"];
            $levenshteinTextproduct_namePreFinalPreFinal = levenshtein("$product_namePreFinal","$q");
            $similarTextproduct_namePreFinal = similar_text("$product_namePreFinal","$q");
            
            
            $criadorPreFinal = $rowPreFinal["criador"];
            $levenshteinTextcriadorPreFinalPreFinal = levenshtein("$criadorPreFinal","$q");
            $similarTextcriadorPreFinal = similar_text("$criadorPreFinal","$q");
            
            

            $Value_PreFinal_min = min($levenshteinTextcategoryPreFinal,$levenshteinTextsub_categoryPreFinal,$levenshteinTextidiomaPreFinal,$levenshteinTextproduct_namePreFinalPreFinal,$levenshteinTextcriadorPreFinalPreFinal);
            $Value_PreFinal_max = max($similarTextcategoryPreFinal,$similarTextsub_categoryPreFinal,$similarTextidiomaPreFinal,$similarTextproduct_namePreFinal,$similarTextcriadorPreFinal);
            
            
            $Value_Final_min = is_null($Value_Final_min) || $Value_Final_min > $Value_PreFinal_min ? $Value_PreFinal_min :$Value_Final_min;
            $Value_Final_max = is_null($Value_Final_max) || $Value_Final_max < $Value_PreFinal_max ? $Value_PreFinal_max :$Value_Final_max;
            
            
        } 
    }
    
    
    
    
/* DESCOBRINDO à PARTIR DA VARIAVEL FINAL A PALAVRA RECOMENDADA */

$sqlFinal = "SELECT DISTINCT category FROM products WHERE category <> ''";
$resultFinal = $conn->query($sqlFinal,$firstname);
    if ($resultFinal->num_rows > 0) {
        while($rowFinal = $resultFinal->fetch_assoc()) {
            
            $categoryFinal = $rowFinal["category"];
            $levenshteinTextcategoryFinal = levenshtein("$categoryFinal","$q");
            $similarTextcategoryFinal = similar_text("$categoryFinal","$q");
            
   
            if(($levenshteinTextcategoryFinal == $Value_Final_min) AND ($similarTextcategoryFinal == $Value_Final_max)){
                echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$categoryFinal&i=$q'
                    </script>";
            }else{
                if(($similarTextcategoryFinal == $Value_Final_max)){
                   echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$categoryFinal&i=$q'
                    </script>";
                }else{
                    if(($levenshteinTextcategoryFinal == $Value_Final_min)){
                      echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$categoryFinal&i=$q'
                    </script>";
                    }
                }
            } 
            
    
        } 
    }
    
    
    
    
    
$sqlFinal = "SELECT DISTINCT sub_category FROM products WHERE sub_category <> ''";
$resultFinal = $conn->query($sqlFinal,$firstname);
    if ($resultFinal->num_rows > 0) {
        while($rowFinal = $resultFinal->fetch_assoc()) {
            
            $sub_categoryFinal = $rowFinal["sub_category"];
            $levenshteinTextsub_categoryFinal = levenshtein("$sub_categoryFinal","$q");
            $similarTextsub_categoryFinal = similar_text("$sub_categoryFinal","$q");
            

            if(($levenshteinTextsub_categoryFinal == $Value_Final_min) AND ($similarTextsub_categoryFinal == $Value_Final_max)){
                echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$sub_categoryFinal&i=$q'
                    </script>";
                }
                
            if(($similarTextsub_categoryFinal == $Value_Final_max)){
                echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$sub_categoryFinal&i=$q'
                    </script>"; 
            }
            if(($levenshteinTextsub_categoryFinal == $Value_Final_min)){
                echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$sub_categoryFinal&i=$q'
                    </script>"; 
            }

        } 
    }    




$sqlFinal = "SELECT DISTINCT idioma FROM products WHERE idioma <> ''";
$resultFinal = $conn->query($sqlFinal,$firstname);
    if ($resultFinal->num_rows > 0) {
        while($rowFinal = $resultFinal->fetch_assoc()) {
            
            $idiomaFinal = $rowFinal["idioma"];
            $levenshteinTextidiomaFinal = levenshtein("$idiomaFinal","$q");
            $similarTextidiomaFinal = similar_text("$idiomaFinal","$q");
            
 
            if(($levenshteinTextidiomaFinal == $Value_Final_min) AND ($similarTextidiomaFinal == $Value_Final_max)){
                 echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$idiomaFinal&i=$q'
                    </script>";
            }else{
                if(($similarTextidiomaFinal == $Value_Final_max)){
                    echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$idiomaFinal&i=$q'
                    </script>";
                }else{
                    if(($levenshteinTextidiomaFinal == $Value_Final_min)){
                       echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$idiomaFinal&i=$q'
                    </script>";
                    }
                }
            }
            
            
         
    
        } 
    }    



$sqlFinal = "SELECT DISTINCT product_name FROM products WHERE product_name <> ''";
$resultFinal = $conn->query($sqlFinal,$firstname);
    if ($resultFinal->num_rows > 0) {
        while($rowFinal = $resultFinal->fetch_assoc()) {
            
            
            $product_nameFinal = $rowFinal["product_name"];
            $levenshteinTextproduct_nameFinal = levenshtein("$product_nameFinal","$q");
            $similarTextproduct_nameFinal = similar_text("$product_nameFinal","$q");
            

            
              if(($levenshteinTextproduct_nameFinal == $Value_Final_min) AND ($similarTextproduct_nameFinal == $Value_Final_max)){

                echo "
                <script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$product_nameFinal&i=$q'
                    </script>
                    ";
            }
                if(($similarTextproduct_nameFinal == $Value_Final_max)){
                   
                    echo "
                <script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$product_nameFinal&i=$q'
                    </script>
                    ";
                }
                    if(($levenshteinTextproduct_nameFinal == $Value_Final_min)){
                       
                        echo "
                        <script>
                            window.location.href = 'https://aprend.com.br/buscar/?q=$product_nameFinal&i=$q'
                        </script>
                    ";
                    }
               
 
    
        } 
    }



$sqlFinal = "SELECT DISTINCT criador FROM products WHERE criador <> ''";
$resultFinal = $conn->query($sqlFinal,$firstname);
    if ($resultFinal->num_rows > 0) {
        while($rowFinal = $resultFinal->fetch_assoc()) {
            
            $criadorFinal = $rowFinal["criador"];
            $levenshteinTextcriadorFinal = levenshtein("$criadorFinal","$q");
            $similarTextcriadorFinal = similar_text("$criadorFinal","$q");
            
            
            if(($levenshteinTextcriadorFinal == $Value_Final_min) AND ($similarTextcriadorFinal == $Value_Final_max)){
                 echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$criadorFinal&i=$q'
                    </script>";
            }else{
                if(($similarTextcriadorFinal == $Value_Final_max)){
                   echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$criadorFinal&i=$q'
                    </script>";
                }else{
                    if(($levenshteinTextcriadorFinal == $Value_Final_min)){
                       echo "<script>
                        window.location.href = 'https://aprend.com.br/buscar/?q=$criadorFinal&i=$q'
                    </script>";
                    }
                }
            }
            
            
            
        } 
    }    

?>
<?php    
   }
 ?>