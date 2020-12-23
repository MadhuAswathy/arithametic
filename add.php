<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
  

   <table class="table">
 <tr>
     <td>Number1</td>
     <td><input id="num1"class="form-control" type="text"></td>
 </tr>
<tr>
    <td>Number2</td>
     <td><input id="num2" class="form-control" type="text"></td>
</tr>
<tr>
    <td></td>
    <td> <button onclick="addition ()"  class="btn btn-secondary"> ADD </button> </td>
</tr>
<tr>
<td> RESULT</td>
<td>    <p id="result"> </p>     </td>

</tr>
   </table>
  <script>

function addition () {

var getNum1=parseInt(document.getElementById("num1").value)
var getNum2=parseInt(document.getElementById("num2").value)

var res=getNum1+getNum2

document.getElementById("result").innerHTML=res


console.log(res)
 
}
      
  </script>

</body>
</html>