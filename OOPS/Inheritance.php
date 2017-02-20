<?php
   class Books {                // Class Creation
      
      var $price;
      var $title;            // Member Variables
           
      function setPrice($var){         // Methods & Member Functions
         $this->price = $var;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($var){
         $this->title = $var;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
$LAMP = new Books;         // Object Creation
$WordPress = new Books;
$Drupal = new Books;

$LAMP->setTitle( "Linux Apache MySQL PHP/Perl/Python" );          // Calling Member Functions 
$WordPress->setTitle( "Content Management System" );
$Drupal->setTitle( "Also a Content Management System" );

$LAMP->setPrice( 10 );
$WordPress->setPrice( 15 );
$Drupal->setPrice( 20 );

$LAMP->getTitle();
$WordPress->getTitle();
$Drupal->getTitle();

$LAMP->getPrice();
$WordPress->getPrice();
$Drupal->getPrice();

class Novel extends Books {
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}
$SQL= new Novel;
$SQL->setPublisher( "Universal Books" );  
$SQL->getpublisher( );
?>

