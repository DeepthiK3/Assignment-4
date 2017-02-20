<?php
   class Books {
   function __construct( $par1, $par2 ) {   // Constructor
  // Like a constructor function we can create destructor function using function __destruct().       
   $this->title = $par1; 
   $this->price = $par2;
     } 
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   
   }
$HTML = new Books( "Hyper Text Markup Language", 5 );
$CSS = new Books ( "Cascading Style Sheets", 3 );
$AJAX = new Books ("Asynchronous JavaScript and XML", 7 );

/* Get those set values */
$HTML->getTitle();
$CSS->getTitle();
$AJAX->getTitle();

$HTML->getPrice();
$CSS->getPrice();
$AJAX->getPrice();
?>