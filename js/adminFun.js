//admin functions

function searchRows(trindex, eleid, tableid) { //tr index, element id
	//alert(trindex); working
  // Declare variables
  var input, filter, table, tr, td, i, tindex;
  //input = document.getElementById("myInput");
  input = document.getElementById(eleid);
  filter = input.value.toUpperCase(); //key word to uppercase
  
  table = document.getElementById(tableid);
  tr = table.getElementsByTagName("tr"); //table row

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[trindex]; //tr index
    //td = tr[i].getElementsByTagName("td")[0]; //tr index
    if (td) { //if there is a td
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) { //if strings are matched
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}