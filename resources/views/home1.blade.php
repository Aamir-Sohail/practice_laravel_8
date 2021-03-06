<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<h1>
    WellCome,,
    {{-- //this methode is used for echo the code/ simpley echo... --}}
    {{$name ?? "User"}}
 {{-- #function is used for time --}}
    {{time()}}
    {{-- #function is used for date --}}
    {{date('d-m-y')}}
</h1>
<h2>
    {{-- this methode apply the html code as a text print// not executed  --}}
    {{$demo}}
</h2>

{{-- the other methode is used for the html decode. --}}
<h2>
    {{-- this methode execute the code not print.. --}}
    {!! $demo !!}
</h2>
{{-- For IF and ELSE condition --}}
<h2>
    @if ($name != "")
        {{"Name is Not Empty"}}
    @else
        {{'The Name is Empty'}}
    @endif
</h2>
<h2>
    {{-- Also Methode for the if/elseif/else/ condition  --}}
    @if ($name == "")
    {{"Name is empty"}}
    @elseif ($name == "Laravel_first_project")
    {{"The name is correct"}}
@else
{{"Name is Incorrect"}}        
    @endif
</h2>
{{-- Endless and Unless Condition... --}}
<h2>
    @unless ($name == "Laravel")
    
    The name is not laravel.?    
    @endunless
</h2>
{{-- Isset and endisset condition. --}}
<h2>
    @isset($name)
   Welcome {{$name}}
    @else
    {{"The name is not set"}}      
    @endisset
</h2>
{{-- for loop is used in this function. --}}
<div class="container">
    <h3>
    {{'while Loop'}}

    </h3>
    @for ($i=1; $i<10; $i++) 
    <h2>
     {{$i}}
    </h2>
@endfor
</div>

       {{-- whileloop is used --}}
       <div class="container">
            {{'while Loop'}}
           @php
               $i=1
           @endphp
@while ($i<10)
<h5>
    {{$i}}
</h5>
@php
    $i++;
@endphp    
@endwhile
       </div>
 {{-- This is Foreach loop is used. --}}
      <div class="container" >
          <h5>
          {{'Foreach Loop'}}
          </h5>
       @php
           
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    //    echo "<pre>";
    //     print_r($countries);
       @endphp
       <select>

       @foreach ($countries as $key=>  $country)
           <option value="{{$key}}">{{$country}} </option>
       @endforeach
       </select>
      </div>
        {{-- This is Continue and breake methode --}}
       <div class="container">
           <h5>
               {{"Continue and Break Methode"}}
           </h5>
                    @for ($i=1; $i<20; $i++)
                   @if ($i==9)
                       @continue
                       @break{{-- (this breake methode disapper the loop after 9) --}}
                   @endif
                   {{$i}}
                    @endfor 
    </div> 

  </body>
</html>
