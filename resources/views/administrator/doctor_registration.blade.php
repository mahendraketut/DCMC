{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Registration</title>
    <style>  
        body{  
          font-family: Calibri, Helvetica, sans-serif;  
          background-color: pink;  
        }  
        .container {  
            padding: 50px;  
          background-color: lightblue;  
        }  
          
        input[type=text], input[type=password], input[type=email], textarea {  
          width: 100%;  
          padding: 15px;  
          margin: 5px 0 22px 0;  
          display: inline-block;  
          border: none;  
          background: #f1f1f1;  
        }  
        input[type=text]:focus, input[type=password]:focus {  
          background-color: orange;  
          outline: none;  
        }  
         div {  
                    padding: 10px 0;  
                 }  
        hr {  
          border: 1px solid #f1f1f1;  
          margin-bottom: 25px;  
        }  
        .registerbtn {  
          background-color: #4CAF50;  
          color: white;  
          padding: 16px 20px;  
          margin: 8px 0;  
          border: none;  
          cursor: pointer;  
          width: 100%;  
          opacity: 0.9;  
        }  
        .registerbtn:hover {  
          opacity: 1;  
        }  
    </style> 
</head>
<body> --}}
@extends('administrator.navbar')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')
  <div>
    <form method="post">
        {{ csrf_field() }}  
        <div class="container">  
            <center>  <h1> JDC Doctor Registration</h1> </center>  
            <hr>  
            <label> Firstname </label>   
            <input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
            <label> Lastname: </label>    
            <input type="text" name="lastname" placeholder="Lastname" size="15"required />   
            <div>  
                <label>   Specialist  </label>   
        
                <select id="specialist" name="specialist">  
                    <option value="Mouth Surgery">Mouth Surgery</option>  
                    <option value="Tooth Conservation">Tooth Conservation</option>  
                    <option value="Oral Disease">Oral Disease</option>  
                    <option value="Orthodontics">Orthodontics</option>  
                    <option value="Periodontics">Periodontics</option>  
                    <option value="Prosthodontics">Prosthodontics</option>  
                    <option value="Dental Radiology">Dental Radiology</option>  
                </select>  
            </div>  
            <div>  
                <label>   Gender :  </label><br>  
                <input type="radio" value="Male" name="gender" checked > Male   
                <input type="radio" value="Female" name="gender"> Female   
                <input type="radio" value="Other" name="gender"> Other  
            
            </div>  
            <label>   Phone :  </label>     
            <input type="text" name="phone" placeholder="phone no." size="15"/ required>   
            <label> Current Address : </label>  
            <input type="text" name="address" placeholder="Current Address" size="15" required/>
            <label for="email"><b>Email</b></label>  
            <input type="email" placeholder="Enter Email" name="email" required>  
            
            <label for="psw"><b>Password</b></label>  
            <input type="password" placeholder="Enter Password" name="psw" required>  
            
            <label for="psw-repeat"><b>Re-type Password</b></label>  
            <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
            <button type="submit" class="registerbtn">Register</button>    
    </form>  
  </div>
  @endsection

  @section('js')
  
  @endsection
{{-- </body>
</html> --}}