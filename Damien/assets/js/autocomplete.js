$(document).ready(function(){

var languages = ["Ada","Java", "LISP", "Javascript","PHP","C","C++","Visual Basic","HTML","CSS","JQuery"]; 
  //Can add more,separate with commas.
  //Added CSS,HTML cause people know them more.               

  $("#tags").autocomplete({
    source: languages
});
});