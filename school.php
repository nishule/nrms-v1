<?php
    error_reporting(0);
    if(isset($_POST['tafuta'])){
        // Get form data
        function removeUnwanted($data){
            $data = str_replace('/','',$data);
            $data = str_replace('.','',$data);
            $data = str_replace('_','',$data);
            $data = str_replace('-','',$data);
            $data = str_replace('-','',$data);
            $data = str_replace('`','',$data);
            $data = str_replace('~','',$data);
            $data = str_replace('!','',$data);
            $data = str_replace('@','',$data);
            $data = str_replace('#','',$data);
            $data = str_replace('$','',$data);
            $data = str_replace('%','',$data);
            $data = str_replace('^','',$data);
            $data = str_replace('&','',$data);
            $data = str_replace('*','',$data);
            $data = str_replace('(','',$data);
            $data = str_replace(')','',$data);
            $data = str_replace('+','',$data);
            $data = str_replace('{','',$data);
            $data = str_replace('}','',$data);
            $data = str_replace('|','',$data);
            $data = str_replace('\\','',$data);
            $data = str_replace(';','',$data);
            $data = str_replace(':','',$data);
            $data = str_replace('\'','',$data);
            $data = str_replace('"','',$data);
            $data = str_replace('<','',$data);
            $data = str_replace('>','',$data);
            $data = str_replace('?','',$data);
            $data = str_replace(',','',$data);
            return $data;
        }
        $resYear = removeUnwanted($_POST['resultYear']);
        $resLevel = removeUnwanted($_POST['resultLevel']);
        $resSchool = removeUnwanted($_POST['resultSchool']);
        header("Location: ?page=result&school=$resSchool&year=$resYear&level=$resLevel");exit();
    }
?>