/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

$(document).ready(function(){
        $('#search_input').keyup(function(){
            var query = $('#search_input').val();
            //$('#results').html('');
            //$('.list-group').css('display', 'block');

            if(query.length >= 2){
                $.ajax({
                    url:"ajaxData.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        $('#localSearchSimple').fadeIn();
                        $('#localSearchSimple').html(data);
                    }
                })
            }else{
                $('#localSearchSimple').css('display', 'none');
            }

            /* if(query.length < 2){
                $('#localSearchSimple').css('display', 'none');
            } */

        });
		)
