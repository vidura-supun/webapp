<?php
 function esc($html)
 {
   return htmlentities($html, ENT_QUOTES, 'UTF-8');
 } 
