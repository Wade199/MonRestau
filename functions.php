<?php
    function nav_item (string $lien, string $titre, string $linkclass = ''): string{               
        $classe = 'nav-item';
        if ($_SERVER ['SCRIPT_NAME'] === $lien){
            $classe = $classe . 'active';
        }
        return <<<HTML
        <li class="$classe">
        <a class= "$linkclass" href="$lien"> $titre</a> 
        </li>
    HTML;   
    }
    
    function nav_menu (string $linkclass = ''): string {
      return
        nav_item('index.php' , 'Accueil', $linkclass).
        nav_item('menu.php' , 'Menu', $linkclass).
        nav_item('contact.php' , 'Contact', $linkclass).
        nav_item('jeu.php' , 'Composer Ma Glace', $linkclass);
    }

    function checkbox(string $name, string $value, array $data): string{
       $attributes = '';
       if (isset($data[$name]) && in_array($value, $data[$name])){
            $attributes .= 'checked';
       }
       return <<<HTML
       <input type="checkbox" name="{$name}[]" value ="$value" $attributes>
    HTML;    
    }


    function radio(string $name, string $value, array $data): string{
        $attributes = '';
        if (isset($data[$name]) &&  $value === $data[$name]){
             $attributes .= 'checked';
        }
        return <<<HTML
        <input type="radio" name="{$name}" value ="$value" $attributes>
    HTML;    
    }

     function dump ($variable){
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }

    function select(string $name, $value,array $options): string{
        $html_options = [];
        foreach ($options as $k => $option){
            $attributes = $k == $value ? 'selected' : '';
            $html_options[] = "<option value ='$k' $attributes>$option</option>";
        }
        return  "<select class='from-control' name='$name'>" . implode($html_options) . '</select>';
    }

    function creneaux_html (array $creneaux){
        // empty sa return un tableau vide 
        if (empty($creneaux)){
            return'fermé';
        }
        $phrase = [];
        foreach ($creneaux as $creneau){
            $phrase[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        }
        return 'Ouvert '. implode(' et ', $phrase);
    }

    function in_creneaux (int $heure, array $creneaux): bool {
        
        foreach($creneaux as $creneau){
            $debut = $creneau[0];
            $fin = $creneau[1];
            if($heure >= $debut && $heure < $fin){
                return true;
            }  
        }
        return false;
        
    }
?>
