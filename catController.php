<?php
// array('Harry Potter',999765432,'Fiction',450),
//array('Lord Of The Rings',123456788,'Fiction',950),
//array('Hannibal',987654322,'Fiction',650),
//array('Da vinci Code',654345672,'Science',760)
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
 public function about () {
 return view('about');
 }
 

 public function books () {
     
    $books = [['Harry Potter','999-761','Fiction','450'],['Lord Of The Rings','122-232','Fiction','860'],['Hannibal','536-453','Fiction','420'],['Da vinci Code','398-749','Science','1200']];
      
    return view('list') ->with('p',$books);
 }
} 

