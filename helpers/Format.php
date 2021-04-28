<?php 

class Format{
    public function formatDate($date)
       {return date('y-m-d  h:i:sa',strtotime($date));}
       public function textShorten($text,$limit=400)
       {
        $text=$text." ";
        $text=substr($text,0,$limit);
        $text=substr($text,0,strrpos($text,' ')); ////this lin for to show the last full word.
        $text=$text."....";
        return $text;   
       }
       public function validation($data)
       {
       $data=trim($data);
       $data=stripcslashes($data);
       $data=htmlspecialchars($data);
       return $data;
       }
}
?>