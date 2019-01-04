<html>
 
<body>
    <?php
 
    class RefBooks{
        /*Member variables*/
        var $author;
        var $title;
       
        /*Constructor*/
        function __construct($tit = "AA", $aut = "BB"){
            $this->title = $tit;
            $this->author = $aut;
        }
       
        /*Destructor*/
        function __destruct(){
            $this->title = "";
            $this->author = "";
        }
       
        /*Member functions*/
        function setAuhtor($aut){
            $this->author = $aut;
        }
        function getAut(){
            echo $this->author . "<br>";
        }
        function setTitle($tit){
            $this->title = $tit;
        }
        function getTitle(){
            echo $this->title . "<br>";
        }
    }
   
    $stat = new RefBooks("Statistic King", "Jackson");
    $home = new RefBooks();
   
    /*Get those set values*/
    $stat->getTitle();
    $home->getTitle();
    $stat->getAut();
    $home->getAut();
 
    ?>
</body>
 
</html>