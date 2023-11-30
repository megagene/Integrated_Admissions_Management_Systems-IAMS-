<?php

if (isset($_GET['content']) && isset($_SESSION['curr_index'])) {

   switch ($_GET['content']) {
      case 'personal':
         unset($_SESSION['curr_index']);
      case 'guardian':
         $_SESSION['curr_index'] = 2;
         break;
      case 'exams':
         $_SESSION['curr_index'] = 3;

         break;
      case 'programs':
         $_SESSION['curr_index'] = 4;

         break;
      case 'documents':
         $_SESSION['curr_index'] = 5;

         break;
      case 'declaration':
         $_SESSION['curr_index'] = 6;

         break;
      case 'completed':
         $_SESSION['curr_index'] = 7;

         break;

      default:
         unset($_SESSION['curr_index']);
         break;
   }
}
