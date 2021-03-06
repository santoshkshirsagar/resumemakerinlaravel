<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <style>
    body{font-family: 'Lato', sans-serif;}
    @page { size: auto;  margin: 0mm; }
    @media print {
        .pagebreak { page-break-before: always; } /* page-break-after works, as well */
    }
    </style>
</head>
<body onload="window.print()">
    <main>
        <div class="container-fluid p-5">

        <table class="table table-borderless">
            <tr>
                <td>
                @if(Auth::user()->image==null)
                        <img style="width:100px" class="rounded-circle" src="{{ asset('images/default-avatar.png') }}" alt="profile">
                @else
                        <img style="width:100px" class="rounded-circle" src="{{ url('storage/'.Auth::user()->image) }}" alt="profile">
                @endif
                </td>
                <td>
                <h1 style="display:block;line-height:100px;" id="textTitle" class="text-center"><?php echo Auth::user()->name; ?></h1>
                </td>
            </tr>
        </table>

        <div class="border-top border-bottom my-3 py-3">
            <div class="row">
                <div class="col">Email : <?php echo Auth::user()->email; ?><br/>Contact: <?php //echo Auth::user()->mobile; ?></div>
                <div class="col text-end">Address</div>
            </div> 
        </div> 
        
        <h5 class="mt-5">Objective</h5>
        <ul>
            <li>Objectiive line assfdfasfasf assfasf af asf</li>
        </ul>
        <h5 class="mt-5">Educational Qualification</h5>
        <ul> </ul>
        
            <h5 class="mt-5">Work Experience</h5>
            <ul>
            </ul>

            <h5 class="mt-5">General Skills</h5>
            <ul>
                <li>Skill 1</li>
                <li>Skill 2</li>
            </ul>
        </div>
            <div class="pagebreak"></div>
        <div class="container-fluid p-5">
            <h5 class="mt-5">Technical Skills</h5>
            <ul>
                <li>Programming Languages : PHP, C, C++</li>
                <li>Database</li>
                <li>Framework</li>
            </ul>

            <h5 class="mt-5">Other Activities</h5>
            <ul>
                <li>activity 1</li>
                <li>activity 2</li>
            </ul>

  
                <h5 class="mt-5">Personal Details</h5>
                <table class="table table-borderless">
                    <tr>
                        <td>Name </td>   
                        <td><?php  echo Auth::user()->name; ?></td>   
                    </tr>
                    <tr>
                        <td>Date of Birth</td>   
                        <td><?php  echo Auth::user()->dob; ?></td>   
                    </tr>
                    <tr>
                        <td>Gender</td>   
                        <td><?php  echo Auth::user()->gender; ?></td>   
                    </tr>
                    <tr>
                        <td>Email </td>   
                        <td><?php  echo Auth::user()->email; ?></td>   
                    </tr>
                </table>


            
        </div>
    </main>  



</body>
</html>